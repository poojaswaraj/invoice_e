<?php
include('dbinfo.php');
  
$id=$_POST['id'];

$check=mysql_query("SELECT  is_active From user WHERE id='$id'") or die(mysqli_error($con));
$fetch=mysql_fetch_array($check);

if($fetch['is_active']=='0')
{
    $query = mysql_query("UPDATE user SET  is_active ='1' WHERE id='$id'") or die(mysql_error($con));

    if($query==true)
    {
        echo"1";
    }
    else
    {
        echo"error".mysql_error($con);
    }
}
else
{
    $query = mysql_query("UPDATE user SET  is_active ='0' WHERE id='$id'") or die(mysql_error($con));

    if($query==true)
    {
        echo"2";
    }
    else
    {
        echo"error".mysql_error($con);
    }
}

?>