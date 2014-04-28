<?php
session_start();
//check session first

	require_once ('mysqli_connect.php');
	$user_id=$_GET['user_id'];  
	$query = "SELECT * FROM users WHERE 'users_id' ='$user_id'"; 
	$result = mysqli_query ($dbc, $query) or die(mysqli_error($dbc));
	$num = mysqli_num_rows($dbc, $result);
	if ($num > 0) { // If it ran OK, display all the records.
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
			echo .$row['firstname']."<br>".$row['lastname']."<p>"; 
		} // End of While statement
		echo "Are you sure that you want to delete this record?<br>";
		echo "<a href=delete.php?user_id=".$user_id.">YES</a> 
			<a href=index.php>NO</a>"; 
		mysqli_free_result ($dbc, $result); // Free up the resources.         
	}else{ // If it did not run OK.
		echo '<p>There is no such record.</p>';
	}
	mysqli_close($dbc); // Close the database connection.

?>
