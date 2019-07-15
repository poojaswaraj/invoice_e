<?php 

include('dbinfo.php');

$id=$_POST['data'];
$n=$_POST['ename'];
$e=$_POST['eemail'];
$m=$_POST['emobile'];
$p=$_POST['epassword'];
$a=$_POST['eaddress'];
$ud=date('Y-m-d');

$file = $_FILES["eimg"]["name"];


if($file!=null || $file='')
{
 if(isset($_FILES["eimg"]["name"]))  
            {   

              // $uniquesavename=time().uniqid(rand());
              $target_dir ="img/";  
               
                $imageFileType = pathinfo($_FILES["eimg"]["name"],PATHINFO_EXTENSION);    
               $target_file = $target_dir.$_FILES["eimg"]["name"];   


                   if (move_uploaded_file($_FILES["eimg"]["tmp_name"], $target_file)) 
                      {      
                             
                        $img=$target_file;            
                       } 
                   else 
                       {        
                      echo "Sorry, there was an error uploading your file.";      
                       }       
                   
             }

         $sql = mysql_query("UPDATE channel_partner SET `name`='$n',`email`='$e',`mobile`='$m',`photo`='$img',`address`='$a',`password`='$p',`update-date`='$ud' WHERE id='$id'")or die(mysql_error($con));

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
		$sql = mysql_query("UPDATE channel_partner SET `name`='$n',`email`='$e',`mobile`='$m',`address`='$a',`password`='$p',`update-date`='$ud' WHERE id='$id'")or die(mysql_error($con));
    
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