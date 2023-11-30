<?php
$edit_data        =    $this->db->get_where('grade', array('grade_id' => $param2))->result_array();
foreach ($edit_data as $row) :
?>
    <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        <?php echo ('Edit Grade'); ?>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/grade/do_update/' . $row['grade_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                    <div class="padded">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Mark Name'); ?></label>
                            <div class="col-sm-5 controls">
                                <input placeholder="Enter Mark Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Mark From'); ?></label>
                            <div class="col-sm-5 controls">
                                <input placeholder="Enter Minimum Range Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="mark_from" value="<?php echo $row['mark_from']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Mark Upto'); ?></label>
                            <div class="col-sm-5 controls">
                                <input placeholder="Enter Maximum Range Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="mark_upto" value="<?php echo $row['mark_upto']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Comment'); ?></label>
                            <div class="col-sm-5 controls">
                                <input placeholder="Enter Comment Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="comment" value="<?php echo $row['comment']; ?>" />
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