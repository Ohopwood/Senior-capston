<?php
// Send NOTHING to the Web browser prior to the session_start() line!
// Check if the form has been submitted.
if (isset($_POST['submitted'])) {
	require_once ('mysqli_connect.php'); // Connect to the db.
	$errors = array(); // Initialize error array.
	// Check for an email address.
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysql_real_escape_string(trim($_POST['email']));
	}
	// Check for a password.
	if (empty($_POST['password'])) {
		$errors[] = 'You forgot to enter your password.';
	} else {
		$p = mysql_real_escape_string($_POST['password']);
		$p_md5 = md5($p);
	}
	if (empty($errors)) { // If everything's OK.
		/* Retrieve the user_id and first_name for 
		that email/password combination. */
		$query = "SELECT * FROM users WHERE '$e'=`email` AND '$p_md5' = `password`"; 
		$result = mysqli_query ($dbc, $query) or die(mysqli_error($dbc)); // Run the query.
		$row = mysqli_fetch_array($result);
		
		if ($row) { // A record was pulled from the database.
			//Set the session data:
			session_start(); 
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['email'] = $row['email']; 
			
			// Redirect:
			header("Location:loggedin.php");
			exit(); // Quit the script.
		} else { // No record matched the query.
			$errors[] = 'The email address and password entered do not match those on file.'; // Public message.
		}
	} // End of if (empty($errors)) IF.
	mysqli_close(); // Close the database connection.
} else { // Form has not been submitted.
	$errors = NULL;
} // End of the main Submit conditional.

// Create the form.
?>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/small.css" type="text/css" />

<div data-role="page" class="page" id="login">
	<header data-role="header" data-theme="b">
		<h3 class="ui-title" role="heading"><a href="login.php" style="text-decoration:none;"  color="white" data-transition="slidedown">Login </a></h3>
			</header>
    
   	<section data-role="content" class="some ui-content">
		<div align="center" style="margin-top: 25px; margin-bottom: 20px;">
			<img src="images/49logo.png" alt="49 Books logo" title="49 Books logo" />
				</div>

<div data-role="fieldcontain" style="margin-bottom: 50px;" >
		<form id="signin" action="login.php" method="post" data-ajax="false">
		
			<div class="ui-grid-a">
				<div class="ui-block-a" align="center">
					<label for="username"><img src="images/user.png" width="30" height="30" id="user" style="margin-top: 10px;"/></label>
						</div>
							<div class="ui-block-b" >
								<input type="text" name="email" id="username" placeholder="Email"  /><!-- Clear button option -->
									</div>
				
				<div class="ui-block-a" align="center">
					<label for="password"><img src="images/lock.png" width="30" height="30" id="lock" style="margin-top: 10px;"/></label>
						</div>
							<div class="ui-block-b" >
								<input type="password" name="password" id="password" placeholder="Password" /><!-- Clear button option -->
									</div>
			</div>
			
			<div class="ui-grid-solo">
				<div class="ui-block-a" >
					<input type="submit"  name="submit" value="Login"  data-inline="true"/>
					<input type="hidden" name="submitted" value="TRUE" />
						</div>
				<?php
					// Begin the page now.
					$page_title = 'Login';
				if (!empty($errors)) { // Print any error messages.
					echo '<h1 id="mainhead">Error!</h1>
					<p class="error">The following error(s) occurred:<br />';
					foreach ($errors as $msg) { // Print each error.
					echo " - $msg<br />\n";
					}
					echo '</p><p>Please try again.</p>';
					}

				?>
						
			</div>
	
		</form>
	</div>
				


		<div class="ui-grid-solo" align="center">
			<div class="ui-block-a">
				<a href="register.php" style="text-decoration:none;" data-transition="slidedown"> Sign Up </a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="index.php" style="text-decoration:none;"> Home </a><!-- This link should go to feed page -->
					</div> 
		</div>

    </section>
	
	<footer data-role="footer" data-theme="b">
		<h5 role="heading">&copy; 49 Books | (414) 229-1122</h5>
			</footer>
</div>
