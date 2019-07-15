<!DOCTYPE html>
<html lang="en">
<head>
<title>Invoice Software Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- fevicon of ebc invoice -->
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />

<link href="dist/css/sb-admin-2.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!----------fonts-------------------->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'ajaxData.php?key=%QUERY',
        limit : 10
    });
});
</script>
 <style type="text/css">
      
      .backimg 
        {
          background-image: url(../images/signupbackground.jpg);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          height: -webkit-fill-available;
        }
   
     </style>
</head>
<body class="backimg"  height="100px; width:100px";>

    <!--  <div class="row">
      <div class="col-sm-12" >
        <div class="head" >
          
        
          <div class="col-sm-2 col-sm-push-10">
            <div class="login" > 
				<?php 
					include('dbinfo.php');
					session_start();
                    if(isset($_SESSION['user_session'])){ 
					?><a href="member/index.php"><?php
                    $query=mysql_query('select * from user_login where user_id="'.$_SESSION['user_session'].'"');
                    $row=mysql_fetch_array($query);
                    $var=$row['user_name'];
                    echo $var;
                    }
                    else
                    {
						?><a href="login.php"><?php
                        echo "Login";
                    }
				?>
			<i class="fa fa-sign-in signin" aria-hidden="true"></i></a> 
			</div>
          </div>
        </div>
      </div>
    </div> -->

<!------ header close ---->
<div class="container">
  <div class="sub-container"> 