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
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `user` WHERE is_super_admin=0");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Total Users</div>
                    </div>
                    <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `user` WHERE is_active=1 and is_super_admin=0");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Active Users</div>
                    </div>
                    <div class="col-sm-3" align="center">
					<div class="circle"></div>
						<div class="dboard" id="blue">
							<div class="ddetails count">
							<?php
								$qry1=mysql_query("SELECT COUNT(`id`) FROM `user` WHERE is_active=0 and is_super_admin=0");
								$row1=mysql_fetch_array($qry1);
								$count1=$row1['COUNT(`id`)'];
								echo $count1;
							?>
							</div>
						</div>	
						<div class="title1">Inactive Users</div>
                    </div>
					<div class="col-sm-3" align="center">
						<div class="dboard" id="green">
							<div class="ddetails count">
							<?php
								$qry2=mysql_query("SELECT COUNT(`id`) FROM `channel_partner` where status=1");
								$row2=mysql_fetch_array($qry2);
								$count2=$row2['COUNT(`id`)'];
								echo $count2;
							?>
							</div>
						</div>
						<div class="title1">Total Channel Partners</div>
                    </div>

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
