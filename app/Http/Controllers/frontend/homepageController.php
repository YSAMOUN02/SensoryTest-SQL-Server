<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepageController extends Controller
{
   public function list_test(){
    return view("frontend.test-list");
   }
   public function operation_test(){
    return view("frontend.test");
   }
   public function thankgivivng(){
    return view("frontend.thankgiving");
   }



   public function test_takepath($id,$idem){
      parse_str($idem, $output);
      $emValue = isset($output['em']) ? $output['em'] : null;

      parse_str($id, $output);
      $id = isset($output['id']) ? $output['id'] : null;




      $employee = DB::table("employee as em")
      ->where('serial', $emValue)
      ->select("em.id_em as idem" , "em.serial", "em.*")
      ->get();



     $em_session = DB::table("test_result")
     ->where("test_id", $id)
     ->where("employee_id",$employee[0]->id)
     ->count();

    $em_session2 = DB::table("rating_test")
    ->where("test_id", $id)
    ->where("employee_id",$employee[0]->id)
    ->count();

    if($em_session == 0  && $em_session2 == 0){
        $age = $this->calculateAge($employee[0]->dob);

        $test = DB::table("test as T")
         ->leftJoin("test_method as TM", "T.id" , "TM.test_group")
         ->where("T.due_date" , today())
         ->where("T.status", 1)
         ->where("T.id" , $id)
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
    if(empty($parameter_test2)){
     $parameter_test2 = "0";
    }
    if(empty($parameter_test3)){
     $parameter_test3 = "0";
    }
    if(empty($parameter_test4)){
     $parameter_test4 = "0";
    }

       if(!empty($test)){

           return view("frontend.test",
           [
             "employee" => $employee ,
             "test" => $test,
             'parameter_test1' => $parameter_test1,
             'parameter_test2' => $parameter_test2,
             'parameter_test3' => $parameter_test3,
             'parameter_test4' => $parameter_test4,
             'age' => $age
         ]);
       }


    }else {
        // return  var_dump($emValue);
        return redirect("/login")->with("message-primary" , "Tester already Tested current Test.");
    }





   }

   public function test_submit(Request $request){




        $test_id = $request->input("test-id");
        $select_same_test = $request->input("same-test");
        $select_diff_test = $request->input("dif-test");
        $employee_id = $request->input("idem");

        $tested_employee = DB::table("test")
        ->where("id" ,$test_id)
        ->select("tested_employee")
        ->get();

        if($tested_employee[0]->tested_employee == ""  ||  empty($tested_employee[0]->tested_employee)){
            $qty_tested = 1;
        }else{
            $qty_tested  = $tested_employee[0]->tested_employee += 1;
        }

        DB::table("test")
        ->where("id" ,$test_id)
        ->update([
            'tested_employee' => $qty_tested
        ]);

        $test_time = DB::table("employee")
        ->where('id',$employee_id)
        ->select("test_time")
        ->get();
        $test_time[0]->test_time += 1;
        DB::table("employee")
        ->where('id',$employee_id)
        ->update([
            'test_time' => $test_time[0]->test_time
        ]);

        $employee = DB::table("employee as em")
        ->where("em.id", $employee_id)
        ->select("em.id_em as idem" , "em.*")
        ->get();

       date_default_timezone_set('Asia/Phnom_Penh');


        $employee_db = DB::table("employee_group")
        ->where("test_id" , $test_id)
        ->where("id_em", $employee_id)
        ->get();

        $count = count($employee_db);
        var_dump($count);
        if($count == 0){
            DB::table("employee_group")
            ->insert([
                'test_id' =>  $test_id,
                'id_em' => $employee_id,
                'idem' => $employee[0]->idem,
                'serail' =>  $employee[0]->serial,
                'name' => $employee[0]->name,
                'dob' => $employee[0]->dob,
                'position' => $employee[0]->position,
                'department' => $employee[0]->department,
                'remark' => $request->input("ramark-tester"),
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }



        $same_test_state = $request->input("state-test1");
        if($same_test_state == 1){
            $parameter1_id = $request->input("parameter1-id");


            if($select_same_test == NULL){
                $select_same_test = "N/A";
            }
            $product_group = $test_id;


            $correct_product = DB::table("test_method")
            ->leftJoin("parameter as p" , "p.id","parameter_id")
            ->where("p.id", $parameter1_id)
            ->select("same_main","main", "method_type", "parameter_id" ,"option1","option2","option3","option4")
            ->get();


            if($select_same_test == $correct_product[0]->same_main){
                $correction = 1;
            }else{
                $correction = 0;
            }
            DB::table("test_result")
            ->insert([
                'test_id' => $test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter1_id,
                'employee_id' => $employee_id,
                'method_type' => $correct_product[0]->method_type,
                'option1' => $correct_product[0]->option1 ,
                'option2' => $correct_product[0]->option2,
                'option3' => $correct_product[0]->option3,
                'option4' => $correct_product[0]->option4,
                'user_select' => $select_same_test,
                'correct_option' => $correct_product[0]->same_main,
                'correction' => $correction,
                'created_at' => today()
            ]);
        }

        $same_test_state2 = $request->input("state-test2");
        if($same_test_state2 == 1){

                if($select_diff_test == NULL){
                    $select_diff_test = "N/A";
                }
            $parameter2_id = $request->input("parameter2-id");
            $test_id = $request->input("test-id");
            $product_group = $test_id;
            $correct_product2 = DB::table("test_method")
            ->leftJoin("parameter as p" , "p.id" , "parameter_id" )
            ->where("p.id", $parameter2_id)
            ->select("main", "method_type","option1","option2","option3","option4")
            ->get();


            if($select_diff_test == $correct_product2[0]->main){
                $correction = 1;
            }else{
                $correction = 0;
            }
            DB::table("test_result")
            ->insert([
                'test_id' => $test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter2_id,
                'user_select' => $select_diff_test,
                'employee_id' => $employee_id,
                'method_type' => $correct_product2[0]->method_type,
                'correct_option' => $correct_product2[0]->main,
                'option1' => $correct_product2[0]->option1,
                'option2' => $correct_product2[0]->option2,
                'option3' => $correct_product2[0]->option3,
                'option4' => $correct_product2[0]->option4,
                'correction' => $correction,
                'created_at' => today()
            ]);
        }

        $user_ranking =$request->input("user-ranking");
        $state_test4 = $request->input("state-test4");
        if($state_test4 == 1){

            $pairs = explode(",", $user_ranking);

            // Initialize an empty associative array
            $ranking_value = array();

            if ($user_ranking == "1") {
                $rank1 = $request->input("ranksuffle1");
                $rank2 = $request->input("ranksuffle2");

                if(!empty($request->input("ranksuffle3"))){
                    $rank3 = $request->input("ranksuffle3");
                }else{
                    $rank3 = "";
                }
                if(!empty($request->input("ranksuffle4"))){
                    $rank4 = $request->input("ranksuffle4");
                }else{
                    $rank4 = "";
                }
                $user_ranking = "1:".$rank1.",2:".$rank2;
                if($rank3 != ""){
                    $user_ranking = "1:".$rank1.",2:".$rank2.",3:".$rank3;
                }
                if($rank3 != "" && $rank4 != ""){
                    $user_ranking = "1:".$rank1.",2:".$rank2.",3:".$rank3.",4:".$rank4;
                }

            } else {

                // Loop through each pair and create the associative array
                foreach ($pairs as $pair) {
                    // Split the pair into key and value using ":"
                    list($key, $value) = explode(":", $pair);

                    // Trim any extra spaces from key and value
                    $key = trim($key);
                    $value = trim($value);

                    // Assign key-value pair to the associative array
                    $ranking_value[$key] = $value;
                }
                $rank1 = $ranking_value['1'];
                $rank2 = $ranking_value['2'];
                if(empty($ranking_value['4'])){
                    $rank4 = "";
                }else{
                    $rank4 = $ranking_value['4'];
                }
                if(empty($ranking_value['3'])){
                    $rank3 = "";
                }else{
                    $rank3 = $ranking_value['3'];
                }

            }






            $parameter4_id = $request->input("parameter4-id");
            $test_id = $request->input("test-id");
            $product_group = $test_id;
            $correct_product =  DB::table("test_method as TM")
            ->leftJoin("parameter as p", "p.id" , "TM.parameter_id")
            ->where("p.id", $parameter4_id)
            ->select("label1", "label2", "label3" , "label4", "method_type")
            ->get();
            $correct_option = "1:".$correct_product[0]->label1.",2:".$correct_product[0]->label2.",3:".$correct_product[0]->label3.",4:".$correct_product[0]->label4;
            $correction = 0;


            DB::table("test_result")
            ->insert([
                'test_id' => $test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter4_id,
                'option1' => $rank1,
                'option2' => $rank2,
                'option3' => $rank3,
                'option4' => $rank4,
                'employee_id' => $employee_id,
                'user_select' => $user_ranking,
                'correct_option' => $correct_option,
                'method_type' => $correct_product[0]->method_type,
                'correction' => $correction,
                'created_at' => today()
            ]);
        }



        $rating_test = $request->input("rating-test");
        $parameter3_id = $request->input("parameter3-id");
        if($rating_test == 1){
            $test_id = $request->input("test-id");
            $product_group = $test_id;

            $value1_option1 =  $request->input("value1_option1");
            $value1_option2 =  $request->input("value1_option2");
            $value1_option3 =  $request->input("value1_option3");
            $value1_option4 =  $request->input("value1_option4");
            $value1_option5 =  $request->input("value1_option5");

            DB::table("rating_test")
            ->insert([
                'test_id' =>$test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter3_id,
                'employee_id' => $employee_id,
                'value' =>  $request->input("value1"),
                'value1_option1' => $value1_option1,
                'value1_option2' => $value1_option2,
                'value1_option3' => $value1_option3,
                'value1_option4' => $value1_option4,
                'value1_option5' => $value1_option5,
                'created_at' => today()
            ]);

            if(!empty($request->input("value2"))){

                if(!empty($request->input("value2_option1"))){
                    $value2_option1 =  $request->input("value2_option1");
                }else{
                    $value2_option1 =  "";
                }
                if(!empty($request->input("value2_option2"))){
                    $value2_option2 =  $request->input("value2_option2");
                }else{
                    $value2_option2 =  "";
                }
                if(!empty($request->input("value2_option3"))){
                    $value2_option3 =  $request->input("value2_option3");
                }else{
                    $value2_option3 =  "";
                }
                if(!empty($request->input("value2_option4"))){
                    $value2_option4 =  $request->input("value2_option4");
                }else{
                    $value2_option4 =  "";
                }
                if(!empty($request->input("value2_option5"))){
                    $value2_option5 =  $request->input("value2_option5");
                }else{
                    $value2_option5 =  "";
                }

                DB::table("rating_test")
                ->insert([
                    'test_id' =>$test_id,
                    'product_group_id' => $product_group,
                    'parameter_id' => $parameter3_id,
                    'employee_id' => $employee_id,
                    'value' =>  $request->input("value2"),
                    'value1_option1' => $value2_option1,
                    'value1_option2' => $value2_option2,
                    'value1_option3' => $value2_option3,
                    'value1_option4' => $value2_option4,
                    'value1_option5' => $value2_option5,
                    'created_at' => today()
                ]);
        }
        if(!empty($request->input("value3"))){

            if(!empty($request->input("value3_option1"))){
                $value3_option1 =  $request->input("value3_option1");
            }else{
                $value3_option1 =  "";
            }
            if(!empty($request->input("value3_option2"))){
                $value3_option2 =  $request->input("value3_option2");
            }else{
                $value3_option2 =  "";
            }
            if(!empty($request->input("value3_option3"))){
                $value3_option3 =  $request->input("value3_option3");
            }else{
                $value3_option3 =  "";
            }
            if(!empty($request->input("value3_option4"))){
                $value3_option4 =  $request->input("value3_option4");
            }else{
                $value3_option4 =  "";
            }
            if(!empty($request->input("value3_option5"))){
                $value3_option5 =  $request->input("value3_option5");
            }else{
                $value3_option5 =  "";
            }
            DB::table("rating_test")
            ->insert([
                'test_id' =>$test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter3_id,
                'employee_id' => $employee_id,
                'value' =>  $request->input("value3"),
                'value1_option1' => $value3_option1,
                'value1_option2' => $value3_option2,
                'value1_option3' => $value3_option3,
                'value1_option4' => $value3_option4,
                'value1_option5' => $value3_option5,
                'created_at' => today()
            ]);
        }

        if(!empty($request->input("value4"))){

            if(!empty($request->input("value4_option1"))){
                $value4_option1 =  $request->input("value4_option1");
            }else{
                $value4_option1 =  "";
            }
            if(!empty($request->input("value4_option2"))){
                $value4_option2 =  $request->input("value4_option2");
            }else{
                $value4_option2 =  "";
            }
            if(!empty($request->input("value4_option3"))){
                $value4_option3 =  $request->input("value4_option3");
            }else{
                $value4_option3 =  "";
            }
            if(!empty($request->input("value4_option4"))){
                $value4_option4 =  $request->input("value4_option4");
            }else{
                $value4_option4 =  "";
            }
            if(!empty($request->input("value4_option5"))){
                $value4_option5 =  $request->input("value4_option5");
            }else{
                $value4_option5 =  "";
            }
            DB::table("rating_test")
            ->insert([
                'test_id' =>$test_id,
                'product_group_id' => $product_group,
                'parameter_id' => $parameter3_id,
                'employee_id' => $employee_id,
                'value' =>  $request->input("value4"),
                'value1_option1' => $value4_option1,
                'value1_option2' => $value4_option2,
                'value1_option3' => $value4_option3,
                'value1_option4' => $value4_option4,
                'value1_option5' => $value4_option5,
                'created_at' => today()
            ]);


        }
        }




    return redirect("/thankgivivng");
 }




}

