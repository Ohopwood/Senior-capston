
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
<!---------------------------------------
Main login page
-------------------------------------->
<div data-role="page" class="page" id="login">
	<header data-role="header" data-theme="b">
		<h3 class="ui-title" role="heading"><a href="login.php" style="text-decoration:none;"  color="white" data-transition="slidedown">Login </a></h3>
			</header>
    
   	<section data-role="content" class="some ui-content">
		<div align="center" style="margin-top: 25px; margin-bottom: 20px;">
			<img src="images/49logo.png" alt="49 Books logo" title="49 Books logo" />
				</div>
		
		<div class="ui-grid-solo" align="center">
			<div class="ui-block-a">
				<a href="register.php" style="text-decoration:none;" data-transition="slidedown"> Sign Up </a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="guest.php" style="text-decoration:none;"> Continue as guest </a><!-- This link should go to feed page -->
					</div> 
		</div>

    </section>
	
	<footer data-role="footer" data-theme="b">
		<h5 role="heading">&copy; 49 Books | (414) 229-1122</h5>
			</footer>
</div>
<!-----------------------------------------
 END LOGIN PAGE 
 ----------------------------------------->
</body>
</html>