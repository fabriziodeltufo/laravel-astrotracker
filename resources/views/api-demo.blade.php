<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hHOttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>AstroTracker</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


    <!-- BOOTSTRAP SYLE x API GRID -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="/css/app-bootstrap.css">

    <!-- Style -->
    <link rel="stylesheet" href="/css/app.css">

</head>



<body">


    <!-- HEADER -->
    @include('template.header')


    <main class="container-api">

        <!-- NASA JPL API   -->

        <?php

            // collecting json file from api nasa jpl
            $api_url = 'https://ssd-api.jpl.nasa.gov/scout.api'; 


            // Read JSON file
            $json_file = file_get_contents($api_url);


            // Decode Json into PHP array
            $response_data = json_decode($json_file);
            

            // records list: select data only, no headings
            $records_data = $response_data->data;

            // limit records number for debugging, then comment
            // $records_data = array_slice($records_data, 0, 1);
            
        ?>

        <section class="nasa-jpl">

            <div class="grid">
                <!-- <div class="br col-20 sma-col-"></div> -->
                <div class="col-80">

                    <h4 class="text-5 sma-text-4 pb-2">Real Time Datas Colletion by NASA JPL Api.</h4>
                    <h2 class="text-1 sma-text-3 pb-2">NEO - NEAR EARTH OBJECTS</h2>

                    <p class="text-4 sma-text-4">NASA JPL, by Neo's Scout Program, tracks asteroids to assess the risk
                        of impact on Earth,
                        conduct in-depth scientific
                        studies, and identify potential targets for future space exploration missions. This monitoring
                        is crucial for protecting our planet and expanding our knowledge of the universe.
                    <p>
                    <p class="text-4 sma-text-4">In the table, the latest recent objects tracked by the Nasa Jpl.</p>

                </div>
                <!-- <div class="br col-20 sma-col-"></div> -->
            </div>


            <div class="nasa-jpl-table text-center">

                <div id="heading">

                    <div class="row">
                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">OBJ</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">OBJECT NAME</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">NEO SCORE</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">VMAG ( 0 = Brighter)</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">ELONG</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">TEPHEM</p>
                        </div>



                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">ARC</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">DEC</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">VINF</p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5">RATE</p>
                        </div>

                    </div>
                </div>

                <!-- records container -->
                <div id="records">

                    <?php $rec_count = 1; ?>
                    <?php foreach($records_data as $record){ ?>

                    <div class="row">

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $rec_count;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->objectName;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->neoScore;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->Vmag;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->elong;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->tEphem;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->arc;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->dec;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->vInf;?></p>
                        </div>

                        <div class="col pt-3 sma-pt-2">
                            <p class="text-4 sma-text-5"><?php echo $record->rate;?></p>
                        </div>

                    </div>

                    <?php $rec_count++ ;} ?>
                </div> <!-- records container -->

            </div>

        </section>

        <!-- for debug use  -->

        <!-- <br><br><br>
        <h1>DEBUG</h1>
        <pre><?php print_r($records_data); ?></pre> -->
        <!-- <pre><?php var_dump($records_data); ?></pre> -->


        <section class="bg-lightgrey pt-4 pb-4">
            <div class="grid pt-4 pb-4">
                <!-- <div class="col-20 sma-col-"></div> -->
                <div class="col-80">

                    <h2 class="text-1 sma-text-3 pb-2">WHO WORKS TO NASA JPL.</h2>

                    <p class="text-4 sma-text-4">JPL comprises a highly skilled team of scientists, engineers, and
                        technicians who collaborate to
                        design, develop, and manage space missions. <br>They employ advanced technologies, including
                        robotic explorers, spacecraft, telescopes, and satellites, to gather scientific data and enhance
                        our
                        understanding of the universe.</p>

                    <p class="text-4 sma-text-4">JPL is also at the forefront of developing innovative technologies for
                        space exploration, such as
                        autonomous spacecraft and advanced rovers.
                        <br>Overall, JPL is a leading center dedicated to expanding our knowledge of the universe
                        through robotic space exploration.
                    </p>
                </div>
            </div>
        </section>



        <!-- GOOGLE MAPS API -->
        <section class="gmaps">

            <div class="grid">
                <!-- <div class="col-20 sma-col-"></div> -->
                <div class="col-80">
                    <h4 class="text-5 sma-text-4 pb-2">by Google Maps Api.</h4>
                    <h2 class="text-1 sma-text-3 pb-2">NASA JPL</h2>
                    <p class="text-4 sma-text-4">The NASA JPL (Jet Propulsion Laboratory) is a research and
                        development center managed by NASA,
                        located in
                        Pasadena, California. It is one of NASA's primary centers of excellence for robotic space
                        exploration,
                        and its main mission is to study and implement robotic space missions to explore the solar
                        system
                        and
                        beyond.</p>
                </div>

            </div>
            <div id="map"></div>

        </section>




    </main>





    <!-- FOOTER -->
    @include('template.footer-api')

    <!-- GOOGLE MAPS API SCRIPT -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDN3FmwfR_5G0OzYvymDVYmDveV-vvY85g&callback=initMap"
        async defer></script>


    </body>

</html>