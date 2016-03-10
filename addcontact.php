<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN” 
http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd>
<html>
<head>
<title>Contact List</title>
<style type="text/css">
body {
	color: purple;
}

p {
	position: inherit;
	margin: 1px;
	padding-left: 100px;
}

#titles {
	text-align: left;
}

#data {
	text-align: center;
}
</style>
</head>
<body>
	<div align="center" style="position: fixed; margin-left: 500px">
		<?php

session_start();
if (!(isset($_SESSION['loggedIn']))) 
{
	header ( 'Location:error.php' );
}else{

?>

		<h1>Add Contact</h1>
		<form action="insert.php" method="get">
			<p>
			<p id="titles">Name</p>
			<p>
				<input type="text" name="name" />
			</p>
			</p>
			<p id="titles">Address</p>
			<p id="data">
				<input type="text" name="address" />
			</p>
			</p>
			<p>
			<p id="titles">City</p>
			<p id="data">
				<input type="text" name="city" />
			</p>
			</p>
			<p>
			<p id="titles">State</p>
			<p id="data">
				<input type="text" name="state" />
			</p>
			</p>
			<p>
			<p id="titles">Zip</p>
			<p id="data">
				<input type="text" name="zip" maxlength='10' />
			</p>
			</p>
			<p>
			<p id="titles">Phone</p>
			<p id="data">
				<input type="text" name="phone" />
			</p>
			</p>
			<p align="center" id="titles">
				<br /> <input type='submit' value="Submit" />
			</p>
		</form>
		<?php
		}
		?>
	</div>
</body>
</html>