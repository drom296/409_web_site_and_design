<?php
				
	//hook up to my db on Nova
	// prepend @ to suppress warnings
	$dbLink=@mysql_connect("localhost","pjm8632","PC2perri");
	
	// May have failed because we are running locally
	if (!$dbLink){
		$dbLink=@mysql_connect("localhost","root","")
			or die("couldn't connect: ".mysql_error());
	}
		
	// select database
	mysql_select_db("pjm8632");
	
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