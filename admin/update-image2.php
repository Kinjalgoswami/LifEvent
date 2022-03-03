
<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{
    $pid=intval($_GET['id']);// product id
if(isset($_POST['submit']))
{
    $productname=$_POST['productName'];
    $productimage2=$_FILES["productimage2"]["name"];

//dir="productimages";
//unlink($dir.'/'.$pimage);


    move_uploaded_file($_FILES["productimage2"]["tmp_name"],"productimages/$pid/".$_FILES["productimage2"]["name"]);
    $sql=mysqli_query($con,"update  products set productImage2='$productimage2' where id='$pid' ");
$_SESSION['msg']="Product Image Updated Successfully !!";

}


?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>2</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                                <h3>Update Product Image 2</h3>
                            </div>
                            <div class="module-body">

                                    <?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>



                                    <br />

            <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

$query=mysqli_query($con,"select productName,productImage2 from products where id='$pid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
  


?>


<div class="control-group">
<label class="control-label" for="basicinput">Product Name</label>
<div class="controls">
<input type="text"    name="productName"  readonly value="<?php echo htmlentities($row['productName']);?>" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Current Product Image1</label>
<div class="controls">
<img src="productimages/<?php echo htmlentities($pid);?>/<?php echo htmlentities($row['productImage2']);?>" width="200" height="100"> 
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">New Product Image2</label>
<div class="controls">
<input type="file" name="productimage2" id="productimage2" value="" class="span8 tip" required>
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
