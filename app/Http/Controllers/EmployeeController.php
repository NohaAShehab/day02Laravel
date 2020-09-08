<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    //
    public function listEmployees(){
        $employees=Employee::all();

        return view("employees",[
            "employees"=>$employees
        ]);
    }

    public function submitEmployee(){

        $data= request()->validate([
            "emp_name"=>"required|min:3",
            "email"=>"required|email"
        ]);

        $name=request('emp_name');
        $email=request('email');
        $bio=request('bio');

        #create object from model

        $emp=new Employee();
        $emp->emp_name=$name;
        $emp->email=$email;
        $emp->bio=$bio;
        $emp->save();

        return back();
    }

    public function edit($id)
    {
        $emp = Employee::findOrFail($id);
        return view('editemp', compact('emp'));
    }

    public function update(Request $request,$id)
    {
        // return "welcome";

        // dd($id);
        $data= request()->validate([
            "emp_name"=>"required|min:3",
            "email"=>"required|email"
        ]);
        $name=request('emp_name');
        $email=request('email');
        $bio=request('bio');
        $emp = Employee::findOrFail($id);
        $emp->emp_name=$name;
        $emp->email=$email;
        $emp->bio=$bio;
        $emp->save();
        return redirect('employees');
    }
    public function delete($id)
    {
        // return "welcome";

        // dd($id);
        $deleted=Employee::where('id',$id)->delete();
        return redirect('employees');
    }
}
