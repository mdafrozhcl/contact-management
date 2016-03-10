<?php
session_start ();
if (! (isset ( $_SESSION ['loggedIn'] ))) {
header ( 'Location:error.php' );
} else {	
$servername = "localhost";
$username = "root";
$password = "";
$database = "mycontacts";
$mysqli = new mysqli ( $servername, $username, $password, $database );
if ($mysqli->connect_error) {
	die ( "connection failed" . $mysqli->connect_error );
}

$query = "select contact_name,contact_address,contact_city,contact_state,contact_zip_code,contact_phones,contact_websitev from contacts ";
$qresult = $mysqli->query ( $query );
$results = array ();
while ( $res = $qresult->fetch_assoc () ) {
	$results [] = $res;
}

$table_data = array ();
foreach ( $results as $result ) {
	$table_data [] = array (
			$result ['contact_name'],
			$result ['contact_address'],
			$result ['contact_city'],
			$result ['contact_state'],
			$result ['contact_zip_code'],
			$result ['contact_phones'],
			$result ['contact_websitev'] 
	);
}
$table_data = json_encode ( $table_data );
mysqli_free_result ( $qresult );
mysqli_close ( $mysqli );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact list</title>
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
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
<style type='text/css'>
.bold-green-font {
	font-weight: bold;
	color: green;
}

.bold-font {
	font-weight: bold;
}

.right-text {
	text-align: right;
}

.large-font {
	font-size: 15px;
}

.italic-darkblue-font {
	font-style: normal;
	color: #444444;
}

.italic-purple-font {
	font-style: italic;
	color: purple;
}

.underline-blue-font {
	text-decoration: underline;
	color: blue;
}

.gold-border {
	border: 3px solid gold;
}

.deeppink-border {
	border: 3px solid deeppink;
}

.orange-background {
	background-color: orange;
}

.orchid-background {
	background-color: orchid;
}

.beige-background {
	background-color: beige;
}
</style>
<script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);
      
function drawTable() {
	var cssClassNames = {
		    'headerRow': 'italic-darkblue-font bold-font',
		    'tableRow': '',
		    'oddTableRow': 'beige-background',
		    'selectedTableRow': 'orange-background',
		    'hoverTableRow': '',
		    'headerCell': 'gold-border',
		    'tableCell': '',
		    'rowNumberCell': ''};

		  var options = {'showRowNumber': true, 'allowHtml': true, 'cssClassNames': cssClassNames};
		  options['pageSize'] = 10;
	
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Address');
        data.addColumn('string', 'City');
        data.addColumn('string', 'State');
        data.addColumn('string', 'Zip');
        data.addColumn('string', 'Phone');
        data.addColumn('string', 'Web Site');
        data.addRows(<?php echo $table_data; ?>);

        var container = document.getElementById('div_table');
        var table = new google.visualization.Table(container);

        table.draw(data, options);
      }
    </script>
</head>
<body id="main_body" class=" no_guidelines">
	<div id="form_container" class="LeftPerspectiveShadow LPLarge LPDark">
		<h1>
			<a>Untitled Form</a>
		</h1>
		<div id='cssmenu'>
			<ul>
				<li><a href='mainMenu.php'>Home</a></li>
				<li><a href='createUser.php'>Add Contact</a></li>
				<li class='active'><a href='#'>View Contacts</a></li>
				<li><a href='logout.php'>Log-out</a></li>
			</ul>
		</div>
		<div
			style="height: 480px; text-align: center; margin: 10px; color: #444444; font-family: 'Lucida Grande', 'Lucida Grande', Tahoma, Arial, sans-serif; font-weight: 400; font-style: normal; font-size: 160%;">
			Contact list
			<div id="div_table"></div>

		</div>
		<div id="footer">
			Created by <a href="#" target="_blank">Durgalakshmi</a>
		</div>
	</div>

</body>
</html>
<?php }?>