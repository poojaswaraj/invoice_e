<?php
session_start();
$uid=$_SESSION['user_session']; 
include('dbinfo.php');
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<div class="col-lg-12">
  <h3 class="page-header">Points Credited</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Recent Points List</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        
<!-- end of modal -->
<div class="panel-body"></div>
<table class="table table-bordered" id="example">
      <thead>
          <tr>
              <th>Sr. No</th> 
              <th>Client Name</th>
              <th>Client Email-Id</th>
              <th>Client Mobile</th>
              <th>Start Date</th>
              <th>End Date</th>
          </tr>
      </thead>
      <tbody>
   <?php
    $cnt=0;
              $sql=mysql_query("SELECT * FROM user INNER JOIN leads ON user.username=leads.client_email AND user.contact=leads.client_mobile WHERE cp_id='$uid'")or die(mysql_error());

              while($row=mysql_fetch_array($sql))
              { $cnt++; 
                 // $uid1=$row['id'];
            ?>
   <tr>
      <td><?php echo $cnt;?></td>
      <td><?php echo $row['comp_name'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['contact'];?></td>
      <td><?php echo $row['start_date'];?></td>
      <td><?php echo $row['end_date'];?></td>
    </tr>
<?php } ?>
      
      </tbody>
     </table>
      </div>
    </div>
  </div>
</div>

