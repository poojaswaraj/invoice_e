<?php 

include('dbinfo.php');

$id=$_POST['data'];
$n=$_POST['edname'];
$e=$_POST['edemail'];
$m=$_POST['edmobile'];
$c=$_POST['edct'];
$a=$_POST['edcp'];




         $sql = mysql_query("UPDATE leads SET `client_name`='$n',`client_email`='$e',`client_mobile`='$m',`city`='$c',`contact_person`='$a' WHERE id='$id'")or die(mysql_error($con));

			if($sql==true)
				{
					echo "1";
				}
				 else
				 {
				 	echo "2";
				 }


  mysql_close($con);

 ?>