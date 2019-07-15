<?php
    error_reporting(1);
    session_start();
    include "dbinfo.php";
    if(isset($_SESSION['user_session']))
    {
        $user_id=$_SESSION['user_session'];
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
    <title>Billing software Channel Partner</title> 
    <!-- fevicon of ebc invoice -->
    <link rel="shortcut icon" href="../images/ebc_logo1.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
     <!-- <link href="css/main.css" rel="stylesheet"> -->
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
		<?php include("channel_titlebar.php"); ?>
        <?php include("channel_side_bar.php"); ?>

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
					
					
					case "display_leads":
                     include("leads_details.php");
                   break;
					
					case "chan-user-profile":
                         include("channel_userprofile.php");
                    break;
					
					case "lead_change_pass":
                        include("lead_change_pass.php");
                   break;
					
					case "points_credited":
                         include("points_credited.php");
                     break;
					
					// case "change_password":
     //                    include("change_password.php");
     //                break;
					
                    default:
                        include("channel_dashboard.php");
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
