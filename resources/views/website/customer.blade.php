<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1>This is the customer page <h1>
    <ul>
        
        @foreach ($customers as $c)
            <!-- {{$loop->index}} -->
            {{$loop->iteration}}
            <!-- {{$loop->count}} -->
            {{$c}} <br>
        @endforeach
        @foreach ($customers as $key=>$value)
            {{$key}}  {{$value}} <br>
            {{$loop->last}} <br>
        @endforeach
    <ul>




</body>
</html>