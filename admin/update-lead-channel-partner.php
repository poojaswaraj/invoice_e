<?php 

include('dbinfo.php');

$uid = $_POST['uid'];
$n=$_POST['n'];
$e=$_POST['e'];
$m=$_POST['cn'];
$a=$_POST['a'];
$ud=date('Y-m-d');

$file = $_FILES["efile"]["name"];


if($file!=null || $file='')
{
 if(isset($_FILES["efile"]["name"]))  
            {   

              // $uniquesavename=time().uniqid(rand());
              $target_dir ="img/";  
               
                $imageFileType = pathinfo($_FILES["efile"]["name"],PATHINFO_EXTENSION);    
               $target_file = $target_dir.$_FILES["efile"]["name"];   


                   if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file)) 
                      {      
                             
                        $img=$target_file;            
                       } 
                   else 
                       {        
                      echo "Sorry, there was an error uploading your file.";      
                       }       
                   
             }

         $sql = mysql_query("UPDATE channel_partner SET `name`='$n',`email`='$e',`mobile`='$m',`photo`='$img',`address`='$a',`update-date`='$ud' WHERE id='$uid'")or die(mysql_error($con));

			if($sql==true)
				{
					echo "1";
				}
				 // else
				 // {
				 // 	echo "2";
				 // }

}
            
else{
		$sql = mysql_query("UPDATE channel_partner SET `name`='$n',`email`='$e',`mobile`='$m',`address`='$a',`update-date`='$ud' WHERE id='$uid'")or die(mysql_error($con));
    
		if($sql==true)
			{
				echo "1";
			}
			 // else
			 // {
			 // 	echo "2";
			 // }


	 }
  mysql_close($con);

 ?>