<?php
session_start();
// check the session

if(!isset($_SESSION['email'])) {
	echo "You are not logged in!";
	exit();
} else {
	require_once('mysqli_connect.php');

	#execute UPDATE statement
	
	$id = mysqli_real_escape_string($_POST['user_id']);
	$firstname = mysqli_real_escape_string($_POST['firstname']);
	$lastname = mysqli_real_escape_string($_POST['lastname']);
	$phonenumber = mysqli_real_escape_string($_POST['phonenumber']);
	$email = mysqli_real_escape_string($_POST['email']);
	$street = mysqli_real_escape_string($_POST['street']);
	$city = mysqli_real_escape_string($_POST['city']);
	$state = mysqli_real_escape_string($_POST['state']);
	$zip = mysqli_real_escape_string($_POST['zip']);

	$query = "UPDATE users SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber', email='$email', street='$street', city='$city', state='$state', zip='$zip' WHERE user_id='$user_id'"; 
	$result = mysqli_query($dbc, $query); // Run The query.

	if($result){
		echo " Your record has been updated";
		echo "<a href=userfeed.php>Home</a>";
	} else {
		echo "<p> The record could not be updated due to a system error".mysqli_error($dbc). "</p>";
	}
	mysqli_close($dbc);
}


?>