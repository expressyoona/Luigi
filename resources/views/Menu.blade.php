<!DOCTYPE html>
<html lang="en">
<head>
        <title>Menu</title>
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


<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h2 class="mt-30 mb-15">Menu</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>
<section class="bg-lite-blue">
    <div class="container">
        <div class="row">
        @foreach($menu_list as $items)
        <div class="col-md-6">
            <div class="sided-90x mb-30 ">
                <div class="s-left"><img class="br-3" src="images/{!! $items['Image'] !!}" alt="Menu Image"></div>
                <div class="s-right">
                    <h5 class="mb-10">
                        <b>{!! $items['FoodName'] !!}</b>
                        <b class="color-primary float-right">${!! $items['Price'] !!}</b>
                    </h5>
                    <p class="pr-70">{!! $items['Description'] !!}</p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>
<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <h4 class="font-30 font-sm-20  center-text mb-25">Add a fresh <b>Salad</b> to your order</h4>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading mb-sm-10"><h3>Choose from Pasta</h3></div>
                <div class="row">
                        <div class="col-md-12 col-lg-6">
                                <div class="sided-220x responsive mb-30 left-text center-sm-text">
                                        <div class="s-left mlr-sm-auto"><img  src="images/pasta-1-300x300.png" alt="Menu Image"></div>
                                        <div class="s-right">
                                                <h5>Pizza Margherita</h5>
                                                <h4 class="mtb-10"><b class="color-primary">$12.00</b></h4>
                                                <p>Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- col-md-6 -->

                        <div class="col-md-12 col-lg-6">
                                <div class="sided-220x responsive mb-30 left-text center-sm-text">
                                        <div class="s-left mlr-sm-auto"><img  src="images/pasta-2-300x300.png" alt="Menu Image"></div>
                                        <div class="s-right">
                                                <h5>Pizza Margherita</h5>
                                                <h4 class="mtb-10"><b class="color-primary">$12.00</b></h4>
                                                <p>Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!--col-md-6 -->
                </div><!-- row-->

                <div class="brder-t-light mt-sm-10 mb-60 mb-sm-40"></div>

                <div class="row">
                        <div class="col-md-6">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/menu-5-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Pizza Margherita</b><b class="color-primary float-right">$12.00</b></h5>
                                                <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/menu-6-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Italian pasta</b><b class="color-primary float-right">$20.00</b></h5>
                                                <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/menu-7-120x120.jpg"  alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
                                                <p class="pr-70">Maecenas fermentum tortor id fringilla  molestie. In hac habitasse platea dictumst. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/menu-8-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Broschettas</b><b class="color-primary float-right">$6.00</b></h5>
                                                <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<footer class="pb-50  pt-70 pos-relative">
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
