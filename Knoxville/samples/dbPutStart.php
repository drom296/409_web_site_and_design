<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>dbPut</title>
</head>
<body>
	<h2>output from db</h2>
	<?php 
		
		//hook up to my db
		
		//stop sql injection for $_GET
		
		//stop sql injection for $_POST
		
		//include("../dbInfo.php"); option?
		//is_numeric() php function	
		////////////user entered data... (has been sanitized)
		
		//get all data from db
		
	?>

	<h2>input into the db</h2>
	<form method="GET" action="dbPutStart.php">
	<!-- should this send to the action by the method if there is no data?  NO!  JavaScript validation! -->
		<input type="text" name="firstname"/>First Name<br/>
		<input type="text" name="lastname"/>Last Name<br/>
		<input type="text" name="nickname"/>Nickname<br/>
		<input type="submit" value="add to db"/>
	</form>
</body>
</html>