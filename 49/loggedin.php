<?php
session_start(); 
// Print a customized message:
?>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/small.css" type="text/css" />

<div data-role="page" class="page" id="login">
    
   	<section data-role="content" class="some ui-content">
		<div align="center" style="margin-top: 25px; margin-bottom: 20px;">
			<img src="images/49logo.png" alt="49 Books logo" title="49 Books logo" />
				</div>
				<center>
				<?php
				if (!isset($_SESSION['email'])){
						echo "<h1>You have not logged in yet!</h1>";
					} else {
						echo "<h1>Logged In!</h1><p>You are now logged in " . $_SESSION['firstname'] .  $_SESSION['lastname'] ."!</p>
						<p>You can now enjoy our services for logged in users</p>
						";
					} 
				?>
				</center>

		<div class="ui-grid-solo" align="center">
			<div class="ui-block-a">
				<center> <a href="userfeed.php" style="text-decoration:none;"> Home </a></center> <!-- This link should go to feed page -->
					</div> 
		</div>

    </section>
	
	<footer data-role="footer" data-theme="b">
		<h5 role="heading">&copy; 49 Books | (414) 229-1122</h5>
			</footer>
</div>