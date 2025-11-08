<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>{{$service->id}}</h1>
        <p>{{$service->title}}</p><br><br>
        <p>{{$service->description}}</p><br><br>
        <p>{{$service->duration}}</p><br><br>
        <p>{{$service->price}}</p><br><br>
        <img src="{{$service->image}}" alt="">
    </div>
</body>
</html>