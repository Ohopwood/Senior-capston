<?php # Script - mysqli_connect.php

//This file contains the database access information.
//This file also establishes a connection to MySQL

//Make the connection. 
$dbc = mysqli_connect("localhost", "root", "root", "49books") OR die("Could not connect to mysql: " . mysql_error());

?>