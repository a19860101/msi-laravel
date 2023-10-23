<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="">文章內文</label>
            <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        <input type="submit" value="更新文章">
    </form>
</body>
</html>
