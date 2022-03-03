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
$sql=mysqli_query($con,"insert into subcategory(categoryid,subcategory) values('$category','$subcat')");
$_SESSION['msg']="SubCategory Created !!";

}

if(isset($_GET['del']))
          {
                  mysqli_query($con,"delete from subcategory where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCategory deleted !!";
          }

?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Sub Services</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
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
    color: white;

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
.table .table {
    background-color: #ffffff00;
}
.table-striped tbody>tr:nth-child(odd)>td,.table-striped tbody>tr:nth-child(odd)>th{background-color:#00000000;}
.module-head table{
    color: #fff;
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
                                <h3>Sub Services</h3>
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

            <form class="form-horizontal row-fluid" name="subcategory" method="post" >

<div class="control-group">
<label class="control-label" for="basicinput">Services</label>
<div class="controls">
<select name="category" class="span8 tip" required>
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
<label class="control-label" for="basicinput">SubServices Name</label>
<div class="controls">
<input type="text" placeholder="Enter SubCategory Name"  name="subcategory" class="span8 tip" required>
</div>
</div>



    <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" class="btn">Create</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>


    <div class="module">
                            <div class="module-head">
                                <h3>Sub Category</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Services</th>
                                            <th>Description</th>
                                            <th>Creation date</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $query=mysqli_query($con,"select subcategory.id,category.categoryName,subcategory.subcategory,subcategory.creationDate,subcategory.updationDate from subcategory join category on category.id=subcategory.categoryid");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['categoryName']);?></td>
                                            <td><?php echo htmlentities($row['subcategory']);?></td>
                                            <td> <?php echo htmlentities($row['creationDate']);?></td>
                                            <td><?php echo htmlentities($row['updationDate']);?></td>
                                            <td>
                                            <a href="edit-subcategory.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
                                            <a href="subcategory.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>
                                        
                                </table>
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