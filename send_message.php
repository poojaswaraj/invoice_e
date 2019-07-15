<?php
$mobile=$_POST['mobn'];
$message=$_POST['message'];

	$sms = urlencode($message);
	
	//$url= "http://49.50.67.32/smsapi/httpapi.jsp?username=teqxAPI&password=teqxAPI00&from=TEQXCL&to=".$mobile."&text=".$sms."&coding=0";
	$url= "http://198.15.103.106/API/pushsms.aspx?loginID=AmitRanawade&password=Amit@111&mobile=".$mobile."&text=".$sms."&senderid=DEMOOO&route_id=1&Unicode=0";
	file_get_contents($url);
	
	//header("location:our-services.php");

echo 1;
?>