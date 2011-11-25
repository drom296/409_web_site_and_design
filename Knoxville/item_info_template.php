<?php include_once("doctype.html"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_color.css" />
	<link type="text/css" rel="stylesheet" href="css/item_info.css" />
</head>
<body>
<div id="page">
	<?php include_once("banner2.html"); ?>
	
	<?php include_once("nav2.html"); ?>
	
	<div id="content">
		<div id="itemsIntro">
			<h1>Category Name</h2>
			<p>
				This would be a brief overview of the the items to be listed
			</p>
		</div>
		
		<div class="item noFloat">
			<h2>Item name</h2>
			<img src="" alt="">
			<p>
				Description of the item, as well as my thoughts on it
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>