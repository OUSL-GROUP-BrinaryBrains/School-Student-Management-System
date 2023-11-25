<div class="row">
	<div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
		<h1 style="font-weight:bold; margin:0px; color:#008055; font-family: system-ui;"><?php echo $system_name; ?></h1>
	</div>
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix ">

		<h3 style="font-weight: bold; margin-left:15px; margin-bottom:0px; color:#ffa800; font-family: system-ui;"><?php echo  $this->session->userdata('name'); ?></h3>
		<ul class="list-inline links-list pull-left">

			<!-- Language Selector -->
			<li class="dropdown language-selector">
				<h3 style="font-weight: bold; font-size:15px;color:#008055; margin-left:10px">
					<i class="entypo-user"></i> <?php echo $this->session->userdata('login_type'); ?>
				</h3>
			</li>
		</ul>


		<ul class="list-inline links-list pull-right">



			<li>
				<a href="<?php echo base_url(); ?>index.php?login/logout" style="font-weight: bold; font-size:15px; font-family: system-ui; color:#008055">
					Logout <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>

</div>

<hr style="margin-top:0px;" />