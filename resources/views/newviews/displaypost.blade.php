@extends('lay')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section('content')
    <h1> My Blog Post </h1>
     
    {{$post->body}}
     

@endsection
    
</body>
</html>