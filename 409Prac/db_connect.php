<?php
	// connect
	$dbLink = mysql_connect("localhost","pjm8632","PC2perri")
				or die("Could not connect" .mysql_error());
				
	// select the db
	mysql_select_db("pjm8632");
?>