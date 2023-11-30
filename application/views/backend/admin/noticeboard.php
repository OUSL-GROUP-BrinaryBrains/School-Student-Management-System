<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
    <div class="col-md-12">
        <!------CONTROL TABS START------>
        <ul class="nav nav-tabs bordered">
            <li class="active">
                <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                    <?php echo ('Noticeboard List'); ?>
                </a>
            </li>
            <li>
                <a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
                    <?php echo ('Add Noticeboard'); ?>
                </a>
            </li>
        </ul>
        <!------CONTROL TABS END------>
        <div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped datatable" id="table_export">
                    <thead>
                        <tr>
                            <th>
                                <div>#</div>
                            </th>
                            <th>
                                <div><?php echo ('Title'); ?></div>
                            </th>
                            <th>
                                <div><?php echo ('Notice'); ?></div>
                            </th>
                            <th>
                                <div><?php echo ('Date'); ?></div>
                            </th>
                            <th>
                                <div><?php echo ('Options'); ?></div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                        foreach ($notices as $row) : ?>
                            <tr>
                                <td style="vertical-align:middle;"><?php echo $count++; ?></td>
                                <td style="vertical-align:middle;"><?php echo $row['notice_title']; ?></td>
                                <td style="vertical-align:middle;" class="span5"><?php echo $row['notice']; ?></td>
                                <td style="vertical-align:middle;"><?php echo date('d M,Y', $row['create_timestamp']); ?></td>
                                <td style="vertical-align:middle;">
                                    <div class="btn-group" style="color:#001911 ;font-family: system-ui;">
                                        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                            <!-- EDITING LINK -->
                                            <li>
                                                <a href="#" onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/modal_edit_notice/<?php echo $row['notice_id']; ?>');">
                                                    <i class="entypo-pencil"></i>
                                                    <?php echo ('Edit'); ?>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <!-- DELETION LINK -->
                                            <li>
                                                <a href="#" onclick="confirm_modal('<?php echo base_url(); ?>index.php?admin/noticeboard/delete/<?php echo $row['notice_id']; ?>');">
                                                    <i class="entypo-trash"></i>
                                                    <?php echo ('Delete'); ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!----TABLE LISTING ENDS--->
            <!----CREATION FORM STARTS---->
            <div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'index.php?admin/noticeboard/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Title'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Enter Title Here" type="text" class="form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" name="notice_title" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Notice'); ?></label>
                        <div class="col-sm-5">
                            <div class="box closable-chat-box">
                                <div class="box-content padded">
                                    <div class="chat-message-box">
                                        <textarea placeholder="Enter Notice Content Here" name="notice" id="ttt" rows="5" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo ('Date'); ?></label>
                        <div class="col-sm-5">
                            <input placeholder="Pick a Date Here" type="text" class="datepicker form-control" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" name="create_timestamp" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo ('Add Notice'); ?></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!----CREATION FORM ENDS-->
        </div>
    </div>
</div>