<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ config('app.name', 'Laravel') }} | Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    @include('partials.head')

  </head>
  <body>

    @include('partials.header')

        <!-- Hero Section-->
    <section style="background-color: gray;background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" align="center">
            <br><br><br>
            <h1 style="font-family: helvetica neue; font-weight: bolder"><i>Lepak !</i></h1>
            <h3 style="font-family: helvetica neue; font-weight: lighter">A Bucket that contains all the fun you need ^^</h3>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="h3"><i>Missing out on great Events ?</i></h2>
            <p class="text-big">Well Now you don't have to worry ! Just visit us and see all the exciting events we have to offer !</p>
          </div>
        </div>
      </div>
    </section>
    <section style="background: url({{ asset('bootstrap-blog/img/divider-bg.jpg') }}); background-size: cover; background-position: center bottom" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1>Got event to advertise ?<h1><h2>Help us help you gather more attention to you and YOUR EVENT !</h2><a href="#" class="hero-link">Find Out More</a>
          </div>
        </div>
      </div>
    </section>

    @include('partials.footer')
    @include('partials.js')

  </body>
</html>

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});

$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})});

</script>
