<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>
	<title>Millhouse | Log in </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Log in</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button a href="admin/dashboard.php" type="submit" class="btn" name="login_btn">Log in</a></button>
			<p>
				Not yet a member? <a href="register.php">Register</a>
			</p>
		</form>
	</div>
</div> <!-- // End of container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // End of footer -->