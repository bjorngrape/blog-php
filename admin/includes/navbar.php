<div class="header">
	<div class="logo">
		<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>Millhouse - Admin</h1>
		</a>
	</div>
	<div class="user-info">
		<?php echo "Hey" ?>
		<span><?php echo $_SESSION['user']['username'] ?></span> 
		<a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout-btn">Log out</a>
	</div>
</div>