<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>
<!DOCTYPE html>
<HTML>
<head>
	<title>Rain World Fansite - Login</title>
    <link rel="icon" type="image/x-icon" href="https://static.wikia.nocookie.net/rain-world-game/images/f/f2/Slugcat.jpg">
</head>

<body>
	<h1>Login</h1>

<?php

$email    = $_POST['defaultLoginFormEmail'];
$password = $_POST['defaultLoginFormPassword'];

error_log("Email: '" . $email . "', Password: '" . $password . "'");

function getDBConnection() {
	// get connection to local MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Joshua";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function checkCreds($conn, $email, $password) {
	$sql = "SELECT id FROM accounts";
		$sql = $sql . " where email='" . $email . "' AND password='" . $password . "';";
	$result = mysqli_query($conn, $sql);

	// if the query returns only one result, email and password are OK
	if (mysqli_num_rows($result) != 0) {
		$status = True;
	} else {
		$status = False;
	}

	// Close the connection 
	mysqli_close($conn);
	return $status;
}

function processBadLogin() {
	$_SESSION["status"] = "NotLoggedIn";
	$_SESSION['errorMessage'] = "Invalid username or password.";
	error_log("Login failed");
	header("Location: index.php#scroll");
	exit();		
}

function processGoodLogin() {
	$_SESSION["status"] = "LoggedIn";
	error_log("Login successful");
	header("Location: home.php");
	exit();		
}


function validate($email, $password) {
	$conn = getDBConnection();
	if (checkCreds($conn, $email, $password)) {
		processGoodLogin();
	} else {
		processBadLogin();
	}
}

echo(validate($email, $password))

?>