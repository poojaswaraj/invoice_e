<?php
 include('dbinfo.php');
 $sql=mysql_query("SELECT * FROM user");
$row=mysql_fetch_array($sql);

 $ed=$row['end_date'];
 $cd=date('Y-m-d');


$date1 = new DateTime("$ed");
$date2 = new DateTime("$cd");
$diff = $date1->diff($date2);

echo $diff->days . ' days remaining '; 
?>