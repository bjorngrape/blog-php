<?php include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>

<!-- Get all topics -->
<?php $posts = getAllPosts(); ?>
	<title>Admin | Create Post</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include(ROOT_PATH . '/admin/includes/navbar.php') ?>

	<div class="container content">
		<!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/menu.php') ?>

		<!-- Create and edit  -->
		<div class="action create-post-div">
			<h2 class="page-title">Create/Edit Post</h2>
			<form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include(ROOT_PATH . '/includes/errors.php') ?>

				<!-- if editing post, the id is required to identify that post -->
				<?php if ($isEditingPost === true): ?>
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
				<?php endif ?>

				<input type="text" name="title" value="" placeholder="Title"><br />
				<?php echo $title;?>
				<textarea name="body" id="body" cols="50" rows="10" placeholder="Write message"></textarea>
				<?php echo $body;?>
				
				<!-- if editing post, display the update button instead of create button -->
				<?php if ($isEditingPost === true): ?> 
					<button type="submit" class="btn" name="update_post">Update</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_post">Save post</button>
				<?php endif ?>

			</form>
		</div> <!-- // End of create and edit -->
	</div>
</body>
</html>

<script>
	CKEDITOR.replace('body');
</script>