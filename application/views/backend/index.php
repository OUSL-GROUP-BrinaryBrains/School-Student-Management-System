<?php
$system_name        =	$this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_title       =	$this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
$text_align         =	$this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$account_type       =	$this->session->userdata('login_type');
$skin_colour        =   $this->db->get_where('settings', array('type' => 'skin_colour'))->row()->description;
$active_sms_service =   $this->db->get_where('settings', array('type' => 'active_sms_service'))->row()->description;
?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl'; ?>">

<head>
	<title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="School Management System | Developed by Binary Brains" />
	<meta name="author" content="Binary Brains" />
	<?php include 'includes_top.php'; ?>
</head>

<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour; ?>">
	<div class="page-container <?php if ($text_align == 'right-to-left') echo 'right-sidebar'; ?>">
		<?php include $account_type . '/navigation.php'; ?>
		<div class="main-content" style="background:#e6fff6;font-family: system-ui;">
			<?php include 'header.php'; ?>
			<h3 style="color:#006644 ;font-family: system-ui; font-weight:600; font-size:24px">
				<i class="fa fa-tags" style="color:#006644 ; font-size:24px"></i>
				<?php echo $page_title; ?>
			</h3>
			<?php include $account_type . '/' . $page_name . '.php'; ?>
			<?php include 'footer.php'; ?>
		</div>
	</div>
	<?php include 'modal.php'; ?>
	<?php include 'includes_bottom.php'; ?>
</body>

</html>