<?php
session_start(); 
require_once("mysqli_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
<title>49 Books</title>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/small.css" type="text/css" />
</head>

<body>

 <!-------------------------
USERS PAGE 
 ------------------------->
 
 <div data-role="page" class="page" id="regusers">
 <!-- panel menu -->
	<section data-role="panel" id="panel" data-position="right" data-display="overlay">
		<ul data-role="listview">
			<li data-role="list-divider">Browse Inventory</li>
			<li><input type="search"  id="search" placeholder="Search" data-clear-btn="true" /></li>
			<!--<li><a href="#">Filter Search</a></li>-->
			<li data-role="list-divider">General</a></li>
			<li><a href="admin.php">Back to 49 Books</a></li>
			<li><a href="logout.php" class="ui-icon-lock">Logout</a></li>
		</ul>
	</section>
<!-- end of panel menu -->	

	<header data-role="header" data-theme="b" class="acct-header-grid ui-grid-b">
		<div class="ui-block-a">
			<a href="#"
				data-rel="back" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-inline="true"
				class="ui-nodisc-icon ui-btn-left ui-corner-all" style="background:transparent; margin: 5px 0px;">Home</a>
		</div>
		
		<div class="ui-block-b">
			<h3 class="ui-title"> Users </h3>
		</div>
		
		<div class="ui-block-c">
			<a href="#panel"  
				data-role="button" data-icon="bars" data-iconpos="notext" data-inline="true" 
				class="ui-nodisc-icon ui-btn-right ui-corner-all" style="background:transparent; margin: 5px 0px;">Menu</a>
		</div>
	</header>
	
	<section data-role="content" class="ui-content">
	<h5 style="text-align: center; font-style:italic; padding: 5px auto 5px auto;" >Choose users(s) to manage:</h5>
			<fieldset data-role="controlgroup">
				<legend>49 Books Registered Users</legend>

						<?php	
							echo "<center>";					//Table header:
							echo "<table cellpadding=5 cellspacing=5 border=1><tr>
							<th>Last, First Name </th><th>Email</th><th>Phonenumber</th><th>Delete</th></tr>"; 
							echo "</center>";

							
							$query = "SELECT * FROM users"; 
							$result = mysqli_query($dbc, $query) or die (mysqli_error($dbc));				
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
								
								echo "<tr><td><strong>".$row['lastname']." , ".$row['firstname']."</strong></td<br>";
								echo "<td>".$row['email']."</td><br>";
								echo "<td>".$row['phonenumber']."</td><br>";
								echo "<td><a href=delete.php?user_id".$row['user_id'].">Delete</a></td>";
							}
						?>
					<!-- <input type="checkbox" name="checkbox-8a" id="checkbox-8a"/> -->
					<!-- <label for="checkbox-8a">Last, First</label> -->
			</fieldset>
	
	<footer data-role="footer" data-position="fixed" data-theme="b" data-tap-toggle="false" class="manage-footer ui-grid-c">
	<div data-role="navbar" class="manage-footer">
            
            <ul> 
                <li><a href="adduser.php" data-icon="plus" data-iconpos="top" />add</a></li> 
                <li><input type="button" data-icon="edit" data-iconpos="top" value="edit" /></li>  
            </ul>
	</div>
	</footer>
 </div>
 <!-------------------------
 END USERS PAGE 
 ------------------------->
 
 

 </body>
 </html>