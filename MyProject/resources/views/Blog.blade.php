<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Blog</title>
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
        <link href="{{ url('common/styles.css') }}" rel="stylesheet">

</head>
<body>

<header>
</header>


<section class="bg-7 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>THE BEST IN TOWN</b></h5>
                                <h3 class="mt-30 mb-15">Our Blog</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<section class="story-area left-text center-sm-text">
  <div class="container">
    <div class="row">
      
      <div class="col-md-7 col-lg-8">
        @if ($blog_list->count() == 0)
          <h4>-- End ---</h4>
          <br>
        @endif

        @foreach($blog_list as $items)
        <div class="mb-50 mb-sm-30">
          <div class="pos-relative mb-30 pt-15">
            <div class="font-8 abs-tl p-20 bg-primary color-white">
              <h4><b>{{ date('d', strtotime($items->TimePublish)) }}</b></h4>
              <h4><b>{{ date('m', strtotime($items->TimePublish)) }}</b></h4>
              <h4><b>{{ date('y', strtotime($items->TimePublish)) }}</b></h4>
              <div class="brdr-style-1"></div>
            </div>
            <div class="" hidden>
              {!! $temp = $items->Cover !!}
            </div>

            <img src='{{ url("images/$temp") }}' alt="">
          </div>
                <h4><a href="#"><b>{!! $items->Title !!}</b></a></h4>
                <h6 class="mt-10 bg-lite-blue dplay-inl-block">
                        <a class="plr-20 mtb-10" href="#"><b>By {{ $items->Fullname }}</b></a>
                        <a class="plr-20 mtb-10 brder-lr-lite-black-2" href="#"><b>in Recipes</b></a>
                        <a class="plr-20 mtb-10" href="#"><b>0 Comments</b></a>
                </h6>
                <p class="mt-30">{!! mb_strimwidth($items->Content, 0, 400, " ...") !!}

                </p>
                <br>
                <div class="">
                  <center>
                  <a class="readmore" href="" style='border: 1px solid black; padding: 7px 8px; font-size: 12px;'>READ MORE</a>
                </center>
                </div>
        </div>
        @endforeach
        <center>
        <ul class="font-14 mb-30">
          <li><a href=""><b>&laquo;</b></a></li>
          @for($i = 1;$i <= ceil($blog_list->total() / $blog_list->perPage());$i++)
            @if ($i == $blog_list->currentPage())
              <li class="color-primary"><a href="{{ $blog_list->nextPageUrl() }}"><b> 0{{ $i }}. </b></a></li>
            @else
              <li class=""><a href="{{ $blog_list->url($i) }}"><b> 0{{ $i }}. </b></a></li>
            @endif
          @endfor
          <li><a href=""><b>&raquo;</b></a></li>
        </ul>
        </center>
        <!--
        <ul class="font-14 mb-30">
          for($i = 1;$i <= floor($info['total'] / $info['per_page']);$i++)
            if ($i == $info['current_page'])
              <li class="color-primary"><a href="URL::route('BlogPage', $i)"><b> 0 $i.</b></a></li>
            else
              <li><a href="URL::route('BlogPage', $i)"><b> 0 $i.</b></a></li>
            endif
          endfor
        </ul>
      -->
      </div>
      <div class="col-md-5 col-lg-4">
              <div class="mx-w-400x mlr-auto">
                      <form class="mb-50 mb-sm-30 mt-sm-30 placeholder-1 form-style-1 pos-relative">
                              <input class="pr-50" type="text" placeholder="Search">
                              <button class="abs-tbr plr-20" type="submit"><i class="ion-android-search"></i></button>
                      </form>

                      <div class="mb-50 mb-sm-30 pos-relative oflow-hidden">
                              <div class="bg-trinagle-primary"></div>
                              <img src="{{ url('images/sidebar-1-400x600.jpg') }}" alt="">
                              <div class="abs-bl font-18 color-white p-30 z-1">
                                      <h4 class="lh-1">30%</h4>
                                      <h4 class="lh-1">off</h4>
                                      <h6 class="font-5 mt-10">Combo Pack <b>Pizza + Salad</b></h6>
                              </div>
                      </div><!--mb-50-->

                      <div class="mb-50 mb-sm-30">
                              <h5 class="left-text"><b>Subscribe to our newsletter</b></h5>
                              <form class="placeholder-1 form-style-1 pos-relative">
                                      <input class="mtb-20" type="text" placeholder="Your e-mail here">
                                      <button class="w-100 btn-primaryc" type="submit">subscribe</button>
                              </form>
                      </div><!--mb-50-->

                      <div class="mb-50 mb-sm-30">
                              <h5 class="mb-30 left-text"><b>Latest Posts</b></h5>
                              <div class="sided-90x mb-30 ">
                                      <div class="s-left"><img class="br-3" src="{{ url('images/sidebar-3-200x200.jpg') }}" alt="Menu Image"></div>
                                      <div class="s-right left-text">
                                              <h6 class="color-semi-black">Recipes</h6>
                                              <h6 class="font-11 mtb-5"><b>The best recipe for pasta</b></h6>
                                              <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                      </div><!--s-right-->
                              </div><!-- sided-90x -->

                              <div class="sided-90x mb-30 ">
                                      <div class="s-left"><img class="br-3" src="{{ url('images/sidebar-4-200x200.jpg') }}" alt="Menu Image"></div>
                                      <div class="s-right left-text">
                                              <h6 class="color-semi-black">Recipes</h6>
                                              <h6 class="font-11 mtb-5"><b>The secret to amazing food</b></h6>
                                              <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                      </div><!--s-right-->
                              </div><!-- sided-90x -->

                              <div class="sided-90x mb-30 ">
                                      <div class="s-left"><img class="br-3" src="{{ url('images/sidebar-5-200x200.jpg') }}" alt="Menu Image"></div>
                                      <div class="s-right left-text">
                                              <h6 class="color-semi-black">Recipes</h6>
                                              <h6 class="font-11 mtb-5"><b>Orange lemonade </b></h6>
                                              <h6 class="color-primary"><b>May  22, 2018</b></h6>
                                      </div><!--s-right-->
                              </div><!-- sided-90x -->
                      </div><!--mb-50-->

                      <div class="mb-30 pos-relative">
                              <img src="{{ url('images/sidebar-2-400x600.jpg') }}" alt="">
                              <div class="font-23  ptb-15 abs-tlr-30 color-white center-text brdr-primary-3">
                                      <div class="abs-tblr bg-black opacty-6 z--1"></div>
                                      <h4><b>1 + 1</b></h4>
                                      <h6 class="font-5 pb-15"><b>Buy one get one</b></h6>
                              </div>
                      </div><!--mb-50-->

              </div><!--mx-w-500x-->
      </div><!--col-md-4-->
            </div><!-- row -->
        </div><!-- container -->
</section>

<footer class="pb-50  pt-70 pos-relative">
</footer>

<!-- SCIPTS -->
<script src="{{ url('plugin-frameworks/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('plugin-frameworks/bootstrap.min.js') }}"></script>
<script src="{{ url('plugin-frameworks/swiper.js') }}"></script>
<script src="{{ url('common/scripts.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('header').load('{{ URL::to("Header") }}');
  $('footer').load('{{ URL::to("Footer") }}');
});
</script>
</body>
</html>
