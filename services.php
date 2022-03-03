<?php
session_
<!DOCTYPE html>
<html>
<head>
<title>Services</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href="practice/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="mainstt.css" rel="stylesheet" type="text/css" media="all" />


<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
<style>
	body{
		 background-image: url("image/gggg.jpg");;
	}
	.about-view.packages-btn {
    width: 110px;
    height: 35px;
    font-size: 14px;
    color: #fff;
    text-transform: capitalize;
    -webkit-transition: .5s;
    -moz-transition: .5s;
    -ms-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    color: #fff;
    background-color: #e84393;
    background-image: linear-gradient(
315deg
, #e84393 0%, #000000 74%);
    Border-radius: 30px;
    margin-left: 90px;
}
.breadcrumb li.active {
    color: #00FFFF;
    font-size: 1.2em;
    font-weight: 500;
}
</style>

</head>

<?php include_once('includes/header.php');?>
<body>
<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Services</li>	  
		 </ol>

		 <h1 style="color:white; text-align:center;">Services</h1>
<?php include('practice/ser.php');?>



		  


<button  class="about-view packages-btn">
											<a href="shopping\index.php" style="color:#fff; width: 110px; height: 35px; font-size: 14px; text-decoration:none; ">
											book now</a>
										
										</button>

		 <?php include_once('includes/footer.php');?>	
	 </div>
</div>
<!---->

<!---->
</body>
</html>