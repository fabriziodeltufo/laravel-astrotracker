<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


    <!-- Bootstrap Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app-bootstrap.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>

    <!-- HEADER -->
    @include('template.header')


    <!-- MAIN -->
    <main>
        <div class="container-blog">

            <h2 class="text-1 sma-text-3 text-center mt-3">NEWS FROM SPACE.</h2>

            @foreach($posts as $post)
            <article class="article pt-5 pb-1">
                <h4 class="text-5 sma-text-5">{{ $post->created_at }} - <a href="/posts">Blog</a></h4>
                <h3 class="text-2 sma-text-3">
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                    </h1>

                    <div>
                        <p class="text-4 sma-text-4">
                            {{ $post->excerpt }}<a href="/posts/{{ $post->id }}"> ... More</a>
                        </p>
                    </div>

                    </article">
                    @endforeach
        </div>
    </main>

    <!-- FOOTER -->
    @include('template.footer-api')

</body>

</html>