<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController0 extends Controller
{
    //
    // public function show($post){
    //     $ALL=[
    //         "post1"=> "Welcome to my first post",
    //         "post2"=> "Welcome to my second post",
    //         "post3"=> "Welcome to my third post"
    //     ];
            
    //     return view ("/newviews/displaypost",[
    //         'post'=>$ALL[$post] ?? "No posts here"
    //     ]);
    // }

    public function show($slug){
        $post=\DB::table('posts')->where('slug',$slug)->first();
        // dd($post);
        return view ("/newviews/displaypost",[
            'post'=>$post ?? "No posts here"
        ]);
    }
}
