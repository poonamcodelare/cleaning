<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error Page</title>
</head>
<body>
    <h1> {{$exception->getMessage()}} </h1>
        <h1>{{$exception->getCode()}}</h1>  
</body>
</html>