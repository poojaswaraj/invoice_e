<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
           <div class="panel-body">
                    <form role="form" name="form1" action="login_code.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                Name:<input type="text" class="form-control" placeholder="Name" name="name"  autofocus >
                            </div>
                            <div class="form-group">
                                Email-id:<input type="text" class="form-control" placeholder="email-id" name="password"  value="">
                            </div>
                            <div class="form-group">
                                Mobile_no:<input type="text" class="form-control" placeholder="mobno" name="mobile"  value="">
                            </div>
                            <div class="form-group">
                                Address:<input type="text" class="form-control" placeholder="address" name="address"  value="">
                            </div>
                            <div class="form-group">
                                Password:<input type="text" class="form-control" placeholder="password" name="password"  value="">
                            </div>
                            <div class="form-group">
                                Confirm-Password:<input type="text" class="form-control" placeholder="confirm-password" name="Cpassword"  value="">
                            </div>
                            <div class="form-group">
                                Photo: Select images: <input type="file" name="img" multiple>
                                        
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">
                                    Remember Me 
                                </label>
                            </div>
              <!-- Change this to a button or input when using this as a form -->
              
                            <button type="submit" name="submit" id="submit" class="btn btn-lg btn-info btn-block">Sign In</button>
                            <span class="pull-right"><a href="registration.php">Registration</a></span>
                            <?php if(isset($_GET['status'])&&$_GET['status']==1)
                            echo "<font color=red>Invalid Username Or Password..</font>";
                
                            if(isset($_GET['status'])&&$_GET['status']==2)
                                echo "<font color=green>Username is your mail id</font>";
                            ?>
                        </fieldset>
                    </form>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
