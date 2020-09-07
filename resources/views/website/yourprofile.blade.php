<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo  "Welcome ".$name; ?> </h1>
    <h2> {{$name}} </h2>
    {{strlen($name)}}
    <input type="text">
    <lable name="name"> {{explode("=",$name)[1]}}</label> 
    <h1> <?php echo "Your email is ". $name. "@gmail.com" ?> </h1>
    <h1> <?php echo "This cource is sponsered by ".$track. " Track" ?> </h1>

    


    





</body>
</html>