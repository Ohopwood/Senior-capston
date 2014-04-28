<?php
session_start();
{
	require_once ('mysqli_connect.php');
	$user_id=$_GET['user_id']; 
	$query = "DELETE  FROM users WHERE 'users_id' ='$user_id' "; 
	$result = mysqli_query ($dbc, $query) or die(mysqli_error($dbc));

	if ($result){
		echo "The selected record has been deleted."; 
	}else {
		echo "The selected record could not be deleted."; 
	}
	echo "<p><a href=regusers.php>Users</a>"; 
	mysqli_close($dbc);
}

?>
