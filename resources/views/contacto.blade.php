<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
@include('app.header')

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    @include('app.sidebar')
    <!-- navigation section  --> 
  </header>
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        <p>Contact</p>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="inner-description" class="section inner-description">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <p>I am honest, discreet and always focus on your goals. If you are looking for a strategist and experienced designer, just leave me a message and I'll contact you soon.</p>
      <!--contact form start-->
      <div class="col-md-6 col-md-offset-3 conForm">
        <div id="message"></div>
        <form method="post" action="" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end--> 
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- footer -->
<footer class="section footer">
  @include('app.footer')
</footer>
<!-- footer --> 

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="tema/js/bootstrap.min.js"></script> 
<script src="tema/js/jquery.fancybox.pack.js"></script> 
<script src="tema/js/jquery.waypoints.min.js"></script> 
<script src="tema/js/retina.min.js"></script> 
<script src="tema/js/modernizr.js"></script> 
<script src="tema/js/jquery.contact.js"></script> 
<script src="tema/js/main.js"></script>
</body>
</html>