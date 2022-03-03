<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_POST['submit']))
{
    $category=$_POST['category'];
    $description=$_POST['description'];
$sql=mysqli_query($con,"insert into category(categoryName,categoryDescription) values('$category','$description')");
$_SESSION['msg']="Category Created !!";

}

if(isset($_GET['del']))
          {
                  mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
          }

?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Category</title>
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
    color: #fff;

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
.form-horizontal .control-label {
    float: left;
    width: 160px;
    padding-top: 5px;
    text-align: right;
    color: white;
}
.label {
    display: block;
    COLOR: WHITE;
    margin-bottom: 26px;
}

.table .table {
    background-color: #00000000;
}
.table-striped tbody>tr:nth-child(odd)>td,.table-striped tbody>tr:nth-child(odd)>th{background-color:#00000000;}
.module-head table{
    color: #fff;
}
.btn {
    display: inline-block;
    *display: inline;
    *zoom: 1;
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    color: #333333;
    
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
                    <div class="module">
                            <div class="module-head">
                                <h3>Category</h3>
                            </div>
                            <div class="module-body" style="background-color:rgba(0, 0, 0, 0.3);">

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

            <form class="form-horizontal row-fluid" name="Category" method="post" >
                                    
<div class="control-group">
<label class="control-label" for="basicinput">Category Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="category" class="span8 tip" required>
</div>
</div>


<div class="control-group">
                                            <label class="control-label" for="basicinput">Description</label>
                                            <div class="controls">
                                                <textarea class="span8" name="description" rows="5"></textarea>
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
                                <h3>Manage Categories</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Creation date</th>
                                            <th>Last Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $query=mysqli_query($con,"select * from category");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['categoryName']);?></td>
                                            <td><?php echo htmlentities($row['categoryDescription']);?></td>
                                            <td> <?php echo htmlentities($row['creationDate']);?></td>
                                            <td><?php echo htmlentities($row['updationDate']);?></td>
                                            <td>
                                            <a href="edit-category.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
                                            <a href="category.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
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
                
                    <!-- Register Forms -->
                   
                       
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
    </body>
</html>
<?php }  ?>