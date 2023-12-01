<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

    <!-- Fonts -->
    <!-- <link href="https://fonts.cdnfonts.com/css/bankgothic-lt-bt?styles=14495" rel="stylesheet"> -->

    <!-- Style -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body>

    <!-- HEADER -->
    @include('template.header')


    <!-- COVER VIDEO -->
    <div class="cover text-white bg-dark">
        <div class="video-res">


            <!-- <video class="cover__video" muted>
                <source src="../video/videocover1.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video> -->
            <video class="cover__video" muted src="../video/videocover1.mp4" type="video/mp4">Your browser does not support HTML5 video.</video>
            <div id="container-video"></div>



        </div>
        <div class="fade-in cover__content web-hero">
            <h1 class="text-0 sma-text-2 text-yellow">CAN AN ASTEROID HIT THE EARTH ?</h1>
            <p class="text-3 sma-text-4">Asteroids are rocky or metallic celestial bodies that orbit around the Sun in
                the
                asteroid belt.<br>
                They are objects of scientific study and potentially valuable for future space resources.</p>
            <div class="text-center mt-2">
                <a href="#belt" class="button">MORE INFO</a>
            </div>
        </div>
    </div>



    <!-- BELT SECTION -->
    <div id="belt" class="cover text-white pb-3"
        style="background: url(../img/belt.jpg) no-repeat center center; background-size:cover">

        <h2 class="fade-up text-1 sma-text-2 text-center pt-2">ASTEROIDS BELT.</h2>

        <div class="fade-up cover__content-belt v-center v-between">

            <div class="col-100">
                <p class="text-4 sma-text-4">Asteroids are primarily found in the asteroid belt,
                    a region located between the orbits of Mars and Jupiter,
                    although some can be found in other parts of the solar system. </p>
            </div>

            <div class="col-100">
                <p class="text-4 sma-text-4">Some asteroids have orbits that come close to Earth and can pose a
                    potential
                    threat to our planet in case of a collision.
                    However, the majority of asteroids remain in stable orbits and do not pose a direct danger
                    to Earth.</p>
            </div>

        </div>
    </div>


    <div class="bg-white">

        <h2 class="fade-up text-1 sma-text-2 text-center pt-4">DINOSAUR EXTINCTION.</h2>

        <!-- MEDIA TEXT 01-->
        <div class="fade-up grid pt-2">
            <div class="col-40 v-center">
                <h3 class="text-2 sma-text-3">Asteroid impacts on Earth.</h3>
                <p class="text-4 sma-text-4">They have caused dinosaur extinction, created craters, triggered climate
                    changes,
                    influenced
                    evolution, and provided opportunities for scientific study.</p>
                <p class="text-4 sma-text-4">They are significant events in Earth's history with impacts on life,
                    environment,
                    and
                    science.</p>
            </div>
            <div class="col-60">
                <img src="./img/mediatext01.jpg" class="img-res bradius" alt="">
            </div>
        </div>

        <!-- MEDIA TEXT 02-->
        <div class="fade-up grid sma-reverse pb-4 pt-4">
            <div class="col-60">
                <img src="./img/mediatext02.jpg" class="img-res bradius" alt="">
            </div>
            <div class="col-40 v-center">
                <h3 class="text-2 sma-text-3">Most well-known event.</h3>
                <p class="text-4 sma-text-4">Asteroid impacts in Earth's history occurred approximately 66 million years
                    ago.
                </p>
                <p class="text-4 sma-text-4">The event caused the famous extinction of dinosaurs, along with many other
                    species
                    of
                    plants and animals.</p>
            </div>
        </div>

    </div>



    <!-- COVER SECTION 2 -->
    <div class="cover" style="background: url(/img/crater.jpg) no-repeat center center; background-size:cover">

        <h2 class="fade-up text-1 sma-text-2 text-center pt-3">CRATER FORMATION.</h2>

        <div class="dark-layer"></div>

        <div class="cover--image v-bottom">
            <div class="fade-up cover__content">
                <div class="grid mb-2">
                    <div class="col-20"></div>
                    <div class="col-60">
                        <h3 class="strong text-2 sma-text-3">The amount of energy.</h3>
                        <p class="text-4 sma-text-4">The impact released an enormous amount of energy, with an explosion
                            equivalent
                            to billions of
                            atomic bombs, causing fires, tsunamis, and a global nuclear winter due to debris lifted into
                            the
                            atmosphere.</p>
                        <p class="text-4 sma-text-4">Asteroid impacts on Earth can cause the formation of craters,
                            circular
                            depressions on the
                            Earth's surface. </p>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <!-- TILES -->

    <div class="bg-white">

        <h2 id="tiles" class="fade-up text-1 sma-text-2 text-center pt-4">CLIMATE CHANGES.</h2>

        <div class="grid grid--center pt-2 pb-4">

            <!-- CARD 1  -->
            <div class="fade-up col-40">
                <div class="tiles"
                    style="background: url(/img/card1.jpg) no-repeat center center; background-size:cover">

                    <div class="tiles__label">
                        <h3 class="text-2 sma-text-3 mb-1">The planet's climate.</h3>
                        <p class="text-4 sma-text-4">The impact of an asteroid can trigger large-scale fires, release
                            large amounts
                            of dust
                            into
                            the
                            atmosphere.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CARD 2  -->
            <div class="fade-up col-40">
                <div class="tiles"
                    style="background: url(/img/card2.jpg) no-repeat center center; background-size:cover">
                    <div class="tiles__label">
                        <h3 class="text-2 sma-text-3 mb-1">The planet's evolution.</h3>
                        <p class="text-4 sma-text-4">Impacts can cause habitat destruction, loss of species, and create
                            new
                            evolutionary
                            opportunities.</p>
                    </div>
                </div>
            </div>

        </div>

        <div>



            <!-- TEXT BOX -->
            <div class="" style="background: #000">

                <div class="fade-up grid pb-4 pt-4">
                    <div class="col-20"></div>
                    <div class="text-white col-60">
                        <h2 class="text-1 sma-text-2">Global cooling effect.</h2>
                        <p class="text-4 sma-text-4">The Chicxulub impact caused long-term global cooling due to debris
                            lifted
                            into
                            the
                            atmosphere, which blocked sunlight, with consequences for the flora and fauna of that
                            time.
                        </p>
                        <p class="text-3 sma-text-4">Probably It caused the extinction of dinosaurs, paving the way for
                            new
                            forms
                            of life
                            on
                            Earth.</p>
                    </div>
                </div>
            </div>


            <!-- COVER SECTION 3 -->
            <div class="cover cover--image"
                style="background: url(/img/cover3.jpg) no-repeat center center; background-size:cover">
                <div class="dark-layer"></div>
            </div>



            <!-- SUMMARY BOX -->
            <div style="background: #fff">

                <div class="fade-up grid pb-4 pt-4">
                    <div class="col-20"></div>
                    <div class="col-60">
                        <h2 class="text-1 sma-text-2">The studies.</h2>
                        <p class="text-4 sma-text-4">Asteroid impacts on Earth are events of great significance in the
                            history
                            of
                            our
                            planet with impacts on life, the environment and science. </p>
                        <p class="text-4 sma-text-4">The study of these impacts is important for understanding Earth's
                            history
                            and
                            for
                            mitigating potential risks from future asteroid impacts.</p>
                    </div>
                </div>
            </div>


            <!-- CTA -->
            <div class="text-white" style="background: #000">
                <div class="fade-up cover__content text-center pt-4 pb-4">
                    <h2 class="text-1 sma-text-2 text-center">WE ARE NOT ALONE</h2>
                    <h3 class="text-3 sma-text-3 text-yellow">See what NASA JPL is doing</h3>
                    <a href="/api-demo" class="button mt-1">MORE INFO</a>
                </div>
            </div>


            <!-- FOOTER -->
            @include('template.footer')

</body>

</html>