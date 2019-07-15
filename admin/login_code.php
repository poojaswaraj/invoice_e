<?php
	session_start(); 
	include "dbinfo.php";   
	$error=''; 

if (isset($_POST['submit'])) 
{

	$username=$_POST['username'];
	$password=$_POST['password'];
	// $sd=$_POST['sd'];
	// $ed=$_POST['ed'];
	// $cd=date('Y-m-d');
	$sql= mysql_query("SELECT * FROM `user` WHERE  username='".$username."' AND  password='".$password."'");
	$cnt=mysql_num_rows($sql);
	$data=mysql_fetch_array($sql);
	// if($cnt==1 &&($cd>=$sd && $cd<=$ed))
	// {		
	// 	$dt=date_diff($cd,$ed);
	// 	 echo $dt;
		$sadmin=$data['is_super_admin'];
		if($sadmin==1)
			{
				if (mysql_num_rows($sql))
				{
					$_SESSION['user_session']= $data['id'];
	   				header("location:home.php");
     			}
			}
		else{
		
		$qry= mysql_query("SELECT * FROM `channel_partner` WHERE  email='".$username."' AND  password='".$password."'");
		$row=mysql_fetch_array($qry);
	    $status=$row['status'];

		if ($status==0) 
		{
			header('location:index.php?status=3');
		}
		else{
			if(mysql_num_rows($qry))
			{
				$_SESSION['user_session']= $row['id'];
	       		header("location:channel_index.php");
			}
			else 
			{
				header('location:index.php?status=1');
			}
		}
	
	}
}
?>
