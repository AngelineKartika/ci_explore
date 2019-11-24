<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Explore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url()?>/asset2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/asset2/css/main.css">
<!--===============================================================================================-->
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= base_url('Login/auth');?>" method="POST">
					<span class="login100-form-title p-b-43">
					<img src="<?=base_url()?>/asset/images/icon/explore.png">
					</span>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email_pengguna" placeholder="Email">
						<span class="focus-input100"></span>
						
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="kata_sandi" placeholder="Password">
						<span class="focus-input100"></span>
						
					</div>




					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2"><a href="<?= base_url('Login/register');?>">
							Register now
						</span></a>
					</div>
					<!--messages-->
					<?php echo $this->session->flashdata('msg');?>

				</form>

				<div class="login100-more" style="background-image: url('asset2/images/nusapenida.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>/asset2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>/asset2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>/asset2/js/main2.js"></script>

</body>
</html>
