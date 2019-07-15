<?php
//var_dump($_POST);
 include('dbinfo.php');
$uid=$_POST['p'];
  $op=$_POST['op'];
  $np=$_POST['np'];
  $cnp=$_POST['cnp'];
  
  $qry=mysql_query("SELECT * FROM channel_partner WHERE id='$uid' AND password='$op'");
      $row=mysql_num_rows($qry);
      if($row==1)
 { 
  
  $sql=mysql_query("UPDATE channel_partner SET password='$np' WHERE id='$uid'")or die(mysql_error());
    if($sql==true)
    {
      echo "1";
    }
}
else
  {
    echo "2";
  }

?>
