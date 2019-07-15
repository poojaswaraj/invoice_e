<?php include('dbinfo.php');
$uid=$_SESSION['user_session'];?>
<div class="col-lg-12">
  <h3 class="page-header">Users</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Users List</div>
    <div class="panel-body" style="overflow-y: scroll; overflow-x: scroll;">
    <div class="dataTable_wrapper">
        <table class="table table-bordered" id="example">
          <thead>
              <tr>
                  <th>Sr. No</th> 
                  <th>Channel Partner</th>
                  <th>Company Name</th>
                  <th>Contact Person</th>
                  <th>Email-ID</th>
                  <th>Contact</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <?php
              $sql=mysql_query("SELECT b.name as Name,b.id as cpid , c.* FROM `leads` a INNER JOIN channel_partner b ON b.id=a.cp_id RIGHT JOIN user c ON c.username=a.client_email and c.contact=a.client_mobile");
              $row=mysql_fetch_array($sql);
      
              while($row=mysql_fetch_array($sql))
              { 
                 $uid1=$row['id'];
                 $cp_id=$row['cpid'];
                 $cp_name=$row['Name'];
                 $status=$row['payment_status'];
                
            ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <?php 
                    if(empty($cp_name))
                     {
                  ?>
                    <td>EBC Solution's Pvt. Ltd.</td>
                  <?php 
                    }
                    else{
                  ?>
                    <td><?php echo $row['Name'];?></td>
                  <?php  
                    }
                  ?>
                  <td><?php echo $row['comp_name'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['contact'];?></td>
                  <td><?php echo $row['start_date'];?></td>
                  <td><?php echo $row['end_date'];?></td>
                  <td>
                   <!--  <button type="button" name="payment'.$row['id'].'" data-id="<?php echo $row['id'];?>" title="Commission" class="btn btn-info" data-toggle="modal" data-target="#myCommission" onclick='com(<?php echo $row['id'];?>)'> </button> -->
                    <?php 
                    if($status==1)
                    {
                      ?>
                   <button type="button" data-id="<?php echo $row['id'];?>" title="Commission" class="btn btn-warning" data-toggle="modal" data-target="#myCommission" onclick='com(<?php echo $row['id'];?>)'>%</button>
                  <?php
                    }
                    else
                      { 
                    ?>
                     <button type="button" data-id="<?php echo $row['id'];?>" title="Commission" class="btn btn-warning" data-toggle="modal" data-target="#myCommission" onclick='com(<?php echo $row['id'];?>)' disabled>%</button>
                     <?php } ?>
                 
                    <button type="button" name="payment'.$row['id'].'" data-id="<?php echo $row['id'];?>" class="btn btn-info" data-toggle="modal" data-target="#myPayment" title="Payment" onclick='block(<?php echo $row['id'];?>)' style="width: 40px;"><i class="fa fa-money" style="font-size:15px;color:white"></i></button>
                     <!-- <img src="images/payment.png" height=30 width=30 name="payment'.$row['id'].'" data-id="<?php echo $row['id'];?>" data-toggle="modal" data-target="#myPayment" title="Payment" onclick='block(<?php echo $row['id'];?>)'> -->

                    <?php
                     if($row['is_active']=='1')
                       {
                    ?>
                    <button type="button" name="active'.$row['id'].'"  class="btn btn-primary" title="Active User" onclick='doc_block(<?php echo $row['id'];?>)'><i class="fa fa-user" style="font-size:20px;color:white"></i></button>
                    <?php
                      }
                      else
                      {
                    ?>
                    <button type="button" name="deactive'.$row['id'].'"  class="btn btn-danger" title="Deactived User" onclick='doc_block(<?php echo $row['id'];?>)'><i class="fa fa-user" style="font-size:20px;color:white"></i></button>
                    <?php
                      }
                    ?> 
                
                  </td>
                </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myCommission" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Commission</h4>
        </div>
        <div class="modal-body">
         <form role="form" id="chform123" name="form1" method="POST" enctype="multipart/formdata">
         <fieldset>
              <div class="form-group">
                 <input type="hidden" name="p" id="usid">  
                 <input type="hidden" name="cp" id="cpid">  
        <input type="text" id="cpname" class="form-control" name="cpn" required>
        </div>
        <div class="form-group">
          <label>Date</label><input type="date" class="form-control" name="dt" required>
        </div>
        <div class="form-group">
           <label>Package amount</label><input type="text" class="form-control" id="pack_amt"  name="pack_amt" onkeyup="taxoncalculation();"  required>
        </div>
        <div class="form-group">
          <label>commission</label><input type="text" class="form-control" id="com" name="com"   onkeyup="taxoncalculation();" placeholder="Commision Percentage (%)" required>
          <input type="hidden" class="form-control" name="disc_amt" id="disc_amt" placeholder="Commision Amount For Comapny"  onkeyup="taxoncalculation();">
        </div>
        <div class="form-group">
          <label>Amount</label><input type="text" class="form-control" id="amt"  name="amt" placeholder="Commision Amount" required>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" id="ins1" class="btn  btn-primary">Submit</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </div>
         </fieldset></form>
        </div>
        <!-- <div class="modal-footer"> -->
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- </div> -->
      </div>
      
    </div>
  </div>
 <div class="modal fade" id="myPayment" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"  align="center">Payment</h4>
        </div>
        <div class="modal-body">
             <form role="form" id="chform11" name="form1" method="POST" enctype="multipart/formdata">
             <fieldset>
          <div class="form-group">
             <input type="hidden" name="p" id="userid">  
        <label>Start Date</label><input type="date" class="form-control"  name="sdt"  autofocus required>
        </div>
        <div class="form-group">
           <label>End Date</label><input type="date" class="form-control"  name="edt"  autofocus required>
        </div>
        
        <div class="form-group">

        <label>Package Name</label>
        <select class="form-control" name="package" id="pack_name">
          <option value="">Select Package</option>
          <?php 
            $sql=mysql_query("SELECT * FROM packages WHERE status=1");
            while( $row1=mysql_fetch_array($sql))
              {
          ?>
          <option value="<?php echo $row1['id']?>"><?php echo $row1['package_name'];?> </option>
        <?php } ?>
        </select>
        </div>
        <div class="form-group">

        <label>Amount</label>
        <input type="text" class="form-control" name="amt" id="cost" required>
        </div>
        <div class="form-group">
        <label>Description</label><input type="text" class="form-control" placeholder="Descritption" name="dsc" id="desc" required>
        </div>
        </fieldset>
        <div class="modal-footer">
          <button type="submit" name="submit" id="sub11" class="btn  btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
        </div>
         </form>
        </div>
       
      </div>
      
    </div>
  </div>

<script>
function taxoncalculation()
{ 

  var amt = document.getElementById('pack_amt').value;
  var dis = document.getElementById('com').value;

  //calculate tax on discount
  var disc_amt =(parseFloat(dis)/100) * parseFloat(amt);

  var comm=parseFloat(amt)- parseFloat(disc_amt);

  document.getElementById('disc_amt').value = parseFloat(comm).toFixed(2);
  if(!isNaN(disc_amt)){

     document.getElementById('amt').value = parseFloat(disc_amt).toFixed(2);
    }
}
</script>

<script>
 
$(document).ready(function(){
    $('#pack_name').on('change',function(){
        var id = $(this).val();

      if(id)
        {
          $.ajax({
                    type:'POST',
                    url: "get_packages.php",
                    data:{
                            id:id
                    },
                    dataType: "JSON",
                    success:function(data)
                    {
                      $('#cost').val(data.cost);
                      $('#desc').val(data.description);
                    }
                }); 
          }else{
              $('#pack_name').html('Select Package first'); 
          }
      });
});

</script>
   <!--Script for deactive users in user list-->
   <script>
        function block(id){

                $.ajax({

                    url:'getid.php',
                    type:'POST',
                    data:{
                             id:id
                        },
                    success: function(data)
             {
                var obj = $.parseJSON(data);
                $('#userid').val(obj.id);
                

             } 
                });
          }
    </script>  
 <script>
function com(id)
{
    $.ajax({
            url:'get_commission.php',
            type:'POST',
            data:{
                     id:id
                },
            success: function(data)
             {
                var obj = $.parseJSON(data);
                $('#usid').val(obj.id);
                $('#cpid').val(obj.cpid);
                $('#cpname').val(obj.Name);
                $('#pack_amt').val(obj.cost);
             } 
          });
}

$('form#chform123').submit(function(e){

      e.preventDefault();

      $('button#ins1').button('loading');
        $.ajax({
                url:'insert_commission.php',
                type: "POST",
                data: new FormData(this),
                contentType:false,
                processData:false,
                success: function(data)
                {
                        // alert(data);
                    $('button#ins1').button('reset');
                    if(data==1)
                    {
                      alert("inserted Successfully..");
                      location.reload();
                    }
                    else if(data==2)
                    {
                       alert("data not inserted ");
                    }
                   
                  
                }
            });
    });
</script>      
<script>
$('form#chform11').submit(function(e){
   
    e.preventDefault();

    $('button#sub11').button('loading');
      $.ajax({
              url:'insert_payment.php',
              type: "POST",
              data: new FormData(this),
              contentType:false,
              processData:false,
             success: function(data)
              {
                      // alert(data);
                  $('button#sub11').button('reset');
                  if(data==1)
                  {
                      alert("inserted Successfully..");
                    location.reload();
                  }
                  else if(data==2)
                  {
                     alert("Data not inserted ");
                  
                  }
              }
          });
});
</script>      
<script>
      
function doc_block(id){

  $.ajax({
            url:'block.php',
            type:'POST',
            data:{
                     id:id
                },
            success:function(data)
              {
              //alert(data);
                if(data==1)
                {
                    alert('User Active.');
                    window.location.reload();
                }
             if(data==2)
                {
                    alert('User InActive');
                    window.location.reload(); // this function reload page after performing an action.
                }                
                
            }
        });
  }
</script>            