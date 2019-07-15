<?php
include"../dbinfo.php";

if(isset($_GET['dc_id'])){
	$result=mysql_query("DELETE FROM `category` WHERE `cy_id`='".$_GET['dc_id']."'")or die(mysql_error());
	if($result)
	header("location:index.php?page=add_segment");
}

?>