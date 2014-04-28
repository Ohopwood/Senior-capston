<?php
	session_start(); 
	// check the session
	
	if(!isset($_SESSION['email'])) {
		echo "You are not Legged in!";
		exit();
	} else {
		require_once('mysqli_connect.php');

		#execute UPDATE statement
		$user_id=$_GET['user_id'];
		$query = " SELECT * FROM users WHERE user_id=$user_id";
		$result = @mysqli_query ($dbc, $query);
		$num = mysqli_num_rows($result);

		if ($num > 0) { // If it ran OK, display all the records.
			while ($row = mysqli_fetch_array($dbc, $result)) {
?>		

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/small.css" type="text/css" />

<!-----------------------------
 UPDATE ACCT FORM PAGE 
 ----------------------------->	
		<div data-role="page" id="update" data-theme="a" data-ajax="false">
			<!--<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>-->
			<header data-role="header" data-theme="b">
				<a href="#" data-rel="back" data-inline="true" data-mini="true" class="ui-btn-left">Cancel</a>
				<h3 align="center">Update Account</h3>
			</header>
			
			<div data-role="main" class="ui-content"> 
			<form id="update" action="update.php" method="post" data-ajax="false">
			<div style="padding:10px 10px;">
				
				<div class="ui-field-contain">
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname" placeholder="John" data-theme="a" data-clear-btn="true" size="10"
						value="<?php echo $row['firstname']; ?>" />
				</div>
				
				<div class="ui-field-contain">
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname" placeholder="Doe" data-theme="a" data-clear-btn="true"
						value="<?php echo $row['lastname']; ?>"/>		
				</div>
				
				<div class="ui-field-contain">
					<label for="phone">Phone: </label>
					<input type="text" name="phonenumber" id="phonenumber" placeholder="eg 555-555-5555" data-theme="a" data-clear-btn="true"
						value="<?php echo $row['phonenumber']; ?>"/>		
				</div>
				
				<div class="ui-field-contain">
					<label for="email">Email: </label>
					<input type="email" name="email" id="email"  placeholder="doejohn@example.com" data-theme="a" data-clear-btn="true" 
						value="<?php echo $row['email']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="street"> Street: </label>
					<input type="text" name="street" id="street" placeholder="e.g. 123 Center St." data-theme="a" data-clear-btn="true"
						value="<?php echo $row['street']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="city"> City: </label>
					<input type="text" name="city" id="city" placeholder="e.g. Milwaukee" data-theme="a" data-clear-btn="true"
						value="<?php echo $row['city']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="state"> State: </label>
					<input type="text" name="state" id="state" placeholder="e.g. Wisconsin" data-theme="a" data-clear-btn="true"
						value="<?php echo $row['state']; ?>"/>
				</div>
				
				<div class="ui-field-contain">
					<label for="zip"> Zipcode: </label>
					<input type="number" name="zip" id="zip"  placeholder="53204" data-theme="a" data-clear-btn="true"
						value="<?php echo $row['zip']; ?>"/>
				</div>
				
				<input type=submit value=update>
				<input type=reset value=reset>
				<input type=hidden name="id" value="<? echo $row['user_id']; ?>">
			
				</div>
			</form>
		</div>

	<?
			}//end while statement

		} // end if statement

		mysqli_close();


	}
	?>