<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home page</title>
<link rel="stylesheet" type="text/css" href="themes/view.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="themes/theme_23.css"
	media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.effects.core.js"></script>
<script type="text/javascript" src="js/view.js"></script>
<link rel="stylesheet" href="themes/styles.css" />
<script src="http://code.jquery.com/jquery-latest.min.js"
	type="text/javascript"></script>
<script src="js/script.js"></script>
</head>
<body id="main_body" class=" no_guidelines">
	<div id="form_container" class="LeftPerspectiveShadow LPLarge LPDark">
		<h1>
			<a>Untitled Form</a>
		</h1>
		<?php
				session_start ();
				if (! (isset ( $_SESSION ['loggedIn'] ))) {
					header ( 'Location:error.php' );
				} else {
					
					?>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='#'>Home</a></li>
				<li><a href='createUser.php'>Add Contact</a></li>
				<li><a href='contactlist.php'>View Contacts</a></li>
				<li><a href='logout.php'>Log-out</a></li>
			</ul>
		</div>
		<div
			style="height: 500px; text-align: center; color: #444444; font-family: 'Lucida Grande', 'Lucida Grande', Tahoma, Arial, sans-serif; font-weight: 400; font-style: normal; font-size: 160%;">
			Welcome to the Home page...<br /> Southern New Hampshire University
		</div>
		<?php }?>
		<div id="footer">
			Created by <a href="#" target="_blank">Durgalakshmi</a>
		</div>
	</div>
</body>
</html>