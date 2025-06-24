<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker - Edit Post</title>
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
        <div class="container-blog mb-4 mt-4 pb-4">

            <!-- EDIT POST -->
            <article class="article">

                <div class="form-page">

                    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="mx-auto mt-4"
                        style="max-width: 700px;">
                        @csrf
                        @method('PUT')

                        <!-- Titolo -->
                        <div class="mb-4">
                            <label for="title" class="form-label fw-bold">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Insert the title ..." value="{{ old('title', $post->title) }}">
                        </div>

                        <!-- Corpo del post -->
                        <div class="mb-4">
                            <label for="body" class="form-label fw-bold">Content</label>
                            <textarea class="form-control" id="body" name="body" rows="10"
                                placeholder="Write the article text here ...">{{ old('body', $post->body) }}</textarea>
                        </div>

                        <!-- Pulsante di aggiornamento -->
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary px-5 py-2 fs-5">
                                Update Post
                            </button>
                        </div>
                    </form>

                </div>

            </article>

            <a class="btn btn-info" href="/posts">Go Back</a>

        </div>
    </main>

    <!-- FOOTER -->
    @include('template.footer-api')

</body>

</html>