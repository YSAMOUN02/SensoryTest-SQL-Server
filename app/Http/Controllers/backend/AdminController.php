<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function admin_dashboard() {
        return view("backend.master-admin");
    }
    public function admin_login(){
        return view("frontend.login-admin");
    }
    public function admin_login_submit(Request $request){
        $serial = $request->serial;
        $password = $request->password;


        if(Auth::attempt(['serail' => $serial , 'password' => $password],0)){
            return redirect("/admin");
        }else{
            return redirect("/admin/login")->with("message-fail", "Invalid Credentail!");
        }
   
    }

    public function view_admin(){
        $users = \App\Models\User::all();


        return view("backend.view-admin",['users' => $users]);
        
    }
    public function admin_logout(){
        Auth::logout();
        return redirect("/admin/login")->with("message-success", "Logged out successfully");
    }
    public function delete_admin(Request $request){



        $delete = DB::table("users")
        ->where("id", $request->delete_id)
        ->where("id","<>" , Auth::user()->id)
        ->delete();

        if($delete){
            return redirect("/admin/view/admin")->with("message-success","Deleted 1 admin");
        }
        else{
            return redirect("/admin/view/admin")->with("message-fail","Opp! Operation fail!");
        }
    }

    public function update_admin($id){
        $admin = DB::table("users")
        ->where("id" , $id)
        ->get();
        $department = DB::table("department")
        ->get();
        return view("backend.update-admin",['admin' => $admin , 'department' => $department]);
 
    }
    public function update_admin_submit(Request $request){

        if($request->password == "" || empty($request->password)){
            $password = $request->input("old_pass");
            // return $password;
                $update = DB::table("users")
                ->where("id" , $request->id)
                ->update([
                    'name'  => $request->name,
                    'password' => $password,
                    'serail'    => $request->serial,
                    'idem'  => $request->idem,
                    'dob'   => $request->age,
                    'position' => $request->position,
                    'department' => $request->deparment,
                    'remark' => $request->remark,
                    'updated_at' => today()
                ]);

                if($update){
                    return redirect("/admin/view/admin")->with("message-success" , "Updated Info Admin");
                }else{
                    
                    return redirect("/admin/view/admin")->with("message-fail" , "Opp! Operation fail!");
                }
        }else{
            
                $password = bcrypt($request->input("password"));

                // return $password;
                $update = DB::table("users")
                ->where("id" , $request->id)
                ->update([
                    'name'  => $request->name,
                    'password' => $password,
                    'serail'    => $request->serial,
                    'idem'  => $request->idem,
                    'dob'   => $request->age,
                    'position' => $request->position,
                    'department' => $request->deparment,
                    'remark' => $request->remark,
                    'updated_at' => today()
                ]);

                if($update){
                    return redirect("/admin/view/admin")->with("message-success" , "Updated Info Admin");
                }else{
                    
                    return redirect("/admin/view/admin")->with("message-fail" , "Opp! Operation fail!");
                }
        }
 
        
    }
}
