<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>

    <form action="assment" method="POST">
        <input type="text" name="body">
        <button type="submit">Add </button>
        @csrf
    </form > 
    @foreach ($assignments as $ass)
        <!-- {{$ass}} -->
        {{$ass->body}} <br>
    @endforeach
</body>
</html>