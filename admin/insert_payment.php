<?php
include('dbinfo.php');
$id=$_POST['p'];
$sd=$_POST['sdt'];
$ed=$_POST['edt'];
$p=$_POST['package'];
$a=$_POST['amt'];
$dsc=$_POST['dsc'];
$fix_com=$a*(20/100);
$com_amt=$a-$fix_com;

$sql=mysql_query("INSERT INTO new_payment(`u_id`,`startdate`,`enddate`,`packageid`,`fix_commission`,`comp_amount`,`packg_cost`,`description`)VALUES('$id','$sd','$ed','$p','$fix_com','$com_amt','$a','$dsc')");
if($sql==true)
{
	//in payment status 1 is successfull 0 is unsuccessful
	$qry=mysql_query("UPDATE user SET start_date='$sd',end_date='$ed',payment_status=1,is_active=1 where id='$id' ");	
	if ($qry==true) 
	{
		echo "1";
	}
	else{
		echo "2";
	}
	
}
?>