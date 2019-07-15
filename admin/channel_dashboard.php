<script src="bower_components/jquery/dist/jquery.min.js"></script>

<div class="col-lg-12">
	<h3 class="page-header">Dashboard</h3>
    <div class="panel-body">
                    <div class="row">
                    
                    <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$uid=$_SESSION['user_session'];
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `leads` WHERE cp_id='$uid' AND status=1");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Total Leads</div>
                    </div>
                    
                    <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$uid=$_SESSION['user_session'];
								$qry1=mysql_query("SELECT count(*) as total FROM user INNER JOIN leads ON user.username=leads.client_email AND user.contact=leads.client_mobile WHERE cp_id='$uid'");
								$row1=mysql_fetch_array($qry1);
								echo $row1['total'];
							?>
							</div>
						</div>	
						<div class="title1">Successful Leads</div>
                    </div>

                <!--     <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$uid=$_SESSION['user_session'];
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `leads` WHERE cp_id='$uid'");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Pending Leads</div>
                    </div> -->
                    <div class="panel-body"></div>
                     <div class="panel-body"></div>
                  <div class="col-sm-3" align="center">
				<!-- 	<div class="circle"></div> -->
				
				<table class="table table-stripped" border="1">
							<tbody>
							<?php
								 $uid=$_SESSION['user_session'];
								$qry1=mysql_query("SELECT SUM(`fix_commission`) as amt,SUM(`comm_amount`) as camt, a.* FROM `commission` a INNER JOIN `new_payment` b ON a.uid=b.u_id WHERE a.cpid='$uid' ");
								$row1=mysql_fetch_array($qry1);
								$amt= $row1['amt'];
								 $com_amt=round($row1['camt']);
								$rem_amt=$amt-$com_amt;
							?>
							<tr>
							<th><b>Total Commission:</b></th>
							<td><?php echo 'Rs.'.$row1['amt'];?></td>
							</tr>
							<tr>
							<th><b>Received Commission:</b></th>
							<td><?php echo 'Rs.'.round($row1['camt']);?></td>
							</tr>
							<tr>
							<th><b>Remaining commission:</b></th>
							<td><?php echo 'Rs.'.$rem_amt; ?></td>
							</tr>
							</tbody>
					</table>
						
                    </div>
                    

                 

                   <!--  <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$uid=$_SESSION['user_session'];
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `leads` WHERE cp_id='$uid' AND status=1");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Remaining Commission</div>
                    </div> -->


                </div>
			<div class="panel-body"></div>
			<div class="panel-body"></div>
    </div>
</div>
<!-- /.col-lg-12 -->


<script>
    $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
