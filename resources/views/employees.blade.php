@extends('layout')

@section('content1')

    <h1>Add Employee </h1>
    <form method="POST", action="employees"> 
        <table>
            <tr>
                <td> Employee name <td>
                <td> <input type="text" name="emp_name" value="{{old('emp_name')}}"> </td>
                <td> {{$errors->first('emp_name')}} <td>
            </tr>
            <tr>
                <td> Email <td>
                <td> <input type="text" name="email" value="{{old('email')}}"> </td>
                  <td> {{$errors->first('email')}} <td>
            </tr>
            <tr>
                <td> Bio <td>
                <td> <input type="text" name="bio"> </td>
            </tr>
            <tr>
                <td> 
                    <button type="submit" class="btn btn-success" >Submit Emp </button>
                </td>
            </tr>
        <table>
        @csrf
    </form>

    <h1>Employees list </h1>
    
    <table class="table" >
        <tr> 
            <th> Name </th> 
            <th> Email </th>
            <th> Bio </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
            @foreach($employees as $employee)
                <tr>
                    <td> {{$employee->emp_name}} </td>
                    <td> {{$employee->email}} </td>
                    <td> {{$employee->bio}} </td>
                    <td>
                        <a href="editemp/{{$employee->id}}" 
                            class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="deleteemp/{{$employee->id}}" 
                            class="btn btn-danger">Delete</a>
                    </td>
        
                </tr>    
            @endforeach
    </table>


@endsection