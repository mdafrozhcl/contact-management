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
				$name = '';
				$address = '';
				$city = '';
				$state = '';
				$phone = '';
				$zip = '';
				$country = '';
				if (isset ( $_POST ['name'] )) {
					$name = $_POST ['name'];
				} else {
					header ( 'Location:error.php' );
				}
				$name = $_POST ['name'];
				$address = $_POST ['address'];
				$city = $_POST ['city'];
				$state = $_POST ['state'];
				$phone = $_POST ['phone'];
				$zip = $_POST ['zip'];
				$country = $_POST ['country'];
				
				$db_host = 'localhost';
				$db_user = 'root';
				$db_pass = '';
				$db_database = 'mycontacts';
				
				$db = new PDO ( 'mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass );
				$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
				$sql = "INSERT INTO contacts (contact_name,contact_address,contact_city,contact_state,contact_zip_code,contact_phones,contact_websitev) VALUES (:contact_name,:contact_address,:contact_city,:contact_state,:contact_zip_code,:contact_phone,:contact_websitev)";
				$q = $db->prepare ( $sql );
				$q->execute ( array (
						':contact_name'=>$name,
						':contact_address'=>$address,
						':contact_city'=> $city,
						':contact_state'=> $state, 
						':contact_zip_code'=> $zip, 
						':contact_phone'=> $phone, 
						':contact_websitev' => 'my.snhu.edu'
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