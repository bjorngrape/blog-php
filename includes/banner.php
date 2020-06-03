<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">Log out</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Hey!</h1>
			<p> 
				Blogs rule<br>
			    Create an account<br>
			</p>
			<a href="register.php" class="btn">Join us!</a>
		</div>

		<div class="login_div">
			<form action="<?php echo 'index.php'; ?>" method="post" >
				<h2>Log in</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include("errors.php") ?>
				</div>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button type="submit" class="btn" name="login_btn">Log in</button>
			</form>
		</div>
	</div>
<?php } ?>