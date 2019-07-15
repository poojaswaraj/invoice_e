<?php
include('dbinfo.php');
$pn=$_POST['pname'];
$pc=$_POST['pcost'];
$pd=$_POST['dsc'];

$sql=mysql_query("INSERT INTO packages(`package_name`,`cost`,`description`)VALUES('$pn','$pc','$pd')");
if($sql==true)
echo "1";
else
echo "2";
?>