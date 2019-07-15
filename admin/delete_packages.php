<?php
include('dbinfo.php');
$id=$_POST['id'];
// $sql=mysql_query("DELETE FROM channel_partner WHERE id='$id'");
// $row=mysql_num_rows($sql);
$sql=mysql_query("UPDATE packages SET status=0 WHERE id='$id'");
if($sql==true)
echo "1";
else
echo "2";
?>