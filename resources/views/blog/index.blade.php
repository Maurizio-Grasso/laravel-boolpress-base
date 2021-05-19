@extends('layout.template-sidebar-right')
@section('title' , 'Elenco Articoli | SalvoBlog')
@section('content')


<h1>Ultimi Articoli Pubblicati:</h1>
    
<div class="post-grid">

    
        @foreach ($posts as $post)
        <div class="single-post">
            <img class="single-post__image" src="{{$post->featured_img}}" alt="{{$post->title}}">
            <h3 class="single-post__title"><a href="{{route('blog.show' , $post-> id)}}">{{$post->title}}</a></h3>
            
            <form class="single-post__delete-form" action="{{route('blog.destroy' , $post -> id)}}" method="POST">                        
                @csrf
                @method('DELETE')
                <button class="single-post__button single-post__button--delete" type="submit"><i class="far fa-trash-alt"></i></button>
            </form>
            <a class="single-post__button single-post__button--edit" href="{{ route('blog.edit' , ['blog' => $post -> id ] )}}"><i class="fas fa-edit"></i></a>

        </div>
        
        @endforeach
    
</div>

@endsection