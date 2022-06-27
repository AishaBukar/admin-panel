<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = companies::latest()->paginate(10);
        return view('index')->with('i', (request()->input('page',1) -1)* 10);
    }
    public function create(){
        return view('create');
        // $name= $request->name;
        // $email = $request->email;
        // $logo= $request->companyID;
        // $website= $request->website;
        

        // $query= DB::table("employees")->insert(["firstName" => $firstName, "lastName" => $lastName, "companyID" => $companyID, "email" => $email, "phone" => $phone]);
            
        // return redirect('/')->with("status","New user created successfully");
    }
    public function show(companies $companies){
        return view('show', compact('companies'));

    }
    public function edit(companies $companies){
        return view('edit', compact('companies'));

    }
    public function update(Request $request, companies $companies){
        $request->validate([

        ]);
        $companies->update($request->all());

        return redirect()->route('index')->with('success','Company updated successfully');

    }
    public function destroy(companies $companies){

        $companies->delete();

        return redirect()->route('index')->with('success', 'Company deleted successfully');
    }

}
