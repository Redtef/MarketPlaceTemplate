<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Painting</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link rel="apple-touch-icon" sizes="76x76" href="../../ressources/assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../../ressources/assets/img/favicon.png" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="../../ressources/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../ressources/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
        <!-- css dyali -->
        <link rel="stylesheet" type="text/css" href="../../ressources/assets/css/form.css">
        <link rel="stylesheet" href="../../ressources/css/jquery.datetimepicker.css">

    </head>

    <body style="background-image: url('../../ressources/assets/img/painting.jpg') ; background-repeat:no-repeat;
          background-size:cover;
          background-position: center center;" >

        <!-- Navigation -->

        <?php
        include_once '../menu/navbarBootstrap3.html';
        ?>


        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="purple" id="wizard">
                            <form action="" method="">
                                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Vous cherchez un service particulier ? 
                                    </h3>
                                    <h5>Remplissez ce formulaire pour plus d'information</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#details" data-toggle="tab">Service</a></li>
                                        <li><a href="#more" data-toggle="tab">more</a></li>
                                        <li><a href="#companies" data-toggle="tab">Societes</a></li>
                                        <li><a href="#infos" data-toggle="tab">Information personel</a></li>
                                        <li><a href="#thanks" data-toggle="tab">Thank you</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Quel service cherchez vous?</h4>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5">
                                                <div class="row">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Service</label>
                                                        <select class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="fauteuil"> peinture à la maison </option>
                                                            <option value="tapis">Peinture extérieure</option>
                                                            <option value="piscine">Déplacer dans la peinture de déménagement</option>
                                                            <option value="">
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="form-group label-floating">
                                                        <label class="control-label">Size of home</label>
                                                        <select class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="fauteuil"> 1BR </option>
                                                            <option value="tapis">2BR</option>
                                                            <option value="tapis">3BR</option>
                                                            <option value="tapis">4BR</option>
                                                            <option value="tapis">5BR</option>
                                                            <option value="">
                                                            </option>
                                                        </select>
                                                    </div></div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date du service</label>
                                                    <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">

                                                </div>
                                            </div>
                                            <div class="col-sm-1"></div>


                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Maison.">
                                                        <input type="radio" name="type" value="Maison">

                                                        <div class="icon">
                                                            <i class="material-icons">home</i>
                                                        </div>

                                                        <h6>Maison</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Appartement">
                                                        <input type="radio" name="type" value="Appartment">
                                                        <div class="icon">
                                                            <i class="material-icons">hotel</i>
                                                        </div>
                                                        <h6>Appartement</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="tab-pane" id="more">
                                        <h4 class="info-text">Do you have anything else you'd like to add?</h4>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <textarea class="form-control" placeholder="" rows="9"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating">
                                                        <p class="description">please tell us more about the type of photography service you are looking for, 
                                                            the number of people you'd like to photographed, or the size of the event.</p>
                                                    </div>
                                                </div>
                                            </div> <br>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="companies">
                                        <h4 class="info-text">Selectionnez les societes pour vous envoyer des devis</h4>

                                        <hr>
                                        <div class="container">
                                            <div class="row pull-left">
                                                <div class="col-sm-6" ">
                                                    <h6>Nom de la societe</h6>
                                                    <img src="images/car.png" height="100px" width="200px">
                                                </div>
                                                <div class="col-sm-6 ">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="optionsCheckboxes">
                                                            Selectioner had la societe
                                                        </label>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>


                                                    <a href="#"> link les reviews-> </a>
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                    </div>

                                    <!-- <div class="tab-pane" id="description">
                                            <div class="row">
                                                    <h4 class="info-text"> Veuillez preciser les details du travail</h4>
                                                    
                                                    <div class="col-sm-4">
                                                            <div class="form-group">
                                                                    <label class="control-label">Example</label>
                                                                    <p class="description">"bghit khdma kda w kda w kda tkon bhad chkl w bhal lwan etc "</p>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div> -->

                                    <div class="tab-pane" id="infos">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name <small>(required)</small></label>
                                                        <input name="firstname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email <small>(required)</small></label>
                                                    <input name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Numero de telephone</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Adresse</label>
                                                <textarea class="form-control" placeholder="" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thanks">
                                        <h4 class="info-text">Thank you for submitting a painting request on ServiceMarket.</h4>
                                        <h5 class="info-text"> <b> Your reference number is :</b> </h5>
                                        <div class="form-group label-floating">
                                            <input name="lastname" type="text" class="form-control"><br>
                                        </div>
                                        <h5 class="info-text"> 
                                            <b> What happens now?</b>
                                        </h5>
                                        <ol>
                                            <li>We may contact you in case we require more information about your request.</li>
                                            <li>We will send your request to our painting partners.</li>
                                            <li>You will be notified by email and SMS when the painters send you their quote.</li>
                                            <li>You will be able to compare each company along with their quotes and customer ratings.<br>
                                                You can then choose the painter that suits your needs.</li><br> 
                                        </ol> 
                                        <h5 class="info-text"> <b> Note :</b> </h5>
                                        <p text-align = 'center'>If you would like to make any changes to your request,
                                            or don't require our services anymore, please contact us on : 
                                        </p>
                                        <h6 text-align='center'> Contact@servicemarket.com </h6>
                                    </div>
                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />


                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->
        </div> <!--  big container -->

        <!-- Footer -->
        <div class="footer" id="formFooter">
            <div class="container text-center">
                <img style="float: center;position: center;" src="images/logo.png" class="front" height="50px" width="50px">
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="../../ressources/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="../../ressources/assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../ressources/assets/js/jquery.bootstrap.js" type="text/javascript"></script>

        <script src="../../ressources/js/jquery.datetimepicker.full.js"></script>
        <script>
            $("#datetimepicker").datetimepicker();
        </script>

        <!--  Plugin for the Wizard -->
        <script src="../../ressources/assets/js/material-bootstrap-wizard.js"></script>

        <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
        <script src="../../ressources/assets/js/jquery.validate.min.js"></script>


    </body>

</html>
