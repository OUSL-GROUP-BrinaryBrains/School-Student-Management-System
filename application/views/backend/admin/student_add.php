<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
				<div class="panel-title">
					<i class="entypo-plus-circled"></i>
					<?php echo ('Student Addmission Form'); ?>
				</div>
			</div>
			<div class="panel-body">
				<?php echo form_open(base_url() . 'index.php?admin/student/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>
				<div class="form-group">
					<label for="field-1" class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="name" placeholder="Enter Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" value="" autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Parent'); ?></label>
					<div class="col-sm-5">
						<select name="parent_id" class="form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
							<option value=""><?php echo ('Select'); ?></option>
							<?php
							$parents = $this->db->get('parent')->result_array();
							foreach ($parents as $row) :
							?>
								<option value="<?php echo $row['parent_id']; ?>">
									<?php echo $row['name']; ?>
								</option>
							<?php
							endforeach;
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Class'); ?></label>
					<div class="col-sm-5">
						<select name="class_id" class="form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" onchange="return get_class_sections(this.value)">
							<option value=""><?php echo ('Select'); ?></option>
							<?php
							$classes = $this->db->get('class')->result_array();
							foreach ($classes as $row) :
							?>
								<option value="<?php echo $row['class_id']; ?>">
									<?php echo $row['name']; ?>
								</option>
							<?php
							endforeach;
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Section'); ?></label>
					<div class="col-sm-5">
						<select name="section_id" class="form-control" id="section_selector_holder">
							<option value=""><?php echo ('Select Class First'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Index No'); ?></label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="index_no" value="" placeholder="Enter Index Number Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Birthday'); ?></label>
					<div class="col-sm-5">
						<input placeholder="Pick a Date Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
					</div>
				</div>
				<div class="form-group">
					<label for="field-2" class="col-sm-3 control-label"><?php echo ('Gender'); ?></label>
					<div class="col-sm-5">
						<select data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" name="gender" class="form-control">
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
						<button type="submit" class="btn btn-info"><?php echo ('Add Student'); ?></button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function get_class_sections(class_id) {
		$.ajax({
			url: '<?php echo base_url(); ?>index.php?admin/get_class_section/' + class_id,
			success: function(response) {
				jQuery('#section_selector_holder').html(response);
			}
		});
	}
</script>