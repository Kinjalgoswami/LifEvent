<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{
    
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
    $productimage1=$_FILES["productimage1"]["name"];
    $productimage2=$_FILES["productimage2"]["name"];
    $productimage3=$_FILES["productimage3"]["name"];
//for getting product id
$query=mysqli_query($con,"select max(id) as pid from products");
    $result=mysqli_fetch_array($query);
     $productid=$result['pid']+1;
    $dir="productimages/$productid";
if(!is_dir($dir)){
        mkdir("productimages/".$productid);
    }

    move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$productid/".$_FILES["productimage1"]["name"]);
    move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/$productid/".$_FILES["productimage2"]["name"]);
    move_uploaded_file($_FILES["productimage3"]["tmp_name"],"productimages/$productid/".$_FILES["productimage3"]["name"]);
$sql=mysqli_query($con,"insert into products(category,subCategory,productName,productCompany,productPrice,productDescription,shippingCharge,productAvailability,productImage1,productImage2,productImage3,productPriceBeforeDiscount) values('$category','$subcat','$productname','$productcompany','$productprice','$productdescription','$productscharge','$productavailability','$productimage1','$productimage2','$productimage3','$productpricebd')");
$_SESSION['msg']="Product Inserted Successfully !!";

}


?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Insert product</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    
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

</style>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

             <?php include_once('includes/sidebar.php');?>

          <?php include_once('includes/header.php');?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                   
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Insert Services</h3>
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

<div class="control-group">
<label class="control-label" for="basicinput">Category</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="">Select Services</option> 
<?php $query=mysqli_query($con,"select * from category");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['categoryName'];?></option>
<?php } ?>
</select>
</div>
</div>

                                    
<div class="control-group">
<label class="control-label" for="basicinput">Sub Category</label>
<div class="controls">
<select   name="subcategory"  id="subcategory" class="span8 tip" required>
</select>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Service Name</label>
<div class="controls">
<input type="text"    name="productName"  placeholder="Enter Service Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput"> Company name</label>
<div class="controls">
<input type="text"    name="productCompany"  placeholder="Enter Product Comapny Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Service Price </label>
<div class="controls">
<input type="text"    name="productpricebd"  placeholder="Enter Service Price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Service Discount Price</label>
<div class="controls">
<input type="text"    name="productprice"  placeholder="Enter Service Discount Price" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Description</label>
<div class="controls">
<textarea  name="productDescription"  placeholder="Enter Description" rows="6" class="span8 tip">
</textarea>  
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput"> Other Charge</label>
<div class="controls">
<input type="text"    name="productShippingcharge"  placeholder="Enter Product Shipping Charge" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput"> service Availability</label>
<div class="controls">
<select   name="productAvailability"  id="productAvailability" class="span8 tip" required>
<option value="">Select</option>
<option value="In Stock">Yes</option>
<option value="Out of Stock">No</option>
</select>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Service Image1</label>
<div class="controls">
<input type="file" name="productimage1" id="productimage1" value="" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Service Image2</label>
<div class="controls">
<input type="file" name="productimage2"  class="span8 tip" required>
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Service Image3</label>
<div class="controls">
<input type="file" name="productimage3"  class="span8 tip">
</div>
</div>

    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn">Insert</button>
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


  
                        
                       </div>
                </div>
                <!-- END Page Content -->
            </main>
           
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
          <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } );
    </script>

    </body>
</html>
<?php }  ?>