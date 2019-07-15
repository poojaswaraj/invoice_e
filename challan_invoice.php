<?php
include "config.php";

// if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {

	$sql= mysql_query("SELECT * FROM common where id='" . $_POST["users"][$i] . "'");

	$data=mysql_fetch_array($sql);
	$id= $data['id'];
	$cust_id= $data['customer_id'];

	$query=mysql_query("INSERT INTO challan_invoice (`cha_id`,`cust_id`) VALUES ('$id','$cust_id')");
	// if($query==true)
	// {
	// 	$qu=mysql_query("SELECT * FROM challan_invoice");
	// 		$row=mysql_fetch_array($qu);
	// 		// $cid=$row['cust_id'];
	// 	header("Location:dashboard.php?page=genrate_invoice");

	// }

}
if($query==true)
	{
header("Location:dashboard.php?page=genrate_invoice");
}
?>
