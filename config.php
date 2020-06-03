<!-- Initialize our application's global variables -->

<?php 
	session_start();
	// Connect our application to the database
	// Returns a database connectivity object $conn for querying the database.
	$conn = mysqli_connect("localhost", "root", "", "blog-php");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost:8080/blog-php/');

?>