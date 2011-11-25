<?php
	// setup the db variables
	$db_host="localhost";
	$db_user="root";
	$db_pswd="";
	$db_name="409_web_dev";			
	
	//hook up to my db on Nova
	// prepend @ to suppress warnings
	$dbLink=@mysql_connect($db_host, $db_user, $db_pswd)
		or die("couldn't connect: ".mysql_error());

	// select database
	mysql_select_db($db_name);
	
	$clear = array();
	//stop sql injection for $_GET
	foreach($_GET as $key => $val){
		$clear[$key]=mysql_real_escape_string($val);
	}
			
	//stop sql injection for $_POST
	foreach($_POST as $key => $val){
		$clear[$key]=mysql_real_escape_string($val);
	}

	//include("../dbInfo.php");
	//is_numeric() php function	
	////////////user entered data... (has been sanitized)
	if(isset($clear['uName'])&& isset($clear['comment'])&& 
			$clear['uName'] != ''&& $clear['comment'] != ''){
		
		//build the query and stick it in the db
		$query = "insert into knoxville_comments (name, comment) values ('".$clear['uName']."','".$clear['comment']."')";
	
		$res=mysql_query($query);
		
		// echo '<h2>data entered!</h2>';
	}else{
		// echo '<h2 style="color:red">You entered no or bad data</h2>';
	}
	
	// go back to the comments section.
	header("location: ../comments.php");
?>