<?php
include "config.php";
session_start();
if(!isset($_SESSION['login_user']))
{
	header('location:index.php');
}
else{
  $user_id=$_SESSION['login_user'];
   $sql=mysql_query("SELECT * FROM user a INNER JOIN user_profile b ON a.id=b.user_id WHERE b.id='$user_id'");
  $row=mysql_fetch_array($sql);

    $ed=$row['end_date'];
    $cd=date('Y-m-d');
    $date1 = new DateTime("$ed");
    $date2 = new DateTime("$cd");
    $diff = $date1->diff($date2);
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

    <title>Invoice Software</title>
    <!-- fevicon of ebc invoice -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">


    <!-- Ajax script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

	<style>
	table {
		border-collapse: collapse;
		border-spacing: 0;
		width: 100%;
		border: 1px solid #ddd;
	}

	td {
		border: none;
		text-align: center;
		padding: 8px;
	}
	
	th {
		border: none;
		text-align: center;
		padding: 8px;
		background-color:#ddd;
    
	}

	tr:nth-child(even){background-color: #f2f2f2}
	
	hr {
		margin-top: 10px;
		margin-bottom: 20px;
		border-color: #27b6ee;
	} 
   .dt-buttons{
        margin-left: 350px;
        
    }

  /*  .table_head{

          background-color: #337ab7;
          color: white;
    }*/

	</style>
</head>

<body>

    <!-- Navigation -->
    <div class="header">
    
    <?php 
    $user_id=$_SESSION['login_user'];
     // $utype=$_SESSION['user_type']=$row['type'];
 $sub=mysql_query("SELECT * FROM user_profile WHERE id='$user_id'")or die(mysql_error());
 $array=mysql_fetch_array($sub);
 $sub_id=$array['user_id'];


      $aa12 = mysql_query("SELECT * FROM company WHERE user_id='$sub_id'")or die(mysql_error($connection));
            
        $arr=mysql_fetch_array($aa12);
        $logo=$arr['logo'];
        if(!empty($logo))
        {
     ?>
         <a href="user_dashboard.php?page=home"><img src="<?php echo $logo; ?>" class="company-logo" alt="logo"></a>
     <?php 
        }
        else{
      ?>
	   <a href="user_dashboard.php?page=home"> <img src="images/ebc_logo.png" class="company-logo" alt="logo"></a>
     <?php } ?>

       <div class="setting">
           <div class="setting-sub">

               <span class="setting-part">Welcome <?php
			   $query=mysql_query("SELECT * FROM user_profile WHERE id='".$_SESSION['login_user']."'");
			   $row=mysql_fetch_array($query);
         $us_id=$row['user_id'];
			   echo $row['name'];
         // echo $row['admin_type'];
			   ?></span>&nbsp;|&nbsp;
               <!-- <span class="setting-part"><a href="dashboard.php?page=setting" title='View Setting'> <span class="glyphicon glyphicon-cog"></span>&nbsp;</a></span>&nbsp;|&nbsp; -->
               <span class="setting-part"><a href="logout.php" title='Logout'><span class="glyphicon glyphicon-off"></span>&nbsp;</a></span></div>
       </div>
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top nav-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header  navbar-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
           
                <!-- <a class="navbar-brand" href="logproduct.php"> + New Invoice</a> -->
         <a class="navbar-brand" href="#"> <?php echo ' Days Remaining For Renew :'.$diff->days; ?></a>     
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php 
            $aa1 = mysql_query("SELECT * FROM user_profile WHERE id='$user_id'")or die(mysql_error($connection));
            
                $rr=mysql_fetch_array($aa1);

                 $inv=$rr['invoice'];
                 $cust= $rr['customer'];
                 $esti = $rr['estimates'];
                 $prod = $rr['product'];
                 $voch = $rr['expenses'];
                 $purch = $rr['gst_mod'];
            ?>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-tab-menu">
                    <li>
                        <a href="user_dashboard.php?page=home">Dashboard</a>
                    </li>
        
                   <!--  <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>   -->                  
                    
                    <?php 
                  
                      if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes'  )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                       <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries </a>
                    </li>
                      <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $purch=='Yes' )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes'  )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                       <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes'  )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes'  )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                       <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes'  )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                        <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                       <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $prod=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $voch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes' && $purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $prod=='Yes' && $voch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $prod=='Yes' && $purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                      </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $prod=='Yes' && $purch=='Yes' )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $voch=='Yes' && $purch=='Yes' )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes' )
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                     <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $voch=='Yes' )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $prod=='Yes' && $purch=='Yes' )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $voch=='Yes' && $purch=='Yes' )
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes' )
                        {
                    ?>
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                     <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($esti=='Yes' && $prod=='Yes' && $voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $esti=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $voch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $cust=='Yes' && $purch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                      <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $prod=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                     <li>
                        <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $voch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                     <li>
                        <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes' && $purch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                     <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $prod=='Yes' && $voch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $prod=='Yes' && $purch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                         <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                      <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                         <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $prod=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $voch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes' && $purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                    <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $prod=='Yes' && $voch=='Yes')
                        {
                    ?>
                      
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $prod=='Yes' && $purch=='Yes')
                        {
                    ?>
                      
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                      
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($esti=='Yes' && $prod=='Yes' && $voch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                        <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                     <?php }
                     else if($esti=='Yes' && $prod=='Yes' && $purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>  
                    <li>
                        <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($esti=='Yes' && $voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li>   
                     <li>
                        <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($prod=='Yes' && $voch=='Yes' && $purch=='Yes' )
                        {
                    ?>
                      
                     <li>
                         <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>


                   <?php }
                     else if($inv=='Yes' && $cust=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $esti=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                    <li>
                      <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <?php }
                     else if($inv=='Yes' && $prod=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $voch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($inv=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($cust=='Yes' && $esti=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $prod=='Yes')
                        {
                    ?>
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $voch=='Yes')
                        {
                    ?>
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                     <?php }
                     else if($cust=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                       <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($esti=='Yes' && $prod=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                     else if($esti=='Yes' && $voch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($esti=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                       <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                     <?php }
                     else if($prod=='Yes' && $voch=='Yes')
                        {
                    ?>
                    <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                     <?php }
                     else if($prod=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                       <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                    <?php }
                     else if($voch=='Yes' && $purch=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <li>
                       <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>
                   
                    <?php 
                    }
                    else if($inv=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=invoices">Invoices</a>
                    </li>
                    <?php 
                    }
                    else if($cust=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=customers">Customers</a>
                    </li>
                    <?php }
                     else if($esti=='Yes')
                        {
                    ?>
                     <li>
                        <a href="user_dashboard.php?page=profarmas">Proforma Invoices</a>
                    </li> 
                     <li>
                         <a href="user_dashboard.php?page=estimates">Estimates</a>
                    </li>
                    <?php }
                    else if($prod=='Yes')
                        {
                    ?>
                     <li>
                          <a href="user_dashboard.php?page=product">Product</a>
                    </li>
                    <?php }
                    else if($voch=='Yes')
                        {
                    ?>
                    <li>
                          <a href="user_dashboard.php?page=voucher">Expenses</a>
                    </li>
                    <?php }
                     else if($purch=='Yes')
                        {
                    ?>
                    <li>
                        <a href="user_dashboard.php?page=import_gst">GST Entries</a>
                    </li>


                    <?php } ?>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <?php 
            if(!isset($_GET['page']))
            $page="home";
                else
					$page=$_GET['page'];
                switch($page)
                {
                    case "home":
                        include("home.php");
                    break;
					
					          case "invoices":
                        include("invoices.php");
                    break;
				
				            case "new_invoice":
                        include("new_invoice.php");
                    break;
                    case "convert_invoice":
                        include("convert_invoice.php");
                    break;

                    case "edit_profarma_invoice":
                        include("edit_profarma_invoice.php");
                    break;

                    case "edit_new_invoice":
                        include("edit_new_invoice.php");
                    break;

                    case "edit_recurring_invoice":
                        include "edit_recurring_invoice.php";
                    break;

                    case "profarmas":
                        include "profamas.php";
                    break;

                    case "edit_estimate":
                        include("edit_estimate.php");
                    break;
					
					          case "recurring_invoices":
                        include("recurring_invoices.php");
                    break;
					
                    case "new_recurring_invoice":
                        include("new_recurring_invoice.php");
                    break;
                     
                    case 'profarma_incoice':
                        include ("profarma_incoice.php");
                    break;

					         case "customers":
                        include("customers.php");
                    break;
					
					          case "estimates":
                        include("estimates.php");
                    break;
					
                    case "new_estimate":
                        include("new_estimate_invoice.php");
                    break;

					         case "product":
                        include("product.php");
                    break;
					
					         case "setting":
                        include("setting.php");
                    break;

                    case 'voucher':
                        include "voucher.php";
                    break;

                    case 'import_gst':
                        include "import_gst.php";
                    break;

                    case 'gst_export':
                        include "gst_export.php";
                    break;

                    case "forget_password":
                        include("forget_password.php");
                    break;

                    case "new_challan":
                        include("new_challan.php");
                    break;

                    case "challans":
                        include("challans.php");
                    break;

                    case "edit_challan":
                        include("edit_challan.php");
                    break;

                    case "genrate_invoice":
                        include("genrate_invoice.php");
                    break;
                       
					          default:
                        include("home.php");
                    break;
      				  }
              ?>
		
		
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12"><hr>
                    <p>Copyright &copy; EBC Solutions Pvt. Ltd 2017</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
  <!-- scripts -->
  
    </script>
    <!-- jQuery -->
    <!-- <script language="javascript" src="js/users.js" type="text/javascript"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="datatables/media/js/dataTables.bootstrap.min.js"></script>

 <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"> </script>
    
<script type="text/javascript">
  $(document).ready(function() {
   
         $('#example').DataTable({

                "scrollX": true,
              "dom": 'lBfrtip',
     "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                exportOptions: {
                   columns: [ 0, 1, 2]
                },
                buttons: [
                    // 'copy',
                    'excel'
                    // 'csv',
                    // 'pdf',
                    // 'print'
                ]
            }
        ]
   
  });

$("[data-toggle=tooltip]").tooltip();
 
var table=$('#example').DataTable();

      table
      .order([[0,'desc']])
      .draw(false);

  });
</script>
<!-- Script for autocomplete -->
   <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
 
    <!-- script for datatable buttons -->

<!-- <script type="text/javascript">

        $(document).ready(function() {
           $('#example').DataTable();
    } ); 
 </script> -->

</body>
</html>
