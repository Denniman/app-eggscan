<?php

	session_start(); // Start a session


	if (isset($_POST['form_submit']))	{ // When the button of the form is pressed

		print_r($_POST); // For debugging purpose

		$email = $_POST['email']; // Collect email entered by user
		$today = time(); // This is how to get today's date in PHP


		// Now create database connection

		$servername = "localhost"; // Your local server
		$username = "root"; // Local server is usually root
		$password = ""; // Password is usually empty
		$dbname = "newsletter_db"; // we created db named 'newsletter'

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		// This is the SQL query. tricky to write.

		$sql = 'INSERT INTO subscribers_tb (email, date_stamp) VALUES ("' . $email . '", ' . $today . ')';

		if (mysqli_query($conn, $sql)) {

			// Set session for notification
			$_SESSION['notif'] = '<div class = "alert small alert-success">Email has been registered successfully to the database!</div>';

			header('Location: index.php'); // redirect to homepage

		} else {
    		
			$_SESSION['notif'] = '<div class = "alert small alert-success">Error! Could not register email to database.</div>';

			header('Location: index.php');
		}

		mysqli_close($conn); // Close mysql connection resources
	}

?>