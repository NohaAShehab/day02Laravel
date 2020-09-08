@extends('layout')


@section('content1')

    <h1>Add Student </h1>
    <form action="students" method="POST"> 
        <label>Name </label>
        <input type="text" name="name">
        <button type="submit"> Add </button>
        @csrf
    </form>
    
    <h1>Students list </h1>
    
    <table class="table" >
        <tr> 
            <th> Name </th> 
            <th> Bio </th>
        </tr>
            @foreach($students as $student)
                <tr>
                    <td>  {{$student->name}} </td>
                    <td> {{$student->bio}} </td>
                </tr>    
            @endforeach
    </table>

    
@endsection