<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<?php
		if($temp_id = isset($_GET['temp_id']) ? $_GET['temp_id'] : '')
		{
			$row=mysql_query("SELECT * FROM `category` WHERE cy_id='$temp_id'");
			$data=mysql_fetch_array($row);
		}
		else{
			$data['cy_id']="";
			$data['cy_name']="";
			$data['cy_desc']="";
		}
?>
<div class="col-lg-12">
  <h3 class="page-header">Add Category</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Category Detail</div>
     <div class="panel-body">
         <form name="frm_seg" method="POST" action="code.php">
		 <div class="col-sm-6">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Category Name</span>
				<input type="hidden" id="txt_id" name="txt_id" value="<?php echo $data['cy_id'];?>">
				<input type="text" id="txt_name" class="form-control" name="txt_name" placeholder="Category" value="<?php echo $data['cy_name'];?>" required>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info fa-fw"></i>Category Describtion</span>
				<input type="text" id="txt_desc" class="form-control" name="txt_desc" placeholder="Describtion" value="<?php echo $data['cy_desc'];?>" required>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="input-group">
				<input class="btn btn-info" id="btn_seg" type="submit" name="btn_seg" value="Insert">
				<input class="btn btn-danger" id="update_seg" type="submit" name="update_seg" value="Update">
            
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
              <th>Category Name</th>	
              <th>Category Describtion</th> 
              <th>Edit</th> 
              <th>Delete</th>
            </tr>
        </thead>  
		<tbody>
            <?php 
			$qry=mysql_query("SELECT * FROM `master_category` ORDER BY `cy_id` DESC ")or die(mysql_error());
			$count=1;
			while($row=mysql_fetch_array($qry))
			{?>
			<tr>
              <td><?php echo $count++;?></td>
              <td><?php echo $row['cy_name'];?></td>
			  <td><?php echo $row['cy_desc'];?></td>	
			  <td><?php echo "<a href='index.php?page=add_segment&temp_id=".$row['cy_id']."'><i class='fa fa-edit fa-fw'></i></a>"; ?> </td>
			  <td><?php echo "<a href='index.php?page=add_segment&dc_id=".$row['cy_id']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\"><i class='fa fa-times fa-fw'></i></a>"; ?></td>
            </tr>
            <?php }?>
        </tbody>  
        </table>
        <br />
      </div>
    </div>
  </div>
</div>