<?php
include('dbinfo.php');
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['mobile'];
 $p=$_POST['password'];
$a=$_POST['address'];
$cd=date('Y-m-d');



$file = $_FILES["img"]["name"];

$qry=mysql_query("SELECT * FROM channel_partner WHERE email='$e'");

 $row=mysql_num_rows($qry);
 $qry1=mysql_query("SELECT * FROM channel_partner WHERE mobile='$m'");
 $row1=mysql_num_rows($qry1);
if($row>0)
{
  echo "2";
  // header('Location:channel-partner.php');
}
else if($row1>0)
{
  echo "3";
}
else
{
if($file!=null || $file='')
{
 if(isset($_FILES["img"]["name"]))  
            {   

              // $uniquesavename=time().uniqid(rand());
              $target_dir ="img/";  
               
                $imageFileType = pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);    
               $target_file = $target_dir.$_FILES["img"]["name"];   


                   if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
                      {      
                             
                        $img=$target_file;            
                       } 
                   else 
                       {        
                      echo "Sorry, there was an error uploading your file.";      
                       }       
                   
             }

         $sql = mysql_query( "INSERT INTO  channel_partner (`name`,`email`,`mobile`,`photo`,`address`,`password`,`create-date`) VALUES ('$n','$e','$m','$img','$a','$p','$cd')")or die(mysql_error($con));

    						if($sql==true)
    							{
    								echo "1";
    							}
    							 else
    							 {
    							 	echo "2";
    							 }

}
            
else{
			$sql = mysql_query( "INSERT INTO  channel_partner (`name`,`email`,`mobile`,`address`,`password`,`photo`,`create-date`) VALUES ('$n','$e','$m','$a','$p','images/default.jpg','$cd')")or die(mysql_error($con));
    

					if($sql==true)
						{
							echo "1";
						}
						 else
						 {
						 	echo "2";
						 }


	 }}
  mysql_close($con);
?>