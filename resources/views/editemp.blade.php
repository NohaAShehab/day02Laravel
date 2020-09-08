@extends('layout')

@section('content1')

  <h1>Edit Employee </h1>
    <form method="Post", action="/updateemp/{{$emp->id}}"> 
        @csrf
        
        <table>
            <tr>
                <td> Employee name <td>
                <td> <input type="text" name="emp_name" value="{{$emp->emp_name}}"> </td>
            </tr>
            <tr>
                <td> Email <td>
                <td> <input type="text" name="email" value="{{$emp->email}}"> </td>
            </tr>
            <tr>
                <td> Bio <td>
                <td> <input type="text" name="bio" value="{{$emp->bio}}"> </td>
            </tr>
            <tr>
                <td> 
                    <a href="{{ URL::previous()}}" class="btn btn-default">Back</a>
                    <button type="submit"  class="btn btn-success" > Update</button>
                    
                </td>
            </tr>
        <table>
       
    </form>
@endsection