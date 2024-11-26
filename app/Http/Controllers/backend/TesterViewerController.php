<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesterViewerController extends Controller
{
    public function view_result_tester(Request $request){

            $id = $request->id;
            $type = $request->type;
            $product_group = null;
            $product_group_test1 = null;
            $product_group_test2 = null;

            if($request->type == 1){
                $test = DB::table("test_result as TR")
                ->leftJoin("test_method  as TM" , "TR.parameter_id" , "TM.parameter_id")
                ->leftJoin("employee_group as EM" , "EM.id_em" , "TR.employee_id" )
                ->where("EM.test_id" , $id)
                ->where("TM.test_group", $id)
                ->where("TM.method_type" , 1)
                ->select("EM.id_em as idem" ,"EM.name as em_name", "serail as serial","EM.*" , "TR.user_select" ,"test_title" ,DB::raw("FORMAT(TR.created_at ,'yyyy-MM-dd') as test_date") )
                ->get();

                $product_group_test1 = DB::table("product_group")
                ->where("test_id" , $id)
                ->get();

                foreach($test as $item){
                    $item->dob = $this->calculateAge($item->dob);
                }

                $label = DB::table("parameter")
                ->leftJoin("test_method as TM", "TM.parameter_id" , "parameter.id")
                ->where("TM.method_type" , 1)
                ->where("TM.test_group" , $id)
                ->select("option1","option2" , "option3" , "option4" , "label1" , "label2" , "label3" , "label4")
                ->get();

            }
            else if($request->type == 2){
                $test = DB::table("test_result as TR")
                ->leftJoin("test_method  as TM" , "TR.parameter_id" , "TM.parameter_id")
                ->leftJoin("employee_group as EM" , "EM.id_em" , "TR.employee_id" )
                ->where("EM.test_id" , $id)
                ->where("TM.test_group", $id)
                ->where("TM.method_type" , 2)
                ->select("EM.id_em as idem" ,"EM.name as em_name", "serail as serial", "EM.*" , "TR.user_select" ,"test_title" ,DB::raw("FORMAT(TR.created_at ,'yyyy-MM-dd') as test_date") )
                ->get();

                $product_group_test1 = DB::table("product_group")
                ->where("test_id" , $id)
                ->get();

                foreach($test as $item){
                    $item->dob = $this->calculateAge($item->dob);
                }

                $label = DB::table("parameter")
                ->leftJoin("test_method as TM", "TM.parameter_id" , "parameter.id")
                ->where("TM.method_type" , 2)
                ->where("TM.test_group" , $id)
                ->select("option1","option2" , "option3" , "option4" , "label1" , "label2" , "label3" , "label4")
                ->get();
            }
            else if($request->type == 3){
                $test = DB::table("test_method as TM")
                ->where("TM.test_group" , $request->id)
                ->leftJoin("rating_test as TR" , "TR.parameter_id" , "TM.parameter_id")

                ->leftJoin("employee_group as EM" , "EM.id_em" , "TR.employee_id" )
                ->where("TM.method_type" , 3)
                ->where("EM.test_id" , $id)
                ->select("EM.id_em as idem" ,"EM.name as em_name", "EM.serail as serial","EM.*" , "EM.dob", "TR.value as user_select" ,"test_title" ,"value1_option1","value1_option2" ,"value1_option3" ,"value1_option4" , "value1_option5",DB::raw("FORMAT(TR.created_at ,'yyyy-MM-dd') as test_date") )
                ->orderBy("TR.value")
                ->get();

                foreach($test as $item){
                    $item->dob = $this->calculateAge($item->dob);
                }

                $product_group_test2 = DB::table("product_group")
                    ->where("test_id" , $id)
                    ->get();


                $label = DB::table("parameter")
                ->leftJoin("test_method as TM", "TM.parameter_id" , "parameter.id")
                ->where("TM.method_type" , 3)
                ->where("TM.test_group" , $id)
                ->select("option1","option2" , "option3" , "option4" , "label1" , "label2" , "label3" , "label4", "value1" ,"value2" , "value3" , "value4" , "value5")
                ->get();
            }
            else if($request->type == 4){
                $test = DB::table("test_method as TM")
                ->leftJoin("test_result as TR" , "TR.parameter_id" , "TM.parameter_id")
                ->leftJoin("employee_group as EM" , "EM.id_em" , "TR.employee_id" )
                ->where("TM.test_group" , $id)
                ->where("EM.test_id" , $id)
                ->where("TM.method_type" , 4)
                ->select("EM.id_em as idem" ,"EM.name as em_name", "serail as serial", "option1" , "option2" , "option3" , "option4", "EM.*" ,"test_title" ,DB::raw("date(TR.created_at) as test_date") )

                ->get();


                $label = DB::table("parameter")
                ->leftJoin("test_method as TM", "TM.parameter_id" , "parameter.id")
                ->where("TM.method_type" , 4)
                ->where("TM.test_group" , $id)
                ->select("option1","option2" , "option3" , "option4" , "label1" , "label2" , "label3" , "label4")
                ->get();
                $product_group = DB::table("product_group as p")
                ->where("test_id" , $id)
                ->select("p.*" , "p.lot as lot_no" , "p.product_id as id")
                ->get();
            }

        return view("backend.tester-viewer",
        [
            'test' => $test ,
             'id' => $id ,
              'label' => $label ,
               'type' => $type ,
               'product_group' =>$product_group,
                'product_group_test1' => $product_group_test1,
                'product_group_test2' => $product_group_test2

            ]);
    }


    public function view_all_tester(Request $request){
        $id = $request->id;

        $employee = DB::table("employee_group as EG")
        ->where("EG.test_id" , $id)
        ->select("EG.*","EG.serail as serial" ,DB::raw("FORMAT(EG.created_at ,'yyyy-MM-dd h:mm tt')  as created_at"))
        ->orderBy("EG.id","desc")
        ->get();

        foreach($employee as $item){
            $item->dob = $this->calculateAge($item->dob);
        }
        $test_state = 0;
        // var_dump($employee);
        return view("backend.list-tester",['id' => $id ,'employee' => $employee ,'test_state' => $test_state ]);
    }

    public function view_tester_choice(Request $request){
        $test_id = $request->id;
        $em_id = $request->idem;
        $type = $request->type;
        $tester_choice_test2 = null;
        $rating_user_choice = null;
        $choice_tester_test4  = null;
        $tester_choice = null;


        $test = DB::table("test")
        ->where("id" ,$test_id)
        ->select("test.*" ,DB::raw("FORMAT(created_at,'yyyy-MM-dd h:mm tt') as created_at"))
        ->get();
        $employee = DB::table("employee_group as em")
        ->where("em.id_em", $em_id)
        ->where("em.test_id" , $test_id)
        ->select("em.serail as serial" , "em.*" ,DB::raw("FORMAT(em.created_at,'yyyy-MM-dd h:mm tt') as created_at"))
        ->get();
        foreach($employee as $item){
            $item->dob = $this->calculateAge($item->dob);
        }
                 $test = DB::table("test as T")
                  ->leftJoin("test_method as TM", "T.id" , "TM.test_group")
                  ->where("T.id" , $test_id)
                  ->orderBy("T.id" ,"desc")
                  ->select("T.*","T.id as TID" ,"TM.*" ,"TM.method_type as type" ,"parameter_id as pid")
                  ->get();

                  foreach($test as $item){
                    if($item->type == 1){
                        $parameter_test1 = DB::table("parameter")
                        ->where("id" , $item->pid)
                        ->get();

                       }
                 }

                foreach($test as $item){
                    if($item->type == 2){
                        $parameter_test2 = DB::table("parameter")
                        ->where("id" , $item->pid)
                        ->get();

                    }
                }
                foreach($test as $item){
                 if($item->type == 4){
                     $parameter_test4 = DB::table("parameter")
                     ->where("id" , $item->pid)
                     ->get();

                 }
                 }
                 foreach($test as $item){
                    if($item->type == 3){
                        $parameter_test3 = DB::table("parameter")
                        ->where("id" , $item->pid)
                        ->get();

                    }
                 }

             if(empty($parameter_test1)){
              $parameter_test1 = "0";
             }
             else{
                //  Result
                $test_id = $request->id;
                $em_id = $request->idem;

                $choice_tester_test1 = DB::table("test_result")
                ->where("employee_id" , $em_id)
                ->where("test_id" ,$test_id)
                ->where("method_type" , 1)
                ->select("user_select")
                ->get();

                $tester_choice = 0;
                if($parameter_test1[0]->option2 == $choice_tester_test1[0]->user_select){
                    $tester_choice = 2;
                }else if($parameter_test1[0]->option3 == $choice_tester_test1[0]->user_select){
                    $tester_choice = 3;
                }else if($parameter_test1[0]->option4 == $choice_tester_test1[0]->user_select){
                    $tester_choice = 4;
                }
                else  {
                $tester_choice = 0;
                }
             }
             if(empty($parameter_test2)){
              $parameter_test2 = "0";
             }
             else{
                   //  Result
                   $test_id = $request->id;
                   $em_id = $request->idem;

                   $choice_tester_test2 = DB::table("test_result")
                   ->where("employee_id" , $em_id)
                   ->where("test_id" ,$test_id)
                   ->where("method_type" , 2)
                   ->select("user_select")
                   ->get();

                   $tester_choice_test2 = 0;
                   if($parameter_test2[0]->option1 == $choice_tester_test2[0]->user_select){
                       $tester_choice_test2 = 1;
                   }else if($parameter_test2[0]->option2 == $choice_tester_test2[0]->user_select){
                        $tester_choice_test2 = 2;
                   }
                   else if($parameter_test2[0]->option3 == $choice_tester_test2[0]->user_select){
                        $tester_choice_test2= 3;
                    }
                   else if($parameter_test2[0]->option4 == $choice_tester_test2[0]->user_select){
                        $tester_choice_test2 = 4;
                   }
                   else  {
                    $tester_choice_test2 = 0;
                   }
             }
             if(empty($parameter_test3)){
              $parameter_test3 = "0";
             }else{
                $rating_user_choice = DB::table("rating_test")
                ->where("test_id",$test_id)
                ->where("employee_id", $em_id)
                ->limit(4)
                ->get();

             }

             if(empty($parameter_test4)){
              $parameter_test4 = "0";
             }else{
                 $choice_tester_test4 = DB::table("test_result")
                 ->where("employee_id" , $em_id)
                 ->where("test_id" ,$test_id)
                 ->where("method_type" , 4)
                 ->select("option1", "option2" , "option3" ,"option4")
                 ->limit(1)
                 ->get();



            }



            $test_state = 1;

        return view("backend.tester-choice", [
            "employee" => $employee ,
            'test_id' => $test_id,
            "test" => $test,
            'type' => $type,
            'parameter_test1' => $parameter_test1,
            'parameter_test2' => $parameter_test2,
            'parameter_test3' => $parameter_test3,
            'parameter_test4' => $parameter_test4,
            'tester_choice' =>  $tester_choice,
            'tester_choice_test2' => $tester_choice_test2,


            'rating_user_choice' =>$rating_user_choice,
            'choice_tester_test4' =>  $choice_tester_test4,
            'test_state' => $test_state
        ]);
    }


    public function delete_test_record(Request $request){

        DB::table('test_result')
        ->where("test_id" , $request->test_id)
        ->where("employee_id",$request->em_id)
        ->delete();

        DB::table("employee_group")
        ->where("test_id" , $request->test_id)
        ->where("id_em",$request->em_id)
        ->delete();

        DB::table("rating_test")
        ->where("test_id" , $request->test_id)
        ->where("employee_id",$request->em_id)
        ->delete();

        $qty_tester =DB::table("test")
        ->select("tested_employee")
        ->where("id" , $request->test_id)
        ->get();


        if ($qty_tester[0]->tested_employee > 0) {
          $qty_test =   $qty_tester[0]->tested_employee-= 1;
        }

        DB::table("test")
        ->where("id" , $request->test_id)
        ->update([
            'tested_employee' => $qty_test
        ]);

        return redirect("/admin/view/result/tester/{$request->test_id}");
    }


    public function view_all_tester_comment($id){
        $comment = DB::table("employee_group as EG")
            ->where("EG.test_id", $id)
            ->whereNotNull("EG.remark")
            ->where("EG.remark", "<>", "")
            ->select("EG.*", DB::raw("FORMAT(EG.created_at ,'yyyy-MM-dd h:mm tt') as created_at") )
            ->get();

        foreach ($comment as $item) {
            $item->dob = $this->calculateAge($item->dob);
        }

        if ($comment->isEmpty()) {
            return redirect("/admin/view/result/{$id}")->with("message-primary", "No Comment on this Test");
        } else {
            return view("backend.tester-comment", ['comment' => $comment]);
        }
    }

}
