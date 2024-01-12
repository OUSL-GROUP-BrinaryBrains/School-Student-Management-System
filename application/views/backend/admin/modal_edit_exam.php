<?php
$edit_data        =    $this->db->get_where('exam', array('exam_id' => $param2))->result_array();
foreach ($edit_data as $row) :
?>
    <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <i class="entypo-plus-circled"></i>
                        <?php echo ('Edit Exam List'); ?>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/exam/edit/do_update/' . $row['exam_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                    <div class="padded">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
                            <div class="col-sm-5">
                                <input type="text" placeholder="Enter Exam Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" class="form-control" name="name" value="<?php echo $row['name']; ?>" data-validate="required" data-message-required="<?php echo ('Value Required'); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><?php echo ('Date'); ?></label>
                            <div class="col-sm-5">
                                <input placeholder="Enter Date Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="datepicker form-control" name="date" value="<?php echo $row['date']; ?>" />
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