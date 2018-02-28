<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BricolageApp - Template</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/modern-business.css" rel="stylesheet">

    </head>

    <body style="background-color: #cecece;">

        <!-- Navigation -->
       <?php 
       include_once './navbar.html';
       ?>


        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-12">
                        <!--style="-webkit-text-stroke:1px black; font-family: "Times New Roman", Times, serif;"-->
                        <h1 class="mb-1">Sit back, we'll take it from here.</h1>
                        <h3 class="mb-5">Book from trusted companies in your city.</h3>
                    </div>
                    <div class="col-md-10  mx-auto">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <select id="inputState" class="selectpicker form-control">
                                    <option selected>Choisissez votre ville ...</option>
                                    <option>Marrakech</option>
                                    <option>Tanger</option>
                                    <option>Casablanca</option>


                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <select id="inputState" class="selectpicker form-control">
                                    <option selected>Choisissez votre Secteur ...</option>
                                    <option>Targa</option>
                                    <option>Daoudiate</option>
                                    <option>Gueliz</option>


                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <select id="inputState" class="form-control">

                                    <option selected selected>Choisissez un service ...</option>
                                    <option>Service Nettoyage</option>
                                    <option>Demenagement et stockage</option>
                                    <option>Travaux de maison</option>
                                </select>
                            </div>


                            <div class="form-group col-md-2">
                                <a href="booking.html" class="btn btn-info" role="button">GET STRATED</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="container">


            <!-- /.row -->

            <!-- Portfolio Section -->
            <h2></h2>

            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="images/car.png" height="" width="" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Car Insurance</a>
                            </h4>
                            <p class="card-text">
                                Live Insurance quotes<br>	
                                Live customer support<br>
                                Buy online
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="images/moving.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Internationl Moving</a>
                            </h4>
                            <p class="card-text">
                                Reputable movers<br>
                                Compare 3 free quotes<br>
                                support 7 days a week    
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="images/Cleaning.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">House Cleaning</a>
                            </h4>
                            <p class="card-text">
                                Easy online Bokking<br>	
                                Professional Cleaners<br>
                                From AED 35 per Hour
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="handyman.html"><img class="card-img-top" src="images/handyman.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="handyman.html">Service HandyMan</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="images/baby.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Service Babysitters</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="images/garden.png" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">Service Garden Maintenace</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div id="joinus">
            <div class="container-fluid">
                <a href="#">
                    <div>
                        <h3 style="color: white;">Rejoignez nous en tant que societe partenaire</h3>
                    </div>

                    <div class="col-lg-12 col-centered">

                        <h1 style="color: white;">Join us!</h1>
                        <br>
                        <br>

                    </div>
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Review de clients verifiés</h2>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <select id="inputState" class="selectpicker form-control">
                                <option selected>Choisissez une ville ...</option>
                                <option>Marrakech</option>
                                <option>Tanger</option>
                                <option>Casablanca</option>

                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <select id="inputState" class="form-control">

                                <option selected>Choisissez un service ...</option>
                                <option>Home Cleaning</option>
                                <option>Office Cleaning</option>
                                <option>Deep Cleaning</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <a href="#" class="btn btn-info" role="button">GET STRATED</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="images/logo1.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.row -->



        <!-- Call to Action Section -->


   
    <!-- /.container -->


    <!-- Footer -->
    <footer class="py-5 bg-dark">

        <div class="container">
            <div class="m-0 text-center text-white" >
                <a class="navbar-brand" href="index.html">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <img style="float: center;position: center;" src="images/logo.png" class="front" height="50px" width="50px">
                            </div>
                            <div class="back">
                                <!-- back content -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
