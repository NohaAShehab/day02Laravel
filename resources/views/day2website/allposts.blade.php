@extends('layout')
    @section('content3')
        <h1> This is my blog</h1>
        @foreach($posts as $post)
            {{$post}} <br>
        @endforeach
       
    @endsection
   
 
