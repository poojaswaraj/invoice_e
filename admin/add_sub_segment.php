<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<?php
		if($temp_id = isset($_GET['temp_id']) ? $_GET['temp_id'] : '')
		{
			$row=mysql_query("SELECT * FROM `sub_category` WHERE sc_id='$temp_id'");
			$data=mysql_fetch_array($row);
		}
		else{
			$data['sc_id']="";
			$data['sc_name']="";
			$data['sc_desc']="";
			$data['cy_id']="";
		}
?>
<div class="col-lg-12">
  <h3 class="page-header">Add Sub Category</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Sub Category Detail</div>
    <div class="panel-body">
        <form name="frm_seg" method="POST" action="code.php">
		<div class="col-sm-6">
            <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Select Category</span>
				<input type="hidden" id="txt_id" name="txt_id" value="<?php echo $data['sc_id'];?>">
				<select class="form-control" name="txt_seg" >
				<?php 
					  $sid=$data['cy_id'];
					  $query=mysql_query("SELECT * FROM `master_category` WHERE `cy_id`=$sid");
					  $data1=mysql_fetch_array($query);
				?>
				<option value="<?php echo $data1['cy_id'];?>"><?php echo $data1['cy_name'];?></option>
				<?php 
					$qry=(mysql_query("SELECT * FROM master_category")); 
					while($row1=mysql_fetch_array($qry))
					{ 
						echo '<option value='.$row1['cy_id'].'>'. $row1['cy_name'] .'</option>';
					}
				?>
				</select>
            </div>
		</div>
		<div class="col-sm-6">
            <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Sub Category</span>
				<input type="text" id="txt_subseg" class="form-control" name="txt_subseg" placeholder="Enter Sub Category" value="<?php echo $data['sc_name'];?>" required>
            </div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Description</span>
				<input type="text" id="txt_subdesc" class="form-control" name="txt_subdesc" placeholder="Enter Description" value="<?php echo $data['sc_desc'];?>" required>
            </div>
		</div>
		<div class="col-sm-12">
			<div class="input-group">
				<input class="btn btn-info" id="btn_subseg" type="submit" name="btn_subseg" value="Insert">
				<input class="btn btn-danger" id="update_subseg" type="submit" name="update_subseg" value="Update">
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
              <th>Category Name</th>	
			  <th>Sub Category Name</th>	
              <th>Category Description</th> 
              <th>Edit</th> 
              <th>Delete</th>
            </tr>
        </thead>  
		<tbody>
            <?php 
			$qry=mysql_query("SELECT * FROM `master_sub_category` ORDER BY `sc_id` DESC ")or die(mysql_error());
			$count=1;
			while($row=mysql_fetch_array($qry))
			{?>
			<tr>
              <td><?php echo $count++;?></td>
              <td>
				<?php 
					  $sid=$row['cy_id'];
					  $query4=mysql_query("SELECT * FROM `master_category` WHERE `cy_id`=$sid");
					  $data1=(mysql_fetch_array($query4));
					  echo $data1['cy_name'];
					 
				?>
			  </td>
			  <td><?php echo $row['sc_name'];?></td>	
			  <td><?php echo $row['sc_desc'];?></td>	
			  <td><?php echo "<a href='index.php?page=add_sub_segment&temp_id=".$row['sc_id']."'><i class='fa fa-edit fa-fw'></i></a>"; ?> </td>
			  <td><?php echo "<a href='index.php?page=add_sub_segment&dc_id=".$row['sc_id']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\"><i class='fa fa-times fa-fw'></i></a>"; ?></td>
            </tr>
            <?php }?>
        </tbody>  
        </table>
        <br />
      </div>
    </div>
  </div>
</div>