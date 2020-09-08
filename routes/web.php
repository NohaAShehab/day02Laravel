<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#http://127.0.0.1:8000  #path 
Route::get('/', function () {
    return view('welcome');  # will return with a view
});

#welcome
#1- creat new route
Route::get('/welcome',function(){
    #2- specify your return
    return view('welcome');
});

Route::get("/hello", function(){
    #search about the view inside /resources/views
    return view('hello');
});
Route::get("/user", function(){
    #search about the view inside /resources/views
    return view('/userviews/user');
});

#sending a mandetory parameter
Route::get("/displaywelcom/{name}", function($name){
    return "Welcome      ".$name;
});

#not required 
Route::get("/displaywelcom/{name?}", function($name="INFORMATION TECHNOLOGY INSTITUTE"){
    return "Welcome      ".$name;
});
#request --> check parameters sent while calling request

Route::get("/displayVar",function(){
    # check if parameters are sent in the url or not! 
    $name=request("name");
    // return "Hello   ".$name;
    return view("/userviews/displayVar",[
        'name'=>$name,
        'email' => $name."@gmail.com",
        'track'=>"opensource"
    ]);

});


Route::get("/home",function(){
    return view ("/website/home");
});
Route::get("/customers",function(){
    return ["customer1 "=> "noha",
            "customer2 "=> "noha",
            "customer3 "=> "Test",];
});
Route::get("/contactus",function(){
    return view ("/website/contactus");
});
Route::get("/aboutus",function(){
    return view ("/website/aboutus");
});
Route::get("/yourprofile/{name}",function($name){
    return view ("/website/yourprofile",
    ["name"=>$name, 
    "track"=>"Open source" ]);
});



Route::get("/var",function(){
    return view ("/website/var");
});

#send parameter with the view.
Route::get("/customer",function(){
    #1- declare for the array
    #note any item sent with the view should be in form of assoicative array
    $customers=[
    "customer1 "=> "noha",
    "customer2 "=> "nehal",
    "customer3 "=> "basma",
    "customer4 "=> "ahmed",
    "customer5 "=> "mohamed",
    "customer8 "=> "rami"];

    return view ("/website/customer",
    ['customers'=>$customers]);
});

Route::get("/newhome",function(){

    $customers=[
    "customer1 "=> "noha",
    "customer2 "=> "noha",
    "customer3 "=> "Tests"];

    return view ("/newviews/home",
    ['customers'=>$customers]);
});

Route::get("/displaypost/{post}","PostController0@show");

Route::get("/websitehome",function(){
    return view('/day2website/home');
});

Route::get("/blogposts/{post}","BlogPostController@display");
Route::get("/blogposts","BlogPostController@showall");


#day 03

Route::get("/assment","AssigmentController@list");
Route::post("/assment","AssigmentController@store");

Route::get("/students","StudentsController@listStudents");
Route::post("/students","StudentsController@addStudent");

Route::get("/employees", "EmployeeController@listEmployees");
Route::post("/employees", "EmployeeController@submitEmployee");


Route::get("/editemp/{emp}", "EmployeeController@edit");
Route::post("/updateemp/{emp}", "EmployeeController@update");
Route::get("/deleteemp/{emp}", "EmployeeController@delete");




// Route::post("/students","StudentsController@add");







