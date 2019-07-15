<?php
	include("dbinfo.php");
	include("header.php");
?>
    <div class="product-wall">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="margin:60px 0px">
                <div class="panel-heading1">
                    <h3 class="panel-title">LOG IN</h3>
                </div>
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
        </div>
        </div>
	</div>
	
<!-- <?php include("footer.php"); ?> -->