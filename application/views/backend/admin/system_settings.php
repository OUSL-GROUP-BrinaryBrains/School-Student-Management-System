<hr />
<div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
    <?php echo form_open(
        base_url() . 'index.php?admin/system_settings/do_update',
        array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')
    ); ?>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo ('System Settings'); ?>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Name'); ?></label>
                    <div class="col-sm-9">
                        <input placeholder="Enter System Name Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="system_name" value="<?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Title'); ?></label>
                    <div class="col-sm-9">
                        <input placeholder="Enter System Title Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="system_title" value="<?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Address'); ?></label>
                    <div class="col-sm-9">
                        <input placeholder="Enter System Address Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="address" value="<?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Phone'); ?></label>
                    <div class="col-sm-9">
                        <input placeholder="Enter System Phone Number Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="phone" value="<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Email'); ?></label>
                    <div class="col-sm-9">
                        <input placeholder="Enter System Email Here" data-validate="required" data-message-required="<?php echo ('*This Field is Required'); ?>" type="text" class="form-control" name="system_email" value="<?php echo $this->db->get_where('settings', array('type' => 'system_email'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info"><?php echo ('Save Settings'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    <?php
    $skin = $this->db->get_where('settings', array(
        'type' => 'skin_colour'
    ))->row()->description;
    ?>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo ('Theme Settings'); ?>
                </div>
            </div>
            <div class="panel-body">
                <div class="gallery-env">
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="default">
                                    <img src="assets/images/skins/default.png" <?php if ($skin == 'default') echo 'style="background-color: black; opacity: 0.3;"'; ?> />
                                </a>
                                <a href="#" class="album-options" id="default" style="font-family: system-ui;font-size:13px">
                                    <i class="entypo-check"></i>
                                    <?php echo ('Default'); ?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="black">
                                    <img src="assets/images/skins/black.png" <?php if ($skin == 'black') echo 'style="background-color: black; opacity: 0.3;"'; ?> />
                                </a>
                                <a href="#" class="album-options" id="black" style="font-family: system-ui;font-size:13px">
                                    <i class="entypo-check"></i>
                                    <?php echo ('Black'); ?>
                                </a>
                            </header>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="album">
                            <header>
                                <a href="#" id="blue">
                                    <img src="assets/images/skins/blue.png" <?php if ($skin == 'blue') echo 'style="background-color: black; opacity: 0.3;"'; ?> />
                                </a>
                                <a href="#" class="album-options" id="blue" style="font-family: system-ui;font-size:13px">
                                    <i class="entypo-check"></i>
                                    <?php echo ('Blue'); ?>
                                </a>
                            </header>
                        </article>
                    </div>
                </div>
                <center>
                    <div class="label label-primary" style="font-size: 14px;">
                        <i class="entypo-check"></i> <?php echo ('Select a Theme to Apply Changes'); ?>
                    </div>
                </center>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
<script type="text/javascript">
    $(".gallery-env").on('click', 'a', function() {
        skin = this.id;
        $.ajax({
            url: '<?php echo base_url(); ?>index.php?admin/system_settings/change_skin/' + skin,
            success: window.location = '<?php echo base_url(); ?>index.php?admin/system_settings/'
        });
    });
</script>