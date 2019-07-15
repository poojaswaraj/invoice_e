<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<div class="col-lg-12">
  <h3 class="page-header">Display Member</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Member Details</div>
    <div class="panel-body" style="overflow-y: scroll; overflow-x: scroll;">
      <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="100%">
		<thead>
            <tr>
              <th>Sr No</th> 
              <th>User Type</th>	
              <th>Shop Name</th> 
              <th>Contact Person</th> 
              <th>Email</th> 
			  <th>Contact</th>	
              <th>B Geo</th> 
              <th>State</th> 
              <th>City</th> 
			  <th>Status</th> 
            </tr>
        </thead>  
		<tbody>
            <?php 
			$qry=mysql_query("SELECT * FROM `user_login` ORDER BY `user_id` DESC ")or die(mysql_error());
			$count=1;
			while($row=mysql_fetch_array($qry))
			{?>
			<tr>
              <td><?php echo $count++;?></td>
              <td><?php echo $row['user_type'];?></td>
			  <td><?php echo $row['user_shop'];?></td>
			  <td><?php echo $row['user_name'];?></td>
			  <td><?php echo $row['user_email'];?></td>
			  <td><?php echo $row['user_contact'];?></td>
			  <td><?php echo $row['user_bgeo'];?></td>
			  <td><?php echo $row['user_state'];?></td>
			  <td><?php echo $row['user_city'];?></td>
			  <td><?php echo "<a href='index.php?page=add_designation&temp_id=".$row['user_id']."'><i class='fa fa-check fa-fw'></i></a>"; ?> </td>
            </tr>
            <?php }?>
        </tbody>  
        </table>
        <br />
      </div>
    </div>
  </div>
</div>