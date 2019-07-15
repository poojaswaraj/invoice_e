<?php 

include('dbinfo.php');

$id=$_POST['data'];
$pn=$_POST['epname'];
$pc=$_POST['epcost'];
$pd=$_POST['epdsc'];



            

		$sql = mysql_query("UPDATE packages SET `package_name`='$pn',`cost`='$pc',`description`='$pd' WHERE id='$id'")or die(mysql_error($con));
    
		if($sql==true)
			
				echo "1";
			
			 

	
  mysql_close($con);

 ?>