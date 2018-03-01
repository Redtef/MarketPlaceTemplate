<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Wizard Tutorial: Add A New Step</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="../../ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../ressources/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../ressources/assets/css/form-elements.css">
        <link rel="stylesheet" href="../../ressources/assets/css/style2.css">
        <link rel="stylesheet" href="../../ressources/css/checkRadio.css">
        <link href="../../ressources/css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="../../ressources/css/jquery.datetimepicker.css">
        <link href="../../ressources/css/modern-business.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- Favicon and touch icons -->

    </head>

    <body>

        <!-- Top menu -->
        <?php 
       include_once '../menu/navbar.html';
       ?>
        <br>
        <div class="container" style="width: 60%;padding-top: 2rem;padding-bottom: 1rem;">
            <div class="text-center">
                <div class="progress" style="height: 25px;">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated center-block" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%">

                    </div>
                </div>
            </div>
        </div>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <h1  align="center">STOCKAGE</h1>
                <p >S'il vous plait Remplir ce Formulaire :</p>
                <div class="row">
                    <div class="col-sm-8 form-box">
                        <form role="form" action="" method="post" class="f1">
                            <fieldset>

                                <div class="container">
                                    <h5>Type De Stockage :</h5>
                                    <div class="row">
                                        <div class="col-md-6 ">
                                            <label class="radiow3">Personel
                                                <input type="radio" name="radio">
                                                <span class="radiomark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 ">
                                            <label class="radiow3">Commercial
                                                <input type="radio" name="radio">
                                                <span class="radiomark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Date Debut : </h5>
                                                <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Date Fin : </h5>
                                                <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <h5>Taille de Stockage :</h5>
                                            <div align="center">
                                                <select  class="form-control">
                                                    <option selected>10 pieds</option>
                                                    <option>20 pieds</option>
                                                    <option>60 pieds</option>
                                                    <option>100 pieds</option>
                                                    <option>180 pieds</option>
                                                    <option>250 pieds</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container"><h5>est-tu besoin d'un de ces Services ?</h5>
                                    <div class="row">
                                        <div class="col-md-5 ">
                                            <label class="checkw3">Packing
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkw3">PickUp and Delivery
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkw3">Redelivery to final
                                                <input type="checkbox" >
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="checkw3">Climate Controled
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkw3">24 heures acces
                                                <input type="checkbox" >
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="checkw3">Froid Stockage 
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>special instructions ?</h5>
                                    <textarea name="f1-about-yourself" placeholder="Example: the keys are under the door mate ..." 
                                              class="form-control" id="f1-about-yourself" rows="8"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next w-50" >laisser le site choisir une Societe</button>
                                    <button type="button" class="btn btn-next" style="background-color: grey;">Selectioner une Societe</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4 class="info-text">Selectionnez les societes pour vous envoyer des devis</h4>
                                <hr>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-sm-6" ">
                                            <h5>Nom de la societe</h5>
                                            <img src="images/car.png" height="120px" width="280px">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="checkbox">
                                                <label class="checkw3">Selectioner had la societe
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                        <a href="#"> link les reviews-> </a>
                                    </div>
                                    <hr>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Votre DETAILS</button>
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
                            <h4 class="card-header bg-primary text-white" >Booking Summary</h4>
                            <table class="table" cellspacing="0" cellpadding="0">
                                <tbody><tr>
                                        <th scope="row" >Date:</th>
                                        <td>26/02/2018</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">For:</th>
                                        <td>Personel Stockage</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">De:</th>
                                        <td>Marrakech</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">From:</th>
                                        <td>Societe</td>
                                    </tr>
                                </tbody>

                            </table><h4 class="card-header bg-primary text-white" ></h4>
                        </div>
                    </div>


                </div>

            </div>



        </div>

        <!-- Javascript -->
        <script src="../../ressources/assets/js/jquery-1.11.1.min.js"></script>
        <script src="../../ressources/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../ressources/assets/js/jquery.backstretch.min.js"></script>
        <script src="../../ressources/assets/js/retina-1.1.0.min.js"></script>
        <script src="../../ressources/assets/js/scripts.js"></script>
        <script src="../../ressources/vendor/jquery/jquery.min.js"></script>
        <script src="../../ressources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../../ressources/js/jquery.datetimepicker.full.js"></script>
        <script>
            $("#datetimepicker").datetimepicker();
        </script>
        <script src="../../ressources/js/jquery.datetimepicker.full1.js"></script>
        <script>
            $("#datetimepicker1").datetimepicker();
        </script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
          <![endif]-->

    </body>

</html>