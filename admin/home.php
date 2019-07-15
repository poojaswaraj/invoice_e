<?php
error_reporting(1);
session_start();
include "dbinfo.php";
if(isset($_SESSION['user_session']))
{
    $user_id=$_SESSION['user_session'];
    $sql=mysql_query("SELECT * FROM user WHERE id='$user_id'");
  $row=mysql_fetch_array($sql);

//  $ed=$row['end_date'];
//  $cd=date('Y-m-d');


// $date1 = new DateTime("$ed");
// $date2 = new DateTime("$cd");
// $diff = $date1->diff($date2);

// echo $diff->days . ' days remaining '; 
// echo "<script>alert('".$diff->days.'days remaining'. "')</script>";
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Billing Software Admin</title>
     <!-- fevicon of ebc invoice -->
<link rel="shortcut icon" href="../images/ebc_logo1.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <!-- <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div id="wrapper">
		<?php include("dbinfo.php"); ?>
		<?php include("title_bar.php"); ?>
        <?php include("slide_menu.php"); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
             <div class="row">
                   
        				<?php 
                    if(!isset($_GET['page']))
                        $page="home";
                    else
                        $page=$_GET['page'];
                    switch($page)
                    {
        			    case "homepage":
                          include("homepage_content.php");
                        break;

                        case  "Display_Users":
                          include("display_users.php");
                        break;
                        
                        case  "packages":
                          include("packages.php");
                        break;
        			
        			    case "Channel_partners":
                          include("channel-partner.php");
                        break; 

        		        case "user-profile":
                            include("userprofile.php");
                        break;

                        case "paid_commission":
                          include("paid_commission.php");
                        break;
        			
        		case "payment_received":
                          include("payment_received.php");
                        break;
        			
                        default:
                          include("dashboard.php");
                        break;
                    } 
                  ?>
              </div>
                <!-- /.row -->
				<?php include("footer.php");?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--<script src="../bower_components/jquery/dist/jquery.min.js"></script>-->
    <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
            });
            var table=$('#example').DataTable();
                table
                  .order([[0,'desc']])
                  .draw(false);
        });
    </script>

</body>

</html>
