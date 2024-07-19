<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultTestController extends Controller
{
    public function view_result($id){
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

                        return view("backend.result",
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
            return redirect("/admin/view/test")->with("no_test", "This Test haven't test yet.");
        }
     }










     public function test_submit(Request $request){
          $select_same_test = $request->input("same-test");
          $select_diff_test = $request->input("dif-test");


          if($select_same_test != "" && !empty($select_same_test)){
              $parameter1_id = $request->input("parameter1-id");
              $test_id = $request->input("test-id");
              $product_group = $test_id;
              $correct_product = DB::table("parameter")
              ->where("id", $parameter1_id)
              ->select("same_main")
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
                  'user_select' => $select_same_test,
                  'correct_option' => $correct_product[0]->same_main,
                  'correction' => $correction,
                  'created_at' => today()
              ]);
          }
          if($select_diff_test != "" && !empty($select_diff_test)){

              $parameter2_id = $request->input("parameter2-id");
              $test_id = $request->input("test-id");
              $product_group = $test_id;
              $correct_product2 = DB::table("test_method")
              ->leftJoin("parameter as p" , "p.id" , "parameter_id")
              ->where("p.id", $parameter2_id)
              ->select("main", "method_type")
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
                  'method_type' => $correct_product2[0]->method_type,
                  'correct_option' => $correct_product2[0]->main,
                  'correction' => $correction,
                  'created_at' => today()
              ]);
          }

          $user_ranking =$request->input("user-ranking");

          if($user_ranking != "" || !empty($user_ranking)){

              $pairs = explode(",", $user_ranking);

              // Initialize an empty associative array
              $ranking_value = array();

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
              if($correct_product[0]->label1 == $ranking_value['1']){
                  $correction += 1;
              }
              if($correct_product[0]->label2 == $ranking_value['2']){
                  $correction += 1;
              }
              if($correct_product[0]->label3 == $ranking_value['3']){
                  $correction += 1;
              }
              if($correct_product[0]->label4 == $ranking_value['4']){
                  $correction += 1;
              }

              DB::table("test_result")
              ->insert([
                  'test_id' => $test_id,
                  'product_group_id' => $product_group,
                  'parameter_id' => $parameter4_id,
                  'user_select' => $user_ranking,
                  'correct_option' => $correct_option,
                  'method_type' => $correct_product[0]->method_type,
                  'correction' => $correction,
                  'created_at' => today()
              ]);
          }







      return 123;
   }


}
