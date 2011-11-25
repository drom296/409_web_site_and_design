<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
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
		$dbLink=mysql_connect("localhost","yourid","password")
			or die("couldn't connect: ".mysql_error());
		mysql_select_db("yourid");
		
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
		if(isset($clear['firstname'])&&isset($clear['lastname'])&& isset($clear['nickname'])&&
			$clear['firstname'] != ''&& $clear['lastname'] != ''&& $clear['nickname'] != ''){
			//build the query and stick it in the db
			$query = "insert into phonebook values ('','".$clear['lastname']."','".$clear['firstname']."','".$clear['nickname']."')";
			
			$res=mysql_query($query);
			echo '<h2>data entered!</h2>';
		}else{
			echo '<h2 style="color:red">You entered no or bad data</h2>';
		}
		
		//get all data from db
		
		$query="select * from phonebook";
		$res=mysql_query($query);
			
		if(mysql_num_rows($res) == 0){
			echo "no records found";
		}else{
			//print out as table
			if($res){
				$firstRow = true;
				$result='<table border="1"><tr>';
				
				while($row=mysql_fetch_assoc($res)){
					if ($firstRow) {
						//give the table a table header...
						foreach($row as $index => $val){
							$result .= "<th>".$index."</th>";
						}
						$result.="</tr>";
						$firstRow = false;
					}//first row
				
					$result.="<tr>";
					foreach($row as $index => $val){
						$result .='<td style="padding:10px">'.$val.'</td>';
					}
					$result.="</tr>";					
				}//fetch
				
				$result .= "</table><hr/>";
				echo $result;

			} //if res
		}//if records found
	?>

	<h2>input into the db</h2>
	<form method="GET" action="dbPutStart.php" onsubmit="return val();">
	<!-- should this send to the action by the method if there is no data?  NO!  JavaScript validation! -->
		<input type="text" name="firstname"/>First Name<br/>
		<input type="text" name="lastname"/>Last Name<br/>
		<input type="text" name="nickname"/>Nickname<br/>
		<input type="submit" value="add to db"/>
	</form>
</body>
</html>