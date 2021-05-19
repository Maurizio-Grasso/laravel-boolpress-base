@extends('layout.template-sidebar-right')
@section('title' , 'Aggiungi Articolo | SalvoBlog')
@section('content')


            <h1>Inserisci nuovo articolo</h1>

            <form class="custom-form" action=" {{ route('blog.store') }} " method="POST">

                @csrf
                @method('POST')

                <div class="custom-form__form-group">
                    <label class="custom-form__label" for="new-post-title">titolo</label>
                    <input class="custom-form__input" type="text" name="title" id="new-post-title" required>
            </div>

                <div class="custom-form__form-group">
                    <label class="custom-form__label" for="new-post-author">Autore</label>
                    <input class="custom-form__input" type="text" name="author" id="new-post-author" required>
            </div>

                <div class="custom-form__form-group">
                    <label class="custom-form__label" for="new-post-featured-img">featured image</label>
                    <input class="custom-form__input" type="text" name="featured_img" id="new-post-featured-img" required>
            </div>

                <div class="custom-form__form-group">
                    <label class="custom-form__label" for="new-post-excerpt">estratto</label>
                    <input class="custom-form__input" type="text" name="excerpt" id="new-post-excerpt" required>
            </div>

                <div class="custom-form__form-group custom-form__form-group--large">
                    <label class="custom-form__label" for="new-post-content">contenuto</label>
                    <textarea name="content" id="new-post-content" cols="30" rows="10" required>
                        
                    </textarea>
                </div>

                <div class="custom-form__form-group custom-form__form-group--large">
                    <label class="custom-form__label" for="new-post-comments">Commenti</label>
                    <textarea name="comments" id="new-post-comments" cols="30" rows="10" required>
                        
                    </textarea>
                </div>

                <div class="custom-form__form-group">
                    <input class="custom-form__submit" type="submit" value="Pubblica">
                </div>

            </form>

    
@endsection