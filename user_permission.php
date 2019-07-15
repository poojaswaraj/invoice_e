<?php 
// var_dump($_POST);
include "config.php";

	$id = $_POST['tab'];
	$user_id=$_POST['usr_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pass=$_POST['pass'];


if(isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','Yes','Yes','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','Yes','Yes','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','Yes','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','Yes','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','No','No','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','No','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','No','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','No','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	} 

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','Yes','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','Yes','No','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','No','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','Yes','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
//for estimate module

else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','Yes','Yes','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','Yes','Yes','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','Yes','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','Yes','Yes','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','Yes','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','No','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) &&! isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','No','No','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','No','No','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

//For product module

else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','Yes','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','Yes','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','Yes','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','No','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','No','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

//For customer module

else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','Yes','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','Yes','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','Yes','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}
//for expenses module
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','No','Yes','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}

//for a single selection
else if(isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))
	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','Yes','No','No','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	
else if(!isset($_POST['invoice']) && isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))


	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','Yes','No','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','Yes','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	

else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && isset($_POST['customer']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))
	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','Yes','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && isset($_POST['voucher']) && !isset($_POST['purchase']))
	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','No','Yes','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	
else if(!isset($_POST['invoice']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['customer']) && !isset($_POST['voucher']) && isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','No','No','Yes')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	

else if(!isset($_POST['invoice']) && !isset($_POST['customer']) && !isset($_POST['estimate']) && !isset($_POST['product']) && !isset($_POST['voucher']) && !isset($_POST['purchase']))

	{
		$sql = mysql_query("INSERT INTO `user_profile`(`user_id`, `name`, `mobile`, `email`, `password`, `invoice`, `estimates`, `product`, `customer`, `expenses`, `gst_mod`) VALUES ('$user_id','$name','$mob','$email','$pass','No','No','No','No','No','No')");

			if($sql==true)
			{
				echo "1";
			}
			else{
				echo "2";
			}	
	}	
?>