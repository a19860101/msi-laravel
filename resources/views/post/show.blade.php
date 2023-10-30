@extends('template.master')
@section('main')
<h2>{{$post->title}}</h2>
    <div>
        {{$post->body}}
    </div>
    <div>
        最後更新時間 {{$post->updated_at}}
    </div>
    <a href="{{route('post.index')}}">返回</a>

    @if($post->user_id == Auth::id())
    <a href="{{route('post.edit',$post->id)}}">編輯</a>
    {{-- <form action="/post/{{$post->id}}" method="post"> --}}
    <form action="{{route('post.destroy',$post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除" onclick="return confirm('此動作無法回覆，確認刪除？')">
    </form>
    @endif
@endsection
