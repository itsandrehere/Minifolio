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
      <div class="banner-text text-center">
        <h1>Hey, I’m John</h1>
        <p>Looking for a strategist and experienced designer,<br>
          Scroll to see my work.</p>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="descripton" class="section descripton">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
    </div>
  </div>
</section>
<!-- description text section --> 
<!-- portfolio section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-1.jpg" class="work-box"> <img src="tema/images/work-1.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-2.jpg" class="work-box"> <img src="tema/images/work-2.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-3.jpg" class="work-box"> <img src="tema/images/work-3.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-4.jpg" class="work-box"> <img src="tema/images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Graphic Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-5.jpg" class="work-box"> <img src="tema/images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-6.jpg" class="work-box"> <img src="tema/images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Logo Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-7.jpg" class="work-box"> <img src="tema/images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Branding</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="tema/images/work-8.jpg" class="work-box"> <img src="tema/images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <h5>Project Name</h5>
            <p>Website Design</p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
    </div>
  </div>
</section>
<!-- portfolio section --> 
<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Need something specific?</h3>
      <p>We are currently crafting new products but would love to hear from you.</p>
      <a href="contact.html" class="btn btn-large">Hire me</a> </div>
  </div>
</section>
<!-- hire me section --> 
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
<script src="tema/js/main.js"></script>
</body>
</html>