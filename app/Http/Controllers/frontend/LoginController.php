<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class LoginController extends Controller
{

    public function login(){
        return view("frontend.login");
    }
    public function login_submit(Request $request){

        $employees = DB::table("employee as em")
        ->select("em.id_em as idem" , "em.serial", "em.*")

        ->get();
        $id = $request->input("id");
        $serial = $request->input("serial");
        $test_state = 0;
        foreach($employees as $employee){
            $employee->idem = strtolower($employee->idem);
            $employee->serial = strtolower($employee->serial);
            $id = strtolower($id);
            $serial = strtolower($serial);
            $employee->idem = strtolower($employee->idem);


                if($employee->idem == $id && $employee->idem != ''){



                    $test_today = DB::table("test")
                    ->where("due_date" ,today())
                    ->where("status" , 1)
                    ->orderBy("id" , "desc")
                    ->select("test.*" ,DB::raw("FORMAT(created_at, 'yyyy-MM-dd') as created_at"))
                    ->get();
                    $test_state = 1;


                    return view("frontend.test-list",["test_today" =>$test_today,'employee' =>$employee]);
                }
                elseif($employee->serial == $serial && $employee->serial != ''){

                    $test_today = DB::table("test")
                    ->where("due_date" ,today())
                    ->where("status" , 1)
                    ->orderBy("id" , "desc")
                    ->select("test.*" ,DB::raw("FORMAT(created_at, 'yyyy-MM-dd') as created_at"))
                    ->get();
                    $test_state = 1;


                    return view("frontend.test-list",["test_today" =>$test_today,'employee' =>$employee]);
                }

        }
        if($test_state == 0){
            return redirect("/login")->with("message-fail","Invalid Credential ! Try again.");
        }
        return "No Test For Today.";
    }
    public function register(){


        $department = DB::table("department")
        ->orderBy("id","desc")
        ->get();

        return view("frontend.add-employee",['department' => $department]);
    }
}
