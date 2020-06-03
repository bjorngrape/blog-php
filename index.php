<!-- 

admin: Will hold files for the admin backend area.
Files concerned with creating, viewing, updating and deleting posts, topics, users.

includes: Will hold files containing pieces of code that will be included into one or more other pages.
E.g. files for error display

static: Hold static files such as images, CSS stylesheets, Javascript.

-->

<?php require_once('config.php') ?>
<?php require_once('includes/public_functions.php') ?>
<?php require_once('includes/registration_login.php') ?>

<!-- calls the getPublishedPosts() function which queries the database and returns posts retrieved
from the database in a variable called $posts  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once('includes/head_section.php') ?>
	<title>Millhouse</title>
</head>
<body>

	<!-- Container -->
	<div class="container">
		
		<!-- Navbar -->
		<?php include('includes/navbar.php') ?>
		<!-- // End of navbar -->

		<!-- Banner -->
		<?php include('includes/banner.php') ?>
		<!-- // End of banner -->

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>

			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
						<div class="post_info">
							<h3><?php echo $post['title'] ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>

		</div> <!-- // End of page content -->

<!-- Footer -->
<?php include('includes/footer.php') ?>
<!-- // End of footer -->