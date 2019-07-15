<?php 
$user_id=$_SESSION['login_user'];
?>
<div class="row">
<!-- /.panel-heading -->
<div class="panel-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#global" data-toggle="tab">Company Setting</a></li>
        <li><a href="#seriesgst" data-toggle="tab">Series Setting</a></li>
        <li><a href="#setting" data-toggle="tab">My Setting</a></li>
        <!-- <li><a href="#templates" data-toggle="tab">Printing Templates</a></li> -->
        <li><a href="#modues" data-toggle="tab">Create Users Setting</a></li>
        <?php 
            $aa1 = mysql_query("SELECT * FROM company WHERE user_id='$user_id'")or die(mysql_error($connection));
				$rrr=mysql_fetch_array($aa1);
					  					  	
					$vouch = $rrr['voucher'];
				if($vouch== 'Yes')
				{  	
            ?>
        <li><a href="#vouchertab" data-toggle="tab">Expenses Setting</a></li>
        <?php 
       	 }
        else{}
        ?>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
		<!-- Tab 1 -->
        <div class="tab-pane fade in active" id="global">
            <h3>Company Setting</h3><hr>

          
        <div class="col-lg-12" id="globset">
              <form id="globalsettingform" name="globalsetting" action="insert_comp_setting.php" autocomplete="off" method="POST" enctype="multipart/form-data">
               
           <?php
			$aa = mysql_query("SELECT * FROM company WHERE user_id='$user_id'")or die(mysql_error($connection));
				$rr=mysql_fetch_array($aa);
			
			?>
			<input type="hidden" name="data1" id="data1" value="<?php echo $rr['id'];?>">
			<input type="hidden" name="user_id" value="<?php echo $user_id;?>">

			<div class="col-lg-6">
				<h4>Company</h4>
				<div class="col-md-4">
					<label>Name</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="txt_name" id="txt_cname" value="<?php echo $rr['company_name'];?>" placeholder="Name" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-4">
					<label>Address</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<textarea class="form-control" name="txt_saddr" id="txt_saddr" placeholder="Address"><?php echo $rr['company_address'];?></textarea>
				</div>
				<div class="panel-body"></div>

				<div class="col-md-4">
					<label>GST No.</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					
					<input type="text" class="form-control" name="txt_gstin" id="txt_gstin" value="<?php echo $rr['gst_no'];?>" placeholder="GST No.">
				</div>
				<div class="panel-body"></div>

				<div class="col-md-4">
					<label>PAN No.</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="txt_panno" id="txt_panno" value="<?php echo $rr['pan_no'];?>" placeholder="PAN No.">
				</div>
				<div class="panel-body"></div>

				<div class="col-md-4">
					<label>State</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="txt_state" id="txt_state" value="<?php echo $rr['state'];?>" placeholder="State" onkeyup="state()">
				</div>
				<div class="panel-body"></div>
				</div>
			<div class="col-lg-6">
				<div class="panel-body"></div>
				<div class="col-md-4">
					<label>State Code</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="state_code" id="state_code" value="<?php echo $rr['state_code'];?>"  placeholder="State Code">
				</div>
				<div class="panel-body"></div>
			
				<div class="col-md-4">
					<label>Phone</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="txt_cphone" id="txt_cphone" value="<?php echo $rr['company_phone'];?>" placeholder="Phone" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-4">
					<label>Email</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="email" class="form-control" name="txt_cemail" id="txt_cemail" value="<?php echo $rr['company_email'];?>" placeholder="Email" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-4">
					<label>Web</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="text" class="form-control" name="txt_cweb" id="txt_cweb" value="<?php echo $rr['company_url'];?>" placeholder="Web" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-4">
					<label>Logo</label>
				</div><div class="panel-body"></div>
				<div class="col-md-8">
					<input type="file" name="logo" id="logo" onchange="readURL(this);">
					<img id="blah" src="<?php echo $rr['logo'];?>" alt="your logo" width=100 height=100 />
				</div>
			</div>
		
			<div class="panel-body"></div>

			<div class="col-lg-12">
				<div class="col-md-12">
					<label>Bank Details</label>
				</div>
				<div class="col-md-6">
					<textarea class="form-control" name="txt_bank" id="txt_bank" rows="5" placeholder="Enter Bank Name, Account Number, IFSC code."><?php echo $rr['bank_details'];?></textarea>
				</div>
			</div>
			
			<div class="panel-body"></div>

			<div class="col-lg-12">
				<h4>Legal Texts</h4>
				<div class="col-md-12">
					<label>Terms & Conditions</label>
				</div>
				<div class="col-md-6">
					<textarea class="form-control" name="txt_terms" id="txt_terms" rows="5"><?php echo $rr['terms'];?></textarea>
				</div>
			</div>
			
			<div class="panel-body"></div>
			<div class="col-lg-6" align="right">
				<?php
				$aa = mysql_query("SELECT * FROM company WHERE user_id='$user_id'")or die(mysql_error($connection));
					while($rr=mysql_fetch_array($aa))
					  {
					  	 $c_id= $rr['id'];
					  }
					  if(!empty($c_id)){
				?>
					<button name="update" type="submit" value="<?php echo $c_id;?>" id="update" class="btn btn-primary" onclick="myfun1();">Update</button>
				<?php
				  }
				  else{
				?>
				   <button name="save" type="submit" value="save" id="save" class="btn btn-primary" onclick="myfun();">Save</button>
				<?php
				  }	
				?>
			 </div>
			</form>
		</div>
			

			<div class="panel-body"></div>
        </div>
		<!-- Tab 2 -->
        <div class="tab-pane fade" id="seriesgst">
            <h3>Series Setting</h3><hr>
             <form id="myinvoice" name="myinvoice" autocomplete="off" method="POST" enctype="multipart/form-data">
			<div class="col-lg-6" id="tax">
				<h4>Invoice Taxes</h4>
				<!-- <div class="col-md-3"><input type="text" class="form-control" name="tax_name" id="tax_name" placeholder="Name"></div>
				<div class="col-md-3"><input type="text" class="form-control" name="tax_value" id="tax_value" placeholder="Value"></div>
				<div class="col-md-2"><label>Active</label> <input type="checkbox" name="chk1" id="chk1" value="1"></div>
				<div class="col-md-2"><label>Default</label> <input type="checkbox" name="chk2" id="chk2" value="1"></div>
				<div class="col-md-2"><button name="add_tax" id="add_tax" type="submit" class="btn btn-primary" value="add_tax" onclick="document.pressed=this.value" >Add</button></div>	
				<div class="panel-body"></div> -->
				<table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
				  <thead>
					<tr class="table_head" bgcolor="#999999">
					  <td>Sr. No</td>
					  <td>Name</td>
					  <td>Value</td>
					  <td>Ative</td>
					  <td>Default</td>
					  <!-- <td>Delete</td> -->
					</tr>
					</thead>
					<tbody>
					<?php
						$qry=mysql_query("SELECT * FROM tax ORDER BY `id` DESC")or die(mysql_error());
						$cnt=1;
						while($row=mysql_fetch_array($qry))
						{
							$id=$row['id'];
					?>
					<tr>
						  <td><?php echo $cnt++ ?></td>
						  <td><?php echo $row['name'];?></td>
						  <td><?php echo $row['value'];?></td>
						  <td><?php echo $row['active'];?></td>
						  <td><?php echo $row['is_default'];?></td>
						 <!--  <td>
						 	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal1" onclick="$('#del_id1').val('<?php echo $id;?>');"><span class="icon fa fa-trash-o" ></span> </button>
						  </td> -->
					</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-8" id="series">
				<h4>Invoice Series</h4>
				<input type="hidden" name="user_id1" value="<?php echo $user_id;?>">
				<div class="col-md-4"><input type="text" class="form-control" name="label" placeholder="Label" required></div>
				<div class="col-md-4"><input type="text" class="form-control" name="value" placeholder="Value" required></div>
				<div class="col-md-4"><input type="text" class="form-control" name="ini_val" placeholder="Invoice Initial No"></div>
				<div class="panel-body"></div>
				<div class="col-md-3"><input type="text" class="form-control" name="est_ini_val" placeholder="Estimate Initial No"></div>
				<div class="col-md-3"><input type="text" class="form-control" name="pro_ini_val" placeholder="Proforma Initial No"></div>
				<!-- <div class="col-md-3"><input type="text" class="form-control" name="challan" placeholder="Challan No"></div> -->
				<div class="col-md-3"><button name="add_series" value="add_series" type="submit" class="btn btn-primary" value="add_series" onclick="document.pressed=this.value" >Add</button></div>	
				
				<div class="panel-body"></div>
				<!-- <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example"> -->
				<table class="table table-striped table-bordered table-hover dataTable no-footer" id="example1">
				  <thead>
					<tr class="table_head" bgcolor="#999999">
					  <!-- <td>Sr. No</td> -->
					  <td>Label</td>
					  <td>Value</td>
					  <td>Invoice No</td>
					  <td>Estimate No</td>
					  <td>Proforma No</td>
					  <!-- <td>Challan No</td> -->
					  <td>Delete</td>
					</tr>
					</thead>
					<tbody>
					<?php
						$qry=mysql_query("SELECT * FROM series WHERE user_id='$user_id' ORDER BY `id` DESC")or die(mysql_error());
						$cnt=1;
						while($row=mysql_fetch_array($qry)){
							$id=$row['id'];
					?>
					<tr>
					  <!-- <td><?php echo $cnt++ ?></td> -->
					  <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['value'];?></td>
					  <td><?php echo $row['first_number'];?></td>
					  <td><?php echo $row['estimates'];?></td>
					  <td><?php echo $row['profarmas'];?></td>
					  <!-- <td><?php echo $row['challans'];?></td> -->
					 <td>
					 	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" onclick="$('#del_id').val('<?php echo $id;?>');"><span class="icon fa fa-trash-o" ></span> </button>
					</td>
					</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
			</form>
		</div>

			<!-- Tab 2 -->
        <div class="tab-pane fade" id="setting">
            <h3>My Setting</h3><hr>
            <form id="mysettingform" name="mysetting" autocomplete="off" method="POST" >
            	<input type="hidden" name="data" id="data" value="<?php echo $_SESSION['login_user']; ?>">

            <?php 
            	// $user_id=$_SESSION['login_user'];

            	// $sql= mysql_query("SELECT b.* FROM user a INNER JOIN user_profile b ON a.id=b.user_id WHERE a.id='$user_id'")or die(mysql_error($connection));
            	$sql=mysql_query("SELECT * FROM user WHERE id='$user_id'")or die(mysql_error($connection));
            	$row=mysql_fetch_array($sql);

             ?>
            <div class="col-lg-6">
				<div class="col-lg-12">
				<h4>About You</h4>
				<div class="col-md-6">
					<label>Company Name</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="txt_cname" id="txt_fname" value="<?php echo $row['comp_name']; ?>" placeholder="Company Name" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-6">
					<label>Name</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="txt_name" id="txt_lname" value="<?php echo $row['name']; ?>" placeholder="Name" required>
				</div>
				<div class="panel-body"></div>

				<div class="col-md-6">
					<label>Contact No</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="txt_cont" id="txt_cont" value="<?php echo $row['contact']; ?>" placeholder="Contact No" required>
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-6">
					<label>Email-ID</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="email" class="form-control" name="txt_email" id="txt_email" value="<?php echo $row['username']; ?>" placeholder="Email" required>
				</div>
				

				</div>
			</div>
			<div class="col-lg-6">
				<div class="col-lg-12">
				<h4>Change Your Password</h4>
				<div class="col-md-6">
					<label>Old Password</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Old Password" onchange="checkpass()">
				</div>
				<center><p id="msg1"></p></center>
				<div class="panel-body"></div>
				
				<div class="col-md-6">
					<label>New Password</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New Password" >
				</div>
				<div class="panel-body"></div>
				
				<div class="col-md-6">
					<label>Confirm Password</label>
				</div><div class="panel-body"></div>
				<div class="col-md-6">
					<input type="password" class="form-control" name="cnew_pass" id="cnew_pass" placeholder="Confirm Password">
				</div>
				</div>
				<p id="errormsg"></p>
			</div>
			
			<div class="col-lg-12" align="right">
				<!-- <button name="btn_save" type="submit" class="btn btn-primary">Save</button> -->
				<button name="btn_save" type="submit" class="btn btn-primary" id="btn_save" value="save">Save</button>
			</div>
			<center><p id="msg"></p></center>
			</form>
		</div>

		<!-- Tab 3 -->
        <div class="tab-pane fade" id="templates">
            <h3>Printing Templates Tab</h3><hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
		<!-- Tab 4 -->
	<!-- 	<?php 
            $aa1 = mysql_query("SELECT * FROM company WHERE user_id='$user_id'")or die(mysql_error($connection));
					while($rr=mysql_fetch_array($aa1))
					  {
					  	 $id= $rr['id'];
					  	 $cust= $rr['cutomers'];
					  	 $esti = $rr['estimates'];
					  	 $prod = $rr['product'];
					  	 $vouch = $rr['voucher'];
					  	 $purch = $rr['get_purchase'];
					  }	
            ?> -->
        <div class="tab-pane fade" id="modues">
            <h3>Users Tab</h3><hr>
            
            <form id="tabs" name="tabs" autocomplete="off" method="POST" >
            <input type="hidden" name="tab" id="tab" value="<?php echo $id;?>">
            <input type="hidden" name="usr_id" id="usr_id" value="<?php echo $user_id;?>">

           <div class="col-md-6">
			<div class="col-md-12"><input type="text" class="form-control" name="name" id="name" placeholder="Name"  style="text-transform:capitalize;" required></div><div class="panel-body"></div>

			<div class="col-md-12"><input type="email" class="form-control" name="email" id="email" placeholder="Email-ID"></div><div class="panel-body"></div>
			
			<div class="col-md-12"><input type="text" class="form-control" name="mob" id="mob" placeholder="Mobile No"></div>

			<div class="panel-body"></div>

			<div class="col-md-12"><input type="password" class="form-control" name="pass" id="pass"  placeholder="Password"></div><div class="panel-body"></div>
			<div class="col-md-12"><input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm Password"></div>
			<div class="panel-body"></div>
			<p id="rrmsg"></p>
			</div>
			 <div class="col-md-6">
			<h4>Assign permissions for this User</h4>
			<ul>
			<!-- 	<li>Invoice Module <input type="checkbox" name="invoice" id="invoice" value="Yes"<?php if ($cust == 'Yes') echo 'checked'; ?>></li>
				<li>Customers Module <input type="checkbox" name="customer" id="customer" value="Yes"<?php if ($cust == 'Yes') echo 'checked'; ?>></li>
				<li>Estimates Module <input type="checkbox" name="estimate" id="estimate" value="Yes"<?php if ($esti == 'Yes') echo 'checked'; ?>></li>
				<li>Products Module <input type="checkbox" name="product" id="product" value="Yes"<?php if ($prod == 'Yes') echo 'checked'; ?>></li>
				<li>Expenses Module <input type="checkbox" name="voucher" id="voucher" value="Yes"<?php if ($vouch == 'Yes') echo 'checked'; ?>></li>
				<li>GST Module <input type="checkbox" name="purchase" id="purchase" value="Yes"<?php if ($purch == 'Yes') echo 'checked'; ?>></li> -->

				<li><input type="checkbox" name="invoice" id="invoice">&nbsp;Invoice Module </li>
				<li><input type="checkbox" name="estimate" id="estimate">&nbsp;Estimates Module </li>
				<li><input type="checkbox" name="product" id="product">&nbsp;Products Module </li>
				<li><input type="checkbox" name="customer" id="customer">&nbsp;Customers Module </li>
				<li><input type="checkbox" name="voucher" id="voucher">&nbsp;Expenses Module</li>
				<li><input type="checkbox" name="purchase" id="purchase" >&nbsp;GST Module </li>

			</ul>
			</div>
			<p id="mssg"></p>
			<div class="col-lg-12" align="right">
				<button name="btn_save" type="submit" value="<?php echo $id;?>" id="save" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin'></i>Processing..."><i class="ace-icon fa fa-check bigger-110"></i>Save</button>
			</div>
			</form>
			<div class="panel-body"></div>
			<h4>Assigned Users Permissions</h4>
			<table class="table table-striped table-bordered table-hover dataTable no-footer" id="example1">
				  <thead>
					<tr class="table_head" bgcolor="#999999">
					  <td>Sr. No</td>
					  <td>Name</td>
					  <td>Email-Id</td>
					  <td>Mobile No</td>
					  <td>Invoice</td>
					  <td>Estimate</td>
					  <td>Product</td>
					  <td>Customer</td>
					  <td>Expenses</td>
					  <td>GST</td>
					  <td>Delete</td>
					</tr>
					</thead>
					<tbody>
					<?php
						$qry=mysql_query("SELECT * FROM user_profile WHERE user_id='$user_id' ORDER BY `id` DESC")or die(mysql_error());
						$cnt=1;
						while($row=mysql_fetch_array($qry)){
							$id=$row['id'];
					?>
					<tr>
					  <td><?php echo $cnt++ ?></td>
					  <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['email'];?></td>
					  <td><?php echo $row['mobile'];?></td>
					  <td>
					  <?php 
					  	if($row['invoice']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>
					  <td>
					  <?php 
					  	if($row['estimates']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>
					  <td>
					  <?php 
					  	if($row['product']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>
					  <td>
					  <?php 
					  	if($row['customer']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>
					  <td>
					  <?php 
					  	if($row['expenses']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>
					  <td>
					  <?php 
					  	if($row['gst_mod']=='Yes')
					  	{
					  ?>
					  	<i class="ace-icon fa fa-check bigger-110" style="color: green;"></i>
					  <?php
					  	}
					  	else{
					  ?>
					  <i class="ace-icon fa fa-remove bigger-110" style="color: red;"></i>
					  <?php
					  	}
					  ?>
					  </td>

					 <td>
					 	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#udeleteModal" onclick="$('#udel_id').val('<?php echo $id;?>');"><span class="icon fa fa-trash-o" ></span> </button>
					</td>
					</tr>
					<?php }?>
					</tbody>
				</table>
		</div>

		<!-- Tab 5 -->
        <div class="tab-pane fade" id="vouchertab">
           <div class="col-lg-12">
			  <form id="myvoucher" name="myvoucher" autocomplete="off" method="POST" enctype="multipart/form-data">
			<div class="col-lg-6" id="head">
				<h4>Account Head</h4>
				<input type="hidden" name="u_id" value="<?php echo $user_id; ?>">
				<div class="col-md-4"><input type="text" class="form-control" name="txt_head" id="txt_head" placeholder="Description"></div>
				<div class="col-md-2"><button name="add_head" id="add_head" type="submit" class="btn btn-primary" value="add_head" onclick="document.pressed=this.value" >Add</button></div>	
				<div class="panel-body"></div>
				 <table class="table table-striped table-bordered table-hover dataTable no-footer" id="example2">
				  <thead>
					<tr bgcolor="#999999">
					  <td>Sr. No</td>
					  <td>Head Description</td>
					  <td>Delete</td>
					</tr>
					</thead>
					<tbody>
					<?php
						$qry=mysql_query("SELECT * FROM acc_head WHERE user_id='$user_id' ORDER BY `id` DESC")or die(mysql_error());
						$cnt=1;
						while($row=mysql_fetch_array($qry))
						{
							$id=$row['id'];
					?>
					<tr>
						  <td><?php echo $cnt++ ?></td>
						  <td><?php echo $row['head_desc'];?></td>
						  <td>
						 	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal2" onclick="$('#del_id2').val('<?php echo $id;?>');"><span class="icon fa fa-trash-o" ></span> </button>
						  </td>
					</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6" id="mode">
				<h4>Payment Mode</h4>
				<input type="hidden" name="ur_id" value="<?php echo $user_id; ?>">
				<div class="col-md-4"><input type="text" class="form-control" name="mode" placeholder="Mode Type"></div>
				<div class="col-md-2"><button name="add_mode" value="add_mode" type="submit" class="btn btn-primary" value="add_mode" onclick="document.pressed=this.value">Add</button></div>	

				<div class="panel-body"></div>
				 <table class="table table-striped table-bordered table-hover dataTable no-footer" id="example1">
				  <thead>
						<tr bgcolor="#999999">
					  <td>Sr. No</td>
					  <td>Modes</td>
					  <td>Delete</td>
					</tr>
					</thead>
					<tbody>
					<?php
						$qry=mysql_query("SELECT * FROM mode WHERE user_id='$user_id' ORDER BY `id` DESC")or die(mysql_error());
						$cnt=1;
						while($row=mysql_fetch_array($qry)){
							$id=$row['id'];
					?>
					<tr>
					  <td><?php echo $cnt++ ?></td>
					  <td><?php echo $row['mode'];?></td>
	
					 <td>
					 	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal3" onclick="$('#del_id3').val('<?php echo $id;?>');"><span class="icon fa fa-trash-o" ></span> </button>
					</td>
					</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
			</form>
        </div>
    </div>
</div>

<!-- /.panel-body -->
</div>
<!--Delete Head model start here-->

<div id="deleteModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  	<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete Head</h4>
		  	</div>
			   <form  id="del2" autocomplete="off" enctype="multipart/formdata" method="POST">
				    <div class="modal-body" id="deleteContent">
		               <input type="hidden" name="data2" id="del_id2">
		               <div class="form-group">
		                     <p><b>Are you sure want to delete ?</b></p>
		              </div>
				    </div>
				    <center><p id='dmsg'></p></center>
			        <div class="modal-footer">
		               <button class="btn btn-success submit" id="delete_head" name="submit">Confirm</button>
		               <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
			        </div>
			  </form>
		</div>
	</div>
</div>

<!--Delete User model start here-->

<div id="udeleteModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  	<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete User</h4>
		  	</div>
			   <form  id="udel" autocomplete="off" enctype="multipart/formdata" method="POST">
				    <div class="modal-body" id="deleteContent">
		               <input type="hidden" name="udata" id="udel_id">
		               <div class="form-group">
		                     <p><b>Are you sure want to delete ?</b></p>
		              </div>
				    </div>
				    <center><p id='dmsg'></p></center>
			        <div class="modal-footer">
		               <button class="btn btn-success submit" id="delete_user" name="submit">Confirm</button>
		               <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
			        </div>
			  </form>
		</div>
	</div>
</div>

<!--Delete Mode model start here-->

<div id="deleteModal3" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  	<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete Mode</h4>
		  	</div>
			   <form  id="del3" autocomplete="off" enctype="multipart/formdata" method="POST">
				    <div class="modal-body" id="deleteContent">
		               <input type="hidden" name="data" id="del_id3">
		               <div class="form-group">
		                     <p><b>Are you sure want to delete ?</b></p>
		              </div>
				    </div>
				    <center><p id='dmsg'></p></center>
			        <div class="modal-footer">
		               <button class="btn btn-success submit" id="delete_mode" name="submit">Confirm</button>
		               <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
			        </div>
			  </form>
		</div>
	</div>
</div>

<!--Delete Series model start here-->

<div id="deleteModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  	<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete Invoice Series</h4>
		  	</div>
			   <form  id="del" autocomplete="off" enctype="multipart/formdata" method="POST">
				    <div class="modal-body" id="deleteContent">
		               <input type="hidden" name="data" id="del_id">
		               <div class="form-group">
		                     <p><b>Are you sure want to delete ?</b></p>
		              </div>
				    </div>
				    <center><p id='dmsg'></p></center>
			        <div class="modal-footer">
		               <button class="btn btn-success submit" id="delete_btn" name="submit">Confirm</button>
		               <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
			        </div>
			  </form>
		</div>
	</div>
</div>

<!--Delete Tax model start here-->

<div id="deleteModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
		  	<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete Invoice Tax</h4>
		  	</div>
			   <form  id="del1" autocomplete="off" enctype="multipart/formdata" method="POST">
				    <div class="modal-body" id="deleteContent">
		               <input type="hidden" name="data1" id="del_id1">
		               <div class="form-group">
		                     <p><b>Are you sure want to delete ?</b></p>
		              </div>
				    </div>
				    <center><p id='dmsg'></p></center>
			        <div class="modal-footer">
		               <button class="btn btn-success submit" id="delete_btn1" name="submit">Confirm</button>
		               <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">Cancel</button>      
			        </div>
			  </form>
		</div>
	</div>
</div>
 <script type="text/javascript">

        $(document).ready(function() {
           // $('#example1').DataTable();
           $('#example2').DataTable();
    } ); 
$(document).ready(function() {
    $('table.table').DataTable();
} );
// script for bill state fetch
	function state(){

	    var txt_product = document.getElementById("txt_state").value;
	    $("#txt_state").autocomplete({
	        source: 'select_state.php',
	        select: function(a,b)
		        {
		            $(this).val(b.item.value); //grabed the selected value
		            get_state_code(b.item.value);//passed that selected value
		        }
	    });
	}
	function get_state_code(name){
		$.ajax({
                 url:'get_state_code.php',
                 type:'POST',
                 data:{
                        name:name
                 },
                 success: function(data)
                 {
                   var obj = $.parseJSON(data);
                    $('#txt_state').val(obj.name);
                    $('#state_code').val(obj.state_code);
                    
                  if(data==1)
                    {
                        alert("update");
                    }
                 } 
            });
		}

        
 </script>
<script>
$('form#tabs').submit(function(e){

	var pass=$('#pass').val();
	var cpass=$('#cpass').val();

	var mob = $('#mob').val();

	e.preventDefault();
   if(pass==cpass)
   	  { 
	   	 if(pass.length>=4 && pass.length<=10)
          {      
            if(mob.length>=10 && mob.length<=15)
              {         
			    $("button#save").button('loading');
			   	$.ajax({
			            // url:'insert_tabs.php',
			            url:'user_permission.php',
			            type: "POST",
			            data: new FormData(this),
			            contentType:false,
			            processData:false,
			            success: function(data)
			           	 	{
			           	 		$("button#save").button('reset');
			                     // alert(data);
			                    if(data==1)
			                    {
			                        // alert("Inserted Successfully..");
									// $('#msg').html('Please Select To Date.');
									// $('#msg').css('color','red');
									swal({
										  position: 'top-right',
										      type: 'success',
											  title: 'Save Successfully!!!',
											  showConfirmButton: false,
											  timer: 1500
										})
										  window.setTimeout(function()
										    { 
													location.reload();
											} ,1500);

			                      // location.reload();
			                    }
			                    else if(data==2)
			                    {
			                    	alert("Error..");
			                    }
			                
			            	}

			   		});
			   	}
	            else
	              {
	                $('#cpass').css('borderColor','#ccc');
	                $('#pass').css('borderColor','#ccc');
	                $('#mob').css('borderColor','red');
	                $('#mssg').html('Mobile Number between 10 to 15 Number.');
	                $('#mssg').css('color','red');
	              }
              }
              else
              {
              	$('#mob').css('borderColor','#ccc');
              	$('#cpass').css('borderColor','#ccc');
                $('#pass').css('borderColor','red');
                $('#mssg').html('Password must be between 4 to 10 characters.');
                $('#mssg').css('color','red');
              }
		}
		else
		{
			$('#mob').css('borderColor','#ccc');
			$('#cpass').css('borderColor','red');
			$('#rrmsg').html('Password Not Match.');
			$('#rrmsg').css('color','red');
		}
});

//Insert new tax and series
$('form#myinvoice').submit(function(e){

     e.preventDefault();

	if(document.pressed == 'add_tax')
	  {
	           $.ajax({
							data:$("#myinvoice").serialize(),
							type:"POST",
							url:'insert_tax.php',
							success: function(data)
							{

								 // alert(data);
								if(data==1) 
								{
									 // alert('New Tax Inserted !!!');
									$("#tax").load(" #tax");
								}
								else if(data==2)
								{
									alert('Error..');
									return false;
								} 
							}
					    });
	}
	else
	 if(document.pressed == 'add_series')
	  {
	           $.ajax({
							data:$("#myinvoice").serialize(),
							type:"POST",
							url:'insert_series.php',
							success: function(data)
							{
								 // alert(data);
								if(data==1) 
								{
									// alert('New Series Inserted !!!');
									// $("#series").load(" #series");
									location.reload();
									 // $('table.table').DataTable();
			             		  
								}
								else if(data==2)
								{
									alert('Error..');
									return false;
								} 
							}
					    });
	}

});

// Tab2 ajax mysetting
$('form#mysettingform').submit(function(e){

	var new_pass = $('#new_pass').val();
	var cnew_pass = $('#cnew_pass').val();
	var txt_cont = $('#txt_cont').val();
        e.preventDefault();

        if(new_pass==cnew_pass)
        {
        	if(new_pass.length>=4 && new_pass.length<=10)
              {   
              	if(txt_cont.length>=10 && txt_cont.length<=15)
             	{    
		            $.ajax({
		                        url:'insert_mysetting.php',
		                        type: "POST",
		                        data: new FormData(this),
		                        contentType:false,
		                        cache:false,  
		                        processData:false,
		                        success: function(data)
		                       	 	{
		                               
		                                 // alert(data);
		                                if(data==1)
		                                {
											swal({
											  position: 'top-right',
			 							      type: 'success',
			  								  title: 'Save Successfully!!!',
			  								  showConfirmButton: false,
			  								  timer: 1500
											})
											  window.setTimeout(function()
											    { 
			 										location.reload();
			 								 	} ,1500);

		                                  
		                                }
		                                else if(data==2){

		                                	// $('#old_pass').css('borderColor','red');
											$('#msg1').html('Please Check All Field .');
											$('#msg1').css('color','red');

		                                }
		                                 else if(data==3){

		                                	$('#old_pass').css('borderColor','red');
											$('#msg1').html('Please Enter Correct Password.');
											$('#msg1').css('color','red');
										
		                                }
		                            	
		                        	}
		           			});
		           }
                  else
                  {
                  	$('#cnew_pass').css('borderColor','#27b6ee');
                    $('#txt_cont').css('borderColor','red');
                    $('#errormsg').html('Mobile Number between 10 to 15 Number.');
                    $('#errormsg').css('color','red');
                  }
	       	 }
   			 else
   				{
	   			 	// $('#cnew_pass').css('borderColor','red');
					$('#errormsg').html('Password must be between 4 to 10 characters.');
					$('#errormsg').css('color','red');
   				}
	       	}
   			 else
   				{
	   			 	$('#cnew_pass').css('borderColor','red');
					$('#errormsg').html('Password Not Match.');
					$('#errormsg').css('color','red');
   				}
    });

//  Delete Series Script start 
    $("#delete_btn").click(function(e)
       { 
            var id=$('#del_id').val();
			  e.preventDefault();
		
			       $.ajax({
                            url:'delete_series.php',
                            type: "POST",
                            data: {
                                   id:id  
                            },
                            success: function(data)
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                        // alert('Deleted Successfully.');
          								 window.location.reload();
                                        

                                    }                          
                                }
                        });
        })


   //  Delete Users start 
    $("#delete_user").click(function(e)
       { 
            var id=$('#udel_id').val();
			  e.preventDefault();
		
			       $.ajax({
                            url:'delete_user.php',
                            type: "POST",
                            data: {
                                   id:id  
                            },
                            success: function(data)
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                        // alert('Deleted Successfully.');
          								 window.location.reload();
                                        

                                    }                          
                                }
                        });
        })

    //  Delete Head Script start 
    $("#delete_head").click(function(e)
       { 
            var id=$('#del_id2').val();
			  e.preventDefault();
		
			       $.ajax({
                            url:'delete_head.php',
                            type: "POST",
                            data: {
                                   id:id  
                            },
                            success: function(data)
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                        // alert('Deleted Successfully.');
          								 window.location.reload();
                                        

                                    }                          
                                }
                        });
        })

  //  Delete Mode Script start 
    $("#delete_mode").click(function(e)
       { 
            var id=$('#del_id3').val();
			  e.preventDefault();
		
			       $.ajax({
                            url:'delete_mode.php',
                            type: "POST",
                            data: {
                                   id:id  
                            },
                            success: function(data)
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                        // alert('Deleted Successfully.');
          								 window.location.reload();
                                        

                                    }                          
                                }
                        });
        })

//  Delete tax Script start 
    $("#delete_btn1").click(function(e)
       { 
            var id=$('#del_id1').val();
			  e.preventDefault();
		
			       $.ajax({
                            url:'delete_tax.php',
                            type: "POST",
                            data: {
                                   id:id  
                            },
                            success: function(data)
                                {
                                  //alert(data);
                                    if(data==1)
                                    {
                                        // alert('Deleted Successfully.');
          								 window.location.reload();
                                        

                                    }                          
                                }
                        });
        })

// To check old Password
function checkpass(){

		var old_pass =$('#old_pass').val();

		 $.ajax({
                    url:'checkpass.php',
					type:'POST',
					data:{
							old_pass:old_pass
						 },
					success: function(data)
					{
	                    if(data==1)
                        {
                            // alert("Inserted Successfully..");
							$('#old_pass').css('borderColor','#27b6ee');
							$('#msg1').html('');
							document.getElementById('new_pass').disabled=false;
							document.getElementById('cnew_pass').disabled=false;
							document.getElementById('btn_save').disabled=false;
                        }
                        else if(data==2)
                        {
                        	$('#old_pass').css('borderColor','red');
							$('#msg1').html('Please Enter Correct Password.');
							$('#msg1').css('color','red');
							document.getElementById('new_pass').disabled=true;
							document.getElementById('cnew_pass').disabled=true;
							document.getElementById('btn_save').disabled=true;
                        }
                    }
					
			    });
	}

	function myfun(){
		alert("Successfully Inserted!!");
	}
function myfun1(){
		alert("Successfully Updated!!");
	}

// Voucher tab script

$('form#myvoucher').submit(function(e){

     e.preventDefault();

	if(document.pressed == 'add_head')
	  {
	           $.ajax({
							data:$("#myvoucher").serialize(),
							type:"POST",
							url:'insert_acc_head.php',
							success: function(data)
							{

								 // alert(data);
								if(data==1) 
								{
									 // alert('New Tax Inserted !!!');
									// $("#head").load(" #head");
									location.reload();
								}
								else if(data==2)
								{
									alert('Error..');
									return false;
								} 
							}
					    });
	}
	else
	 if(document.pressed == 'add_mode')
	  {
	           $.ajax({
							data:$("#myvoucher").serialize(),
							type:"POST",
							url:'insert_mode.php',
							success: function(data)
							{
								 // alert(data);
								if(data==1) 
								{
									// alert('New Series Inserted !!!');
									// $("#mode").load(" #mode");
			             		  location.reload();
								}
								else if(data==2)
								{
									alert('Error..');
									return false;
								} 
							}
					    });
	}

});


</script>
<!-- Image Preview -->
<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>