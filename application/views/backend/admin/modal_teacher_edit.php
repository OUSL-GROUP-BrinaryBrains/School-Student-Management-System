<?php
$edit_data        =    $this->db->get_where('teacher', array('teacher_id' => $param2))->result_array();
foreach ($edit_data as $row) :
?>
    <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        <?php echo ('Edit Teacher Details'); ?>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/teacher/do_update/' . $row['teacher_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo ('Photo'); ?></label>
                        <div class="col-sm-5">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                    <img src="<?php echo $this->crud_model->get_image_url('teacher', $row['teacher_id']); ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select Image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="userfile" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Birthday'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Birthday Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="datepicker form-control" name="birthday" value="<?php echo $row['birthday']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Gender'); ?></label>
                        <div class="col-sm-5">
                            <select name="gender" class="form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>">
                                <option value="Male" <?php if ($row['gender'] == 'Male') echo 'selected'; ?>><?php echo ('Male'); ?></option>
                                <option value="Female" <?php if ($row['gender'] == 'Female') echo 'selected'; ?>><?php echo ('Female'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Address'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Address Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Phone'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Phone Number Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Email Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Password'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Password Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>" />
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
<?php
endforeach;
?>