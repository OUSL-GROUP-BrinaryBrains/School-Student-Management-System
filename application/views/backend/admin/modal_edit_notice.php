<?php 
$edit_data		=	$this->db->get_where('noticeboard' , array('notice_id' => $param2) )->result_array();
?>
<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open(base_url(). 'index.php?admin/noticeboard/do_update/'.$row['notice_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <div class="padded">
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Title');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="notice_title" value="<?php echo $row['notice_title'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Notice');?></label>
                    <div class="col-sm-5">
                        <div class="box closable-chat-box">
                            <div class="box-content padded">
                                    <div class="chat-message-box">
                                    <textarea name="notice" id="ttt" rows="5" class="form-control"
                                    	placeholder="<?php echo ('Add Notice');?>"><?php echo $row['notice'];?></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo ('Date');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="datepicker form-control" name="create_timestamp" value="<?php echo date('m/d/Y',$row['create_timestamp']);?>"/>
                    </div>
                </div>

                
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-5">
                  <button type="submit" class="btn btn-info"><?php echo ('Edit Notice');?></button>
              </div>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>