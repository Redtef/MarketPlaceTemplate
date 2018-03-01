<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulaire Catering</title>

        <!-- CSS -->

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="../../ressources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../ressources/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../ressources/assets/css/form-elements.css">
        <link rel="stylesheet" href="../../ressources/assets/css/style2.css">
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
        <div class="container" style="width: 60%;">
            <div class="text-center">
                <div class="progress" style="height: 25px; margin-top: 20px;">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated center-block" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%">

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="wrapper" >
                <h1  align="center">Catering Arrangements</h1>
                <h4  align="center"> Please answer the questions below so we can find the perfect catering companies for you.</h4>

                <!-- Top content -->
                <div class="top-content">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-sm-8 form-box">
                                <form role="form" action="" method="post" class="f1">
                                    <fieldset>
                                        <div class="form-elements ">
                                            <h5>Please select the occasion you require catering for ?</h5>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="container1">Wedding
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Bridal / Baby shower
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Cocktail reception
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Religious event
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Meeting / Conference
                                                        <input type="radio"  name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Catering for Cafes / Canteen
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="container1">Kids Birthday party
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Anniversary
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Yacht party
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Christmas / Thanksgiving
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Catering for Institutions / Industries
                                                        <input type="radio"name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Other events
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="container1">Birthday Party
                                                        <input type="radio"  name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Private party / Dinner party
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Suhoor or Iftar
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Corporate event
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                    <label class="container1">Catering for Camps / Staff Accommodations
                                                        <input type="radio" name="radio">
                                                        <span class="checkmark1"></span>
                                                    </label>
                                                </div>
                                            </div>





                                            <div class="form-group ">
                                                <h5>How many guests will attend this event?</h5>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group ">
                                                <h5>What is your budget for food and drinks per guest?</h5>
                                                <select id="inputState" class="form-control">
                                                    <option>up to AED 100 per guest</option>
                                                    <option>up to AED 150 per guest</option>
                                                    <option>up to AED 200 per guest</option>
                                                    <option>up to AED 250 per guest</option>
                                                    <option>up to AED 300 per guest</option>
                                                    <option>up to AED 350 per guest</option>
                                                    <option>No Limit</option>
                                                    <option selected="">I don't know</option>
                                                </select>
                                            </div>
                                            <div class="form-elements " >
                                                <h5>What cuisines would you like to serve your guests?</h5>
                                                <h6>Select as many as you like :</h6><br>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="container" >Arabic
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Canapes
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Cocktails
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Festive Food
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Healthy Food
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Healthy Food
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Persian
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Seafood
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="container" >BBQs
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Children's Menu
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Children's Menu
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Children's Menu
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Indian / Pakistani
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Mediterranean
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Thai
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Other
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="container" >Brunch/ Lunch/ Afternoon Tea
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Chinese
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Dessert
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Fusion
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Italian
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Mexican
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Vegetarian
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Vegetarian
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-elements " >
                                                <h5>Will you require any of the following?</h5>
                                                <h6>Our partners may provide these at an additional cost</h6><br>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="container" >Waiters/Staff/Hostess
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Floral arrangements
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="container" >Cutlery
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <label class="container">Lighting
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label class="container" >Chairs and tables
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <h5>When will the event take place? </h5>
                                                <input type="text" name="f1-email" class="f1-email form-control" id="datetimepicker">
                                            </div>
                                            <div class="form-group ">
                                                <h5>Where will the event take place?</h5>
                                                <select id="inputState" class="form-control">
                                                    <option selected="">Select location</option>
                                                    <option>Marrakech</option>
                                                    <option>Casablanca</option>
                                                    <option>Rabat</option>
                                                    <option>Tanger</option>
                                                </select>
                                            </div>

                                            <div class="form-elements">
                                                <h5>Do you have any special requirements?</h5>
                                                <textarea name="f1-about-yourself" placeholder="Example: We may need extra lighting at venue ..." 
                                                          class="form-control" id="f1-about-yourself" rows="8"></textarea>
                                            </div>
                                            <br>
                                            <div class="f1-buttons">
                                                <button type="button" class="btn btn-next" style="height:60px;  width: 350px; " ><h5 style="font-size: 18px; ">LET SERVICEMARKET SELECT <br> COMPANIES FOR ME</h5></button>
                                                <button type="button" class="btn btn-previous" style="height:60px; padding: 2px; width: 350px; " ><h5 style="font-size: 18px; color: #38393a ">I WANT TO SELECT MY <br>COMPANIES</h5></button>
                                            </div>
                                    </fieldset>

                                    <fieldset>
                                        <h3>Your contact details and location:</h3>
                                        <div class="form-group">
                                            <h5>Your email: </h5>
                                            <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                        </div>
                                        <div class="form-group">
                                            <h5>Your number: </h5>
                                            <input type="text" name="f1-number" placeholder="Number..." class="f1-number form-control" id="f1-number">
                                        </div>
                                        <div class="form-group">
                                            <h5>Your name: </h5>
                                            <input type="text" name="f1-name" placeholder="Name..." class="f1-name form-control" id="f1-name">
                                        </div>
                                        <div class="form-group">
                                            <h5>Your last name: </h5>
                                            <input type="text" name="f1-lastname" placeholder="Last Name..." class="f1-lastname form-control" id="f1-lastname">
                                        </div>
                                        <div class="form-group">
                                            <div class="f1-buttons">
                                                <button type="button" class="btn btn-previous">Previous</button>
                                                <a href="eventFormulaire2.html"><button type="button" class="btn btn-next">SUBMIT</button></a>
                                            </div>
                                    </fieldset>

                                    <fieldset>
                                        <h3>Payments</h3>
                                        <h5>Please choose your preferred payment method.</h5>

                                        <div class="col-xs-12 col-sm-6 col-md-12">
                                            <div class="frb-group">
                                                <div class="frb frb-default">
                                                    <input type="radio" id="radio-button-0" name="radio-button" value="0">
                                                    <label for="radio-button-0">
                                                        <br><span class="frb-title">Credit Card</span><br>
                                                        <span class="frb-description">Verify your card now, pay only when service is delivered.</span>
                                                    </label>
                                                </div>
                                                <div class="frb frb-default">
                                                    <input type="radio" id="radio-button-1" name="radio-button" value="1">
                                                    <label for="radio-button-1">
                                                        <br><span class="frb-title">Cash</span><br>
                                                        <span class="frb-description">No cash? No problem, Just pay our cleaners cash when the job is done.</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="submit" class="btn btn-submit">CONFIRM</button>
                                        </div>
                                    </fieldset> 

                                    <fieldset>
                                        <div class="container">
                                            <div class="row content ">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8 text-left"> 


                                                    <div class="wrapper" >
                                                        <h3  align="center">Thank you for submitting a catering request  </h3>
                                                        <h3  align="center">on ServiceMarket. Your reference number</h3>
                                                        <h3  align="center">is #20180223000050CFDXB</h3>
                                                        <br>

                                                    </div>
                                                    <h5 align="left">What happens now?</h5>
                                                    <p>We may contact you in case we require more information about your request.
                                                        We’ll send your request to our catering partners. We’ll make sure to get you at least 3 quotes from professional catering companies within 24 hours.
                                                        You will be notified by email and SMS when the catering companies send you their quote.
                                                        You will be able to compare each company along with their quotes and customer ratings. You can then choose the catering company that suits your needs.
                                                        Please note your contact information will be shared with these partners so that they can get in touch with you and present their services to you. Learn more about this

                                                        If you would like to make any changes to your request, or don't require our services anymore, please email us on support@servicemarket.com or call us at +971 4 4229639 any day of the week between 8:00 A.M. – 8:00 P.M. and 9 A.M. – 6:00 P.M. on Fridays.</p>
                                                </div>
                                                <div class="col-sm-2"></div>
                                            </div>
                                        </div> 
                                    </fieldset>


                                </form>
                            </div>


                            <div class="col-sm-4 form-box h-50">
                                <div class="h-100">
                                    <h4 class="card-header bg-primary text-white">YOUR REQUEST</h4>
                                    <table class="table" cellspacing="0" cellpadding="0">
                                        <tbody>
                                            <tr style="background-color: #e1dfdf">
                                                <th scope="row">OCCASION</th>
                                            </tr>
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+ KIDS BIRTHDAY PARTY</th>
                                            </tr>
                                            <tr style="background-color: #e1dfdf">
                                                <th scope="row">EQUIPMENTS</th>
                                            </tr>
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+LIGHTING</th>
                                            </tr> 
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+CUTLERY</th>
                                            </tr>
                                            <tr style="background-color: #e1dfdf">
                                                <th scope="row">BUDGET</th>
                                            </tr>
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+ UP TO AED 250 PER GUEST</th>
                                            </tr>
                                            <tr style="background-color: #e1dfdf">
                                                <th scope="row">CUISINES</th>
                                            </tr>
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+CHILDREN'S MENU</th>
                                            </tr> 
                                            <tr style="background-color: #f4f4f4">
                                                <th scope="row">+FESTIVE FOOD</th>
                                            </tr>
                                        </tbody>
                                    </table>
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

                <!--[if lt IE 10]>
                    <script src="assets/js/placeholder.js"></script>
                  <![endif]-->


                </body>

                </html>