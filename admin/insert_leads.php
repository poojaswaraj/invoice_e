<?php
// var_dump($_POST);
include('dbinfo.php');
$n=$_POST['client-name'];
$e=$_POST['clientemail'];
$m=$_POST['cmobile'];
 $id=$_POST['cid'];
 $ct=$_POST['city'];
 $cp=$_POST['conper'];
$cd=date('Y-m-d');

$qry=mysql_query("SELECT * FROM leads WHERE client_email='$e' OR client_mobile='$m'");
$row=mysql_num_rows($qry);
if($row>0)
{
  echo "2";
}
else
{
  $sql = mysql_query("INSERT INTO leads (`client_name`,`cp_id`,`client_email`,`client_mobile`,`city`,`contact_person`,`createdate`) VALUES ('$n','$id','$e','$m','$ct','$cp','$cd')")or die(mysql_error($con));

    if($sql==true)
      {
        echo "1";
      }
      else
       {
       echo "2";
       }
}
mysql_close($con);
?>