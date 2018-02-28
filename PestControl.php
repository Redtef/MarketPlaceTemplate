<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ServiceMarket</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <style>
            body, html {
                height: 100%;
                margin: 0;
            }

            .bg {
                /* The image used */
                background-image: url("images/icons/pestcontrol.png");

                /* Full height */
                height: 100%; 

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .bgm {
                /* The image used */
                background-image: url("images/icons/bgm.jpg");

                /* Full height */
                height: 100%; 

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>

    </head>


    <body style="background-color: #ebebeb;">
        <div class="bg">
            <?php
            include_once './navbar.html';
            ?>


            <header style=" padding-top: 8rem;padding-bottom: 8rem;">

                <div class="container">
                    <div class="row">

                        <div class="col-xl-12">

                            <!--style="-webkit-text-stroke:1px black; font-family: "Times New Roman", Times, serif;"-->
                            <h1 style="color: #071843;" class="mb-1">Obtenez les meilleurs services au Maroc</h1>
                            <h3>Lutte contre les ravageurs de Marrakech à partir de 179 MAD</h3 >
                            <hr>
                        </div>
                    </div>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 portfolio-item">
                        <div class="card h-100">
                            <a href="pestcontrol1.php"><img  class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="images/icons/cockroach1.jpg" > <h4 class="img-thumbnail" style="color: #01748d;">Cockroach Pest Control</h4></a>
                            <div class="card-body" style="background-color: #ffffff;">
                                <h4 class="card-title">
                                    <a href="#">Great for:</a>
                                </h4>
                                <p class="card-text">Safe cockroach pest control
                                    Home and garden
                                    Same day service</p>
                                <a href="pestcontrol1.php"><button type="button" class="btn btn-next">RESERVER</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="card h-100">
                            <a href="pestcontrol1.php"><img  class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="images/icons/Bed Bugs.jpg" > <h4 class="img-thumbnail" style="color: #01748d;">Bed Bugs Pest Control</h4></a>
                            <div class="card-body" style="background-color: #ffffff;">
                                <h4 class="card-title">
                                    <a href="#">Great for:</a>
                                </h4>
                                <p class="card-text">Getting rid of bed bugs
                                    Safe and efficient treatment
                                    Free follow up visit</p>
                                <a href="pestcontrol1.php"><button type="button" class="btn btn-next">RESERVER</button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="card h-100">
                            <a href="pestcontrol1.php"><img  class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="images/icons/Ants.jpg" > <h4 class="img-thumbnail" style="color: #01748d;">Ants Pest Control</h4></a>
                            <div class="card-body" style="background-color: #ffffff;">
                                <h4 class="card-title">
                                    <a href="#">Great for:</a>
                                </h4>
                                <p class="card-text">Safe ant pest control
                                    Home and garden
                                    Same day service</p>
                                <a href="pestcontrol1.php"><button type="button" class="btn btn-next">RESERVER </button></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="card h-100">
                            <a href="pestcontrol1.php"><img  class="img-thumbnail" alt="Cinque Terre" width="304" height="236" src="images/icons/general.jpg" > <h4 class="img-thumbnail" style="color: #01748d;">General Pest Control</h4></a>
                            <div class="card-body" style="background-color: #ffffff;">
                                <h4 class="card-title">
                                    <a href="#">Great for:</a>
                                </h4>
                                <p class="card-text">Preventative pest control
                                    Pre-move treatment
                                    Treating several pests at once</p>
                                <a href="pestcontrol1.php"><button type="button" class="btn btn-next">RESERVER</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="pestcontrol1.php"><button type="button" class="btn btn-next">RESERVER</button></a>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <footer class="py-5 bg-dark">

                <div class="container">
                    <div class="m-0 text-center text-white" >
                        <a class="navbar-brand" href="index.php">
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
        </div>











        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>


</html>