<?php
include('../dbinfo.php');
//------------------------ add category ----------------------------------
if(isset($_POST['btn_seg']))
{
	$id=$_POST['txt_id'];
	$name=$_POST['txt_name'];
	$desc=$_POST['txt_desc'];
	if($id=='')
	{
		$query=mysql_query("INSERT INTO `master_category`(`cy_name`, `cy_desc`) VALUES('$name','$desc')")or die(mysql_error());
		if($query)
			{header('location:index.php?page=add_segment&status=1');}
			else
			{header('location:index.php?page=add_segment&status=3');}
	}
	else
		{header("location:index.php?page=add_segment&status=3");}
}

if(isset($_POST['update_seg']))
{
	$id=$_POST['txt_id'];
	$name=$_POST['txt_name'];
	$desc=$_POST['txt_desc'];
	
	$uquery=mysql_query("UPDATE `master_category` SET `cy_name`='$name',`cy_desc`='$desc' WHERE `cy_id`='$id'")or die(mysql_error());
	if($uquery)
	{header('location:index.php?page=add_segment&status=2');}
	else
	{header('location:index.php?page=add_segment&status=3');}
}
//------------------------ add sub category ----------------------------------
if(isset($_POST['btn_subseg']))
{
	$id=$_POST['txt_id'];
	$seg=$_POST['txt_seg'];
	$subseg=$_POST['txt_subseg'];
	$subdesc=$_POST['txt_subdesc'];
	if($id=='')
	{
		$query=mysql_query("INSERT INTO `master_sub_category`(`cy_id`, `sc_name`, `sc_desc`) VALUES('$seg','$subseg','$subdesc')")or die(mysql_error());
		if($query)
			{header('location:index.php?page=add_sub_segment&status=1');}
			else
			{header('location:index.php?page=add_sub_segment&status=3');}
	}
	else
		{header("location:index.php?page=add_sub_segment&status=3");}
}

if(isset($_POST['update_subseg']))
{
	$id=$_POST['txt_id'];
	$seg=$_POST['txt_seg'];
	$subseg=$_POST['txt_subseg'];
	$subdesc=$_POST['txt_subdesc'];	
	$uquery=mysql_query("UPDATE `master_sub_category` SET `cy_id`='$seg',`sc_name`='$subseg' ,`sc_desc`='$subdesc' WHERE `sc_id`='$id'")or die(mysql_error());
	if($uquery)
	{header('location:index.php?page=add_sub_segment&status=2');}
	else
	{header('location:index.php?page=add_sub_segment&status=3');}
}

//------------------------ add package ----------------------------------
if(isset($_POST['btn_pack']))
{
	$id=$_POST['txt_id'];
	$pack=$_POST['txt_pack'];
	$desc=$_POST['txt_desc'];
	$start=$_POST['txt_start'];
	$end=$_POST['txt_end'];
	$cust=$_POST['txt_cust'];
	
	$query=mysql_query("INSERT INTO `package`(`p_name`, `p_desc`, `p_start_dt`, `p_end_dt`, `user_id`, `record_date`) 
	VALUES ('$pack', '$desc', '$start', '$end', '$cust', now())")or die(mysql_error());
	if($query)
		{header('location:index.php?page=package&status=1');}
		else
		{header('location:index.php?page=package&status=3');}
}
?>