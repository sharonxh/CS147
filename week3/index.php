<!DOCTYPE html>
<html>
	<head>
		<title>Maya Online Books</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<div class="banner"></div>
		
<<<<<<< HEAD
		
<?php

?>
include ("menu.php:");
<table>
include("config.php"); // which contains connection to database
$query = "select * from clarity_username where 'when' > \'2012-10-28'\";

// Don’t be intimidated by the following lines. You can pretty much
// always copy and paste these because they’re sort of like
// functional bits that never change.
$result = mysql_query($query);

<!--First, try getting the data i need into a table.>
while ($row = mysql_fetch_assoc($result)) {
	echo "<p>".$row["what"]."</p>"; // its an array, array indexing
	echo "<p>".$row["how"]."</p>";
	echo "<p>".$row["when"]."</p>";
}
</table>

		
		
=======
		<table>
		<?php
		include("config.php");
		$query = "";
		
		// Don’t be intimidated by the following lines. You can pretty much
		// always copy and paste these because they’re sort of like
		// functional bits that never change.
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			echo "<p>".$row["title"]."</p>";
		}
		?>
		</table>
>>>>>>> b3dacea09ff430bf4988b594f3098ed8216df35c
		
		<script type="text/javascript">
		$("a").click(function (event) {
		    event.preventDefault();
		    window.location = $(this).attr("href");
		});
		</script>
	</body>
</html>