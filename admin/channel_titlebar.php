<!-- Navigation -->
<?php
 session_start();
  $uid=$_SESSION['user_session'];
    include('dbinfo.php');
$sql=mysql_query("SELECT * FROM channel_partner WHERE id='$uid'");
  $data=mysql_fetch_array($sql);
  $name=$data['name'];

?>
        <nav class="navbar navbar-default navbar-static-top header" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" id="title-head" href="channel_index.php">Channel Partner</a> -->
                 <center><img src="../images/ebc_logo.png" alt="test" height="50px; width:50px";></center>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			
			<!--<a href="index.php?page=duns_data">DUNS_Form</a>
			
			<a href="index.php?page=duns_display">DUNS_Table</a>-->
			
			
                <li class="dropdown">
                    <a class="dropdown-toggle sidebar-list loginblock" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php echo $name;?><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="channel_index.php?page=chan-user-profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			
			</nav>
            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">Change Password</h4>
        </div>
        <div class="modal-body">
          <form role="form" id="chform" name="form1" method="POST" enctype="multipart/formdata">
            <fieldset>
              <div class="form-group">
                <input type="hidden" name="p" value="<?php echo $uid;?>">
            <label>Old Password</label><input type="password" class="form-control" placeholder="Old Password" name="op"  autofocus required>
            </div>
            <div class="form-group">
            <label>New Password</label><input type="password" class="form-control" placeholder="New Password" name="np" id="np" required>
            </div>
            <div class="form-group">
            <label>Confirm Password</label><input type="password" class="form-control" placeholder="Confirm Password" name="cnp" id="cnp" required>
            </div>
            <div class="modal-footer">
               <button type="submit" name="submit" id="sub" class="btn  btn-primary">Submit</button>
               <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
            </div>
          </fieldset>
        </form>
        </div>
        
      </div>
      
    </div>
  </div>
  <script>
$('form#chform').submit(function(e){
   
    var pass = $('#np').val();
    var cpass = $('#cnp').val();
        e.preventDefault();

       if(pass==cpass)
        {
           if(pass.length>=4 && pass.length<=10)
          { 
          // $('button#sub').button('loading');
            $.ajax({

                        url:'lead_change_pass.php',
                        type: "POST",
                        data: new FormData(this),
                        contentType:false,
                        processData:false,
                       success: function(data)
                        {
                                 //alert(data);
                            // $('button#sub').button('reset');
                            if(data==1)
                            {
                              alert("Changed Successfully..");
                              location.reload();
                            }
                            else if(data==2)
                            {
                                alert("Incorrect old password");
                            }
                            else{
                                alert("Error");
                            } 
                        }
                    });
              }
             else{
                  alert('Password length should be in beetween 4 to 10 characters');
             }  
        }
        else{
           alert("password and confirm password do not match");
        }
          
          

    });
</script>