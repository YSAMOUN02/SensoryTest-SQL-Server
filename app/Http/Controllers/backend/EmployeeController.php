<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use App\Models\User;
class EmployeeController extends Controller
{
    public function add_employee() {
        $department = DB::table("department")
        ->orderBy("id","desc")
        ->get();
        return view("backend.add-employee",["department" => $department]);
    }
    public function view_employee(){

        $employee = DB::table('employee')
        ->select("serial","id" , "id_em as idem" , "name" , "dob" ,"department" , "test_time as time", "position", "remark")
        ->get();

        foreach($employee as $item){
            $item->dob = $this->calculateAge($item->dob);
        }



    //    var_dump($employee);
        return view("backend.view-employee", ['employee' => $employee]);

    }

    public function add_employee_submit(Request $request){

        // Staff Only
        if( $request->input("level") == 1){

            $department ="";
            if($request->input("department-state") == 0){
                $department = $request->input("deparment");
            }else{
                $department = $request->input("customdepartment");
                DB::table("department")->insert([
                    'name' => $department,
                    'created_at' => today()
                ]);
            }
            $employee = new employee();
            $employee->id_em = $request->input("id_em");
            $employee->serial = $request->input("serial");
            $employee->name = $request->input("name");
            $employee->department = $department;
            $employee->dob = $request->input("age");
            $employee->position = $request->input('position');
            $employee->remark = $request->input("remark");
            $employee->created_at = today();
            $employee->save();
            $employee->test_time = 0;
            $save = $employee->save();




            if($save){
                return redirect("/login")->with("message-success","Added 1 Tester");
            }else{
                return redirect("/login")->with("message-success","Register Success.");
            }

        }else{

            $department ="";
            if($request->input("department-state") == 0){
                $department = $request->input("deparment");
            }else{
                $department = $request->input("customdepartment");
                DB::table("department")->insert([
                    'name' => $department,
                    'created_at' => today()
                ]);
            }
            // return User::get();


                $new_user = new User();
                $new_user->idem = $request->input("id_em");
                $new_user->serail = $request->input("serial");
                $new_user->name = $request->input("name");
                $new_user->department = $department;
                $new_user->dob = $request->input("age");
                $new_user->position = $request->input('position');
                $new_user->password = bcrypt($request->input("password"));
                $new_user->remark = $request->input("remark");
                $new_user->created_at = today();
                $new_user->save();
                $insert = $new_user->save();

            if($insert){
                return redirect("/admin/view/admin")->with("message-success","Added 1 admin");
            }else{
                return redirect("/login")->with("message-success","Register Success.");
            }
        }
    }
    public function delete_employee(Request $request){
        $delete = DB::table("employee")
        ->where("id",$request->input("delete-id"))
        ->delete();

        if($delete){
            return redirect("/admin/view/employee")->with("message-success","Delete Success.");
        }else{

            return redirect("/admin/view/employee")->with("message-fail","Opp! Operation Fail.");
        }

    }

    public function update_employee(Request $request){

        $employee  = DB::table("employee")
        ->select("id_em as idem" , "employee.*")
        ->where("id" , $request->id)
        ->get();
        $department = DB::table("department")
        ->orderBy('id' , 'desc')
        ->get();

        return view("backend.update-employee",['employee' => $employee , 'department' => $department]);

    }

    public function update_employee_submit(Request $request){
        $department = null;
        if ($request->input("department-state") == 0) {
            $department = $request->input("department");

        } else {
            $department = $request->input("customdepartment");
            DB::table("department")
                ->insert([
                    'name' => $department,
                    'created_at' => today()
                ]);

        }


        $update = DB::table("employee")
        ->where('id',$request->input("id"))
        ->update([
            'serial' => $request->input("serial"),
            'id_em' => $request->input("id_em"),
            'name' => $request->input("name"),
            'dob' => $request->input("age"),
            'position' => $request->input("position"),
            'department' => $department,
            'remark' => $request->input("remark")
        ]);
      if($update){
        return redirect("/admin/view/employee")->with("message-success","Update Success.");
      }  else{
        return redirect("/admin/view/employee")->with("message-success","Opp! Operation fail.");
      }
    }
}
