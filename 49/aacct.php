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
<!----------------------------------------------------------- ADMIN ACCOUNT PAGE -------------------------------------------------->
<div data-role="page" class="page" id="aacct">
	<!-- panel menu -->
	<section data-role="panel" id="panel" data-position="right" data-display="overlay">
		<ul data-role="listview">
			<li data-role="list-divider">Your Preferences</a></li>
			<!--<li><a href="#" class="ui-icon-edit">Update Contact Info</a></li>
			<li><a href="#" class="ui-icon-edit">Change Username</a></li>-->
			<li><a href="#updatepw" class="ui-icon-edit" data-rel="popup" data-position-to="window" data-transition="pop">Change Password</a></li>
			<li data-role="list-divider">Administration</a></li>
			<li><a href="inventory.php" class="ui-icon-gear">Manage Inventory & Users</a></li>
			<li data-role="list-divider">General</a></li>
			<li><a href="index.php" class="ui-icon-lock">Logout</a></li><!--clicking back will not work for being logged in -->
		</ul>
	</section>
	<!-- end of panel menu -->	
	
	<header data-role="header" id="head3" data-theme="b" class="acct-header-grid ui-grid-b">
		<div class="ui-block-a">
			<a href="admin.php"
				data-role="button" data-icon="home" data-iconpos="notext" data-inline="true"
				class="ui-nodisc-icon ui-btn-left ui-corner-all" style="background:transparent; margin: 5px 0px;">Home</a>
		</div>
		
		<div class="ui-block-b">
			<h3 class="ui-title"> Your Account </h3>
		</div>
		
		<div class="ui-block-c">
			<a href="#panel"  
				data-role="button" data-icon="bars" data-iconpos="notext" data-inline="true" 
				class="ui-nodisc-icon ui-btn-right ui-corner-all" style="background:transparent; margin: 5px 0px;">Menu</a>
		</div>
	</header>
	
	<section data-role="content" class="ui-content" id="content">

		<ul data-role="listview"><li data-role="list-divider">Contact Information</li></ul>
		
		<div id="userinfo"><!-- Should be able to update this information -->
		
			<table border="0">
				<tr>
					<td><strong>Name</strong></td>
					<td style="padding: 0px 0px 0px 100px; text-align: right;"> John Doe</td>
				</tr>
				
				<tr>
					<td style="border-top:1px solid #000;"><strong>Phone</strong></td>
					<td style="border-top:1px solid #000; padding: 0px 0px 0px 100px; text-align: right;">(414)229-1122</td>
				</tr>
				
				<tr>
					<td style="border-top:1px solid #000;"><strong>Email</strong></td>
					<td style="border-top:1px solid #000; padding: 0px 0px 0px 100px; text-align: right;"> doejohn@example</td>
				</tr>
				
				<tr>
					<td style="border-top:1px solid #000;" rowspan="3" valign="top"><strong>Address</strong></td>
					<td style="border-top:1px solid #000; padding: 0px 0px 0px 90px; text-align: right;">2200 E Kenwood Blvd</td>
				</tr>
				
				<tr>
					<td style="padding: 0px 0px 0px 100px; text-align: right;">Milwaukee, WI</td>
				</tr>
				
				<tr>
					<td style="padding: 0px 0px 0px 100px; text-align: right;">53204</td>
				</tr>
				
				<tr >
					<td style="border-top:1px solid #000;" colspan="2" align="center">
					<a href="updateacct.php"><input type="button" value="Update" data-mini="true" data-inline="true"/></a>
					</td>
				</tr>
				
			</table>
			
	<!-- end of content div -->
		</div>
		
		<ul data-role="listview" id="userreserve">
			<li data-role="list-divider">Your Reserved Items</li>
			<li><a href="#">
				<img src="images/small21.png"/>
				<h2>Book Title</h2>
				<p>by <strong>Author</strong></p>
				<p class="ui-li-aside" style="font-size: 16px;"><strong>$0.00</strong></p>		

				<a href="#cancel" data-rel="popup" data-position-to="window" data-transition="pop" data-icon="delete">Reserve Item</a>				
			</li>
			
			<li><a href="#">
				<img src="images/small21.png"/>
				<h2>Book Title</h2>
				<p>by <strong>Author</strong></p>
				<p class="ui-li-aside" style="font-size: 16px;"><strong>$0.00</strong></p>		

				<a href="#cancel" data-rel="popup" data-position-to="window" data-transition="pop" data-icon="delete">Reserve Item</a>				
			</li>
			
			<li><a href="#">
				<img src="images/small21.png"/>
				<h2>Book Title</h2>
				<p>by <strong>Author</strong></p>
				<p class="ui-li-aside" style="font-size: 16px;"><strong>$0.00</strong></p>		

				<a href="#cancel" data-rel="popup" data-position-to="window" data-transition="pop" data-icon="delete">Reserve Item</a>				
			</li>
			
			<li><a href="#">
				<img src="images/small21.png"/>
				<h2>Book Title</h2>
				<p>by <strong>Author</strong></p>
				<p class="ui-li-aside" style="font-size: 16px;"><strong>$0.00</strong></p>		

				<a href="#cancel" data-rel="popup" data-position-to="window" data-transition="pop" data-icon="delete">Reserve Item</a>				
			</li>
		</ul>
	</section>
	
<!-- Pop up dialogue when CANCELING an item -->
	<div data-role="popup" id="cancel" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
		<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
		<header data-role="header" data-theme="a"><h6>Cancel Reserve </h6></header>
		
		<div role="main" class="ui-content">
			<h4 class="ui-title">Are you sure you want to cancel your reserve request for this item?</h4>
				<p>You will no longer be able to pick up this item if it is requested by another user.</p>
					<center><a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-mini="true" data-rel="back" data-transition="flow">Yes</a>
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b"  data-mini="true" data-rel="back">No</a></center>
						
		</div>
    </div>

<!-- Pop up dialogue when UPDATING PASSWORD an item -->
	<div data-role="popup" id="updatepw" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
		<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
		<header data-role="header" data-theme="a"><h6>Update</h6></header>
		
		<div role="main" class="ui-content">
			<form id="newpass" action="register.php" method="post" data-ajax="false">
			<div style="padding:10px 10px;">
				
				<div class="ui-field-contain">
					<label for="oldpw"> Current password:</label>
					<input type="password" name="pass" id="oldpw" value="" data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="newpw"> New password:</label>
					<input type="password" name="pass" id="newpw" value="" data-theme="a" data-clear-btn="true">
				</div>
				
				<div class="ui-field-contain">
					<label for="newpwconfirm"> Re-type new password:</label>
					<input type="password" name="pass" id="newpwconfirm" value="" data-theme="a" data-clear-btn="true">
				</div>
				
				<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-mini="true" data-transition="flow">Save</a>
						
						
		</div>
    </div>

<!-- Quick access menu bar
	<footer data-role="footer" data-position="fixed" data-theme="b" >
		<div data-role="navbar">
			<ul>
				<li><a href="#page2" data-ajax="false" data-role="button" data-icon="home" data-iconpos="top">Home</a></li>
					<li><a href="#" data-role="button" data-icon="gear" data-iconpos="top">Update Info</a></li>
						</ul>
	</footer>
</div>
<!---------------------
END ADMIN ACCOUNT PAGE 
----------------------->
</body>
</html>