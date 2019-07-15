<?php
session_start();
$uid=$_SESSION['user_session']; 
include('dbinfo.php');
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<div class="col-lg-12">
  <h3 class="page-header">Leads</h3>
  <div class="panel panel-default">
    <div class="panel-heading">Recent Leads</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        <div class="container">
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Add Leads</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" align="center">Lead Details</h4>
                </div>
                <div class="modal-body">
                   <div class="panel-body">
                      <form role="form" id="myform1" name="form1" method="POST" enctype="multipart/formdata">
                          <fieldset>
                            
                                  <input type="hidden" class="form-control" name="cid"
                                  value="<?php echo $uid;?>">
                              
                              <div class="form-group">
                                  <label>Client Name</label>
                                  <input type="text" class="form-control" placeholder="Client Name" name="client-name"  autofocus required>
                              </div>
                              <div class="form-group">
                                  <label> Client Email-ID</label><input type="email" class="form-control" placeholder="Client Email-ID" name="clientemail"  value="" required>
                              </div>
                              <div class="form-group">
                                  <label>Client Mobile No</label><input type="text" class="form-control" placeholder="Client Mobile Number" id="mob" name="cmobile"  value="" required>
                              </div>
                               <div class="form-group">
                                  <label>City</label><input type="text" class="form-control" placeholder="Client City" id="ct" name="city"  value="" required>
                              </div>
                              <div class="form-group">
                                  <label>Contact Person</label><input type="text" class="form-control" placeholder="Contact Person" id="cp" name="conper"  value="" required>
                              </div>
                              <!-- <button type="submit" name="submit" id="submit" class="btn  btn-primary btn-block">Submit</button> -->
                              <div class="modal-footer">
                                <button type="submit" name="submit" id="insert" class="btn  btn-primary">Submit</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                              </div>
                          </fieldset>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

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

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
      <!--edit modal-->
          <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" align="center">Edit Leads</h4>
                </div>
                <div class="modal-body">
                   <div class="panel-body">
                      <form role="form" id="editform1" name="form1" method="POST" enctype="multipart/formdata">
                          <fieldset>
                            <input type="hidden" name="data" id="data">
                              <div class="form-group"> 
                                  <label>client-Name</label><input type="text" class="form-control" placeholder="Name" id="ename" name="edname"  autofocus >
                              </div>
                              <div class="form-group">
                                  <label> client-EmailID</label><input type="email" class="form-control" placeholder="Email-ID" id="eemail" name="edemail"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Client-Mobile No</label><input type="text" class="form-control" placeholder="mobno" id="emob" name="edmobile"  value="">
                              </div>
                             <div class="form-group">
                                  <label>City</label><input type="text" class="form-control" placeholder="city" id="ect" name="edct"  value="">
                              </div>
                             <div class="form-group">
                                  <label>Contact Person</label><input type="text" class="form-control" placeholder="contact person" id="ecp" name="edcp"  value="">
                              </div>
                             

                              <!-- <button type="submit" name="submit" id="submit" class="btn  btn-primary btn-block">Submit</button> -->
                    <div class="modal-footer">
                      <button type="submit" name="upd" id="upd1" class="btn  btn-primary">Update</button>
                      <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                          </fieldset>
                      </form>
                  </div>
                </div>
               
              </div>
              
            </div>
          </div>
          
        </div>
