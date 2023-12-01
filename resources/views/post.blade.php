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
    <link rel="stylesheet" href="/css/app-bootstrap.css"> <!-- da folder public -->


    <!--  Custom Style -->
    <link rel="stylesheet" href="/css/app.css"> <!-- da folder public -->


</head>



<body>

    <!-- HEADER -->
    @include('template.header')

    <!-- MAIN -->
    <main>
        <div class="container-blog mb-4 mt-4 pb-4">

            <article class="article">
                <h4 class="text-5 sma-text-4">{{ $post->created_at }} - <a href="/posts">Blog</a></h4>
                <h2 class="text-1 sma-text-3">{{ $post->title }}</h2>

                <p class="text-4 sma-text-4">
                    {{ $post->body }}
                </p>

            </article>

            <a href="/posts">Go Back</a>

        </div>
    </main>



    <!-- FOOTER -->
    @include('template.footer-api')


</body>

</html>