<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="entypo-plus-circled"></i>
					<?php echo ('Add Parent Details'); ?>
				</div>
			</div>
			<div class="panel-body">
				<?php echo form_open(base_url() . 'index.php?admin/parent/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Name Here" type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" autofocus value="">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Email Here" type="text" class="form-control" name="email" value="" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Password'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Password Here" type="password" class="form-control" name="password" value="" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Phone Number Here" type="text" class="form-control" name="phone" value="" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Address'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Address Here" type="text" class="form-control" name="address" value="" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Profession'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Profession Here" type="text" class="form-control" name="profession" value="" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-5">
						<button type="submit" class="btn btn-primary"><?php echo ('Add Parent'); ?></button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>