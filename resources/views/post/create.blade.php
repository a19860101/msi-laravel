<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name="title">
            @error('title')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="">分類</label>
            <select name="category_id" id="">
                @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">文章內文</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增文章">
    </form>
    @if($errors->any())
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    @endif
</body>
</html>
