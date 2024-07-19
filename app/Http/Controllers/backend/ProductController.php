<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
    public function add_product(){
        $category = DB::table("category")
        ->orderBy("id","desc")
        ->get();
        $trackcode = DB::table("trackcode")
        ->orderBy("id","desc")
        ->get();
    


        return view("backend.add-product", ["category" => $category , "trackcode" => $trackcode]);
    }
    public function view_product(){
        $product = DB::table("product")
        ->select( "thumbnail","id" , "item_code as code" , "name" , "variant" ,"description" , "lot_no as lot" , "category" , "size")
        ->orderBy("id" ,"desc")
        ->get();

        // return var_dump($product);
        return view("backend.view-product" , ["product" => $product]);
        // return var_dump($product);
    }
    public function add_product_submit(Request $request){
        $category = "";
        if($request->input("category-state") == 0){
            $category = $request->input("category");
        }else{
            $category = $request->input("customcategory");
            DB::table("category")->insert([
                'name' => $category,
                'created_at' => today()
            ]);
        }
        $trackcode = "";
        if($request->input("track_state") == 0){
            $trackcode = $request->input("trackcode");

        }
        else{
            $trackcode = $request->input("customtrack");
            DB::table("trackcode")->insert([
                'name' => $trackcode,
                'created_at' => today()
            ]);
        }
        $insert = DB::table("product")->insert([
            'item_code' => $request->input("code"),
            'name' => $request->input("name"),
            'variant' => $request->input("variant"),
            'description' => $request->input("description"),
            'lot_no' => $request->input("lot"),
            'manufacturing_date' => $request->input("pro-date"),
            'size' => $request->input("size"),
            'category' => $category,
            'lot_tracking' => $trackcode,
            'thumbnail' => $request->input("thumbnail"),
            'created_at' => today()
        ]);
        if($insert){
            return redirect("/admin/view/product")->with("message-success", "Added 1 Product.");
        }else{
            return redirect("/admin/add/product") -> withInput();
        }
        // return $product;
    }

    public function delete_product (Request $request){
        $delete = DB::table("product")
        ->where("id", $request->input("delete-id"))
        ->delete();

        if($delete){
            return redirect("/admin/view/product")->with("message-success","Deleted Success.");
        }else{
            
            return redirect("/admin/view/product")->with("message-fail", "Operation Fail!");
        }
        
    }

    public function update_product ($id){
        $product = DB::table('product')
        ->where('id' , $id)
        ->get();
        $category = DB::table("category")
        ->orderBy("id","desc")
        ->get();
        $trackcode = DB::table("trackcode")
        ->orderBy("id","desc")
        ->get();


        return view('backend.update-product',['product' => $product , 'id' => $id , 'trackcode' => $trackcode , 'category' => $category]);
    }

    public function update_product_submit (Request $request){
        // return $request;
        $category = $request->input("category");
        if($request->input("category-state") == 1){
            $category = $request->input("customcategory");

            DB::table("category")
            ->insert([
                'name' => $category,
                'created_at' => today()
            ]);
        }
        $track = $request->input("trackcode");
        if($request->input("track_state") == 1){
            $track = $request->input("customtrack");

            DB::table("trackcode")
            ->insert([
                'name' => $track,
                'created_at' => today()
            ]);
        }


        $update = DB::table("product")
        ->where("id" , $request->id)
        ->update([
            'item_code' => $request->input("code"),
            'name' => $request->input("name"),
            'variant' => $request->input("variant"),
            'size' => $request->input("size"),
            'lot_no' => $request->input("lot"),
            'manufacturing_date' => $request->input("pro-date"),
            'category' => $category,
            'lot_tracking' => $track,
            'description' => $request->input("description")
        ]);

        if($update){

            return redirect("/admin/view/product")->with("message-success", "Update Success.");
        }
        else{
            
            return redirect("/admin/view/product")->with("message-fail", "Update Fail.");
        }
    }
}
