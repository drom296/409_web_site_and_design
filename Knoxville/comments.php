	<?php include_once("doctype.html"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_color.css" />
	<link type="text/css" rel="stylesheet" href="css/comments.css" />
	<script type="text/javascript" src="js/validate_comment.js"></script>
</head>
<body id="navComments">
<div id="page">
	<?php include_once("banner2.html"); ?>
	
	<?php include_once("nav2.html"); ?>
	
	<div id="content">
		<div id="comments">
			<div id="singleComment">
<!-- 			<a id="addCommentLink" href="#">Add a Comment</a> -->
				<?php include_once("comment/single_comment.php"); ?> 
			</div>	
			
			<div id="allComments">
				<?php include("comment/all_comments.php"); ?>
			</div>
			
	
		</div>	
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>
	
	
	
	

