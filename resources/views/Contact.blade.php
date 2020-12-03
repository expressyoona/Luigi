<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Contact</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">

</head>
<body>

<header>
</header>


<section class="bg-6 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>SAY HELLO</b></h5>
                                <h3 class="mt-30 mb-15">Contact</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Say hello</h2>
                        <h5 class="mt-10 mb-30">Say hello, send us a message</h5>
                        <p class="mx-w-700x mlr-auto"></p>
                </div>

                <form class="form-style-1 placeholder-1">
                        <div class="row">
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Name">  </div>
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="E-mail">  </div>
                                <div class="col-md-12"><input class="mb-20" type="text" placeholder="Subject">  </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x ptb-20" placeholder="Message"></textarea></div>
                        </div><!-- row -->
                        <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25"><b>SEND MESSAGE</b></a></h6>
                </form>
        </div><!-- container -->
</section>


<div class="map-area h-700x mb--30">
  <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245368.26105205424!2d107.93803653906775!3d16.071763490602294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2sDa+Nang%2C+Vietnam!5e0!3m2!1sen!2s!4v1543772292124" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
  </center>

<footer class="pb-50  pt-70 pos-relative footer-bg-1">
</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('header').load('{{ URL::to("Header") }}');
  $('footer').load('{{ URL::to("Footer") }}');
});
</script>
</body>
</html>
