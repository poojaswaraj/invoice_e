<?php include('dbinfo.php');
session_start();
   $uid=$_SESSION['user_session'];
   $sql=mysql_query("SELECT * FROM user WHERE id='$uid'");
   $row=mysql_fetch_array($sql);
?>
<div class="col-lg-12">
  <h3 class="page-header">Admin Profile</h3>
  <div class="panel panel-default">
    <div class="panel-heading"> Admin Details</div>
    <div class="panel-body" style="overflow-y: scroll; overflow-x: scroll;">
    <form role="form" name="MemberProfile"  method="POST" enctype="multipart/form-data">
       
        <fieldset>
        
          <div class="col-sm-6">
              <div class="col-sm-4">
                <lable class="profile-lable">Name:</lable>
              </div>
            <div class="col-sm-8">
               <lable class="profile-details"><?php echo $row['name']; ?></lable>
            </div>
          </div>
          

          <div class="col-sm-6">
            <div class="col-sm-4">
              <lable class="profile-lable"> Company Name:</lable>
            </div>
            <div class="col-sm-8">
              <lable class="profile-details"><?php echo $row['comp_name']; ?></lable>
            
            </div>
          </div>
                    
           <div class="panel-body"></div>

           <div class="col-sm-6">
            <div class="col-sm-4">
                <lable class="profile-lable"> Contact No:</lable>
            </div>
            <div class="col-sm-8">
               <lable class="profile-details"><?php echo $row['contact']; ?></lable>
            
            </div>
          </div>
         
          <div class="col-sm-6">
            <div class="col-sm-4">
              <lable class="profile-lable"> Email Id:</lable>
            </div>
            <div class="col-sm-8">
               <lable class="profile-details"><?php echo $data['username']; ?></lable>
            
            </div>
          </div>
          <div class="panel-body"></div> 
                </fieldset>
            </form>
        
      </div>
    </div>
  </div>
</div>