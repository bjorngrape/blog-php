<?php include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>Millhouse - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span>
				<a href="<?php echo '../logout.php'; ?>" class="logout-btn">Log out</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>Registered users</span><br />
			</a>
			<a href="posts.php">
				<span>Published posts</span>
			</a>
		</div>
		<br>
		<div class="buttons">
			<a href="users.php">Add users</a><br />
			<a href="posts.php">Add posts</a>
		</div>
	</div>
</body>
</html>