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

        <style >
            .footer{
                left: 0;
                bottom: 0;
                height: 100px;
                width: 100%;
            }	

        </style>




    </head>

    <body>

       <?php
        include_once './navbarbootstrap3.html';
       ?>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="red" id="wizard">
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
                                        <li><a href="#captain" data-toggle="tab">Information personel</a></li>
                                        <li><a href="#description" data-toggle="tab">Details</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Quel service cherchez vous?</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Service</label>
                                                    <select class="form-control">
                                                        <option disabled="" selected=""></option>
                                                        <option value="fauteuil"> Nettoyage fauteuil </option>
                                                        <option value="tapis"> Nettoyage tapis </option>
                                                        <option value="piscine"> Nettoyage piscine </option>
                                                        <option value="vitre"> Nettoyage vitre </option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date du service</label>
                                                    <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">

                                                </div>
                                            </div>
                                            <h4 class="info-text">Avez vous besoin d'un service complementaire?</h4>
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="col-sm-4 col-sm-offset-2">
                                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Selectionnez cette option pour qu'on ramene nos materieux.">
                                                            <input type="radio" name="type" value="House">

                                                            <div class="icon">
                                                                <i class="material-icons">build</i>
                                                            </div>

                                                            <h6>Materiel</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Autre chose">
                                                            <input type="radio" name="type" value="Appartment">
                                                            <div class="icon">
                                                                <i class="material-icons">Autre</i>
                                                            </div>
                                                            <h6>Autre chose</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="captain">
                                        <h4 class="info-text">What type of room would you want? </h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
                                                        <input type="radio" name="job" value="Design">
                                                        <div class="icon">
                                                            <i class="material-icons">weekend</i>
                                                        </div>
                                                        <h6>Single</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
                                                        <input type="radio" name="job" value="Code">
                                                        <div class="icon">
                                                            <i class="material-icons">home</i>
                                                        </div>
                                                        <h6>Family</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
                                                        <input type="radio" name="job" value="Code">
                                                        <div class="icon">
                                                            <i class="material-icons">business</i>
                                                        </div>
                                                        <h6>Business</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="description">
                                        <div class="row">
                                            <h4 class="info-text"> Drop us a small description.</h4>
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Room description</label>
                                                    <textarea class="form-control" placeholder="" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Example</label>
                                                    <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
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
