<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$system_name	=	$this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Admin Panel" />
	<meta name="author" content="Binary Brains" />
	<title><?php echo ('Login'); ?> | <?php echo $system_title; ?></title>
	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<link rel="shortcut icon" href="assets/images/favicon.png">
</head>

<body class="page-body login-page login-form-fall" data-url="http://neon.dev">
	<!-- This is needed when you send requests via Ajax -->
	<script type="text/javascript">
		var baseurl = '<?php echo base_url(); ?>';
	</script>
	<div class="login-container">
		<div class="login-header login-caret">
			<div class="login-content" style="width:100%; height: fit-content;">
				<A href="<?php echo base_url(); ?>" class="logo">
					<img src="uploads/logo.png" height="120" alt="" />
				</A>
				<p class="description">
				<h1 style="color:#ffa800; font-family: system-ui;">
					<?php echo $system_name; ?>
				</h1>
				<h5 style="color:#00b376; font-family: monospace; margin-bottom: 24px;">
					Developed by Binary Brains
				</h5>
				</p>
				<div class="login-form">
					<div class="login-content">
						<div class="form-login-error">
							<h4 style="color:#FFFFFF; font-family: monospace;">Invalid Credentials</h4>
							<p style="font-family: monospace;">Please Check Your Email and Password!</p>
						</div>
						<form method="post" role="form" id="form_login">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-user"></i>
									</div>
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email" autocomplete="off" data-mask="email" />
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"></i>
									</div>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" autocomplete="off" />
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-block btn-login">
									Login
									<i class="entypo-login"></i>
								</button>
							</div>
						</form>
						<div class="login-bottom-links">
							<A href="<?php echo base_url(); ?>index.php?login/forgot_password" class="link">
								Forgot Your Password ?
							</A>
						</div>
						<style>
							td {
								border: 1px solid rgba(204, 204, 204, 0.1) !important;
							}

							th {
								border: 1px solid rgba(204, 204, 204, 0.1) !important;
								background-color: rgba(235, 235, 235, 0) !important;
							}

							.icon-hover {
								cursor: pointer;
							}
						</style>
						<script>
							function copy(email, password) {
								document.getElementById("email").value = email;
								document.getElementById("password").value = password;
							}
						</script>
					</div>
				</div>
			</div>
			<!-- Bottom Scripts -->
			<script src="assets/js/gsap/main-gsap.js"></script>
			<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
			<script src="assets/js/bootstrap.js"></script>
			<script src="assets/js/joinable.js"></script>
			<script src="assets/js/resizeable.js"></script>
			<script src="assets/js/neon-api.js"></script>
			<script src="assets/js/jquery.validate.min.js"></script>
			<script src="assets/js/neon-login.js"></script>
			<script src="assets/js/neon-custom.js"></script>
			<script src="assets/js/neon-demo.js"></script>
</body>

</html>