<?php
	include("dbinfo.php");
	include("header.php");
?>
    <div class="product-wall">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="margin:200px 0px">
                <div class="panel-heading1">
                    <h3 class="panel-title" align="center">Please Sign In</h3>
                </div>
                 <center  style="padding: 15px 0px;"><img src="../images/it-freedom-logo.png" alt="test" height="50px; width:100px";></center>
                <div class="panel-body">
                    <form role="form" name="form1" action="login_code.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User Name" name="username"  autofocus >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"  value="">
                            </div>
                            <?php
                            $sql=mysql_query('SELECT * from user WHERE id=1');
                            while($row=mysql_fetch_array($sql))
                            {
                                ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control"  name="sd"  value="<?php echo $row['start_date'];?>" >
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control"  name="ed"  value="<?php echo $row['end_date'];?>">
                            </div><?php } ?>
                            <div class="checkbox">
                                <span class="pull-right"><a href="registration.php">New Registration</a></span>
                            </div>
              
                        <button type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block">Sign In</button>
                            <!-- <span class="pull-right"><a href="registration.php">Registration</a></span> -->
                            <?php if(isset($_GET['status'])&&$_GET['status']==1)
                            echo "<font color=red>Invalid Username Or Password..</font>";
							  
                            if(isset($_GET['status'])&&$_GET['status']==2)
                                echo "<font color=green>Username is your mail id</font>";
                                if(isset($_GET['status'])&&$_GET['status']==3)
                                echo "<font color=red>You are not activated channel partner</font>";
                            ?>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
	</div>
	
<!-- <?php include("footer.php"); ?> -->