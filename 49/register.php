<?php
#needs a lot of work
#session_start(); 

//Check if the form has been submited
if (isset($_POST['submitted'])) {
	require_once('mysqli_connect.php'); // connect to DB
	$errors = array(); // Initialize error array.


	// Check for First Name.
	if (empty($_POST['firstname'])) {
		$errors[] = 'You forget to enter your First Name.';
	} else {
		$firstname = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
	}

	// Check for Last Name.
	if (empty($_POST['lastname'])) {
		$errors[] = 'You forget to enter your lastname.';
	} else {
		$lastname = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
	}

	//Check for PhoneNumer.
	if(empty($_POST['phonenumber'])) {
		$errors[] = 'Whats the Diggits?';
	} else {
		$phonenumber = mysqli_real_escape_string($dbc, trim($_POST['phonenumber']));
	}

	//Check For Email.
	if(empty($_POST['email'])) {
		$errors[] = 'Come on, Whats your EMAIL.';
	} else{
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	//check for Street address.
	if (empty($_POST['street'])) {
		$errors[] = 'You forget to enter Your address.';
	} else {
		$street = mysqli_real_escape_string($dbc, trim($_POST['street']));
	}

	//Check for City.
	if( empty($_POST['city'])) {
		$errors[] = 'You Forget to enter City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['city']));
	}

	//Check for State.
	if (empty($_POST['state'])) {
		$errors[] = 'You forget to enter the State';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['state']));
	}

	//Check for Zipcode.
	if(empty($_POST['zip'])) {
		$errors[] = 'WHat is Your ZipCode FOOL?';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['zip']));
	}


	if(empty($_POST['password'])) {
		$errors[] = 'You need some form of security.';
	} else {
		$password  = mysqli_real_escape_string($dbc, trim($_POST['password']));
		$md5password = md5($password);
	}

	if(empty($errors)) { //IF everything's OK
		//Register teh user in the Database.
		//Check for Previous registration.
		$query = "SELECT user_id FROM users WHERE '$email'='email'";
		$result = mysqli_query($dbc, $query) or die(mysqli_error($dbc)); // Run the query.
		if (mysqli_num_rows($result) == 0) {// if there is no such email address
			//make the query
			$query = "INSERT INTO users (firstname, lastname, phonenumber, email, street, city, state, zip, password) 
			VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$street', '$city', '$state', '$zip', '$md5password')";
			$result = mysqli_query($dbc, $query); // Run The query.
			
			if($result){ //If it ran OK.
				echo "<p>You are now registered. Please, login to use our great service.</p>";
				echo "<a href=login.php>Login</a>";
				exit();
			} else { //If it did not run OK.
				$errors[] = 'You could not be registered due to a system error. We apologize for any inconvenience.'; // Public message.
				$errors[] = mysqli_error($dbc); // MySQL error message.
			}
		} else { // Email Address is already taken.
			$errors[] = 'The email address has already been registered.';
		}

	} // End of If (empty($erros)) IF.

	mysqli_close($dbc); //Close the database connection

} else { // Form has not been submitted
	$errors = NULL;
} // End of the main Submited conditional

// Begin the page now.


?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/small.css" type="text/css" />

<header data-role="header" data-theme="b">
				<a href="login.php" data-rel="back" data-inline="true" data-mini="true" class="ui-btn-left">Cancel</a>
				<h3 align="center">Sign Up Form</h3>
			</header>
			
			<div data-role="main" class="ui-content"> 
			<form id="newuser" action="register.php" method="post" data-ajax="false">
			<div style="padding:10px 10px;">
				
				<div class="ui-field-contain">
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname" placeholder="John" data-theme="a" data-clear-btn="true" size="10"
						value="<?php echo $_POST['firstname']; ?>" />
				</div>
				
				<div class="ui-field-contain">
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname" placeholder="Doe" data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['lastname']; ?>"/>		
				</div>
				
				<div class="ui-field-contain">
					<label for="phone">Phone: </label>
					<input type="text" name="phonenumber" id="phonenumber" placeholder="eg 555-555-5555" data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['phonenumber']; ?>"/>		
				</div>
				
				<div class="ui-field-contain">
					<label for="email">Email: </label>
					<input type="email" name="email" id="email"  placeholder="doejohn@example.com" data-theme="a" data-clear-btn="true" 
						value="<?php echo $_POST['email']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="street"> Street: </label>
					<input type="text" name="street" id="street" placeholder="e.g. 123 Center St." data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['street']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="city"> City: </label>
					<input type="text" name="city" id="city" placeholder="e.g. Milwaukee" data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['city']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="state"> State: </label>
					<input type="text" name="state" id="state" placeholder="e.g. Wisconsin" data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['state']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="zip"> Zipcode: </label>
					<input type="number" name="zip" id="zip"  placeholder="53204" data-theme="a" data-clear-btn="true"
						value="<?php echo $_POST['zip']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="pw"> Password:</label>
					<input type="password" name="password" id="pw" value="" placeholder="password" data-theme="a" data-clear-btn="true">
				</div>
				
									
				<!-- <button type="submit" name="submitted" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check" data-inline="true">Submit</button> -->
				<center><input type="submit"  name="submit" value="Sign UP"  data-inline="true"/></center>
				<input type="hidden" name="submitted" value="TRUE" />

				<center>
				<?php 
					if (!empty($errors)) { // Print any error messages.
						echo '<h1>Error!</h1>
						<p>The following error(s) occurred:<br />';
						foreach ($errors as $msg) { // Print each error.
						echo "$msg<br />";
						}
						echo '</p>';
						echo '<p>Please try again.</p>';
						}
				?>
				</center>

			<!-- end of style div -->
			</div>				
			</form>
		<!-- end of main content div -->
			</div>
		</div>

