<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="entypo-plus-circled"></i>
					<?php echo ('Add Teacher'); ?>
				</div>
			</div>
			<div class="panel-body">
				<?php echo form_open(base_url() . 'index.php?admin/teacher/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="name" placeholder="Enter Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Birthday'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Birthday Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Gender'); ?></label>
					<div class="col-sm-5">
						<select name="gender" class="form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
							<option value=""><?php echo ('Select'); ?></option>
							<option value="Male"><?php echo ('Male'); ?></option>
							<option value="Female"><?php echo ('Female'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Address'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Address Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="address" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Phone Number Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="phone" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Email Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="email" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Password'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Enter Password Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="password" class="form-control" name="password" value="">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-5">
						<button type="submit" class="btn btn-info"><?php echo ('Add Teacher'); ?></button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>