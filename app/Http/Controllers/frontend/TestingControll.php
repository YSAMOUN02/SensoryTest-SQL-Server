<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingControll extends Controller
{

   public function result_show(Request $request){
    $id = $request->id;

    // parse_str($idem, $output);
    //Test 1
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //Select data Of the main Test
             $test = DB::table("test as T")
              ->leftJoin("test_method as TM", "T.id" , "TM.test_group")
              ->where("T.status", 1)
              ->where("T.id" , $id)
              ->orderBy("T.id" ,"desc")
              ->select("T.*" ,"TM.*" ,"TM.method_type as type" ,"parameter_id as pid")
              ->get();
              $product_group = DB::table("product_group as pro")
              ->where("test_id", $id)
              ->get();

               $all_employee = DB::table("employee_group")
              ->where("test_id" ,$id)
              ->count();
            //   $percent2 = 0;
            //   $percent3 = 0;
            //   $percent4 = 0;



            $product_test4_option1= null;
            $product_test4_option2= null;
            $product_test4_option3= null;
            $product_test4_option4= null;


            $product_test1_option1 = null;
            $product_test1_option2 = null;
            $product_test1_option3 = null;
            $product_test1_option4 = null;
            $correct_answer = 0;
            $percent2_label = 0;
            $percent3_label = 0;
            $percent4_label = 0;
            $total_percent_test1_label = 0;

            $product_test2_option1 = 0;
            $product_test2_option2 = 0;
            $product_test2_option3 = 0;
            $product_test2_option4 = 0;
            $correct_answer_test2 = 0;
            $percent1_label_test2 = 0;
            $percent2_label_test2 = 0;
            $percent3_label_test2 = 0;
            $percent4_label_test2= 0;
            $total_percent_test2_label = 0;
            $product_test3_option1= null;
            $product_test3_option2= null;
            $product_test3_option3= null;
            $product_test3_option4= null;
            $percent1_label_test3= 0;
            $percent2_label_test3 =0;
            $percent3_label_test3 = 0;
            $percent4_label_test3 = 0;
            $percent1_label_value2_test3 = 0;
            $percent2_label_value2_test3 = 0;
            $percent3_label_value2_test3 = 0;
            $percent4_label_value2_test3 = 0;
            $percent1_label_value3_test3 = 0;
            $percent2_label_value3_test3 = 0;
            $percent3_label_value3_test3 = 0;
            $percent4_label_value3_test3 = 0;
            $percent1_label_value4_test3 = 0;
            $percent2_label_value4_test3 = 0;
            $percent3_label_value4_test3 = 0;
            $percent4_label_value4_test3 = 0;
            $percent1_label_value5_test3 = 0;
            $percent2_label_value5_test3 = 0;
            $percent3_label_value5_test3 = 0;
            $percent4_label_value5_test3 = 0;
            $qty_select_option1_test2 = 0;
            $qty_select_option2_test2 = 0;
            $qty_select_option3_test2 = 0;
            $qty_select_option4_test2 = 0;
            $qty_correct_test2  = 0;
            $qty_select_option1_test3 = 0;
            $qty_select_option2_test3 = 0;
            $qty_select_option3_test3 = 0;
            $qty_select_option4_test3 = 0;
            $qty_select_option1_value2_test3 = 0;
            $qty_select_option2_value2_test3 = 0;
            $qty_select_option3_value2_test3 = 0;
            $qty_select_option4_value2_test3 = 0;
            $qty_select_option1_value3_test3 = 0;
            $qty_select_option2_value3_test3 = 0;
            $qty_select_option3_value3_test3 = 0;
            $qty_select_option4_value3_test3 = 0;
            $qty_select_option1_value4_test3 = 0;
            $qty_select_option2_value4_test3 = 0;
            $qty_select_option3_value4_test3 = 0;
            $qty_select_option4_value4_test3 = 0;
            $qty_select_option1_value5_test3 = 0;
            $qty_select_option2_value5_test3 = 0;
            $qty_select_option3_value5_test3 = 0;
            $qty_select_option4_value5_test3 = 0;
              // QTY OPTION
            $qty_select_rank1_option1 = 0;
            $qty_select_rank1_option2 = 0;
            $qty_select_rank1_option3 = 0;
            $qty_select_rank1_option4 = 0;
              // QTY OPTION 2
            $qty_select_rank2_option1 = 0;
            $qty_select_rank2_option2 = 0;
            $qty_select_rank2_option3 = 0;
            $qty_select_rank2_option4 = 0;
              // QTY OPTION 3
              $qty_select_rank3_option1 = 0;
              $qty_select_rank3_option2 = 0;
              $qty_select_rank3_option3 = 0;
              $qty_select_rank3_option4 = 0;

              // QTY OPTION 4
              $qty_select_rank4_option1 = 0;
              $qty_select_rank4_option2 = 0;
              $qty_select_rank4_option3 = 0;
              $qty_select_rank4_option4 = 0;
             // RANK1
            $percent_rank1_option1 = 0;
            $percent_rank1_option2 = 0;
            $percent_rank1_option3 = 0;
            $percent_rank1_option4 = 0;

             // RANK2
            $percent_rank2_option1 = 0;
            $percent_rank2_option2 = 0;
            $percent_rank2_option3 = 0;
            $percent_rank2_option4 = 0;

            // RANK3
            $percent_rank3_option1 = 0;
            $percent_rank3_option2 = 0;
            $percent_rank3_option3 = 0;
            $percent_rank3_option4 = 0;

             // RANK3
            $percent_rank4_option1 = 0;
            $percent_rank4_option2 = 0;
            $percent_rank4_option3 = 0;
            $percent_rank4_option4 = 0;

            $qty_select_option2 = 0;
            $qty_select_option3 = 0;
            $qty_select_option4 = 0;
            $count_test  = DB::table("rating_test")
        ->where("test_id" , $id)
        ->count();
        $count_test2  = DB::table("test_result")
        ->where("test_id" , $id)
        ->count();

    if($count_test != 0  || $count_test2 != 0){
        foreach($test as $tests){
            if($tests->type == 1){
                //Return all data that show on test 1
                $parameter_test1 = DB::table("parameter as p")
                ->leftJoin("test_result as TR" , "TR.parameter_id","p.id" )
                ->where("TR.test_id" , $id)
                ->get();



                foreach($product_group as $item){
                    if($parameter_test1[0]->option1 == $item->product_id){
                        $product_test1_option1 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];


                    }
                       if($parameter_test1[0]->option2 == $item->product_id){
                        $product_test1_option2 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }
                    if($parameter_test1[0]->option3 == $item->product_id){
                        $product_test1_option3 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }
                    $product_test1_option4 = null;
                    if($parameter_test1[0]->option4 == $item->product_id){
                        $product_test1_option4 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }

                }



                // Result
                $correction_test1 = DB::table("test_result as TR")
                ->where("TR.test_id" , $id)
                ->where("TR.method_type", 1)
                ->get();


                $qty_select_option1 = 0;
                $qty_select_option2 = 0;
                $qty_select_option3 = 0;
                $qty_select_option4 = 0;
                $qty_correct_test1 = 0;

                foreach($correction_test1 as $item){
                    if($item->user_select == $item->option1){
                        $qty_select_option1 += 1;
                    }else if($item->user_select == $item->option2){
                        $qty_select_option2 += 1;
                    }
                    else if($item->user_select == $item->option3){
                        $qty_select_option3 += 1;
                    }
                    else if($item->user_select == $item->option4){
                        $qty_select_option4 += 1;
                    }
                }
                foreach($correction_test1 as $item){
                    if ($item->correction == 1){
                        $qty_correct_test1 += 1;
                    }
                }

                  // Result
                  $correction_1parameter = DB::table("parameter as p")
                  ->leftJoin("test_method as TM" , "TM.parameter_id", "p.id")
                  ->where("TM.test_group" , $id)
                  ->where("TM.method_type", 1)
                  ->get();

                  $correct_answer = 0;



                  // Convert values to integers
                  $same_main = intval($correction_1parameter[0]->same_main);

                  $option2 = intval($correction_1parameter[0]->option2);
                  $option3 = intval($correction_1parameter[0]->option3);
                  $option4 = intval($correction_1parameter[0]->option4);

                  if ($same_main === $option2) {
                      $correct_answer = 2;
                  } else if ($same_main === $option3) {
                      $correct_answer = 3;
                  } else if ($same_main === $option4) {
                      $correct_answer = 4;
                  }


                $percent2_label = number_format(($qty_select_option2/$all_employee)*100, 2, '.', '');

                $percent3_label = number_format(($qty_select_option3/$all_employee)*100, 2, '.', '');

                $percent4_label = number_format(($qty_select_option4/$all_employee)*100, 2, '.', '');

                $total_percent_test1_label  = number_format(($qty_correct_test1/$all_employee)*100, 2, '.', '');



                foreach($test as $item){
                 if($item->type == 4){
                     $parameter_test4 = DB::table("parameter")
                     ->where("id" , $item->pid)
                     ->get();

                 }
                 }

            }
            if($tests->type == 2){


                //Return all data that show on test 1
                $parameter_test2 = DB::table("parameter as p")
                ->leftJoin("test_result as TR" , "TR.parameter_id","p.id" )
                ->where("TR.method_type" , 2)
                ->where("TR.test_id" , $id)
                ->get();
               // Result
                  $correction_2parameter = DB::table("parameter as p")
                  ->leftJoin("test_method as TM" , "TM.parameter_id", "p.id")
                  ->where("TM.test_group" , $id)
                  ->where("TM.method_type", 2)
                  ->get();
                foreach($product_group as $item){
                    if($parameter_test2[0]->option1 == $item->product_id){
                        $product_test2_option1 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];


                    }
                       if($parameter_test2[0]->option2 == $item->product_id){
                        $product_test2_option2 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }
                    if($parameter_test2[0]->option3 == $item->product_id){
                        $product_test2_option3 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }

                    if($parameter_test2[0]->option4 == $item->product_id){
                        $product_test2_option4 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }

                }
                 // Result
                 $correction_test2 = DB::table("test_result as TR")
                 ->where("TR.test_id" , $id)
                 ->where("TR.method_type", 2)
                 ->get();


                 $qty_select_option1_test2 = 0;
                 $qty_select_option2_test2 = 0;
                 $qty_select_option3_test2 = 0;
                 $qty_select_option4_test2 = 0;
                 $qty_correct_test2 = 0;

                 foreach($correction_test2 as $item){
                     if($item->user_select == $item->option1){
                        $qty_select_option1_test2 += 1;
                     }else if($item->user_select == $item->option2){
                        $qty_select_option2_test2 += 1;
                     }
                     else if($item->user_select == $item->option3){
                        $qty_select_option3_test2 += 1;
                     }
                     else if($item->user_select == $item->option4){
                        $qty_select_option4_test2 += 1;
                     }
                 }
                 foreach($correction_test2 as $item){
                     if ($item->correction == 1){
                        $qty_correct_test2  += 1;
                     }
                 }

                $percent1_label_test2 = number_format(($qty_select_option1_test2/$all_employee)*100, 2, '.', '');

                $percent2_label_test2 = number_format(($qty_select_option2_test2/$all_employee)*100, 2, '.', '');

                $percent3_label_test2 = number_format(($qty_select_option3_test2/$all_employee)*100, 2, '.', '');

                $percent4_label_test2 = number_format(($qty_select_option4_test2/$all_employee)*100, 2, '.', '');

                $total_percent_test2_label  = number_format(($qty_correct_test2/$all_employee)*100, 2, '.', '');



                  // Convert values to integers
                  $diff_main = intval($correction_2parameter[0]->main);
                  $option1_test2 = intval($correction_2parameter[0]->option1);
                  $option2_test2 = intval($correction_2parameter[0]->option2);
                  $option3_test2 = intval($correction_2parameter[0]->option3);
                  $option4_test2 = intval($correction_2parameter[0]->option4);

                  if ($diff_main === $option1_test2) {
                    $correct_answer_test2 = 1;
                  } else if ($diff_main === $option2_test2) {
                    $correct_answer_test2 = 2;
                    }
                   else if ($diff_main === $option3_test2) {
                    $correct_answer_test2 = 3;
                  } else if ($diff_main === $option4_test2) {
                    $correct_answer_test2 = 4;
                  }

            }
            if($tests->type == 3){

                    //Return all data that show on test 3
                    $parameter_test3 = DB::table("parameter as p")
                    ->leftJoin("test_method as TM" , "TM.parameter_id"  , "p.id" )
                    ->where("TM.test_group" , $id)
                    ->where("TM.method_type", 3)
                    ->get();

                    foreach($product_group as $item){
                        if($parameter_test3[0]->option1 == $item->product_id){

                            $product_test3_option1 = [
                                "item_code" => $item->item_code,
                                "variant" => $item->variant,
                                "lot_no" => $item->lot
                            ];


                        }

                           if($parameter_test3[0]->option2 == $item->product_id){

                            $product_test3_option2 = [

                                "item_code" => $item->item_code,
                                "variant" => $item->variant,
                                "lot_no" => $item->lot
                            ];
                        }


                        if($parameter_test3[0]->option3 == $item->product_id){

                            $product_test3_option3 = [
                                "item_code" => $item->item_code,
                                "variant" => $item->variant,
                                "lot_no" => $item->lot
                            ];
                        }

                        if($parameter_test3[0]->option4 == $item->product_id){

                            $product_test3_option4 = [
                                "item_code" => $item->item_code,
                                "variant" => $item->variant,
                                "lot_no" => $item->lot
                            ];
                        }
                    }

                    // ALL PRODUCT  VALUE 1
                    $qty_select_option1_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option1)
                    ->where("value1_option1" ,"<>" , "N/A")
                    ->where("value1_option1" ,"<>" , null)
                    ->sum(DB::raw("cast(value1_option1 as float)"));

                    $qty_select_option2_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option2)
                    ->where("value1_option1" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option1 as float)"));


                    $qty_select_option3_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option3 )
                    ->where("value1_option1" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option1 as float)"));

                    $qty_select_option4_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option4 )
                    ->where("value1_option1" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option1 as float)"));


                    // ALL PRODUCT  VALUE 2

                    $qty_select_option1_value2_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option1 )
                    ->where("value1_option2" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option2 as float)"));


                    $qty_select_option2_value2_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option2 )
                    ->where("value1_option2" ,"<>" , "N/A")
                  ->sum(DB::raw("cast(value1_option2 as float)"));


                    $qty_select_option3_value2_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option3 )
                    ->where("value1_option2" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option2 as float)"));

                    $qty_select_option4_value2_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option4 )
                    ->where("value1_option2" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option2 as float)"));

                    // ALL PRODUCT  VALUE 3

                    $qty_select_option1_value3_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option1 )
                    ->where("value1_option3" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option3 as float)"));

                    $qty_select_option2_value3_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option2 )
                    ->where("value1_option3" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option3 as float)"));


                    $qty_select_option3_value3_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option3 )
                    ->where("value1_option3" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option3 as float)"));

                    $qty_select_option4_value3_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option4 )
                    ->where("value1_option3" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option3 as float)"));

                    // ALL PRODUCT  VALUE 4

                    $qty_select_option1_value4_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option1 )
                    ->where("value1_option4" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option4 as float)"));

                    $qty_select_option2_value4_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option2 )
                    ->where("value1_option4" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option4 as float)"));


                    $qty_select_option3_value4_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option3 )
                    ->where("value1_option4" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option4 as float)"));

                    $qty_select_option4_value4_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option4 )
                    ->where("value1_option4" ,"<>" , "N/A")
                    ->sum(DB::raw("cast(value1_option4 as float)"));


                    // ALL PRODUCT  VALUE 5

                    $qty_select_option1_value5_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option1 )
                    ->sum(DB::raw("cast(value1_option5 as float)"));

                    $qty_select_option2_value5_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option2 )
                    ->sum(DB::raw("cast(value1_option5 as float)"));


                    $qty_select_option3_value5_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option3 )
                    ->sum(DB::raw("cast(value1_option5 as float)"));

                    $qty_select_option4_value5_test3 =DB::table("rating_test as RT")
                    ->where("RT.test_id" ,$id)
                    ->where("value" ,$parameter_test3[0]->option4 )
                    ->sum(DB::raw("cast(value1_option5 as float)"));



                    $percent1_label_test3 = number_format(($qty_select_option1_test3/$all_employee), 2, '.', '');

                    $percent2_label_test3 = number_format(($qty_select_option2_test3/$all_employee), 2, '.', '');

                    $percent3_label_test3 = number_format(($qty_select_option3_test3/$all_employee), 2, '.', '');

                    $percent4_label_test3 = number_format(($qty_select_option4_test3/$all_employee), 2, '.', '');

                    ///Value2

                    $percent1_label_value2_test3 = number_format(($qty_select_option1_value2_test3/$all_employee), 2, '.', '');

                    $percent2_label_value2_test3 = number_format(($qty_select_option2_value2_test3/$all_employee), 2, '.', '');

                    $percent3_label_value2_test3 = number_format(($qty_select_option3_value2_test3/$all_employee), 2, '.', '');

                    $percent4_label_value2_test3 = number_format(($qty_select_option4_value2_test3/$all_employee), 2, '.', '');


                    ///Value3

                    $percent1_label_value3_test3 = number_format(($qty_select_option1_value3_test3/$all_employee), 2, '.', '');

                    $percent2_label_value3_test3 = number_format(($qty_select_option2_value3_test3/$all_employee), 2, '.', '');

                    $percent3_label_value3_test3 = number_format(($qty_select_option3_value3_test3/$all_employee), 2, '.', '');

                    $percent4_label_value3_test3 = number_format(($qty_select_option4_value3_test3/$all_employee), 2, '.', '');

                       ///Value4

                    $percent1_label_value4_test3 = number_format(($qty_select_option1_value4_test3/$all_employee), 2, '.', '');

                    $percent2_label_value4_test3 = number_format(($qty_select_option2_value4_test3/$all_employee), 2, '.', '');

                    $percent3_label_value4_test3 = number_format(($qty_select_option3_value4_test3/$all_employee), 2, '.', '');

                    $percent4_label_value4_test3 = number_format(($qty_select_option4_value4_test3/$all_employee), 2, '.', '');


                    ///Value4

                    $percent1_label_value5_test3 = number_format(($qty_select_option1_value5_test3/$all_employee), 2, '.', '');

                    $percent2_label_value5_test3 = number_format(($qty_select_option2_value5_test3/$all_employee), 2, '.', '');

                    $percent3_label_value5_test3 = number_format(($qty_select_option3_value5_test3/$all_employee), 2, '.', '');

                    $percent4_label_value5_test3 = number_format(($qty_select_option4_value5_test3/$all_employee), 2, '.', '');

            }
            if($tests->type == 4){
                $parameter_test4 = DB::table("parameter as p")
                ->leftJoin("test_method as TM" , "TM.parameter_id"  , "p.id" )
                ->where("TM.test_group" , $id)
                ->where("TM.method_type", 4)
                ->get();

                foreach($product_group as $item){
                    if($parameter_test4[0]->option1 == $item->product_id){
                        $product_test4_option1 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];


                    }
                       if($parameter_test4[0]->option2 == $item->product_id){
                        $product_test4_option2 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }
                    if($parameter_test4[0]->option3 == $item->product_id){
                        $product_test4_option3 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }

                    if($parameter_test4[0]->option4 == $item->product_id){
                        $product_test4_option4 = [
                            "item_code" => $item->item_code,
                            "variant" => $item->variant,
                            "lot_no" => $item->lot
                        ];
                    }

                }

                // RANK 1

                $qty_select_rank1_option1 = DB::table('test_result')
                ->where('option1', $parameter_test4[0]->label1)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank1_option2 = DB::table('test_result')
                ->where('option1', $parameter_test4[0]->label2)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank1_option3 = DB::table('test_result')
                ->where('option1', $parameter_test4[0]->label3)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank1_option4 = DB::table('test_result')
                ->where('option1', $parameter_test4[0]->label4)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();

                // RANK 2

                $qty_select_rank2_option1 = DB::table('test_result')
                ->where('option2', $parameter_test4[0]->label1)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank2_option2 = DB::table('test_result')
                ->where('option2', $parameter_test4[0]->label2)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank2_option3 = DB::table('test_result')
                ->where('option2', $parameter_test4[0]->label3)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank2_option4 = DB::table('test_result')
                ->where('option2', $parameter_test4[0]->label4)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();


                // RANK 3

                $qty_select_rank3_option1 = DB::table('test_result')
                ->where('option3', $parameter_test4[0]->label1)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank3_option2 = DB::table('test_result')
                ->where('option3', $parameter_test4[0]->label2)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank3_option3 = DB::table('test_result')
                ->where('option3', $parameter_test4[0]->label3)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank3_option4 = DB::table('test_result')
                ->where('option3', $parameter_test4[0]->label4)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();

                // RANK 4

                $qty_select_rank4_option1 = DB::table('test_result')
                ->where('option4', $parameter_test4[0]->label1)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank4_option2 = DB::table('test_result')
                ->where('option4', $parameter_test4[0]->label2)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank4_option3 = DB::table('test_result')
                ->where('option4', $parameter_test4[0]->label3)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();
                $qty_select_rank4_option4 = DB::table('test_result')
                ->where('option4', $parameter_test4[0]->label4)
                ->where("method_type" , 4)
                ->where("test_id" , $id)
                ->count();

                // Rank1 All option as Percentage
                $percent_rank1_option1 = number_format(($qty_select_rank1_option1/$all_employee)*100, 2, '.', '');
                $percent_rank1_option2 = number_format(($qty_select_rank1_option2/$all_employee)*100, 2, '.', '');
                $percent_rank1_option3 = number_format(($qty_select_rank1_option3/$all_employee)*100, 2, '.', '');
                $percent_rank1_option4 = number_format(($qty_select_rank1_option4/$all_employee)*100, 2, '.', '');


                // Rank2 All option as Percentage
                $percent_rank2_option1 = number_format(($qty_select_rank2_option1/$all_employee)*100, 2, '.', '');
                $percent_rank2_option2 = number_format(($qty_select_rank2_option2/$all_employee)*100, 2, '.', '');
                $percent_rank2_option3 = number_format(($qty_select_rank2_option3/$all_employee)*100, 2, '.', '');
                $percent_rank2_option4 = number_format(($qty_select_rank2_option4/$all_employee)*100, 2, '.', '');

                // Rank3 All option as Percentage
                $percent_rank3_option1 = number_format(($qty_select_rank3_option1/$all_employee)*100, 2, '.', '');
                $percent_rank3_option2 = number_format(($qty_select_rank3_option2/$all_employee)*100, 2, '.', '');
                $percent_rank3_option3 = number_format(($qty_select_rank3_option3/$all_employee)*100, 2, '.', '');
                $percent_rank3_option4 = number_format(($qty_select_rank3_option4/$all_employee)*100, 2, '.', '');

                 // Rank4 All option as Percentage
                $percent_rank4_option1 = number_format(($qty_select_rank4_option1/$all_employee)*100, 2, '.', '');
                $percent_rank4_option2 = number_format(($qty_select_rank4_option2/$all_employee)*100, 2, '.', '');
                $percent_rank4_option3 = number_format(($qty_select_rank4_option3/$all_employee)*100, 2, '.', '');
                $percent_rank4_option4 = number_format(($qty_select_rank4_option4/$all_employee)*100, 2, '.', '');
            }
        }

        if(empty($parameter_test1) ||  $parameter_test1 == ""){
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

                    return view("frontend.client_result",
                    [
                    'id' => $id,
                     "test" => $test,
                      'parameter_test1' => $parameter_test1,
                      'product_test1_option1' => $product_test1_option1,
                      'product_test1_option2' => $product_test1_option2,
                      'product_test1_option3' => $product_test1_option3,
                      'product_test1_option4' => $product_test1_option4,
                      'parameter_test2' => $parameter_test2,
                      'parameter_test3' => $parameter_test3,
                      'parameter_test4' => $parameter_test4,
                      'correct_answer' => $correct_answer,
                      'percent2_label' => $percent2_label,
                      'percent3_label' => $percent3_label,
                      'percent4_label' => $percent4_label,
                      'total_percent_test1_label' =>$total_percent_test1_label,
                      'all_employee' => $all_employee,
                      'qty_select_option2' => $qty_select_option2,
                      'qty_select_option3' => $qty_select_option3,
                      'qty_select_option4' => $qty_select_option4,


                      ///////////////////////////////////////////////Test 2
                      'product_test2_option1' => $product_test2_option1,
                      'product_test2_option2' => $product_test2_option2,
                      'product_test2_option3' => $product_test2_option3,
                      'product_test2_option4' => $product_test2_option4,
                       'correct_answer_test2' =>   $correct_answer_test2,
                       'percent1_label_test2' => $percent1_label_test2,
                       'percent2_label_test2' => $percent2_label_test2,
                       'percent3_label_test2' => $percent3_label_test2,
                       'percent4_label_test2' => $percent4_label_test2,
                       'total_percent_test2_label' => $total_percent_test2_label,

                        'qty_select_option1_test2' => $qty_select_option1_test2,
                        'qty_select_option2_test2' => $qty_select_option2_test2,
                        'qty_select_option3_test2' => $qty_select_option3_test2,
                        'qty_select_option4_test2' => $qty_select_option4_test2,
                        'qty_correct_test2' => $qty_correct_test2 ,

                       ////////////////////////////////////////////Test 3
                       //Value1
                       'product_test3_option1' => $product_test3_option1,
                       'product_test3_option2' => $product_test3_option2,
                       'product_test3_option3' => $product_test3_option3,
                       'product_test3_option4' => $product_test3_option4,
                       'percent1_label_test3' => $percent1_label_test3,
                       'percent2_label_test3' => $percent2_label_test3,
                        'percent3_label_test3' => $percent3_label_test3,
                        'percent4_label_test3' => $percent4_label_test3,
                        'qty_select_option1_test3' => $qty_select_option1_test3,
                        'qty_select_option2_test3' => $qty_select_option2_test3,
                        'qty_select_option3_test3' => $qty_select_option3_test3,
                        'qty_select_option4_test3' => $qty_select_option4_test3,

                        //value2
                        'percent1_label_value2_test3' =>$percent1_label_value2_test3,
                        'percent2_label_value2_test3' =>$percent2_label_value2_test3,
                        'percent3_label_value2_test3' =>$percent3_label_value2_test3,
                        'percent4_label_value2_test3' =>$percent4_label_value2_test3,
                        'qty_select_option1_value2_test3' => $qty_select_option1_value2_test3,
                        'qty_select_option2_value2_test3' => $qty_select_option2_value2_test3,
                        'qty_select_option3_value2_test3' => $qty_select_option3_value2_test3,
                        'qty_select_option4_value2_test3' => $qty_select_option4_value2_test3,

                        //Value3
                        'percent1_label_value3_test3' => $percent1_label_value3_test3,
                        'percent2_label_value3_test3' => $percent2_label_value3_test3,
                        'percent3_label_value3_test3' => $percent3_label_value3_test3,
                        'percent4_label_value3_test3' => $percent4_label_value3_test3,
                        'qty_select_option1_value3_test3' => $qty_select_option1_value3_test3,
                        'qty_select_option2_value3_test3' => $qty_select_option2_value3_test3,
                        'qty_select_option3_value3_test3' => $qty_select_option3_value3_test3,
                        'qty_select_option4_value3_test3' => $qty_select_option4_value3_test3,
                        //Value4

                         'percent1_label_value4_test3' =>$percent1_label_value4_test3,
                         'percent2_label_value4_test3' =>$percent2_label_value4_test3,
                         'percent3_label_value4_test3' =>$percent3_label_value4_test3,
                         'percent4_label_value4_test3' =>$percent4_label_value4_test3,
                         'qty_select_option1_value4_test3' => $qty_select_option1_value4_test3,
                         'qty_select_option2_value4_test3' => $qty_select_option2_value4_test3,
                         'qty_select_option3_value4_test3' => $qty_select_option3_value4_test3,
                         'qty_select_option4_value4_test3' => $qty_select_option4_value4_test3,
                         //Value 5
                         'percent1_label_value5_test3' =>$percent1_label_value5_test3,
                         'percent2_label_value5_test3' =>$percent2_label_value5_test3,
                         'percent3_label_value5_test3' =>$percent3_label_value5_test3,
                         'percent4_label_value5_test3' =>$percent4_label_value5_test3,
                         'qty_select_option1_value5_test3' => $qty_select_option1_value5_test3,
                         'qty_select_option2_value5_test3' => $qty_select_option2_value5_test3,
                         'qty_select_option3_value5_test3' => $qty_select_option3_value5_test3,
                         'qty_select_option4_value5_test3' => $qty_select_option4_value5_test3,




                        //  TEST 4
                        'product_test4_option1' => $product_test4_option1,
                        'product_test4_option2' => $product_test4_option2,
                        'product_test4_option3' => $product_test4_option3,
                        'product_test4_option4' => $product_test4_option4,
                        // RANK1
                        'percent_rank1_option1' =>$percent_rank1_option1,
                        'percent_rank1_option2' => $percent_rank1_option2,
                        'percent_rank1_option3' => $percent_rank1_option3,
                        'percent_rank1_option4' => $percent_rank1_option4,

                        // RANK2
                        'percent_rank2_option1' =>$percent_rank2_option1,
                        'percent_rank2_option2' => $percent_rank2_option2,
                        'percent_rank2_option3' => $percent_rank2_option3,
                        'percent_rank2_option4' => $percent_rank2_option4,

                        // RANK3
                        'percent_rank3_option1' => $percent_rank3_option1,
                        'percent_rank3_option2' => $percent_rank3_option2,
                        'percent_rank3_option3' => $percent_rank3_option3,
                        'percent_rank3_option4' => $percent_rank3_option4,

                                          // RANK3
                        'percent_rank4_option1' => $percent_rank4_option1,
                        'percent_rank4_option2' => $percent_rank4_option2,
                        'percent_rank4_option3' => $percent_rank4_option3,
                        'percent_rank4_option4' => $percent_rank4_option4,

                        // QTY OPTION
                        'qty_select_rank1_option1' => $qty_select_rank1_option1,
                        'qty_select_rank1_option2' => $qty_select_rank1_option2,
                        'qty_select_rank1_option3' => $qty_select_rank1_option3,
                        'qty_select_rank1_option4' => $qty_select_rank1_option4,

                        // QTY OPTION 2
                        'qty_select_rank2_option1' => $qty_select_rank2_option1,
                        'qty_select_rank2_option2' => $qty_select_rank2_option2,
                        'qty_select_rank2_option3' => $qty_select_rank2_option3,
                        'qty_select_rank2_option4' => $qty_select_rank2_option4,


                        // QTY OPTION 3
                        'qty_select_rank3_option1' => $qty_select_rank3_option1,
                        'qty_select_rank3_option2' => $qty_select_rank3_option2,
                        'qty_select_rank3_option3' => $qty_select_rank3_option3,
                        'qty_select_rank3_option4' => $qty_select_rank3_option4,


                        // QTY OPTION 2
                        'qty_select_rank4_option1' => $qty_select_rank4_option1,
                        'qty_select_rank4_option2' => $qty_select_rank4_option2,
                        'qty_select_rank4_option3' => $qty_select_rank4_option3,
                        'qty_select_rank4_option4' => $qty_select_rank4_option4
                  ]);
                }

    }
    else{
        return redirect("/admin/login")->with("no_test", "This Test haven't test yet.");
    }
 }

 public function view_all_tester_client($id,$tested){
    
    

    $employee = DB::table("employee_group as EG")
    ->where("EG.test_id" , $id)
    ->select("EG.*","EG.serail as serial" ,DB::raw("FORMAT(EG.created_at ,'yyyy-MM-dd h:mm tt')  as created_at"))
    ->orderBy("EG.id","desc")
    ->get();

    foreach($employee as $item){
        $item->dob = $this->calculateAge($item->dob);
    }
    $test_state = 0;

    return view("frontend.client_tester_list",['id' => $id ,'employee' => $employee ,'test_state' => $test_state,'tested' => $tested ]);
}





public function view_all_tester_comment_client($id,$tested){
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
        return redirect("/result/test_id={{$id}}/tested={{$tested}}")->with("message-primary", "No Comment on this Test");
    } else {
        return view("frontend.client_tester_comment", ['comment' => $comment,'tested'=>$tested]);
    }
}

    public function teser_choice_client($id,$tested,$em_id){
  
            $test_id = $id;
          
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
                    $test_id = $id;
                  
    
                    $choice_tester_test1 = DB::table("test-result")
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
                       $test_id = $id;
                   
    
                       $choice_tester_test2 = DB::table("test-result")
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
                     $choice_tester_test4 = DB::table("test-result")
                     ->where("employee_id" , $em_id)
                     ->where("test_id" ,$test_id)
                     ->where("method_type" , 4)
                     ->select("option1", "option2" , "option3" ,"option4")
                     ->limit(1)
                     ->get();
    
    
    
                }
    
    
    
                $test_state = 1;
    
            return view("frontend.client_tester_choice", [
                "employee" => $employee ,
                'test_id' => $test_id,
                "test" => $test,
                "tested" => $tested,
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
}