<!-- end of modal -->
<div class="panel-body"></div>
<table class="table table-bordered" id="example">
      <thead>
          <tr>
              <th>Sr. No</th> 
              <th>Client Name</th>
               <th>Contact Person</th>
              <th>Client Email-Id</th>
              <th>Client Mobile</th>
              <th>City</th>
             
                <th>Action</th>
              
          </tr>
      </thead>
      <tbody>
    <?php
      $cnt=0;
      $sql=mysql_query("SELECT * FROM leads WHERE cp_id='$uid' AND status=1");
      // echo "<table border=1><th>name</th><th>username</th><th>password</th>";
        while($row=mysql_fetch_array($sql))
        {  
          $cnt++;  
          // $photo=$row['photo'];
          $id=$row['id'];
    ?>
   <tr>
      <td><?php echo $cnt;?></td>
     
      <td><?php echo $row['client_name'];?></td>
       <td><?php echo $row['contact_person'];?></td>
      <td><?php echo $row['client_email'];?></td>
      <td><?php echo $row['client_mobile'];?></td>
      <td><?php echo $row['city'];?></td>
     
      <td>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" onclick="efun(<?php echo $id;?>);"><i class="fa fa-pencil"></i></button>
        <button type="button" name="delete'.$row['id'].'" class="btn btn-danger" onclick='do_block(<?php echo $row['id'];?>)'><i class="fa fa-trash-o"></i></button>
      </td>
    </tr>

      <?php } ?>
      </tbody>
     </table>
      </div>
    </div>
  </div>
</div>

<script>
function efun(id)
{
    $.ajax({
             url:'get_leads.php',
             type:'POST',
             data:{
                    id:id
             },
             success: function(data)
             {
                var obj = $.parseJSON(data);
                $('#data').val(obj.id);
                $('#ename').val(obj.client_name);
                $('#eemail').val(obj.client_email);
                $('#emob').val(obj.client_mobile);
                $('#ect').val(obj.city);
                 $('#ecp').val(obj.contact_person);
                // $('#blah1').val(obj.photo);
                 // $('#blah1').attr('src', obj.photo);
                if(data==1)
                {
                    alert("update");
                }

             } 

    });

}

// script for insert 
$('form#editform1').submit(function(e){

    // var pass=$('#epassword').val();
    // var cpass=$('#ecpassword').val();
    var mno=$('#emob').val();
        e.preventDefault();

if(mno.length>=10 && mno.length<=15)
  {
      
          
          $('button#upd1').button('loading');
            $.ajax({

                        url:'update_leads.php',
                        type: "POST",
                        data: new FormData(this),
                        contentType:false,
                        processData:false,
                       success: function(data)
                        {
                                // alert(data);
                            $('button#upd1').button('reset');
                            if(data==1)
                            {
                                alert("Updated Successfully..");
                              location.reload();
                            }
                            
                           else {

                                alert("Error");
                            }   
                        }
                    });
                 
                }
             
           
                else
        {
            alert('Length of Mobile Number should be in beetween 10 to 15');
        }   

    });

// script for insert 
$('form#myform1').submit(function(e)
{
   
    var mno=$('#mob').val();
    e.preventDefault();

  if(mno.length>=10 && mno.length<=15)
    {
        $('button#insert').button('loading');
          $.ajax({
                    url:'insert_leads.php',
                    type: "POST",
                    data: new FormData(this),
                    contentType:false,
                    processData:false,
                   success: function(data)
                    {
                            // alert(data);
                        $('button#insert').button('reset');
                        if(data==1)
                        {
                            alert("Inserted Successfully..");
                          location.reload();
                        }
                       else if(data==2) {
                        alert("Emailid or mobile number already exists.");
                       }
                       else
                       {
                        alert("Error");
                       }
                    }
                });
    }
    else
    {
        alert('Length of Mobile Number should be in beetween 10 to 15');
    }   

});

</script>

   <!--Script for block doctor in doctor list-->
    <script>
        function do_block(id){

                $.ajax({

                    url:'delete_leads.php',
                    type:'POST',
                    data:{
                             id:id
                        },
                    success:function(data)
                      {

                      //alert(data);
                        if(data==1)
                        {
                            alert('Deleted succesfully.');
                            window.location.reload();
                        }
                     if(data==2)
                        {
                            alert('Record not deleted.');
                            window.location.reload(); // this function reload page after performing an action.
                        }                
                        
                    }
                });
          }
    </script>