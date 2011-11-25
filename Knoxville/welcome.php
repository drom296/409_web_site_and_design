<?php include_once("doctype.html"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<?php include_once('page_parts/css_links.php'); ?>
</head>
<body id="navHome">
	
<div id="page">
	<?php include_once("banner2.html"); ?>

	<?php include_once("nav2.html"); ?>
	
	<div id="content">

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
		
		<div id="TNfood" class="bubble smallerBubble noFloat" onclick="location.href='cuisine.php'">
			<img class="bubblePic" src="images/famous_daves_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Cuisine</h2>
			<p class ="bubbleInfo">Nothing says you're in the south than a surplus 
				of BBQ venues, from fancy restaurants to your pits. There were other 
				unique places to eat, but BBQ was the most abundant.</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="TNfun" class="bubble smallerBubble noFloat" onclick="location.href='entertainment.php'">
			<img class="bubblePic" src="images/smoky_mountains_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Entertainment</h2>
			<p class ="bubbleInfo">From the Smoky Moutains, to Cotton Eyed Joe's, 
						there is plenty to do. Whether its day or night, there's 
						always fun to be had.</p>
						
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
	
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>