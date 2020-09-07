<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //
    public function display($post){
        $posts=[
            "post1"=> "Welcome to my first post",
            "post2"=> "Welcome to my second post",
            "post3"=> "Welcome to my third post"
        ];


        #in_array (Associative array)--> false 
        #check post is found? 
        # array_key()--> keys of an array
        #in_array($post, array_keys($posts))

        if(in_array($post, array_keys($posts))){
            return view('/day2website/blogpost',
            [
                "post"=>$posts[$post]
            ]);

        }else{
            return view('/day2website/blogpost',
            [
                "post"=>"Post not found"
            ]);

        }
        
    
        
    }
    public function showall(){
        $posts=[
            "post1"=> "Welcome to my first post",
            "post2"=> "Welcome to my second post",
            "post3"=> "Welcome to my third post"
        ];
    
        return view('/day2website/allposts',
        [
           "posts"=>$posts
        ]);
    }
}
