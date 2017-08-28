<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Roweb</title>
    <meta charset="iso-8859-1">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/layout.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/curs2.css" type="text/css">

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="/bootstrap/js/bootstrap.js" type="text/js">
    <link rel="stylesheet" href="/bootstrap/js/bootstrap.min.js" type="text/js">
    <link rel="stylesheet" href="/bootstrap/js/npm.js" type="text/js">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="/assets/css/jquery.bxslider.css" type="text/css">
    <script src="/assets/js/jquery.bxslider.js"></script>

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--[if lt IE 9]><script src="/assets/js/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php
    include "views/partials/head.php";
?>
<!-- content -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/images/Technology-blog.jpg" alt="Los Angeles">
	   <div class="carousel-caption">
        <h3>Software Solutions</h3>
        <p>Programs and other operating information used by a computer.</p>
      </div>
    </div>

    <div class="item">
      <img src="assets/images/Hardware-software.jpg" alt="Chicago">
	  <div class="carousel-caption">
        <h3>Hardware Solutions</h3>
        <p>Physical components of a computer or other electronic system.</p>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="wrapper row2">

    <?php include 'views/'.$content_view; ?>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13212274.627996605!2d25.84181811004758!3d47.168820562645095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2sro!4v1503926402584" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
   <!-- footer -->
   <?php include "views/partials/footer.php"; ?> 

</body>
</html>
