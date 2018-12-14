<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('fonts/beyond_the_mountains-webfont.css') }}" type="text/css"/>

  <!-- Stylesheets -->
  <link href="{{ url('plugin-frameworks/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('plugin-frameworks/swiper.css') }}" rel="stylesheet">
  <link href="{{ url('fonts/ionicons.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('/common/styles.css') }}">
</head>
<body>
  <header></header>
  <div class='cart' style="position: fixed; bottom: 10px; right: 20px; width: 60px; z-index: 9999;">
    <a href="yourBasket">
      <img src="{{ url('images/cart.png') }}">
    </a>
  </div>
  <section class="bg-1 h-900x main-slider pos-relative">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
      <div class="dplay-tbl">
        <div class="dplay-tbl-cell center-text color-white">
          <h5><b>BEST IN TOWN</b></h5>
          <h1 class="mt-30 mb-15">Pizza & Pasta</h1>
          <h5><a href="{{ URL::route('Menu')}}" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h5>
        </div><!-- dplay-tbl-cell -->
      </div><!-- dplay-tbl -->
    </div><!-- container -->
  </section>
  <section class="story-area left-text center-sm-text pos-relative">
    <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
    <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
    <div class="container">
      <div class="heading">
        <img class="heading-img" src="images/heading_logo.png" alt="">
        <h2>Our Story</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse
                  platea dictumst. Morbi maximus
                  lobortis ipsum, ut blandit augue ullamcorper vitae.
                  Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis
                  massa. Morbi tellus
                  tortor, luctus et lacinia non, tincidunt in lacus.
                  Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id
                  dapibus dolor, ac
                  cursus nulla.
          </p>
        </div><!-- col-md-6 -->
          <div class="col-md-6">
            <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea
                    dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae.
                    Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel
                    convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus.
                    Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda
                    pibus dolor, accursus nulla.
            </p>
          </div><!-- col-md-6 -->
      </div><!-- row -->
    </div><!-- container -->
  </section>
  <section class="story-area bg-seller color-white pos-relative">
    <div class="pos-bottom triangle-up"></div>
    <div class="pos-top triangle-bottom"></div>
    <div class="container">
    <div class="heading">
      <img class="heading-img" src="images/heading_logo.png" alt="">
      <h2>Best Sellers</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4  col-sm-6 ">
        <div class="center-text mb-30">
          <div class="ïmg-200x mlr-auto pos-relative">
            <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
            <img src="images/seller-2-200x200.png" alt="">
          </div>
          <h5 class="mt-20">Pizza Margherita</h5>
          <h4 class="mt-5"><b>$11.90</b></h4>
          <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
        </div>
      </div>
      <div class="col-lg-3 col-md-4  col-sm-6 ">
        <div class="center-text mb-30">
          <div class="ïmg-200x mlr-auto pos-relative"><img src="images/seller-2-200x200.png" alt=""></div>
          <h5 class="mt-20">Pizza Margherita</h5>
          <h4 class="mt-5"><b>$11.90</b></h4>
          <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
        </div>
      </div>
    </div>
    <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="{{ URL::route('Menu') }}" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
    </div>
  </section>
  
  <section>
    <div class="container">
      <div class="heading">
        <img class="heading-img" src="images/heading_logo.png" alt="">
        <h2>Our Menu</h2>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <ul class="selecton brdr-b-primary mb-70">
            <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
            <li><a href="#" data-select="pizza"><b>PIZZA</b></a></li>
            <li><a href="#" data-select="pasta"><b>PASTA</b></a></li>
            <li><a href="#" data-select="salads"><b>SALADS</b></a></li>
            <li><a href="#" data-select="deserts"><b>DESERTS</b></a></li>
          </ul>
        </div><!--col-sm-12-->
      </div><!--row-->

      <div class="row">
        <div class="col-md-6 food-menu pizza">
          <div class="sided-90x mb-30 ">
              <div class="s-left"><img class="br-3" src="images/menu-1-120x120.jpg" alt="Menu Image"></div>
              <div class="s-right">
                <h5 class="mb-10"><b>Pizza Margherita</b><b class="color-primary float-right">$12.00</b></h5>
                <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
              </div>
          </div>
        </div>
        <div class="col-md-6 food-menu pizza pasta">
          <div class="sided-90x mb-30 ">
            <div class="s-left"><img class="br-3" src="images/menu-2-120x120.jpg" alt="Menu Image"></div>
            <div class="s-right">
              <h5 class="mb-10"><b>Italian pasta</b><b class="color-primary float-right">$20.00</b></h5>
              <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 food-menu pasta">
          <div class="sided-90x mb-30 ">
            <div class="s-left"><img class="br-3" src="images/menu-3-120x120.jpg" alt="Menu Image"></div><!--s-left-->
            <div class="s-right">
              <h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
              <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
            </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->

        <div class="col-md-6 food-menu salads">
          <div class="sided-90x mb-30">
              <div class="s-left"><img class="br-3" src="images/menu-4-120x120.jpg" alt="Menu Image"></div><!--s-left-->
              <div class="s-right">
                <h5 class="mb-10"><b>Broschettas</b><b class="color-primary float-right">$6.00</b></h5>
                <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
              </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->
        <div class="col-md-6 food-menu deserts">
          <div class="sided-90x mb-30">
            <div class="s-left"><img class="br-3" src="images/menu-5-120x120.jpg" alt="Menu Image"></div><!--s-left-->
            <div class="s-right">
              <h5 class="mb-10"><b>Pizza Margherita</b><b class="color-primary float-right">$12.00</b></h5>
              <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
            </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->

        <div class="col-md-6 food-menu pizza">
          <div class="sided-90x mb-30 ">
            <div class="s-left"><img class="br-3" src="images/menu-6-120x120.jpg" alt="Menu Image"></div><!--s-left-->
            <div class="s-right">
              <h5 class="mb-10"><b>Italian pasta</b><b class="color-primary float-right">$20.00</b></h5>
              <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
            </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->

        <div class="col-md-6 food-menu deserts">
          <div class="sided-90x mb-30">
            <div class="s-left"><img class="br-3" src="images/menu-7-120x120.jpg"  alt="Menu Image"></div><!--s-left-->
            <div class="s-right">
              <h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
              <p class="pr-70">Maecenas fermentum tortor id fringilla  molestie. In hac habitasse platea dictumst. </p>
            </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->

        <div class="col-md-6 food-menu pasta">
          <div class="sided-90x mb-30 ">
            <div class="s-left"><img class="br-3" src="images/menu-8-120x120.jpg" alt="Menu Image"></div><!--s-left-->
            <div class="s-right">
              <h5 class="mb-10"><b>Broschettas</b><b class="color-primary float-right">$6.00</b></h5>
              <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
            </div><!--s-right-->
          </div><!-- sided-90x -->
        </div><!-- food-menu -->
      </div><!-- row -->

          <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
          
  </div><!-- container -->
  
  </section>
  <section>
    <br><br>
      @yield('content')
  </section>
<footer class="pb-50  pt-70 pos-relative">
</footer>


<!-- SCIPTS -->
<script src="{{ url('plugin-frameworks/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('plugin-frameworks/bootstrap.min.js') }}"></script>
<script src="{{ url('plugin-frameworks/swiper.js') }}"></script>
<script src="{{ url('common/scripts.js') }}"></script>
<script>
  $(document).ready(function() {
    $('header').load('{{ URL::to("Header") }}');
    $('footer').load('{{ URL::to("Footer") }}');
  });
</script>
</body>
</html>