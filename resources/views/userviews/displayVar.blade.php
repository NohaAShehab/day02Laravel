<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=M, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Called from url hold values </h>
    <h2> <?=$name ?>  </h2>
    <?php  echo e($name); ?>
    <h1> <?php echo  "Welcome ".$name; ?> </h1>
    <h1> <?php echo "Your email is ". $email ?> </h1>
    <h1> <?php echo "This cource is sponsered by ".$track. " Track" ?> </h1>
</body>

</html>