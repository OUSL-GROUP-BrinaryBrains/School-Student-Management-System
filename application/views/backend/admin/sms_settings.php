<hr />
<?php 
	$active_sms_service = $this->db->get_where('settings' , array(
		'type' => 'active_sms_service'
	))->row()->description;
?>
<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical">
			<li class="active"><a href="#b-profile" data-toggle="tab">Select A SMS Service</a></li>
				<li>
					<a href="#v-home" data-toggle="tab">
						Clickatell Settings
						<?php if ($active_sms_service == 'clickatell'):?>  
							<span class="badge badge-success"><?php echo ('Active');?></span>
						<?php endif;?>
					</a>
				</li>
				<li>
					<a href="#v-profile" data-toggle="tab">
						Twilio Settings
						<?php if ($active_sms_service == 'twilio'):?>  
							<span class="badge badge-success"><?php echo ('Active');?></span>
						<?php endif;?>
					</a>
				</li>
			</ul>
			
			<div class="tab-content">

				<div class="tab-pane active" id="b-profile">

					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/active_service' , 
						array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo ('Select a service');?></label>
                        <div class="col-sm-5">
							<select name="active_sms_service" class="form-control">
                              <option value=""<?php if ($active_sms_service == '') echo 'selected';?>>
                              		<?php echo ('Not Selected');?>
                              	</option>
                        		<option value="clickatell"
                        			<?php if ($active_sms_service == 'clickatell') echo 'selected';?>>
                        				Clickatell
                        		</option>
                        		<option value="twilio"
                        			<?php if ($active_sms_service == 'twilio') echo 'selected';?>>
                        				Twilio
                        		</option>
                        		<option value="disabled"<?php if ($active_sms_service == 'disabled') echo 'selected';?>>
                        			<?php echo ('Disabled');?>
                        		</option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
	                    <div class="col-sm-offset-3 col-sm-5">
	                        <button type="submit" class="btn btn-info"><?php echo ('Save');?></button>
	                    </div>
	                </div>
	            <?php echo form_close();?>
				</div>

				<div class="tab-pane" id="v-home">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/clickatell' , 
						array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo ('Clickatell username');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" name="clickatell_user" 
	                            	value="<?php echo $this->db->get_where('settings' , array('type' =>'clickatell_user'))->row()->description;?>">
	                      	</div>
	                  	</div>
	                  	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php echo ('Clickatell password');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="clickatell_password" 
	                                value="<?php echo $this->db->get_where('settings' , array('type' =>'clickatell_password'))->row()->description;?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo ('Clickatell api id');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="clickatell_api_id" 
	                                value="<?php echo $this->db->get_where('settings' , array('type' =>'clickatell_api_id'))->row()->description;?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-info"><?php echo ('Save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
				</div>
				<div class="tab-pane" id="v-profile">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/twilio' , 
						array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo ('Twilio account');?> SID</label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" name="twilio_account_sid" 
	                            	value="<?php echo $this->db->get_where('settings' , array('type' =>'twilio_account_sid'))->row()->description;?>">
	                      	</div>
	                  	</div>
	                  	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php echo ('Authentication token');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="twilio_auth_token" 
	                                value="<?php echo $this->db->get_where('settings' , array('type' =>'twilio_auth_token'))->row()->description;?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo ('Registered phone number');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="twilio_sender_phone_number" 
	                                value="<?php echo $this->db->get_where('settings' , array('type' =>'twilio_sender_phone_number'))->row()->description;?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-info"><?php echo ('Save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
				</div>
				
			</div>
			
		</div>	
	
	</div>
</div>