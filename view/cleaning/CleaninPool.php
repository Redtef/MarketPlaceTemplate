 <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pool Cleaning- Template</title>

        <!-- Bootstrap core CSS -->
        <link href="../../ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="../../ressources/css/datepicker.css">
        <link href="../../ressources/css/modern-business.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    </head>

    <body style="background-color: #ebebeb; ">

        <!-- Navigation -->
        <?php 
       include_once '../menu/navbar.html';
       ?>
       
        <header style=" padding-top: 5rem;padding-bottom: 2rem;">

            <div class="container">
                <div class="row">

                    <div class="col-xl-12 text-center">
                        <!--style="-webkit-text-stroke:1px black; font-family: "Times New Roman", Times, serif;"-->
                        <h1 class="mb-1">Donnez vie a votre piscine</h1>
                        <h4></h4>
                        <hr>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-3 ">
                    <div class="card card-inverse">
                        <a href="#"><img class="card-img-top" src="images/tools.jpg" height="" width="" alt=""></a>
                        <div class="card-body" style="background-color: #cfcfcf;">
                            <h4 class="card-title">
                                <a href="#">Travaux divers</a>
                            </h4>

                        </div>
                    </div>
                </div> -->

                <div class="col-md-4 h-100" style="padding-left: 20px;">
                    <div class="card card-inverse">
                        <img class="card-img" src="../../ressources/images/pool.jpg" alt="Card image">
                        <div class="card-img-overlay">
                            <!-- <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h4>Quelle est la taille de votre piscine?</h4>
                    <div class="card-block">
                        <div class="container">
                            <div class="row" style="background-color: #edebeb; padding-top: 10px;">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-3 pull-left">
                                    <a href="#" ><h6>Contenu du pack?</h6></a>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center" style="margin-bottom: 25px; margin-top: 15px; padding: 15px 10px 10px">
                                        <div class="card-block">
                                            <h6 class="card-title">moins de 500 metre-cube</h6>
                                            <p class="card-text">  400dh</p>
                                            <a href="cleaningpool2.php" class="btn btn-primary btn-block"> <strong>Select</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center" style="margin-bottom: 25px; margin-top: 15px; padding: 15px 10px 10px">
                                        <div class="card-block">
                                            <h6 class="card-title">de 500 a 10000 metre-cube</h6>
                                            <p class="card-text">  800dh</p>
                                            <a href="cleaningpool2.php" class="btn btn-primary btn-block"> <strong>Select</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center" style="margin-bottom: 25px; margin-top: 15px; padding: 15px 10px 10px">
                                        <div class="card-block">
                                            <h6 class="card-title">plus de 10000 metre-cube</h6>
                                            <p class="card-text">  1200dh</p>
                                            <a href="cleaningpool2.php" class="btn btn-primary btn-block"> <strong>Select</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3">
                                    <div class="card text-center" style="margin-bottom: 25px; margin-top: 15px; padding: 15px 10px 10px ">
                                        <div class="card-block">
                                            <h6 class="card-title">  4 unit</h6>
                                            <p class="card-text">  300dh</p>
                                            <a href="acmaintenance2.html" class="btn btn-primary btn-block"> <strong>Select</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <hr>
                    <div class="card-block">
                        <div class="container">
                          <h4>Sélectionnez les 2 jours de la semaine pour le nettoyage</h4>
                            <div class="row" style="background-color: #edebeb; padding-top: 10px;">
                                <div class="col-md-8">
                            <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Lundi
                                     </button>
                                     <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Mardi
                                     </button>
                                     <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Mercredi
                                     </button><br><br>
                                     <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Jeudi
                                     </button>
                                     <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Vendredi
                                     </button>
                                     <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="height: 70px;width: 170px;border-radius: 0%;">
                                  Samedi
                                     </button>
                                     <br><br>
                            </div>
                        </div>
                        
                    </div>
                </div>

                    <div class="card-block" style="margin-top: 10%; margin-bottom: 10%">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i> Instant confirmation
                                </div>
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i>7 days phone support
                                </div>
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i>30 Day Warranty on Labor
                                </div>
                                <br>
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i>Service Quality Guaranteed
                                </div>
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i>Book now, Pay Later
                                </div>
                                <div class="col-md-4 text-primary">
                                    <i class="fas fa-check-circle"></i>Fixed Price
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="card-block" style="padding: 20px 20px 20px 20px">
                    <div class="card-block">
                        <h4 class="card-title"> FAQ</h4>
                        <p class="card-text">hna les questions FAQ</p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="py-5 bg-dark col-md-12"  >

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
        <script src="../../ressources/vendor/jquery/jquery.min.js"></script>
        <script src="../../ressources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
