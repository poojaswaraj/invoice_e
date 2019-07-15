<?php
include('dbinfo.php');
$n=$_POST['name'];
$email=$_POST['email'];
$m=$_POST['mobile'];
$p=$_POST['password'];
$a=$_POST['address'];
$cd=date('Y-m-d');

$qry=mysql_query("SELECT * FROM channel_partner WHERE email='$email'");

$row=mysql_num_rows($qry);
$qry1=mysql_query("SELECT * FROM channel_partner WHERE mobile='$m'");
$row1=mysql_num_rows($qry1);
if($row>0)
{
  echo "2";
}
else if($row1>0)
{
  echo "3";
}
else
{
		$sql = mysql_query("INSERT INTO  channel_partner (`name`,`email`,`mobile`,`address`,`password`,`photo`,`create-date`,`status`) VALUES ('$n','$email','$m','$a','$p','images/default.jpg','$cd','0')")or die(mysql_error($con));
    
					if($sql==true)
						{
  						$body="<p>Dear&nbsp;".$n.",</p>&nbsp;Thank you for your application as a part of our organization.<br>We are in process of evaluating your application our team will get in touch with you in next 24 working hrs.<br><br>Once again Thank You!<br><br><p>Thanks and Regards,<br>Amit Ranawade<br>(Operational and Technical Head).</p>";         
                require_once('../PHPMailer_5.2.4/class.phpmailer.php');
                $mail= new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPDebug=1;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='';
                $mail->Host = "mail.e-bc.in";
                $mail->Port = 587;
                $mail->IsHTML (true);
                $mail->Username = 'cs@e-bc.in';
                $mail->Password = 'cs@2017';
                $mail->SetFrom("cs@e-bc.in");
                $mail->Subject = "Channel Partner Registration";
                // $mail->Body ="test";
                $mail->MsgHTML($body);
                $mail->AddAddress($email);

                if(!$mail->Send()) {
                  // echo "Mailer Error" . $mail->ErrorInfo;
                  echo "2";
                }
                else{
                  echo "1";
                }
						}
						 else
						 {
						 	echo "2";
						 }


	 }
  mysql_close($con);
?>