<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sample Form</title>
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
		<div
			style="height: 500px; text-align: center; color: white; font-size: xx-large; font: cursive;">
				<?php
				$userid = '';
				$pwd = '';
				if (!(isset ( $_POST ['userid']) || isset ($_POST ['newpass']) || isset ($_POST ['newpass2']) )) {
					header ( 'Location:error.php' );
					
				}
				if (($_POST ['newpass']) != ($_POST ['newpass2'])) {
					echo "Passwords do not match - please use the \"Back\" button to re-enter the data.<b> />\n";
				} else {
					$userid = $_POST ['userid'];
					$pwd = $_POST ['newpass'];
				}
				
				$db_host = 'localhost';
				$db_user = 'root';
				$db_pass = '';
				$db_database = 'mycontacts';
				
				$db = new PDO ( 'mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass );
				$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
				$sql = "INSERT INTO Users (userid,password) VALUES (:userid,:password)";
				$q = $db->prepare ( $sql );
				$q->execute ( array (
						':userid' => $userid,
						':password' => $pwd 
				) );
				session_start ();
				$_SESSION ['loggedIn']=true;
				header ( 'Location:mainMenu.php' );
				?>
			</div>
		<div id="footer">
			Created by <a href="#" target="_blank">Durgalakshmi</a>
		</div>
	</div>
</body>
</html>