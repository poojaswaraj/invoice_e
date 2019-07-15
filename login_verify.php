 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Billing Software</title>
    <!-- fevicon of ebc invoice -->
    <link rel="shortcut icon" href="images/ebc_logo1.png" type="image/x-icon" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
<link href="css/sweetalert.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
#wrap{
    background: none; 
    width: 1000px; 
    margin: 0 auto; 
	
    margin-top: 100px; 
    border: none; 
    height: 500px; 
    background-color: #f6f6f6;
}

</style>
	
	</head>

<body>
<div id="wrap">
 <div class="product-wall">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
                <div class="panel-body" style="margin:100px 0px">
				<center><img src="images/it-freedom-logo.png" alt="test" height="50px; width:50px";></center>
                <form role="form" name="form1" action="" method="POST">
					
						<label>We need your Reconfirmation</label> 
                        <button type="submit" name="btn_verify" id="btn_verify" class="btn btn-lg btn-info btn-block">Yes</button>
                    </form>
                </div>
            </div>
        </div>
	</div>
	</div>
<?php 
include 'config.php';
if (isset($_POST['btn_verify'])) 
{
	$hash=$_GET['hash'];
	
	$query = mysql_query("UPDATE `user` SET `is_active`=1 WHERE `hash`='".$hash."'");
	header('location:index.php');
}
?>
</body>
</html>
