<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use DB;
class StudentsController extends Controller
{
    //
    public function listStudents(){
        $students=Student::all();

        return view('/students/students',[
            "students"=>$students
        ]);

        #connecting to database
        #1- migration file to create table
        #2- Model class that represent item. 
        #3- when you add name to table (students)
        #4-when you add names to the model (student)

        // $students=["Hatem","Rami","Nehal","Basma","Hager"];
        # before using the Student
        // $students= \DB::table('students')->get();

        #model represent item, perform operation
       
    }

    public function addStudent(){
        $name=request('name');
        $student= new Student();
        $student->name=$name;
        $student->save();

        return back();
    }



    
}
