<?php
include('dbinfo.php');
?>
<div class="col-lg-12">
  <h3 class="page-header">Payment Received</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Payment Received From Users</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        <div class="panel-body"></div>
        <table class="table table-bordered" id="example">
              <thead>
                <tr>
                    <th>Sr. No</th> 
                    <th>Company Name</th>
                    <th>Contact Person</th>
                    <th>Email-ID</th>
                    <th>Contact No</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Package Name</th>
                    <th>Total Amount</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $cnt=0;
                $sql=mysql_query("SELECT b.name,b.comp_name,b.username,b.contact,c.package_name,a.* FROM `new_payment` a INNER JOIN user b ON a.u_id=b.id INNER JOIN packages c ON a.packageid=c.id");
                  while($row=mysql_fetch_array($sql))
                  {  
                    $cnt++;  
                    $id=$row['id'];
              ?>
              <tr>
                <td><?php echo $cnt;?></td>
                <td><?php echo $row['comp_name'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['startdate'];?></td>
                <td><?php echo $row['enddate'];?></td>  
            	  <td><?php echo $row['package_name'];?></td>
            	  <td><?php echo $row['packg_cost'];?></td>
            	 
              </tr>
            <?php } ?>
            </tbody>
           </table>
      </div>
    </div>
  </div>
</div>

