@extends('template.master')
@section('main')
<h1 class="text-4xl font-bold text-amber-400">文章列表</h1>
    <div>
        {{-- {{Auth::user()->name}} --}}
    </div>
    <div>
        @can('a')
        我是管理員
        @endcan
        @can('u')
        我是一般會員
        @endcan
    </div>
    @auth
    <a href="/post/create">建立文章</a>
    <a href="{{route('post.create')}}">建立文章</a>
    @endauth

    @guest
    訪客
    @endguest

    @foreach($posts as $post)
    <div>
        <h2>{{$post->title}}</h2>
        <small>{{$post->user->name}} / {{$post->created_at}}</small>
        <div>
            {{$post->category->title}}
        </div>
        <div>
            {{$post->body}}
            <a href="/post/{{$post->id}}">繼續閱讀</a>
            <a href="{{route('post.show',['post'=>$post->id])}}">繼續閱讀</a>
            <a href="{{route('post.show',$post->id)}}">繼續閱讀</a>
        </div>
    </div>
    @endforeach
@endsection
