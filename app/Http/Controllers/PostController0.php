<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController0 extends Controller
{
    
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

        #### query builder 
        $post=\DB::table('posts')->where('slug',$slug)->first();
        dd($post);

        #After calling the DB Class.
        // $post=table('posts')->where('slug',$slug)->first();
        // $post=Post::where('slug',$slug)->first();
        //  if(!$post){
        //     abort(404);
        // }
        
        $post=Post::where('slug',$slug)->firstorfail();

      
        return view ("/newviews/displaypost",[
            'post'=>$post ?? "No posts here"
        ]);
    }
}
