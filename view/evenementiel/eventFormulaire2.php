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
        <link rel="stylesheet" href="../../ressources/assets/css/style.css">
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
        <div class="container" style="width: 50%;">
            <div class="text-center">
                <div class="progress" style="height: 25px; margin-top: 20px;">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated center-block" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">

                    </div>

                </div>
            </div>
        </div>
        <br>
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