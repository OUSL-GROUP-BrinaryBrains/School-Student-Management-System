<div class="row">
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix">
		<h3 style="margin-bottom:0px; margin-top:0px;font-weight: 500; color:#ffa800; font-family: system-ui;"><?php echo "Welcome," ?> <?php echo  $this->session->userdata('name'); ?></h3>
		<ul class="list-inline links-list pull-left" style="margin-bottom:0px; margin-top:0px;">
			<!-- Profile Type -->
			<li class="dropdown language-selector">
				<h3 style="font-weight: 400; font-size:15px;color:#008055;">
					<i class="fa fa-user"></i> <?php echo $this->session->userdata('login_type'); ?>
				</h3>
			</li>
		</ul>
		<ul class="list-inline links-list pull-right" style="margin-bottom:0px; margin-top:0px;">
			<!-- Logout Button -->
			<li>
				<a href="<?php echo base_url(); ?>index.php?login/logout" style="font-weight: 400; font-size:15px;color:#008055;">
					Logout
					<i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<hr style="margin-bottom:0px; margin-top:0px;  border-bottom: 0.5px solid #ffa800; width: 100%" />