<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(Request $req){
        $name     =request('username');
        $email    =request('email');
        $password =request('password');
        $phone    =request('phone');

        $validate=$req -> validate([
            "email"    => "required|email",
            "password" => "required|min:8|max:16",
            "username" => "required",
            "phone"    => "required|digits:14"
        ]);

        Employee::create([
            'email'    =>$email,
            'password' =>$password,
            'mobile'   =>$phone,
            'fullname' =>$name
        ]);

        // $all_employees=Employee::all();
        // return view('user',compact('all_employees'));

        return redirect('user');

    }

    public function user(){
        return view('form');
    }


    public function show(){
        $all_employees=Employee::all();
        return view('user',compact('all_employees'));
    }

    public function delete($employees_id){

        $employee_by_id=Employee::where('employee_id',$employees_id)->delete();

        return redirect('user');
    }

    public function edit($employees_id){

        $all_employees=Employee::all();
        $edit=Employee::find($employees_id);
        return view('edit',compact('all_employees','edit'));
    }

    public function update($employees_id){
        $updatedata=Employee::find($employees_id);
        $editname     =request('username');
        $editemail    =request('email');
        $editpassword =request('password');
        $editphone    =request('phone');
        $updatedata->save();
        

        return redirect('/user');
    }
}
