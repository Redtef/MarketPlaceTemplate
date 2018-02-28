<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Service Market</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
        <!-- css dyali -->
        <link rel="stylesheet" type="text/css" href="assets/css/form.css">
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">

    </head>

    <body>

        <!-- Navigation -->
        <?php
        include_once './navbarbootstrap3.html';
        ?>
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="orange" id="wizard">
                            <form action="" method="">
                                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Vous cherchez un Baby-Sitter? 
                                    </h3>
                                    <h5>Remplissez ce formulaire pour plus d'information</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#details" data-toggle="tab">Service</a></li>


                                        <li><a href="#companies" data-toggle="tab">Societes</a></li>
                                        <li><a href="#infos" data-toggle="tab">Information personel</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Service Babysitting</h4>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Combien de jours voulez vous</label>
                                                        <select class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="1day">1 jour</option>
                                                            <option value="2day">2 jour</option>
                                                            <option value="3day">3 jour</option>
                                                            <option value="4day">4 jour</option>
                                                            <option value="5day">5 jour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="form-group label-floating">
                                                        <label class="control-label">Combien d'enfants ont besoin de baby-sitting?</label>
                                                        <select class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="enfant">1 enfant </option>
                                                            <option value="enfant">2 enfant</option>
                                                            <option value="enfant">3 enfant</option>
                                                            <option value="enfant">4 enfant</option>
                                                            <option value="enfant">5 enfant</option>
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="form-group label-floating">
                                                        <label class="control-label">Combien d'heures par jour vous en aurez besoin?</label>
                                                        <select class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option value="fauteuil">3H</option>
                                                            <option value="tapis">4H</option>
                                                            <option value="tapis">5H</option>
                                                            <option value="tapis">6H</option>
                                                            <option value="tapis">7H</option>
                                                            <option value="">
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date du service</label>
                                                    <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">

                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Age of the little on?</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="fauteuil">0-3 months</option>
                                                        <option value="tapis">3-6 months</option>
                                                        <option value="tapis">1-3 yrs</option>
                                                        <option value="tapis">3-6 yrs</option>
                                                        <option value="tapis">6 yrs older</option>
                                                        <option value="">
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">age younger?</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="fauteuil">0-3 months</option>
                                                        <option value="tapis">3-6 months</option>
                                                        <option value="tapis">1-3 yrs</option>
                                                        <option value="tapis">3-6 yrs</option>
                                                        <option value="tapis">6 yrs older</option>
                                                        <option value="">
                                                        </option>
                                                    </select>

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
                                            <h4 style="margin: 25px;padding: 1%;" align="center"> Type de maison</h4>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label><h4 style="border-bottom: 1px solid #FF9800;">Detail du travail</h4></label>
                                                    <textarea class="form-control" placeholder="" rows="6"></textarea>
                                                </div>
                                            </div>
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

                                    <div class="tab-pane" id="infos">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nom <small>(required)</small></label>
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
                                                        <label class="control-label">Prenom <small>(required)</small></label>
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
                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-warning btn-wd' name='previous' value='Previous' />


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
        <div class="footer" id="formFooter" href="index.html">
            <div class="container text-center">
                <img style="float: center;position: center;" src="images/logo.png" class="front" height="50px" width="50px">
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

        <script src="js/jquery.datetimepicker.full.js"></script>
        <script>
            $("#datetimepicker").datetimepicker();
        </script>

        <!--  Plugin for the Wizard -->
        <script src="assets/js/material-bootstrap-wizard.js"></script>

        <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
        <script src="assets/js/jquery.validate.min.js"></script>


    </body>

</html>
