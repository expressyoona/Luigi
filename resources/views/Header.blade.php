<div class="container">
<a class="logo" href="#"><img src="{{ url('images/logo-white.png') }}" alt="Logo"></a>
<div class="right-area">
  <h6><a class="plr-20 color-white btn-fill-primary" href="tel:0934773345">ORDER: +84 934 773 345</a></h6>
</div>
<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
<ul class="main-menu font-mountainsre" id="main-menu">
  <li><a href="{!! URL::route('home') !!}">HOME</a></li>
  <li><a href="{!! URL::route('AboutUs') !!}">ABOUT US</a></li>
  <li><a href="{!! URL::route('Menu') !!}">SERVICES</a></li>
  <li><a href="{!! URL::route('BlogPage') !!}">NEWS</a></li>
  <li><a href="{!! URL::route('Contact') !!}">CONTACT</a></li>
  |
  @if (Cookie::get('Email'))
    <li><a href="{{ URL::route('Admin') }}">{{ Cookie::get('Email') }}</a></li>
  @else
    <li><a href="{{ URL::route('SignIn') }}">SIGN IN</a></li>
  @endif
</ul>
  <div class="clearfix"></div>
</div>