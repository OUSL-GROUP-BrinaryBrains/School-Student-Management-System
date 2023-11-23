<?php
$messages = $this->db->get_where('message', array('message_thread_code' => $current_message_thread_code))->result_array();
foreach ($messages as $row):

    $sender = explode('-', $row['sender']);
    $sender_account_type = $sender[0];
    $sender_id = $sender[1];
    ?>
    <div class="mail-info">

        <div class="mail-sender " style="padding:7px;">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo $this->crud_model->get_image_url($sender_account_type, $sender_id); ?>" class="img-circle" width="30"> 
                <span><?php echo $this->db->get_where($sender_account_type, array($sender_account_type . '_id' => $sender_id))->row()->name; ?></span>
            </a>
        </div>

        <div class="mail-date" style="padding:7px;">
            <?php echo date("d M, Y", $row['timestamp']); ?> 
        </div>

    </div>

    <div class="mail-text">			
        <p> <?php echo $row['message']; ?></p>
    </div>

<?php endforeach; ?>

<?php echo form_open(base_url() . 'index.php?teacher/message/send_reply/' . $current_message_thread_code, array('enctype' => 'multipart/form-data')); ?>
<div class="mail-reply">
    <div class="compose-message-editor">
        <textarea row="5" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message" 
                  placeholder="<?php echo ('Reply Message'); ?>" id="sample_wysiwyg"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-icon pull-right">
        <?php echo ('Send'); ?>
        <i class="entypo-mail"></i>
    </button>
    <br><br>
</div>
</form>