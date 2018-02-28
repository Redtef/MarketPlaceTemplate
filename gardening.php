<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title> Gardening </title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!--        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
            <link rel="icon" type="image/png" href="assets/img/favicon.png" />-->

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
            .body{
                background-image: url('./assets/img/garden.jpg') ; 
                background-repeat:no-repeat;
                background-size:cover;
                background-position: center center;
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
                        <div class="card wizard-card" data-color="blue" id="wizard">
                            <form>

                                <div class="wizard-header">
                                    <h3 class="wizard-title">Gardening </h3>
                                    <h5>Please complete the form below to help us find the perfect gardening solution for you.</h5>
                                </div>
                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#need" data-toggle="tab">What you need </a></li>
                                        <li><a href="#company" data-toggle="tab">Select a company</a></li>
                                        <li><a href="#more" data-toggle="tab">More details</a></li>
                                        <li><a href="#details" data-toggle="tab">Contact details</a></li>
                                        <li><a href="#thanks" data-toggle="tab">Thank you</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="need">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> Let's start with the basic details</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">City</label>
                                                        <select name="country" class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option>Marrakech</option>
                                                            <option>Casablanca</option>
                                                            <option>Rabat</option>
                                                            <option>Tangier</option>
                                                            <option>Agadir</option>
                                                            <option>Fes</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Type of gardening </label>
                                                        <select name="gardening" class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option>garden maintenance</option>
                                                            <option>Grass and artificial lawns</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> <br>
                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label" font-size='20em'>Size</label> <br>
                                                        <select name="size" class="form-control">
                                                            <option disabled="" selected=""></option>
                                                            <option>Apartment</option>
                                                            <option>House</option>
                                                            <option>Villa</option>
                                                            <option>Office</option>
                                                            <option>Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Date</label>
                                                            <input name="date" type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>  </div> <br>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="company">
                                        <h4 class="info-text">Please select up a landscaping company</h4>
                                        <div class="row">
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="more">
                                        <h4 class="info-text">Do you have anything else you'd like to add? </h4>
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-1">
                                                <div class="form-group label-floating">
                                                    <textarea class="form-control" placeholder="" rows="9"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group label-floating">
                                                    <p class="description">please tell us more about the type gardening service you are looking for.</p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="tab-pane" id="details">
                                        <h4 class="info-text">Your contact details. </h4>
                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">record_voice_over</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name </label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">


                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name </label>
                                                        <input name="firstname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">perm_phone_msg</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Phone number </label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Email </label>
                                                        <input name="email" type="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">room</i>
                                                    </span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Adress</label>
                                                        <input name="adress" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Do you have anything else you'd like to add?</label>
                                                    <input name="adress" type="text" class="form-control">

                                                </div>
                                            </div>
                                        </div> <br> <br>
                                    </div>
                                    <div class="tab-pane" id="thanks">
                                        <h4 class="info-text">Thank you for submitting a gardening request on ServiceMarket.</h4>
                                        <h5 class="info-text"> <b> Your reference number is :</b> </h5>
                                        <div class="form-group label-floating">
                                            <input name="lastname" type="text" class="form-control"><br>
                                        </div>
                                        <h5 class="info-text"> 
                                            <b> What happens now?</b>
                                        </h5>
                                        <ol>
                                            <li>We may contact you in case we require more information about your request.</li>
                                            <li>We will send your request to our landscaping companies.</li>
                                            <li>You will be notified by email and SMS when landscaping companies send you their quote.</li>
                                            <li>You will be able to compare each company along with their quotes and customer ratings.<br>
                                                You can then choose the landscaping company that suits your needs.</li><br> 
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
                                        <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-info btn-wd' name='finish' value='Finish' />
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

        <div class="footer" id="formFooter">
            <div class="container text-center">
                <img style="float: center;position: center;" src="images/logo.png" class="front" height="50px" width="50px">
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

        <!--  Plugin for the Wizard -->
        <script src="assets/js/material-bootstrap-wizard.js"></script>

        <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
        <script src="assets/js/jquery.validate.min.js"></script>
    </body>


</html>
