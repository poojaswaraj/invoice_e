<?php include('dbinfo.php');?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<div class="col-lg-12">
  <h3 class="page-header">Channel Partners</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Partner List</div>
    <div class="panel-body" >
      <div class="dataTable_wrapper">

        <div class="container">
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Channel Partner</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" align="center">Partner Details</h4>
                </div>
                <div class="modal-body">
                   <div class="panel-body">
                      <form role="form" id="myform" name="form1" method="POST" enctype="multipart/formdata">
                          <fieldset>
                              <div class="form-group">
                                  <label>Name</label><input type="text" class="form-control" placeholder="Name" name="name"  autofocus required>
                              </div>
                              <div class="form-group">
                                  <label> Email-ID</label><input type="email" class="form-control" placeholder="Email-ID" name="email"  value="" required>
                              </div>
                              <div class="form-group">
                                  <label>Mobile No</label><input type="text" class="form-control" placeholder="Mobile Number" id="mob" name="mobile"  value="" required>
                              </div>
                              <div class="form-group">
                                  <label>Address</label><input type="text" class="form-control" placeholder="Address" name="address"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Password</label><input type="password" class="form-control" placeholder="Password" id="password" name="password"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Confirm Password</label><input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" name="Cpassword"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Photo</label><input type="file" name="img" onchange="readURL(this);">
                                  <img id="blah" src="" alt="your image" width=100 height=100 />

                              </div>

                              <!-- <button type="submit" name="submit" id="submit" class="btn  btn-primary btn-block">Submit</button> -->
                              <div class="modal-footer">
                                <button type="submit" name="submit" id="submit" class="btn  btn-primary">Submit</button>
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
                  <h4 class="modal-title" align="center">Edit Partner Details</h4>
                </div>
                <div class="modal-body">
                   <div class="panel-body">
                      <form role="form" id="editform" name="form1" method="POST" enctype="multipart/formdata">
                          <fieldset>
                            <input type="hidden" name="data" id="data">
                              <div class="form-group"> 
                                  <label>Name</label><input type="text" class="form-control" placeholder="Name" id="ename" name="ename"  autofocus >
                              </div>
                              <div class="form-group">
                                  <label> Email-ID</label><input type="email" class="form-control" placeholder="Email-ID" id="eemail" name="eemail"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Mobile No</label><input type="text" class="form-control" placeholder="Mobile Number" id="emob" name="emobile"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Address</label><input type="text" class="form-control" placeholder="Address" id="eaddress" name="eaddress"  value="">
                              </div>
                              <div class="form-group">
                                  <label>Password</label><input type="password" class="form-control" placeholder="Password" id="epassword" name="epassword"  value="">
                              </div>
                            <!--   <div class="form-group">
                                  <label>Confirm-Password</label><input type="password" class="form-control" id="ecpassword" placeholder="confirm-password" name="ecpassword"  value="">
                              </div> -->
                              <div class="form-group">
                                  <label>Photo</label><input type="file" name="eimg"onchange="readURL1(this);">
                                  <img id="blah1" src="" alt="your image" width=100 height=100 />
                              </div>

                              <!-- <button type="submit" name="submit" id="submit" class="btn  btn-primary btn-block">Submit</button> -->
                    <div class="modal-footer">
                      <button type="submit" name="upd" id="upd" class="btn  btn-primary">Update</button>
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
              <th>Photo</th>
              <th>Name</th>
              <th>Email-ID</th>
              <th>Mobile No</th>
              <th>Address</th> 
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
          $cnt=0;
          $sql=mysql_query("SELECT * FROM channel_partner");
            while($row=mysql_fetch_array($sql))
            {  
              $cnt++;  
              $photo=$row['photo'];
              $id=$row['id'];
        ?>
         <tr>
            <td><?php echo $cnt;?></td>
            <td>
              <?php 
                  if(!empty($photo))
                  {
               ?>
              <img src="<?php echo $row['photo'];?>" alt="no img" height=100 width=100>
              <?php }
                  else{
               ?>
                <img src="img/default.jpg" alt="no img" height=100 width=100>
            <?php } ?>
            </td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['address'];?></td>
            <td>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" onclick="efun(<?php echo $id;?>);"><i class="fa fa-pencil"></i></button>
              <button type="button" name="delete'.$row['id'].'" class="btn btn-danger" onclick='do_block(<?php echo $row['id'];?>)'><i class="fa fa-trash-o"></i></button>

                <?php
                 if($row['status']=='1')
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

<!-- script for active deactive channel partner -->
<script>
function doc_block(id){

  $.ajax({
            url:'channel_block.php',
            type:'POST',
            data:{
                    id:id
                },
            success:function(data)
              {
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
<script>
function efun(id)
{
    $.ajax({
             url:'get_channel_partner.php',
             type:'POST',
             data:{
                    id:id
             },
             success: function(data)
             {
                var obj = $.parseJSON(data);
                $('#data').val(obj.id);
                $('#ename').val(obj.name);
                $('#eemail').val(obj.email);
                $('#emob').val(obj.mobile);
                $('#eaddress').val(obj.address);
                $('#epassword').val(obj.password);
                // $('#blah1').val(obj.photo);
                 $('#blah1').attr('src', obj.photo);
                if(data==1)
                {
                    alert("update");
                }

             } 

    });

}

// script for insert 
$('form#editform').submit(function(e){

    var pass=$('#epassword').val();
    // var cpass=$('#ecpassword').val();
    var mno=$('#emob').val();
        e.preventDefault();

if(mno.length>=10 && mno.length<=15)
  {
      if(pass.length>=4 && pass.length<=10)
        {   
          
          $('button#upd').button('loading');
            $.ajax({
                      url:'update_channel_partner.php',
                      type: "POST",
                      data: new FormData(this),
                      contentType:false,
                      processData:false,
                      success: function(data)
                        {
                                // alert(data);
                            $('button#upd').button('reset');
                            if(data==1)
                            {
                                alert("Updated Successfully..");
                              location.reload();
                            }
                            else if(data==2){

                                alert("Email-Id already exists.");
                            }
                           else if(data==3){

                                alert("Mobile Number already exists.");
                            }
                           else {

                                alert("Error");
                            }   
                        }
                    });
                 
                }
             else{
                  alert('Password length should be in beetween 4 to 10');
             }  
           
        }
        else
        {
            alert('Length of Mobile Number should be in beetween 10 to 15');
        }   

    });

// script for insert 
$('form#myform').submit(function(e){

    var pass=$('#password').val();
    var cpass=$('#confirm-password').val();
    var mno=$('#mob').val();
        e.preventDefault();

if(mno.length>=10 && mno.length<=15)
  {
    if(pass==cpass)
    {
      if(pass.length>=4 && pass.length<=10)
        {   
          
          $('button#submit').button('loading');
            $.ajax({
                      url:'insert_channel_partner.php',
                      type: "POST",
                      data: new FormData(this),
                      contentType:false,
                      processData:false,
                      success: function(data)
                        {
                            // alert(data);
                            $('button#submit').button('reset');
                            if(data==1)
                            {
                                alert("Inserted Successfully..");
                              location.reload();
                            }
                            else if(data==2){

                                alert("email already exists.");
                            }
                           else if(data==3) {
                            alert("Mobile Number alteady exists.")
                           }
                           else
                           {
                            alert("Error");
                           }
                        }
                    });
                 
                }
             else{
                  alert('Password length should be in beetween 4 to 10');
             }  
           }
           else{
                alert('Password and confirm password do not match');
           }  
        }
        else
        {
            alert('Length of Mobile Number should be in beetween 10 to 15');
        }   

    });

</script>

<!--Script for block doctor in doctor list-->
<script>
function do_block(id)
{
      $.ajax({

          url:'delete_channel_partner.php',
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