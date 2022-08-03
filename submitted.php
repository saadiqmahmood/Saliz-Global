<!DOCTYPE html>
<html lang="en">
    <head>
        
    <?php
        if(!isset($_POST['submit'])){
            echo"error; you need to submit the form";
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        if(empty($name) || empty($email)){
            echo"Name and email are mandatory";
            exit;
        }

        $email_from = "mahmoodsaadiq@gmail.com";
        $email_subject = "New Client";
        $email_body = "You have a new client $name\n"."Email address: $email\n"."Telephone number: $tel\n"."Client's message: \n $message".


        $to = "mahmoodsaadiq@gmail.com";
        $headers = "From $email_from \r\n";

        mail($to,$email_subject,$email_body,$headers);
    ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Saliz Global Resources LTD </title>
        <link rel="icon" href="favicon.png">
        <!-- Font Icons -->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Light Case -->
        <link rel="stylesheet" href="css/lightcase.min.css" type="text/css">
        <!-- Template style -->
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, '' );
            }
        </script>
    </head>
    <body>    
        <!-- Start Slider Home -->
        <section class="start_home demo2" id="header-area">
            <nav class="navbar navbar-expand-md ">
                <div class="container">
                    <div class="site-logo"><a class="navbar-brand" href="index.html"><img src="images/logo.png" class="img-fluid" alt="Img" /></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                    </button>
                </div>
            </nav>
            <div class="banner_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 start-home-content">
                            <h1>Your message has been sent.</h1>
                            <p>
                                We'll be sure to reach out to you.
                            </p>
                        </div>

                        <div class="col start-home-button ">
                                <li>
                                <a href="index.html">
                                    <button class="create-button">
                                        Home
                                    </button>
                                </a>
                                </li>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="wave-area">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </section>

        
        <!-- Start To Top Button -->
        <div id="back-to-top">
            <a class="top" id="top" href="#header-area"> <i class="ti-angle-up"></i> </a>
        </div>
        <!-- End To Top Button -->

        <!-- Start JS FILES -->
        <!-- JQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Wow Animation -->
        <script src="js/wow.min.js"></script>
        <!-- Owl Coursel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Images LightCase -->
        <script src="js/lightcase.min.js"></script>
        <!-- scrollIt -->
        <script src="js/scrollIt.min.js"></script>
        <!-- Map -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg&amp;language=en"></script>
        <!-- Main Script -->
        <script src="js/script.js"></script>
    </body>
</html>


