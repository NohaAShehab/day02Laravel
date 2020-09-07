<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
        {{$i=10}}
        @if ($i > 10)
            <p>{{ $i }} is large.</p>
        @elseif ($i == 10)
            <p>{{ $i }} is ten.</p>
        @else
            <p>{{ $i }} is small.</p>
        @endif
    </h1>


    <h2> 
        @unless ($i> 99)  
            <p>This number consists of 2 digits</p>
        @endunless
    </h2>


    <h3>
        {{$j=5}}
        @while ($j>0) 
            {{$j--}}
            <p>I'm looping till j =0 .</p>
        @endwhile
    </h3>



    
</body>
</html>