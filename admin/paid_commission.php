<?php
include('dbinfo.php');
?>
<div class="col-lg-12">
  <h3 class="page-header">Paid Commissions</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Paid Commissions List</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        <div class="panel-body"></div>
        <table class="table table-bordered" id="example">
              <thead>
                <tr>
                    <th>Sr. No</th> 
                    <th>Channel Partner</th>
                    <th>Company Name</th>
                    <th>Paid Date</th>
                    <th>Total Amount</th>
                    <th>Commission(%)</th>
                    <th>Commission Amount</th>
                    <th>Amount</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $cnt=0;
                $sql=mysql_query("SELECT  * FROM user a INNER JOIN commission b ON a.id=b.uid");
                  while($row=mysql_fetch_array($sql))
                  {  
                    $cnt++;  
                    $id=$row['id'];
              ?>
              <tr>
                <td><?php echo $cnt;?></td>
                <td><?php echo $row['cpname'];?></td>
                <td><?php echo $row['comp_name'];?></td>
                <td><?php echo $row['date'];?></td>
            	  <td><?php echo $row['pack_amt'];?></td>
            	  <td><?php echo $row['commission_per'];?></td>
            	  <td><?php echo round($row['comm_amount']);?></td>
            	  <td><?php echo round($row['total_comp_amt']);?></td>
              </tr>
            <?php } ?>
            </tbody>
           </table>
      </div>
    </div>
  </div>
</div>

