<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="description" content="PLAE  - Coming Soon">
    <meta name="keywords" content="PLAE, coming soon">
    <meta name="author" content="Fahad Murtaza">

    <title>PLAE - Coming Soon </title>

    <!-- ============ GOOGLE FONTS ============ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
          rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600'
          rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/animate.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/font-awesome/css/font-awesome.min.css"/>
    <!-- Custom styles CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/style.css">
    <!-- Bootstrap v3.3.1 -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico.png">

</head>

<body style="background: #000">

<!--= LOADER TEMPLATE -->
<div class="page-loader">
    <div class="loader-icon"><img style="width: 100px; height: 100px"
                                  src="<?php bloginfo('stylesheet_directory');?>/images/spinner.svg" alt=""></div>
</div>
<!-- /LOADER TEMPLATE -->

<!-- HEADER -->
<header id="#top">

    <!-- if you want to youtube video, delete the comments -->
    <!-- YOUTUBE PLAYER -->
    <!--<div id="video" data-video="cphYpNus4oQ" data-mute="true"></div>-->
    <!-- /YOUTUBE PLAYER -->

    <div class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/images/logo.svg" width="190" height="190"
                           alt=""></div>

    <div class="coming-soon animated">

        <h1>Always Evolving.</h1>
        <?php
        //echo date_default_timezone_get();
        ?>
        <script>
          var timezone_offset_minutes = new Date().getTimezoneOffset();
          timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
        </script>
        <!-- COUNTDOWN -->
        <div class="countdown">

        </div>
        <!-- /COUNTDOWN -->

        <a href="#contact">
            <button class="whiteghost"> CONTACT</button>
        </a>

    </div>


</header>
<!-- END HEADER -->


<!-- CONTACT -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <h2 data-sr="wait 0.5s, then enter top and move 40px over 1s"><span>CONTACT US</span>
            </h2>
            <div class="col-md-12">
                <div id="note"></div>
                <div id="fields">
                    <form id="ajax-contact-form">
                        <input type="text" name="name" id="name"
                               placeholder="Name" value=""
                               data-sr="enter left move 25px, after 0.3s"/>
                        <input type="email" name="email" id="email"
                               placeholder="Email" value=""
                               data-sr="enter right move 25px, after 0.3s"/>
                        <textarea name="msg" id="msg" placeholder="Message"
                                  data-sr="enter bottom move 25px, after 0.3s"></textarea>
                        <input type="submit" name="submit" id="submit"
                               value="Send message"
                               data-sr="wait 0.8s, then enter top and move 40px after 0.3s"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT -->

<!-- END FOOTER -->

<!-- Javascript files -->
<!-- jQuery -->
<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.js"></script>

<!-- CountDown  -->
<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.countdown.js"></script>
<!-- Validate form -->
<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.validate.js"></script>
<!-- Ajax chimp -->
<script src="<?php bloginfo('stylesheet_directory');?>/js/jquery.ajaxchimp.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>/js/main.js"></script>
</body>

</html>
