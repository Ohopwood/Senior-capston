<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
<title>49 Books</title>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel="stylesheet" href="../css/style.css" type="text/css"/>
<link rel="stylesheet" href="../css/small.css" type="text/css" />
</head>

<body>

<!-------------------------
 INVENTORY PAGE 
 ------------------------->
 
 <div data-role="page" class="page" id="books">
 <!-- panel menu -->
	<section data-role="panel" id="panel" data-position="right" data-display="overlay">
		<ul data-role="listview">
			<li data-role="list-divider">Browse Inventory</li>
			<li><input type="search"  id="search" placeholder="Search" data-clear-btn="true" /></li>
			<!--<li><a href="#">Filter Search</a></li>-->
			<li data-role="list-divider">General</a></li>
			<li><a href="../logout.php" class="ui-icon-lock">Logout</a></li>
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
			<h3 class="ui-title"> Books </h3>
		</div>
		
		<div class="ui-block-c">
			<a href="#panel"  
				data-role="button" data-icon="bars" data-iconpos="notext" data-inline="true" 
				class="ui-nodisc-icon ui-btn-right ui-corner-all" style="background:transparent; margin: 5px 0px;">Menu</a>
		</div>
	</header>
	
	<section data-role="content" class="ui-content">
	<h5 style="text-align: center; font-style:italic; padding: 5px auto 5px auto;" >Choose item(s) to manage:</h5>
	<!--Could have books first sorted by author, genre, and then book title -->

		<select name="select-choice-1" id="select-choice-1" multiple="multiple" data-native-menu="false"  data-iconpos="left" >
			<option>Author Name </option>
				<optgroup label="Thriller">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Suspense">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				
		</select>
	
		<select name="select-choice-2" id="select-choice-2" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Romance">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Comedy">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
		
		<select name="select-choice-3" id="select-choice-3" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Thriller">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Suspense">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
		
		<select name="select-choice-4" id="select-choice-4" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Thriller">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Suspense">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
		<select name="select-choice-5" id="select-choice-5" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Romance">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Comedy">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
		
		<select name="select-choice-6" id="select-choice-6" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Thriller">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Suspense">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
		
		<select name="select-choice-7" id="select-choice-7" multiple="multiple" data-native-menu="false"  data-iconpos="left">
			<option>Author Name </option>
				<optgroup label="Thriller">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
				<optgroup label="Suspense">
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
					<option value="" >Book Title</option>
				</optgroup>
		</select>
	</section>
	
	<footer data-role="footer" data-position="fixed" data-theme="b" data-tap-toggle="false" class="manage-footer ui-grid-c">
	<div data-role="navbar" class="manage-footer">
            
            <ul> 
                <li><input type="button" data-icon="camera" data-iconpos="top" value="scan" /></li> 
                <li><a href="addbook.php" data-icon="plus" data-iconpos="top" />add</a></li> 
                <li><input type="button" data-icon="edit" data-iconpos="top" value="edit" /></li> 
				<li><input type="button" data-icon="forbidden" data-iconpos="top" value="delete" class="delete" /></li> 
            </ul>
	</div>
	</footer>
 </div>
 <!-------------------------
 END INVENTORY PAGE 
 ------------------------->
 
 </body>
 </html>