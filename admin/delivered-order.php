
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
 <title>Delivered Order</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>

</head>
<style>
    .module {
    box-shadow: 0 0 3px rgb(0 0 0 / 10%);
    border-color: #e9e9e9;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);

    }
.module-head {
    color: #767676;
    background-color: #f6f6f6;
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
                                <h3>Pending Orders</h3>
                            </div>
                            <div class="module-body table">
    <?php if(isset($_GET['del']))
{?>
                                    <div class="alert alert-error">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Oh snap!</strong>   <?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
                                    </div>
<?php } ?>

                                    <br />

                            
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display table-responsive" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Name</th>
                                            <th width="50">Email /Contact no</th>
                                            <th>Shipping Address</th>
                                            <th>Product </th>
                                            <th>Qty </th>
                                            <th>Amount </th>
                                            <th>Order Date</th>
                                            <th>Action</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                
<tbody>
<?php 
$st='Delivered';
$query=mysqli_query($con,"select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,products.shippingCharge as shippingcharge,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderStatus='$st'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>                                      
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['username']);?></td>
                                            <td><?php echo htmlentities($row['useremail']);?>/<?php echo htmlentities($row['usercontact']);?></td>
                                        
                                            <td><?php echo htmlentities($row['shippingaddress'].",".$row['shippingcity'].",".$row['shippingstate']."-".$row['shippingpincode']);?></td>
                                            <td><?php echo htmlentities($row['productname']);?></td>
                                            <td><?php echo htmlentities($row['quantity']);?></td>
                                            <td><?php echo htmlentities($row['quantity']*$row['productprice']+$row['shippingcharge']);?></td>
                                            <td><?php echo htmlentities($row['orderdate']);?></td>
                                            <td>    <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" target="_blank"><i class="icon-edit"></i></a>
                                            </td>
                                            </tr>

                                        <?php $cnt=$cnt+1; } ?>
                                        </tbody>
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