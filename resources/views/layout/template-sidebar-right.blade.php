<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font font-awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Google Font LATO --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400;1,900&display=swap" rel="stylesheet"> 

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title')</title>
</head>
<body>

    <div class="outer-wrapper">

        @include('layout.partials.header')

        <main class="main">

            <article class="inner-content">
            
                @yield('content')
            
            </article>

            @include('layout.partials.sidebar')

        </main>


        @include('layout.partials.footer')


    </div><!-- Outer Wrapper END -->


</body>
</html>