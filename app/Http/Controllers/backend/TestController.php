<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function add_test() {
        $product = DB::table('product')
        ->select("id", "item_code as code","name" , "variant" ,"lot_no as lot" , "category" ,"lot_tracking as track")
        ->orderBy("id","desc")
        ->get();
            return view("backend.add-test",["product" => $product]);
    }
    public function view_test(){
        $test = DB::table("test")
        ->select("id", "title", "option_qty as method" , "product_qty as product" , DB::raw("FORMAT(due_date, 'yyyy-MM-dd') as due_date") ,DB::raw("FORMAT(created_at, 'yyyy-MM-dd') as created_at"),"status")
        ->orderBy("id", "desc")
        ->get();

        return view("backend.view-test",["test" => $test]);
    }
    public function delete_test(Request $request){
        $id = $request->input("delete-id");
     

        DB::table("employee-group")
        ->where("test_id" , $id)
        ->delete();

        DB::table("product_group")
        ->where("test_id", $id)
        ->delete();

        DB::table("parameter as p")
        ->leftJoin("test_method as tm", "tm.parameter_id" , "p.id")
        ->where("test_group" , $id)
        ->delete();

        DB::table("test_method")
        ->where("test_group",$id)
        ->delete();

        DB::table("test-result")
        ->where("test_id",$id)
        ->delete();

      

        DB::table("rating-test")
        ->where("test_id",$id)
        ->delete();
        DB::table("test")
        ->where("id",$id)
        ->delete();

        return redirect("/admin/view/test");

    }

    public function add_test_submit(Request $request){

        if($request->input("title") == ""){
            $title_test = "Sensery Test";
        }else{
            $title_test = $request->input("title");
        }
        if($request->input("due-date") == ""){
            $due_date = today();
        }
        else{
            $due_date = $request->input("due-date");
        }

        DB::table("test")
        ->insert([
            'title' => $title_test,
            'status' => $request->input("status"),
            'due_date' =>$due_date,
            'created_at' => today()
        ]);
        $main_test_id = DB::table("test")
        ->select("id")
        ->limit(1)
        ->orderBy("id" , "desc")
        ->get();


        $array_product = $request->input("product1");

        $intArray = array_map('intval', explode(',', $array_product));
        $count_arr = count(explode(',', $array_product));
        $qty_product = 0;
        if (isset($main_test_id[0]->id)) {
            for ($i = 0; $i < $count_arr; $i++) {
                // Fetch product by id
                $product = DB::table("product")
                    ->select("id", "item_code as name", "variant", "lot_no as lot")
                    ->where("id", $intArray[$i])
                    ->first(); // Use first() to get a single result

                // Check if $product is not empty

                if ($product) {
                    // Insert into product_group table
                    DB::table("product_group")->insert([
                        'test_id' => $main_test_id[0]->id,
                        'product_id' => $product->id,
                        'variant' => $product->variant,
                        'item_code' => $product->name,
                        'lot' => $product->lot,
                    ]);
                    $qty_product += 1;
                }
            }
        }

        $test_count = 0;
        // TEST 1
        $status1 = $request->input("method-state1");
        if($status1 == 1){
            $test_type = 1;

            $this->same_test($request);
            $id_parmeter = DB::table("parameter")
            ->select("id")
            ->limit(1)
            ->orderBy("id" , "desc")
            ->get();
            $this->method_insert($request, $test_type, $id_parmeter[0]->id,$main_test_id);

            $id_method1 = DB::table("test_method")
            ->select("id")
            ->limit(1)
            ->orderBy("id" , "desc")
            ->get();
            $test_count +=1;
        }
        //TEST 2

        $status2 = $request->input("method-state2");
        if($status2 == 1){
            $test_type = 2;
            $this-> difference_test($request);
                $id_parmeter = DB::table("parameter")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();

                $this -> method_insert($request,$test_type,$id_parmeter[0]->id,$main_test_id);
                $id_method2 = DB::table("test_method")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();
                $test_count +=1;
        }
        //TEST 3
        $status3 = $request->input("method-state3");
        if($status3 == 1){
            $test_type = 3;
            $parameter = $this->rating_test($request);

                $id_parmeter = DB::table("parameter")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();
                $this->method_insert($request,$test_type,$id_parmeter[0]->id,$main_test_id);
                $id_method3 = DB::table("test_method")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();
                $test_count +=1;
        }
        //TEST 4
        $status4 = $request->input("method-state4");
        if($status4 == 1){
            $test_type = 4;
            $this->ranking_test($request);

                $id_parmeter = DB::table("parameter")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();
                $this->method_insert($request,$test_type,$id_parmeter[0]->id,$main_test_id);
                $id_method4 = DB::table("test_method")
                ->select("id")
                ->limit(1)
                ->orderBy("id" , "desc")
                ->get();
                $test_count +=1;
        }

        DB::table("test")
        ->where("id", $main_test_id[0]->id)
        ->update([
            'option_qty' => $test_count,
            'product_qty' =>$qty_product
        ]);


        return redirect("/admin/view/test");
    }

    function method_insert($request,$method_type,$parameter_id,$main_test_id){
        if($method_type == 1){
            if($request->input("test1-title") == ""){
                $title = "តើគំរូមួយណាដូចទៅនិង គំរូគោល​ ?";

            }else{
                $title = $request->input("test1-title");
            }
            DB::table("test_method")
            ->insert([
                'test_group' => $main_test_id[0]->id,
                'test_title' => $title,
                'method_type' => $method_type,
                'parameter_id' => $parameter_id,
                'created_at' => today()
            ]);
        }
        else if($method_type == 2 ){
            if($request->input("test2-title") == ""){
                $title = "តើគំរូមួយណាដែលខុសគេ ក្នុងចំណោមផលិតផលដែលមាន ?";

            }else{
                $title = $request->input("test2-title");
            }
            DB::table("test_method")
            ->insert([
                'test_group' => $main_test_id[0]->id,
                'test_title' => $title,
                'method_type' => $method_type,
                'parameter_id' => $parameter_id,
                'created_at' => today()
            ]);
        }     else if($method_type == 3 ){
            if($request->input("test3-title") == ""){
                $title = "ចូរអោយពិន្ទុលើផលិតផលដែលមាន ?";

            }else{
                $title = $request->input("test3-title");
            }
            DB::table("test_method")
            ->insert([
                'test_group' => $main_test_id[0]->id,
                'test_title' => $title,
                'method_type' => $method_type,
                'parameter_id' => $parameter_id,
                'created_at' => today()
            ]);
        }
        else if($method_type == 4 ){
            if($request->input("test4-title") == ""){
                $title = "តើគំរូមួយណាដែលខ្លាំងជាងគេ​ ?";

            }else{
                $title = $request->input("test4-title");
            }
            DB::table("test_method")
            ->insert([
                'test_group' => $main_test_id[0]->id,
                'test_title' => $title,
                'method_type' => $method_type,
                'parameter_id' => $parameter_id,
                'created_at' => today()
            ]);
        }

    }
    function ranking_test($request){
        if(!empty($request->input("test4-option1"))){
            $option1 = $request->input("test4-option1");
        }
        else{
            $option1 = "";
        }
        if(!empty($request->input("test4-option2"))){
            $option2 = $request->input("test4-option2");
        }
        else{
            $option2 = "";
        }
        if(!empty($request->input("test4-option3"))){
            $option3 = $request->input("test4-option3");
        }
        else{
            $option3 = "";
        }
        if(!empty($request->input("test4-option4"))){
            $option4 = $request->input("test4-option4");
        }
        else{
            $option4 = "";
        }
        if($request->input("test4-label1") == ""){
            $label1 = "A";
        }else{
            $label1 = $request->input("test4-label1");
        }
        if($request->input("test4-label2") == ""){
            $label2 = "B";
        }else{
            $label2 = $request->input("test4-label2");
        }
        if($request->input("test4-label3") == ""){
            $label3 = "C";
        }else{
            $label3 = $request->input("test4-label3");
        }
        if($request->input("test4-label4") == ""){
            $label4 = "D";
        }else{
            $label4 = $request->input("test4-label4");
        }

        // test1-label3
        DB::table("parameter")->insert([
            'main' => $option1,
            'option1' => $option1,
            'option2' => $option2,
            'option3' => $option3,
            'option4' => $option4,
            'label1' => $label1,
            'label2' => $label2,
            'label3' => $label3,
            'label4' => $label4
        ]);

    }

    function rating_test($request){
        $main = $request->input("test3-main");
        if(!empty($request->input("test3-option1"))){
            $option1 = $request->input("test3-option1");
        }
        else{
            $option1 = "";
        }
        if(!empty($request->input("test3-option2"))){
            $option2 = $request->input("test3-option2");
        }
        else{
            $option2 = "";
        }
        if(!empty($request->input("test3-option3"))){
            $option3 = $request->input("test3-option3");
        }
        else{
            $option3 = "";
        }
        if(!empty($request->input("test3-option4"))){
            $option4 = $request->input("test3-option4");
        }
        else{
            $option4 = "";
        }

        if($request->input("test3-label1") == ""){
            $label1 = "A";
        }else{
            $label1 = $request->input("test3-label1");
        }
        if($request->input("test3-label2") == ""){
            $label2 = "B";
        }else{
            $label2 = $request->input("test3-label2");
        }
        if($request->input("test3-label3") == ""){
            $label3 = "C";
        }else{
            $label3 = $request->input("test3-label3");
        }
        if($request->input("test3-label4") == ""){
            $label4 = "D";
        }else{
            $label4 = $request->input("test3-label4");
        }

        if($request->input("value1") == ""){
            $value1 = "រសជាតិ";
        }else{
            $value1 = $request->input("value1");
        }

        if($request->input("value2") == ""){
            $value2 = "ខ្លិន";
        }else{
            $value2 = $request->input("value2");
        }


        if($request->input("value3") == ""){
            $value3 = "ភាពចូលចិត្តទូទៅ";
        }else{
            $value3 = $request->input("value3");
        }

        if($request->input("value4") == ""){
            $value4 = "";
        }else{
            $value4 = $request->input("value4");
        }
        if($request->input("value5") == ""){
            $value5 = "";
        }else{
            $value5 = $request->input("value5");
        }



        // test1-label3
        DB::table("parameter")->insert([
            'main' => $main,
            'option1' => $option1,
            'option2' => $option2,
            'option3' => $option3,
            'option4' => $option4,
            'label1' => $label1,
            'label2' => $label2,
            'label3' => $label3,
            'label4' => $label4,
            'add_on1' => $request->input("add-on1"),
            'add_on2' => $request->input("add-on2"),
            'add_on3' => $request->input("add-on3"),
            'add_on4' => $request->input("add-on4"),
            'add_on5' => $request->input("add-on5"),
            'add_on6' => $request->input("add-on6"),
            'add_on7' => $request->input("add-on7"),
            'add_on8' => $request->input("add-on8"),
            'add_on9' => $request->input("add-on9"),
            'value1' => $value1,
            'value2' => $value2,
            'value3' => $value3,
            'value4' => $value4,
            'value5' => $value5
        ]);

    }
    function difference_test($request){

        $main = $request->input("test2-main");
        
        if(!empty($request->input("test2-option1"))){
            $option1 = $request->input("test2-option1");
        }
        else{
            $option1 = "";
        }
        if(!empty($request->input("test2-option2"))){
            $option2 = $request->input("test2-option2");
        }
        else{
            $option2 = "";
        }
        if(!empty($request->input("test2-option3"))){
            $option3 = $request->input("test2-option3");
        }
        else{
            $option3 = "";
        }
        if(!empty($request->input("test2-option4"))){
            $option4 = $request->input("test2-option4");
        }
        else{
            $option4 = "";
        }
        if($request->input("test2-label1") == ""){
            $label1 = "A";
        }else{
            $label1 = $request->input("test2-label1");
        }
        if($request->input("test2-label2") == ""){
            $label2 = "B";
        }else{
            $label2 = $request->input("test2-label2");
        }
        if($request->input("test2-label3") == ""){
            $label3 = "C";
        }else{
            $label3 = $request->input("test2-label3");
        }
        if($request->input("test2-label4") == ""){
            $label4 = "D";
        }else{
            $label4 = $request->input("test2-label4");
        }

        // test1-label3
        DB::table("parameter")->insert([
            'main' => $main,
            'option1' => $option1,
            'option2' => $option2,
            'option3' => $option3,
            'option4' => $option4,
            'label1' => $label1,
            'label2' => $label2,
            'label3' => $label3,
            'label4' => $label4
        ]);

    }

    function same_test($request){
        $same_main = $request->input("test1-option-same-main");
        $main = $request->input("test1-main");
        if(!empty($request->input("test1-label1-main"))){
            $main_label = $request->input("test1-label1-main");
        }
        else{
            $main_label = "A";
        }
        if(!empty($request->input("test1-main"))){
            $option1 = $request->input("test1-main");
        }
        else{
            $option1 = "";
        }
        if(!empty($request->input("test1-option2"))){
            $option2 = $request->input("test1-option2");
        }
        else{
            $option2 = "";
        }
        if(!empty($request->input("test1-option3"))){
            $option3 = $request->input("test1-option3");
        }
        else{
            $option3 = "";
        }
        if(!empty($request->input("test1-option4"))){
            $option4 = $request->input("test1-option4");
        }
        else{
            $option4 = "";
        }
        if($request->input("test1-label1") == ""){
            $label1 = "A";
        }else{
            $label1 = $request->input("test1-label1");
        }
        if($request->input("test1-label2") == ""){
            $label2 = "B";
        }else{
            $label2 = $request->input("test1-label2");
        }
        if($request->input("test1-label3") == ""){
            $label3 = "C";
        }else{
            $label3 = $request->input("test1-label3");
        }
        if($request->input("same-main-state") == 1){
            if($request->input("test1-label4") == ""){
                $label4 = "D";
            }else{
                $label4 = $request->input("test1-label4");
            }
        }else{
            $label4 = "";
        }

        // test1-label3
        DB::table("parameter")->insert([
            'main' => $main,
            'same_main' => $same_main,
            'label_main' => $main_label,
            'option1' => $option1,
            'option2' => $option2,
            'option3' => $option3,
            'option4' => $option4,
            'label1' => $main_label,
            'label2' => $label2,
            'label3' => $label3,
            'label4' => $label4
        ]);
    }

    
}


