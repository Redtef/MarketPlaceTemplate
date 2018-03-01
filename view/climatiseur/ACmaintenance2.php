<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Wizard Tutorial: Add A New Step</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">
        <link href="css/modern-business.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- Favicon and touch icons -->

    </head>

    <body style="background-color: #ebebeb;">

        <!-- Top menu -->

        <?php
        include_once './navbar.html';
        ?>
        
        <header style=" padding-top: 5rem;padding-bottom: 2rem;">

            <div class="container">
                <div class="row">

                    <div class="col-xl-12 text-center">
                        <!--style="-webkit-text-stroke:1px black; font-family: "Times New Roman", Times, serif;"-->
                        <h1 class="mb-1">Reservez la meilleur maintenance  climatiseur</h1>
                        <h4></h4>
                        <hr>
                    </div>
                </div>
            </div>
        </header>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 form-box">
                        <form role="form" action="" method="post" class="f1">
                            <fieldset>
                                <p >Remplissez ce formulaire pour finaliser la demande</p>


                                <div class="form-group">
                                    <h5><i class="fas fa-calendar-alt"></i> Date et temps </h5>
                                    <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">
                                </div>

                                <div class="form-group">
                                    <h5>Details ou instruction special ?</h5>
                                    <textarea name="f1-about-yourself" placeholder="Example: the keys are under the door mate ..." 
                                              class="form-control" id="f1-about-yourself" rows="8"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">YOUR DETAILS</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h3>Your contact details and location:</h3>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5>Your email: </h5>
                                            <input type="text" name="f1-email" placeholder="ex:abcd@email.com" class="f1-email form-control" id="f1-email">
                                        </div><div class="form-group">
                                            <h5>Your name: </h5>
                                            <input type="text" name="f1-name" placeholder="ex:yassine" class="f1-name form-control" id="f1-name">
                                        </div>
                                        <button type="button" class="btn btn-previous">Previous</button>
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h5>Your number: </h5>
                                            <input type="text" name="f1-number" placeholder="ex:0601020304" class="f1-number form-control" id="f1-number">
                                        </div>
                                        <div class="form-group">
                                            <h5>Your last name: </h5>
                                            <input type="text" name="f1-lastname" placeholder="ex:simou" class="f1-lastname form-control" id="f1-lastname">
                                        </div>
                                        <button type="button" class="btn btn-next">Confirm</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h3> Votre Demande est passer avec Succes</h3>
                                <hr>
                                <h5> Thank you for submitting your moving request on ServiceMarket. Your reference number is # 20180221000053DRDXB.</h5>
                                <h6>
                                    We will share your request with our partners and you will be notified when they provide a quote or request a survey. We might contact you as well if we need to understand your request better.

                                    In the meantime, feel free to call or email us if you need to modify your request.
                                </h6>
                                <hr><hr><h5>
                                    If you need any assistance, you can reach us on +212 524 454 565 between 8.00AM and 8.00PM on weekdays and between 9.00AM and 6.00PM on Fridays. Alternatively you can email us on htakouit@gmail.com. We're here to help!</h5>
                                <hr>

                            </fieldset>


                        </form>
                    </div>


                    <div class="col-sm-4 form-box h-50">
                        <div class="h-100">
                            <h4 class="card-header bg-primary text-white">Resumé de votre demande</h4>

                            <div class="card" >
                                <div class="card-block">
                                    <h5 class="card-title">Service</h5>
                                    <p class="card-text">Maintenance et reparation climatiseur</p>
                                </div>
                            </div>

                            <div class="card text-center" >
                                <div class="card-block">
                                    <h5 class="card-title">Pack</h5>
                                    <p class="card-text">hna ghaykon lpack li tkhtar</p>
                                </div>
                            </div>

                            <div class="card text-left" style="padding-left: 10px;" >
                                <div class="card-block">
                                    <h5 class="card-title">Inclus:</h5>
                                    <p class="card-text">+Filter Cleaning <br>+ Vent cleaning <br>+water tray cleaning<br>+Drain pipe flushing<br>+Gas refill</p>
                                </div>
                            </div>

                            <div class="pricing">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            Sous total:
                                        </div>
                                        <div class="col-sm-6">
                                            1542DH
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pricing">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            TOTAL
                                        </div>
                                        <div class="col-sm-6">
                                            1600DH
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>



        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="js/jquery.datetimepicker.full.js"></script>
        <script>
            $("#datetimepicker").datetimepicker();
        </script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
          <![endif]-->

    </body>

</html>