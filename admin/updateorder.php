<?php
session_start();

include_once 'include/config.php';
if (strlen($_SESSION['odmsaid']==0)) {
  header('location:logout.php');
  } else{
$oid=intval($_GET['oid']);
if(isset($_POST['submit2'])){
$status=$_POST['status'];
$remark=$_POST['remark'];//space char

$query=mysqli_query($con,"insert into ordertrackhistory(orderId,status,remark) values('$oid','$status','$remark')");
$sql=mysqli_query($con,"update orders set orderStatus='$status' where id='$oid'");
echo "<script>alert('Order updated sucessfully...');</script>";
//}
}

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Update order</title>
<link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
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
               <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Update Booking</h3>
                            </div>
                            <div class="module-body">

                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Update Booking !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Booking ID:</b></td>
      <td  class="fontkink"><?php echo $oid;?></td>
    </tr>
    <?php 
$ret = mysqli_query($con,"SELECT * FROM ordertrackhistory WHERE orderId='$oid'");
     while($row=mysqli_fetch_array($ret))
      {
     ?>
        
    
    
      <tr height="20">
      <td class="fontkink1" ><b>At Date:</b></td>
      <td  class="fontkink"><?php echo $row['postingDate'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Status:</b></td>
      <td  class="fontkink"><?php echo $row['status'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Remark:</b></td>
      <td  class="fontkink"><?php echo $row['remark'];?></td>
    </tr>

   
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
   <?php } ?>
   <?php 
$st='Delivered';
   $rt = mysqli_query($con,"SELECT * FROM orders WHERE id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
   <tr><td colspan="2"><b>
      Product Delivered </b></td>
   <?php }else  {
      ?>
   
    <tr height="50">
      <td class="fontkink1">Status: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required="required" >
          <option value="">Select Status</option>
                 <option value="in Process">In Process</option>
                  <option value="Delivered">Delivered</option>
        </select>
        </span></td>
    </tr>

     <tr style=''>
      <td class="fontkink1" >Remark:</td>
      <td class="fontkink" align="justify" ><span class="fontkink">
        <textarea cols="50" rows="7" name="remark"  required="required" ></textarea>
        </span></td>
    </tr>
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>
    <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
<?php } ?>
</table>
 </form>
</div>
                        
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