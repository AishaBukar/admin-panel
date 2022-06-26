<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function createEmployee(Request $request){
        $firstName= $request->firstName;
        $lastName = $request->lastName;
        $companyID= $request->companyID;
        $email= $request->email;
        $phone= $request->phone;

        $query= DB::table("employees")->insert(["firstName" => $firstName, "lastName" => $lastName, "companyID" => $companyID, "email" => $email, "phone" => $phone]);
            
        return redirect('/')->with("status","New user created successfully");
    }

    public function getEmployees(){
        DB::table("employees")->join("companies", "companies.id", "=", "employees.companyID")->select("firstName", "lastName", "companyName","email", "phone")->get();

        return redirect('/employees');
    }
}
