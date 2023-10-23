<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('category.create')}}">建立分類</a>
    <ul>
        @foreach($cats as $cat)
        <li>{{$cat->title}}</li>
        @endforeach
    </ul>
</body>
</html>
