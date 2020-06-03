<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>
	<title>Millhouse | Register </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<button a href="admin/dashboard.php" type="submit" class="btn" name="reg_btn">Register</a></button>
			<p>
				Already a member? <a href="login.php">Log in</a>
			</p>
		</form>
	</div>
</div> <!-- // End of container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // End of footer -->