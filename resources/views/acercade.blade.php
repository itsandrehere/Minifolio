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
        <p>About me</p>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="inner-description" class="section inner-description">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center"> <img src="images/designer-pic.jpg" alt="Mafolio">
      <h1>Johnathan Doe</h1>
      <p>UX Designer/ Developer</p>
    </div>
    <div class="col-md-10 col-md-offset-1 space">
      <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
      <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet avida at eget metus.</p>
    </div>
  </div>
</section>
<!-- description text section --> 

<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Need something specific?</h3>
      <p>We are currently crafting new products but would love to hear from you.</p>
      <a href="https://github.com/kamalcha/ActiveBox/archive/master.zip" class="btn btn-large">Hire me</a> </div>
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