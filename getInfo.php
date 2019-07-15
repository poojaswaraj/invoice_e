<?php
error_reporting(0);
include "config.php";
$id=$_POST['eid'];
$hidd=$_POST['hidd'];
	$query = mysql_query("select contact_person,due_amt,customer_name,number from common where id='$id'")or die(mysql_error($connection));
		$str11=mysql_fetch_object($query);
		$str[0]=$str11->contact_person;
		$str1[1]=$str11->due_amt;
		$str2[1]=$str11->customer_name;
		$str3[1]=$str11->number;
		$query1 = mysql_query("select company_name,company_phone from company where user_id='$hidd'")or die(mysql_error($connection));
		$str22=mysql_fetch_object($query1);
		$str21[0]=$str22->company_name;
        $str23[0]=$str22->company_phone;
		//$str1[1]="tk";

if(is_numeric($str[0]))
{
	$array=array($str[0],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
	$data=explode(" - ",$str[0]);
if(is_numeric($data[1]))
{
	$array=array($data[1],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
$data=explode("- ",$str[0]);
	if(is_numeric($data[1]))
{
	$array=array($data[1],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
$data=explode(" -",$str[0]);
	if(is_numeric($data[1]))
{
	$array=array($data[1],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}

else
{
	$data=explode(" ",$str[0]);
	$data1=explode(" ",$data[2]);
	if(is_numeric($data1[0]))
{
	$array=array($data1[0],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
	$data=explode("-",$str[0]);
	if(is_numeric($data[1]))
{
	$array=array($data[1],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
$data=explode(" (",$str[0]);
$data1=explode(")",$data[1]);
	if(is_numeric($data1[0]))
{
	$array=array($data1[0],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else{
    $data=explode(" ",$str[0]);
	if(is_numeric($data[1]))
{
	$array=array($data[1],$str1[1],$str2[1],$str3[1],$str21[0],$str23[0]);
	echo json_encode($array);
}
else
{
	 echo 1;
}

}	
}
}
}
}

}
	
}

	/*if($query==true)
	{
		echo json_encode($data);
	}
	else{
		echo "error".mysql_error($connection);
	}*/


?>