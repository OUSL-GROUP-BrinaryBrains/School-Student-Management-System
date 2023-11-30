<?php
$edit_data = $this->db->get_where('parent', array('parent_id' => $param2))->result_array();
foreach ($edit_data as $row) :
?>
	<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
		<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-heading">
					<div class="panel-title">
						<i class="entypo-plus-circled"></i>
						<?php echo ('Edit Parent Details'); ?>
					</div>
				</div>
				<div class="panel-body">
					<?php echo form_open(base_url() . 'index.php?admin/parent/edit/' . $row['parent_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
						<div class="col-sm-5">
							<input data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" placeholder="Enter Name Here" type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
						<div class="col-sm-5">
							<input data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" placeholder="Enter Email Here" type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Phone'); ?></label>
						<div class="col-sm-5">
							<input data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" placeholder="Enter Phone Number Here" type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Address'); ?></label>
						<div class="col-sm-5">
							<input data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" placeholder="Enter Address Here" type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Profession'); ?></label>
						<div class="col-sm-5">
							<input data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" placeholder="Enter Profession Here" type="text" class="form-control" name="profession" value="<?php echo $row['profession']; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Update Now'); ?></button>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>