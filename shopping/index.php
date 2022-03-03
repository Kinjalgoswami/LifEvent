<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Our Services</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="mainn.css">
	    <link rel="stylesheet" href="Green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="Green.css" rel="alternate stylesheet" title="Green color">
		<link href="blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="red.css" rel="alternate stylesheet" title="Red color">
		<link href="orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="dark-Green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
<style>
    
@import url('http://fonts.googleapis.com/css?family=Monoton');
.header{
    

background-image: url("img/h1.png");
    background-size:cover;
    text-align:center;

    padding:4em 0;
	}
	.top-bar {
    background: #f4f4f473;
    padding: 10px 0 9px;
    font-size: 12px;
}
.logo a h1{

    text-transform: capitalize ;
font-family: 'Monoton', cursive;
  background-image: linear-gradient(
    -225deg,
    #ADEFD1FF 67%,
    #44107a 29%,
    #ff1361 0%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 3s linear infinite;
  display: inline-block;
      font-size: 3.2em;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }

}
body {
  font-size: 13px;
  color: black;
 background-image: url("img/kkkk.jpg");
  overflow-x: hidden;
  margin: 0;
  padding: 0;
 font-family: 'Georgia', serif;
}
</style>


<div class="header">
     <div class="container">
         <div class="logo">
             <a href="services.php"><h1>Our Services</h1></a>
         </div>
         
         <div class="clearfix"></div>
     </div>
</div>


	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

<?php include('includes/main-header.php');?>
<?php include('includes/top-header.php');?>

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->
	<?php include('includes/side-menu.php');?>
<!-- ================================== TOP NAVIGATION : END ================================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->
			
<div id="hero" class="homepage-slider3">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<div class="full-width-slider">	
			<div class="item" style="background-image: url(assets/images/sliders/b3.jpg);">
				<!-- /.container-fluid -->
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
	    
	    <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(assets/images/sliders/ex.jpg);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->

	</div><!-- /.owl-carousel -->
</div>
			
<!-- ========================================= SECTION – HERO : END ========================================= -->	
				<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
			
					

			
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->		
		
		<!-- ============================================== SCROLL TABS ============================================== -->
		<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
			
<?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		
		<?php if($row['productAvailability']=='In Stock'){?>
					
				<?php } else {?>
						
					<?php } ?>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>




	
		<?php
$ret=mysqli_query($con,"select * from products where category=3");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

	
					

			
	<?php } ?>
	
		
								</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>






		
		<?php
$ret=mysqli_query($con,"select * from products where category=5");
while ($row=mysqli_fetch_array($ret)) 
{
?>

						    	
		
	<?php } ?>
	
		
		    

         <!-- ============================================== TABS ============================================== -->
			
	   
<?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=4");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		
<?php }?>

	
	<?php
$ret=mysqli_query($con,"select * from products where category=4 and subCategory=6");
while ($row=mysqli_fetch_array($ret)) 
{
?>



		
<?php }?>

		
	
		<!-- ============================================== TABS : END ============================================== -->

		

	<section class="section featured-product inner-xs wow fadeInUp">
		
			<?php
$ret=mysqli_query($con,"select * from products where category=6");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
				
										<?php if($row['productAvailability']=='In Stock'){?>
					
						
					<?php } ?>
										</div>
									</div><!-- /.col -->
								</div><!-- /.product-micro-row -->
							</div><!-- /.product-micro -->
						</div>


											</div>
				</div><?php } ?>
							</div>
		</section>
			
</div>
</div>

	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>