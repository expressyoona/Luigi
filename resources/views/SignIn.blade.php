<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ url('plugin-frameworks/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('plugin-frameworks/swiper.css') }}" rel="stylesheet">
    <link href="{{ url('fonts/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/common/styles.css') }}">
    <style media="screen">
      body {
        background: url(images/slider_4_1920_600.jpg);
      }
      .container {
        background: #fafafa;
        border-radius: 10px;
        padding: 20px;

      }
    </style>
  </head>
  <body>
    @if (Cookie::get('Username') || Cookie::forget('Email') || Cookie::forget('Role'))
      {!! Cookie::queue(Cookie::forget('Username')) !!}
      {!! Cookie::queue(Cookie::forget('Email')) !!}
      {!! Cookie::queue(Cookie::forget('Role')) !!}
    @endif
    <section>
      <div class="container">
        <br>
        
        <form action="{!! route('Verify') !!}" method="POST">
          @csrf
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="User" type="text" class="form-control" id="inputEmail3" placeholder="Username or Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="Pw" type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2"></label>
            <div class="col-sm-10">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="rememberme" type="checkbox" checked> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer></footer>
  </body>
  <script src="{{ url('plugin-frameworks/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ url('plugin-frameworks/bootstrap.min.js') }}"></script>
  <script src="{{ url('plugin-frameworks/swiper.js') }}"></script>
  <script src="{{ url('common/scripts.js') }}"></script>
  <script>
    $(document).ready(function() {
      //$('header').load('{{ URL::to("Header") }}');
      //$('footer').load('{{ URL::to("Footer") }}');
    });
  </script>
</html>
