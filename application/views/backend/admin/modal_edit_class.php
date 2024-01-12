<?php
$edit_data        =    $this->db->get_where('class', array('class_id' => $param2))->result_array();
foreach ($edit_data as $row) :
?>
    <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        <?php echo ('Edit Class'); ?>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/classes/do_update/' . $row['class_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Class Name'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" placeholder="Enter Class Name Here" name="name" value="<?php echo $row['name']; ?>" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Numeric Name'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" placeholder="Enter Numeric Name Here" class="form-control" name="name_numeric" value="<?php echo $row['name_numeric']; ?>" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Class Teacher'); ?></label>
                        <div class="col-sm-5">
                            <select name="teacher_id" class="form-control">
                                <option value="" disabled selected>Select A Teacher</option> <!-- Placeholder Option -->
                                <?php
                                $teachers = $this->db->get('teacher')->result_array();
                                foreach ($teachers as $row2) :
                                ?>
                                    <option value="<?php echo $row2['teacher_id']; ?>" <?php if ($row['teacher_id'] == $row2['teacher_id']) echo 'selected'; ?>>
                                        <?php echo $row2['name']; ?>
                                    </option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo ('Update Now'); ?></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
endforeach;
?>