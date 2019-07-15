<?php include('dbinfo.php');
session_start();
  $uid=$_SESSION['user_session'];
   $sql=mysql_query("SELECT * FROM `channel_partner` WHERE id='$uid'");
   $row=mysql_fetch_array($sql);
?>

<div class="col-lg-12">
  <h3 class="page-header">Channel Partner Profile</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Profile Details</div>
    <div class="panel-body" style="overflow-y: scroll; overflow-x: scroll;">
    <form role="form" id="edform" name="MemberProfile" method="POST" enctype="multipart/form-data">
          
            <fieldset>
              <input type="hidden" name="uid" value="<?php echo $uid; ?>">
          <div class="col-sm-6">
              <div class="col-sm-4">
                <lable class="profile-lable"><span> Photo:</span></lable>
              </div>
            <div class="col-sm-8">
               <lable class="profile-details"><img src="<?php echo $row['photo']; ?>" alt="no image" id="blah" height=100 width=100></lable>
               <!-- <div class="panel-body"></div> -->
               <input type="file" name="efile" onchange="readURL(this);">
              <!-- <img id="blah1" src="" alt="your image" width=100 height=100 /> -->
            </div>
          </div>
    
          <div class="panel-body"></div>
          <div class="col-sm-6">
            <div class="col-sm-4">
              <lable class="profile-lable">Name:</lable>
            </div>
            <div class="col-sm-8">
              <lable class="profile-details"><input type="text" class="form-control" name="n" value="<?php echo $row['name']; ?>" placeholder="Name"> </lable>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="col-sm-4">
                <lable class="profile-lable">Contact No:</lable>
            </div>
            <div class="col-sm-8">
               <lable class="profile-details"><input type="text" class="form-control" name="cn" value="<?php echo $row['mobile'];?>" placeholder="Contact Number"></lable>
            </div>
          </div>
          <div class="panel-body"></div>

          <div class="col-sm-6">
            <div class="col-sm-4">
              <lable class="profile-lable">Email-ID:</lable>
            </div>
            <div class="col-sm-8">
               <lable class="profile-details"><input type="text" class="form-control" name="e" value="<?php echo $data['email']; ?>" placeholder="Email-ID"></lable>
            </div>
          </div>
          
         <div class="col-sm-6">
            <div class="col-sm-4">
              <lable class="profile-lable">Address:<lable>
            </div>
            <div class="col-sm-8">
               <lable class="profile-details"><input type="text" class="form-control" name="a" value="<?php echo $data['address']; ?>" placeholder="Address"></lable>
            </div>
          </div>
          <div class="panel-body"></div>

          <div class="col-sm-12">
            <!-- <div class="col-sm-4"> -->
              <!-- <button type="button" id="upd" class="btn btn-primary" name="update"> Update</button> -->
            <center><input type="submit" class="btn btn-primary" name="upd" id="udp" value="Update"></center>
            <!-- </div> -->
          </div>

          <div class="panel-body"></div> 
         </fieldset>
      </form>
        
      </div>
    </div>
  </div>
<!-- </div> -->


<script>
$('form#edform').submit(function(e){
   
        e.preventDefault();

          $('button#upd').button('loading');
            $.ajax({

                        url:'update-lead-channel-partner.php',
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
                           
                           else {

                                alert("Error");
                            }   
                        }
                    });
          
          

    });

   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>