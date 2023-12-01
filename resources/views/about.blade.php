<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="/css/app.css"> <!-- da folder public -->

</head>

<body>

    <!-- HEADER -->
    @include('template.header')


    <main class="container-blog">

        <section class="bg-white">

            <h2 class="text-center text-1 sma-text-3 mt-4">ABOUT ASTRO </span>
                <span style="font-style: italic; text-decoration: line-through !important;">TRACKER.</span>
            </h2>

            <div class="grid-about pb-2">

                <div class="col-50">
                    <p class="text-4 sma-text-4">
                        This site is dedicated to asteroids and meteors.
                        Understanding these celestial objects is crucial as they pose a potential threat to Earth.</p>

                    <p class="text-4 sma-text-4">By monitoring them closely, we can prevent catastrophic impacts and
                        deepen our knowledge of the
                        universe.
                        We continue to invest in research on asteroids and meteors to protect our planet and uncover the
                        secrets of
                        deep
                        space.
                    </p>
                    <p class="text-4 sma-text-4">
                        Asteroids are rocky objects that orbit the Sun, and meteors are asteroids that enter Earth's
                        atmosphere and burn up.</p>
                    <p class="text-4 sma-text-4">Large asteroid impacts can cause widespread devastation, similar to the
                        event that
                        led to the extinction of the dinosaurs.</p>
                    <p class="text-4 sma-text-4">Therefore, it is crucial to identify and monitor asteroids that
                        could be a danger in the future.
                    </p>



                </div>

                <div class="col-50">

                    <div class="cta-content">

                        <div class="video-res">
                            <video muted autoplay loop>
                                <source src="../video/about.mp4">
                            </video>
                        </div>


                        <div class="cta-about">
                            <h3 class="text-2 bg-dark">Explore what Nasa <br>is doing</h3>
                            <br><br>
                            <div class="text-center">
                                <a href="/api-demo" class="button">MORE INFO</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    @include('template.footer')

</body>

</html>