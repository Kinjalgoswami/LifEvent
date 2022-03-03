<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $msg=$_POST['message'];
$sql="insert into tbluser(Name,MobileNumber,Email,Message)values(:name,:mobnum,:email,:msg)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':msg',$msg,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Message Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
				<style>
				.breadcrumb li.active {
    color: #00FFFF;
    font-size: 1.2em;
    font-weight: 500;
}
a {
    color: #FFF;
    font-size: 1.2em;
    font-weight: 500;
    text-decoration: none;
}
			.header{
	

background-image: url("image/h1.png");
	background-size:cover;
	text-align:center;
	padding:2em 0;
	 font-family: 'Georgia', serif;;
	min-height:150px;
}
.logo a h1{
	
	font-family: 'Glyphicons Halflings';

	
	text-decoration:none;



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
      font-size: 2.3em;
}
.top-menu ul li{
	display:inline-block;
	margin-top:1em;
}
.top-menu ul li a{
	font-size:1.1em;
  
	display:block;
	padding:10px 18px;
	margin:0 1em;
	color:#fff;
	text-decoration:none;
}
.top-menu ul li.active a,.top-menu ul li a:hover{
	color:#ADEFD1FF;
}
.glyphicon {
  top: -8px;
  display: block;
  color: white;
}
.glyphicon-user:before,.glyphicon-envelope:before,.glyphicon-home:before,.glyphicon-picture:before,.glyphicon-calendar:before,.glyphicon-map-marker:before,.glyphicon-tags:before{
	color:#fff;
}

.contact h2 {
  color: #000;
  font-weight: 600;
  margin-top: 1.5em;
font-family: 'Georgia', serif;
  text-align: center;
}
.contact-main{
	margin-top:10em;
   margin-left: 210px;
   font-family: 'Georgia', serif;
  
}
.contact-main h3{
	color:#ADEFD1FF;
	font-size:2.2em;
	line-height:1.3em;
	width:80%;
	font-family: 'Georgia', serif;
   margin-left: 210px;

}
.contact-main h3 span{
	font-weight:600;
	color:#fff;
	font-family: 'Georgia', serif;
}
.contact-left{
	margin-left:530px;
	padding-left: 40px;
	  
color: white;
	border-radius: 30px;
	font-family: 'Georgia', serif;
	margin-top: -265px;
	    height: 500px;
        padding: 50px

        border-radius: 20px;
        box-sizing: border-box;



}


.contact-grids {
  margin-top: 2em;
  font-family: 'Georgia', serif;
 
}
.contact-left p{
	color:#000;
	font-weight:500;
	line-height:1.5em;
	font-family: 'Georgia', serif;
	width:80%;
	margin: 0 0 2em 0;
}
.contact-left ul li {
  display: inline-block;
  margin: 7px 0;
  font-family: 'Georgia', serif;
  width: 72%;
}
.contact-left ul li.text-info {
  width: 17%;
  color: #000;
  vertical-align: top;
  font-weight: 900;
  font-family: 'Georgia', serif;
  font-size: 17px;
}
.contact-left {
    margin-left: 470px;
    padding-left: 53px;
    background-color: #ffffffab;
    border-radius: 20px;
    margin-top: px;
    height: 550px;
    width: 650px;
}
.contact-left form input[type="text"] {
  width: 90%;
  padding: 8px;
  font-size: 0.99em;
  font-weight: 600;
  background-color: #1b242fd1;
  border: 3px solid #D6D6D6;
  outline: none;
  font-family: 'Georgia', serif;
  margin-left: 20px;
  color: #FFF;
  border-radius: 20px;
}
.contact-left textarea {
  width: 90%;
  min-height: 150px;
   border-radius: 20px;
  resize: none;
    background-color:#1b242fd1;
    border: 3px solid #D6D6D6;
   font-weight: 600;
   font-size: 0.99em;
  padding: 8px;
  font-family: 'Georgia', serif;
  color: #FFF;
  margin-left: 20px;
  
  margin-bottom:1em;
}
.contact-left input[type="submit"] {
  color: #fff;
  background-color: #e84393;
    background-image: linear-gradient( 315deg , #e84393 0%, #000000 74%);
    Border-radius: 30px;
  padding: 8px 25px;
  display: inline-block;
  margin: -8em 0 0 3em;
  outline:none;
  font-family: 'Georgia', serif;
  border:none;
  font-size: 15px;
}
.contact-left input[type="submit"]:hover{
	
}

		</style>

</head>
<body style="background-image: url('image/co6.jpeg'); 
">
<?php include_once('includes/header.php');?>
<div class="contact content">
 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 
		<div class="contact-main">
			 <h4 style="color: white"><span class="glyphicon glyphicon-home" aria-hidden="true"> <?php  echo htmlentities($row->PageDescription);?></h4>
			 	<br>
			 	<h4 style="color: white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> <?php  echo htmlentities($row->Email);?></h4>
			 		<br>
			 		<h4 style="color: white"><span class="glyphicon glyphicon-phone" aria-hidden="true"> <?php  echo htmlentities($row->MobileNumber);?></h4>
			 		<?php $cnt=$cnt+1;}} ?>

			 <div class="contact-grids">
				 <div class="col-md-6 contact-left" >
				 	<h2><?php  echo htmlentities($row->PageTitle);?></h2>
				 	<br>
					
					 <form method="post">
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="text" name="name" required="true" ></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" class="text" name="email" required="true"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Mobile Number: </li>
							 <li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>					 
						 <ul>
							 <li class="text-info">Message:</li>
							 <li><textarea value="Write here" name="message" required="true"></textarea></li>
						 </ul>						
						 <center><input type="submit" name="submit" value="Submit">		</center>			 
					 </form>
				 </div>
				 
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>