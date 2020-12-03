@if ((Cookie::get('Role') != 'Administrator') || (Cookie::get('Role') != 'Administrator'))
  <center>
    <h2>You dont have permission to access this page.</h2>
  </center>
@else
  <!DOCTYPE html>
  <html>
  <head>
    <title>Navigator</title>
  </head>
  <body> 
  <div class="row">
    <div class="col-md-3 col-xs-3 col-lg-3">
      <div class="nav-side-menu">
        <div class="brand">Page Management</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <!--
                    <li>
                      <a href="#">
                      <i class="fa fa-dashboard fa-lg"></i> Dashboard
                      </a>
                    </li>-->
                    <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                      <i class="fa fa-gift fa-lg"></i>Order List<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="products">
                        <li class="active"><a href="#">Order</a></li>
                        <li id='General'>General</li>
                        <li><a href="#">Buttons</a></li>
                        <li><a href="#">Tabs & Accordions</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">FontAwesome</a></li>
                        <li><a href="#">Slider</a></li>
                        <li><a href="#">Panels</a></li>
                        <li><a href="#">Widgets</a></li>
                        <li><a href="#">Bootstrap Model</a></li>
                    </ul>
                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                      <i class="fa fa-cutlery fa-lg"></i> Food Management<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="service">
                      <li id='AddFood'>Add New Food</li>
                      <li id='EditFood'>Edit Existing Food <span class="label label-primary">{{ $food_quantity }}</span></li>
                    </ul>

                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                      <i class="fa fa-edit fa-lg"></i> Blog<span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="new">
                      <li id='AddBlog'>Add Blog</li>
                      <li id='EditBlog'>Edit Blog</li>
                      <li id='DeleteBlog'>Delete Blog</li>
                    </ul>

                    <li id='User'>
                      <i class="fa fa-users fa-lg"></i> Users Management
                    </li>
                </ul>
         </div>
    </div>
  </div>
    <div class="col-md-9 col-xs-9 col-lg-9">
      <div class="container result col-md-12 col-xs-12">
        <h3 style="">Please choose an option</h3>
        
        @if (session('flash_message'))
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        @endif
      </div>
    </div>
  </div>
</body>
</html>
@endif
<style media="screen">
  .nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 14px;
    font-weight: 200;
    background-color: #2e353d;
    position: fixed;
    top: 0px;
    width: 230px;
    height: 100%;
    color: #e1ffff;
  }
  .nav-side-menu .brand {
    background-color: #23282e;
    line-height: 50px;
    display: block;
    text-align: center;
    font-size: 17px;
  }
  .nav-side-menu .toggle-btn {
    display: none;
  }
  .nav-side-menu ul, .nav-side-menu li {
    list-style: none;
    padding: 0px;
    margin: 0px;
    line-height: 35px;
    cursor: pointer;
  }
  .nav-side-menu ul :not(collapsed) .arrow:before, .nav-side-menu li :not(collapsed) .arrow:before {
    font-family: FontAwesome;
    content: "\f078";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
    float: right;
  }
  .nav-side-menu ul .active, .nav-side-menu li .active {
    border-left: 3px solid #f44336;
    background-color: #4f5b69;
  }
  .nav-side-menu ul .sub-menu li.active, .nav-side-menu li .sub-menu li.active {
    color: #d19b3d;
  }
  .nav-side-menu ul .sub-menu li.active a, .nav-side-menu li .sub-menu li.active a {
    color: #d19b3d;
  }
  .nav-side-menu ul .sub-menu li, .nav-side-menu li .sub-menu li {
    background-color: #2e353d;
    border: none;
    line-height: 28px;
    border-bottom: 1px solid #23282e;
    margin-left: 0px;
  }
  .nav-side-menu ul .sub-menu li:hover, .nav-side-menu li .sub-menu li:hover {
    background-color: #020203;
  }
  .nav-side-menu ul .sub-menu li:before, .nav-side-menu li .sub-menu li:before {
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    vertical-align: middle;
  }
  .nav-side-menu li {
    padding-left: 0px;
    border-left: 3px solid #2e353d;
    border-bottom: 1px solid #23282e;
  }
  .nav-side-menu li a {
    text-decoration: none;
    color: #ffffff;
  }
  .nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
  }
  .nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
  }
  @media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 50px !important;
    padding-left: 20px;
    line-height: 50px !important;
  }
  }
  @media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
  }
  body {
    margin: 0px;
    padding: 0px;
  }

  .editName:hover {
        cursor: pointer;
    }

</style>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  var loadFile = function(event) {
    var preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
  };

  $(document).ready(function(){

  });

  $(document).ready(function(){
    
    $('#AddFood').click(function(){
      //AJAX load Page
      $.ajax({
        type: 'GET',
        url: '{!! route("AddFood") !!}',
        success: function(res) {
          $('.result').html(res);
        }
      });
    });

    $('#EditFood').click(function() {
      $.ajax({
        type: 'GET',
        url: '{!! route("ShowFood") !!}',
        success: function(res) {
          $('.result').html(res);
        }
      });
    });

    $('#User').click(function() {
      $.ajax({
        type: 'GET',
        url: '{!! route("ShowUser") !!}',
        success: function(res) {
          $('.result').html(res);
        }
      });
    });

  });
</script>
