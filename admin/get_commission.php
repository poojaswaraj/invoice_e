<?php 
include('dbinfo.php');

$id=$_POST['id'];

$sql=mysql_query("SELECT e.cost, b.name as Name,b.id as cpid , c.* FROM `leads` a INNER JOIN channel_partner b ON b.id=a.cp_id RIGHT JOIN user c ON c.username=a.client_email and c.contact=a.client_mobile INNER JOIN new_payment d ON d.u_id=c.id INNER JOIN packages e ON e.id=d.packageid WHERE c.id='$id'" );
	
	$data=mysql_fetch_assoc($sql);

if($sql==true)
{
	echo json_encode($data);
}
else{

	echo "2".mysql_error();
}
	
 ?>