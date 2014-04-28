<!doctype html>
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
			<form id="updateinfo" action="updateacct.php" method="post" data-ajax="false">
			<div style="padding:10px 10px;">
				
				<div class="ui-field-contain">
					<label for="firstname">First Name:</label>
					<input type="text" name="firstname" id="firstname" value="" placeholder="John" data-theme="a" data-clear-btn="true" size="10">
				</div>
				
				<div class="ui-field-contain">
					<label for="lastname">Last Name:</label>
					<input type="text" name="lastname" id="lastname" value="" placeholder="Doe" data-theme="a" data-clear-btn="true">		
				</div>
				
				<div class="ui-field-contain">
					<label for="phone">Phone: </label>
					<input type="tel" name="phonenumber" id="phonenumber" value="" placeholder="eg 555-555-5555" data-theme="a" data-clear-btn="true">		
				</div>
				
				<div class="ui-field-contain">
					<label for="email">Email: </label>
					<input type="email" name="email" id="email" value="" placeholder="doejohn@example.com" data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="street"> Street: </label>
					<input type="text" name="street" id="street" placeholder="e.g. 123 Center St." data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="city"> City: </label>
					<input type="text" name="city" id="city" placeholder="e.g. Milwaukee" data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="state"> State: </label>
					<input type="text" name="state" id="state" value="" placeholder="e.g. Wisconsin" data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="zip"> Zipcode: </label>
					<input type="number" name="zip" id="un" value="" placeholder="53204" data-theme="a" data-clear-btn="true">
				</div>
				
				<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check" data-inline="true">Save</button>
				
			<!-- end of style div -->
			</div>				
			</form>
		<!-- end of main content div -->
			</div>
		</div>
		
</body>
</html>