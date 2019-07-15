<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<?php
		if($temp_id = isset($_GET['temp_id']) ? $_GET['temp_id'] : '')
		{
			$row=mysql_query("SELECT * FROM `package` WHERE p_id='$temp_id'");
			$data=mysql_fetch_array($row);
		}
		else{
			$data['p_id']="";
			$data['p_name']="Select Package";
			$data['p_desc']="";
			$data['p_start_dt']="";
			$data['p_end_dt']="";
			$data['user_id']="Select Customer";
		}
?>
<div class="col-lg-12">
  <h3 class="page-header">Assign Package</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Package Detail</div>
     <div class="panel-body">
         <form name="frm_pack" method="POST" action="code.php">
		 <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Package Name</span>
				<input type="hidden" id="txt_id" name="txt_id" value="<?php echo $data['p_id'];?>">
				<select class="form-control" name="txt_pack">
					<option value="<?php echo $data['p_name'];?>"><?php echo $data['p_name'];?></option>
					<option value="Gold">Gold</option>
					<option value="Silver">Silver</option>
					<option value="Bronze">Bronze</option>
				</select>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Package Describtion</span>
				<input type="text" id="txt_desc" class="form-control" name="txt_desc" placeholder="Describtion" value="<?php echo $data['p_desc'];?>" required>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Start Date</span>
				<input type="date" id="txt_start" class="form-control" name="txt_start" placeholder="Start Date" value="<?php echo $data['p_start_dt'];?>" required>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>End Date</span>
				<input type="date" id="txt_end" class="form-control" name="txt_end" placeholder="End Date" value="<?php echo $data['p_end_dt'];?>" required>
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Customer Name</span>
					<select class="form-control" name="txt_cust">
                    <option>Select Customer</option>
					<option value="<?php echo $data['user_id'];?>"><?php echo $data['user_id'];?></option>
					<?php
						$query = mysql_query("SELECT * FROM user_login");
						$rowCount = mysql_num_rows($query);
						if($rowCount > 0)
						{
							while($row = mysql_fetch_array($query)){
								echo '<option value="'.$row['user_id'].'">'.$row['user_name'].'</option>';
							}
						}
					?>
					</select>
			</div>
		</div>
		
		<div class="col-sm-12">
			<div class="input-group">
				<input class="btn btn-info" id="btn_pack" type="submit" name="btn_pack" value="Insert">
				<input class="btn btn-danger" id="update_pack" type="submit" name="update_pack" value="Update">
            
			<?php if(isset($_GET['status'])&&$_GET['status']==1)
				echo "<font color=green>Data Successfully Insert..</font>";
						
				if(isset($_GET['status'])&&$_GET['status']==2)
				echo "<font color=green>Data Successfully Update..</font>";
				
				if(isset($_GET['status'])&&$_GET['status']==3)
				echo "<font color=red>Wrong...</font>";
			?>
			</div>
		</div>
         </form>
      </div>
  </div>
</div>	

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading"> Display Member </div>
    <div class="panel-body" style="overflow-y: scroll; overflow-x: scroll;">
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="100%">
		<thead>
            <tr>
              <th>Sr No</th> 
              <th>Package Name</th>	
              <th>Description</th> 
			  <th>Start Date</th>	
              <th>End Date</th>
			  <th>Shop Name</th> 
              <th>Edit</th> 
              <th>Delete</th>
            </tr>
        </thead>  
		<tbody>
            <?php 
			$qry=mysql_query("SELECT * FROM `package` ORDER BY `p_id` DESC ")or die(mysql_error());
			$count=1;
			while($row=mysql_fetch_array($qry))
			{?>
			<tr>
              <td><?php echo $count++;?></td>
              <td><?php echo $row['p_name'];?></td>
			  <td><?php echo $row['p_desc'];?></td>
			  <td><?php echo $row['p_start_dt'];?></td>
			  <td><?php echo $row['p_end_dt'];?></td>
			  <td><?php echo $row['user_id'];?></td>
			  <td><?php echo "<a href='index.php?page=package&temp_id=".$row['p_id']."'><i class='fa fa-edit fa-fw'></i></a>"; ?> </td>
			  <td><?php echo "<a href='index.php?page=package&dc_id=".$row['p_id']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\"><i class='fa fa-times fa-fw'></i></a>"; ?></td>
            </tr>
            <?php }?>
        </tbody>  
        </table>
        <br />
      </div>
    </div>
  </div>
</div>