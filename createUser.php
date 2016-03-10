<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add a contact</title>
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
					header ( 'Location:login.php' );
				} else {
					
					?>
		<div id='cssmenu'>
			<ul>
				<li><a href='mainMenu.php'>Home</a></li>
				<li class='active'><a href='#'>Add Contact</a></li>
				<li><a href='contactlist.php'>View Contacts</a></li>
				<li><a href='logout.php'>Log-out</a></li>
			</ul>
		</div>
		<div
			style="height: 480px; color: white; font-size: xx-large; font: cursive;">
			<form id="form_11692" class="appnitro top_label" method="post"
				data-highlightcolor="#ececec" action="newcontact.php">
				<div class="form_description">
					<h2>Add a contact</h2>
					<p>keep your contact list updated</p>
				</div>
				<ul>
					<li id="li_1" class="simple_name"><span class="description">Name/Phone</span>
						<span class="simple_name_1"> <input id="name" name="name"
							type="text" class="element text" maxlength="255" size="15"
							value="" /> <label for="name">Name</label>
					</span> <span class="simple_name_2"> <input id="phone" name="phone"
							type="text" class="element text" maxlength="255" size="19"
							value="" /> <label for="phone">Phone</label>
					</span></li>
					<li id="li_2" class="address"><span class="description">Address</span>
						<div>
							<span id="li_2_span_1"> <input id="address" name="address"
								class="element text large" value="" type="text" /> <label
								for="address">Street Address</label>
							</span> <span id="li_2_span_3" class="left state_list"> <input
								id="city" name="city" class="element text large" value=""
								type="text" /> <label for="city">City</label>
							</span> <span id="li_2_span_4" class="right state_list"> <input
								id="state" name="state" class="element text large" value=""
								type="text" /> <label for="state">State /Province / Region</label>
							</span> <span id="li_2_span_5" class="left"> <input id="zip"
								name="zip" class="element text large" maxlength="15" value=""
								type="text" /> <label for="zip">Postal/ Zip Code</label>
							</span> <span id="li_2_span_6" class="right"> <select
								class="element select large" id="country" name="country">
									<option value="" selected="selected"></option>
									<option value="United States">United States</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Canada">Canada</option>
									<option value="Australia">Australia</option>
									<option value="Netherlands">Netherlands</option>
									<option value="France">India</option>
									<option value="Germany">Germany</option>
							</select> <label for="country">Country</label>
							</span>
						</div></li>
					<li id="li_buttons" class="buttons"><input id="submit_form"
						class="button_text" type="submit" name="submit_form"
						value="Submit" /></li>
				</ul>
			</form>
		</div>
			<?php }?>
		<div id="footer">
			Created by <a href="#" target="_blank">Durgalakshmi</a>
		</div>
	</div>
</body>
</html>