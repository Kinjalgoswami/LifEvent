<?php
session_start();
include('include/config.php');
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{

?>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>User logs</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
.table .table {
    background-color: #00000000;
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
                
                   
                    <div class="content">

    <div class="module">
                            <div class="module-head">
                                <h3>Manage Users</h3>
                            </div>
                            <div class="module-body table">
    
                            
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> User Email</th>
                                            <th>User IP </th>
                                            <th>Login Time</th>
                                            <th>Logout Time </th>
                                            <th>Status </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $query=mysqli_query($con,"select * from userlog");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                  
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['userEmail']);?></td>
                                            <td><?php echo htmlentities($row['userip']);?></td>
                                            <td> <?php echo htmlentities($row['loginTime']);?></td>
                                            <td><?php echo htmlentities($row['logout']); ?></td>
                                        <td><?php $st=$row['status'];

if($st==1)
{
    echo "Successfull";
}
else
{
    echo "Failed";
}
                                         ?></td>
                                            
                                            
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