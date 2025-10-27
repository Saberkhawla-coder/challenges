<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->content}}</li>
            <li>{{$post->status}}</li>
            <li>{{$post->author}}</li>
            <form action="{{route('post.destroy',$post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                 <button type="submit">delete</button>
            </form>
        </ul>
    @endforeach
</body>
</html>