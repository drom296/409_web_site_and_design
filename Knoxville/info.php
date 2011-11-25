<?php include_once("doctype.html"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_color.css" />
</head>
<body id="navInfo">
	
<div id="page">
	<?php include_once("banner2.html"); ?>

	<?php include_once("nav2.html"); ?>
	
	<div id="content">
		<h1>Info</h1>

		<div id="TNinfo" class="bubble noFloat" onclick="location.href='knoxville.php'">
			<img class="bubblePic" src="images/knoxvegas_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">KnoxVegas</h2>
			<p class ="bubbleInfo">	Also known as Knoxville, TN, KnoxVegas 
				is the title given to this eastern TN city by its 
				young adult population. This is a play on words with 
				the similarities of 'vegas' and 'ville', and it adds to a notion
				of fun times to be had by its inhabitants. The sporting events, 
				arts/music scene, and bar life make this medium-sized city seem 
				more Vegas-like in its appeal.</p>
				
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
	
		<div id="TNwhy" class="bubble smallerBubble noFloat" onclick="location.href='why1.php'">
			<img class="bubblePic" src="images/sni.jpg" alt="" />
			
			<h2 class="bubbleHeader">Why I went to Knoxville, TN</h2>
			<p class ="bubbleInfo">I lived in Knoxville for 6 months, via a co-op.
				There were plenty of ups and downs, but overall it was a great experience.</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>