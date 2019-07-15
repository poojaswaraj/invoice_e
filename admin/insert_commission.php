<?php
// var_dump($_POST);
include('dbinfo.php');
$uid=$_POST['p'];
$cpid=$_POST['cp'];
$cpname=$_POST['cpn'];
$dt=$_POST['dt'];
$pack_amt=$_POST['pack_amt'];
$com=$_POST['com'];
$disc_amt=$_POST['disc_amt'];
$amt=$_POST['amt'];

$sql=mysql_query("INSERT INTO commission(`uid`,`cpid`,`cpname`,`date`,`pack_amt`,`commission_per`,`total_comp_amt`,`comm_amount`)VALUES('$uid','$cpid','$cpname','$dt','$pack_amt','$com','$disc_amt','$amt')")or die(mysql_error());
if($sql==true)
{
	echo "1";
}
else{
	echo "2";
}
?>