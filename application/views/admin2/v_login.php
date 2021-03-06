
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ERP > Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>"" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css') ?>"" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('assets/css/font-awesome.css') ?>"" rel="stylesheet"> 
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"> </script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">ERP Login</a></h1>
		<div class="login-bottom">
			<form action="<?php echo base_url('admin-page/login') ?>" method="POST">
				<div class="col-md-6">
					<div class="login-mail">
						<input name="username" type="text" placeholder="Username" required="">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="login-mail">
						<input name="password" type="password" placeholder="Password" required="">
						<i class="fa fa-lock"></i>
					</div>
				   	<a class="news-letter " href="#">
						<label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
				   	</a>
				</div>
				<div class="col-md-6 login-do">
					<label class="hvr-shutter-in-horizontal login-sub">
						<input type="submit" value="login">
					</label>
					<p>
						<?php echo $this->session->flashdata('installation_msg'); ?>
					</p>
					<p>
						<?php echo $this->session->flashdata('login_alert'); ?>
					</p>
				</div>
				
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
	<!--//scrolling js-->
</body>
</html>

