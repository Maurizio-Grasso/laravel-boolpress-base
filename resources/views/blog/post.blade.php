@extends('layout.template-sidebar-right')
@section('title' , 'SalvoBlog | Blog Informatica e Tecnologia')
@section('content')

<div class="post-heading">
    <img class="post-heading__image" src="{{$current_post->featured_img}}" alt="{{$current_post->title}}">
    <h1 class="post-heading__title">{{$current_post->title}}</h1>

</div>


{!!$current_post->content!!}

@endsection