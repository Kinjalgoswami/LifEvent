
<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{
    $pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
    $category=$_POST['category'];
    $subcat=$_POST['subcategory'];
    $productname=$_POST['productName'];
    $productcompany=$_POST['productCompany'];
    $productprice=$_POST['productprice'];
    $productpricebd=$_POST['productpricebd'];
    $productdescription=$_POST['productDescription'];
    $productscharge=$_POST['productShippingcharge'];
    $productavailability=$_POST['productAvailability'];
    
$sql=mysqli_query($con,"update  products set category='$category',subCategory='$subcat',productName='$productname',productCompany='$productcompany',productPrice='$productprice',productDescription='$productdescription',shippingCharge='$productscharge',productAvailability='$productavailability',productPriceBeforeDiscount='$productpricebd' where id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

}


?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Update Contact Us</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
    $.ajax({
    type: "POST",
    url: "get_subcat.php",
    data:'cat_id='+val,
    success: function(data){
        $("#subcategory").html(data);
    }
    });
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>   
</head>
<style >
    .controls{
        width: 100%;
    }
    .form-horizontal .control-group, .form-vertical .control-group {
    margin-bottom: 0
}
.form-horizontal .control-group+.control-group, .form-vertical .control-group+.control-group {
    margin-top: 13px;
    padding-top: 13px;

    color : white;
}

    .module {
    box-shadow: 0 0 3px rgb(0 0 0 / 10%);
    border-color: #e9e9e9;
    margin-bottom: 20px;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);

    }
.module-head {
    color: #fff;
    background-color:rgba(0, 0, 0, 0.3);
    border-color: #e9e9e9;
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
.module-body.table {
    padding: 15px 0;
}
.dataTables_wrapper {
    overflow: hidden;
}
.label {
    display: block;
    COLOR: WHITE;
    margin-bottom: 26px;
}


</style>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

             <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                 
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Insert Product</h3>
                            </div>
                            <div class="module-body">

                                    <?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>


                                    <?php if(isset($_GET['del']))
{?>
                                    <div class="alert alert-error">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                                    </div>
<?php } ?>

                                    <br />

            <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select products.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['catname']);?></option> 
<?php $query=mysqli_query($con,"select * from category");
while($rw=mysqli_fetch_array($query))
{
    if($row['catname']==$rw['categoryName'])
    {
        continue;
    }
    else{
    ?>

<option value="<?php echo $rw['id'];?>"><?php echo $rw['categoryName'];?></option>
<?php }} ?>
</select>
</div>
</div>

                                    
<div class="control-group">
<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">

<select   name="subcategory"  id="subcategory" class="span8 tip" required>
<option value="<?php echo htmlentities($row['subcatid']);?>"><?php echo htmlentities($row['subcatname']);?></option>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Service Name</label>
<div class="controls">
<input type="text"    name="productName"  placeholder="Enter Service Name" value="<?php echo htmlentities($row['productName']);?>" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Company</label>
<div class="controls">
<input type="text"    name="productCompany"  placeholder="Enter  Comapny Name" value="<?php echo htmlentities($row['productCompany']);?>" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Service Discount Price </label>
<div class="controls">
<input type="text"    name="productpricebd"  placeholder="Enter Service Price" value="<?php echo htmlentities($row['productPriceBeforeDiscount']);?>"  class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Service Price</label>
<div class="controls">
<input type="text"    name="productprice"  placeholder="Enter Service Price" value="<?php echo htmlentities($row['productPrice']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput"> Description</label>
<div class="controls">
<textarea  name="productDescription"  placeholder="Enter  Description" rows="6" class="span8 tip">
<?php echo htmlentities($row['productDescription']);?>
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Charge</label>
<div class="controls">
<input type="text"    name="productShippingcharge"  placeholder="Enter  Charge" value="<?php echo htmlentities($row['shippingCharge']);?>" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Service Availability</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value="<?php echo htmlentities($row['productAvailability']);?>"><?php echo htmlentities($row['productAvailability']);?></option>
<option value="In Stock">Yes</option>
<option value="Out of Stock">No</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Service Image1</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage1']);?>" width="200" height="100"> <a href="update-image1.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Service Image2</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" width="200" height="100"> <a href="update-image2.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Service Image3</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage3']);?>" width="200" height="100"> <a href="update-image3.php?id=<?php echo $row['id'];?>">Change Image</a>
</div>
</div>
<?php } ?>
    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn">Update</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>


    
                        
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            </div>
        </div><!--/.container-->
    </div><!--/.wrapper-->



                        <a class="btn btn-default" href="dashboard.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
                       </div>
                </div>
                <!-- END Page Content -->
            </main>
            <a class="btn btn-default" href="dashboard.php" style="margin-left:30px;" ><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>

            <!-- END Main Container -->

          <?php include_once('includes/footer.php');?>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
        
    </body>
</html>
<?php }  ?>