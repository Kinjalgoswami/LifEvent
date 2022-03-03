
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>
	


</style>
</style>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="stservice">
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<style>
#slider3-pager .rslides_here a {
	border:2px solid #00203fff;
}
#slider3-pager a {
   border:3px solid #00203fff;
}
.rslides img {
  border: 17px solid #00203fff;
  }
</style>
<body >
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content" style="background-image: url('image/4cc.jpg');">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="image/18cc.jpg" alt="">
				<div class="caption">
					<h1>Birthday Celebration</h1>	
				</div>
			  </li>
			  <li><img src="image/19.jpg" alt="">
				<div class="caption">
					<h1>Marriage</h1>	  
				</div>
			  </li>	      
			  <li><img src="image/80.jpg" alt="">
				<div class="caption">
					<h1>Party</h1>	  
				</div>
			  </li>
			  <li><img src="image/87.jpg" alt="">
				<div class="caption">
					<h1>New Year</h1>
				</div>
			  </li>
			  <li><img src="image/68.jpg" alt="">
				<div class="caption">
					<h1>Christmas</h1>	  
				</div>
			  </li>	      
			  <li><img src="image/9cc.jpg" alt="">
				<div class="caption">
					<h1>Baby Shower</h1>	  
				</div>
			  </li>
			  <li><img src="image/44.jpg" alt="">
				<div class="caption">
					<h1>Engagement</h1>	  
				</div>
			  </li>	      
			  <li><img src="image/12.jpg" alt="">
				<div class="caption">
					<h1>Farewall</h1>	  
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager" >
			  <li><a href="#" ><img src="image/18cc.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/19.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/80.jpg" alt=""></a></li>
			   <li><a href="#"><img src="image/87.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/68.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/9cc.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/44.jpg" alt=""></a></li>
			  <li><a href="#"><img src="image/12.jpg" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>