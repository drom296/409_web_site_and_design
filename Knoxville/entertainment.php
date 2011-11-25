<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<link type="text/css" rel="stylesheet" href="css/nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_nav.css" />
	<link type="text/css" rel="stylesheet" href="css/knox.css" />
	<link type="text/css" rel="stylesheet" href="css/knox_color.css" />
	<link type="text/css" rel="stylesheet" href="css/cuisine.css" />
</head>
<body id="navEntertain">
<div id="page">
	<?php include_once("banner2.html"); ?>

	<?php include_once("nav2.html"); ?>
	
	<!--
		local entertainment
		- day
			- Smokey Mountains
			- Gaitlinburg
			- Ripley's Aquarium
			- Motorcycle trips
		- night
			- Cotton Eyed Joe's
			- Ray's RSB
			- Old City
			- Salsa Knox
	-->
	
	<div id="content">
		<h1>Entertainment</h1>
	
		<h2 class="hr">Daytime</h2>
		
		<div id="funSmoky" class="bubble noFloat" onclick="location.href='day_fun.php#funSmoky'">
			<img class="bubblePic" src="images/smoky_mountains_small.jpg" alt="Smoky Mountains" />
			
			<h2 class="bubbleHeader">The Great Smoky Mountains</h2>
			<p class ="bubbleInfo">
				Located in Gatlinburg, TN, the Smokies are one of the few free
				national parks. The Smokies offer fantastic scenery to take the 
				whole family to enjoy. They have various trails, camping grounds,
				fishing areas, horseback riding, waterfalls, and plenty of other 
				things to enjoy.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funGatlinburg" class="bubble noFloat" onclick="location.href='day_fun.php#funGatlinburg'">
			<img class="bubblePic" src="images/gatlinburg_night_small.jpg" alt="Gatlinburg" />
			
			<h2 class="bubbleHeader">Gatlinburg</h2>
			<p class ="bubbleInfo">
				The main strip at least, is similar to Coney Island of New York. 
				Lots of shops to go through, mixed in with activities like 
				go-karts, makes for a good way to spend an afternoon.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funRipley" class="bubble noFloat" onclick="location.href='day_fun.php#funRipley'">
			<img class="bubblePic" src="images/ripleys_small.jpg" alt="Ripley's Aquarium" />
			
			<h2 class="bubbleHeader">Ripley's Aquarium of The Smokies</h2>
			<p class ="bubbleInfo">
				Smaller than expected but still filled with amazing things. 
				Families seem to flock here to go see the fish. One of the 
				amazing exhibits, outside of the penguins of course, was a 
				tunnel that went under the main bay, which you could walk 
				through.  
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funMotor" class="bubble noFloat" onclick="location.href='day_fun.php#funMotor'">
			<img class="bubblePic" src="images/motorcycle_small.jpg" alt="Motorcycle" />
			
			<h2 class="bubbleHeader">Motorcycle Trips</h2>
			<p class ="bubbleInfo">
				Lots of routes to take, with plenty of scenic areas around. A 
				good one goes through the smokey mountains, which has plenty of 
				twists and turns. My longest trip was my intended route to 
				Myrtle Beach, South Carolina, which ended up taking 11 hrs 
				(yikes!).
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<h2 class="hr">Night Life</h2>
		
		<div id="funCEJ" class="bubble noFloat" onclick="location.href='night_fun.php#funCEJ'">
			<img class="bubblePic" src="images/cej_small.jpg" alt="Cotton Eyed Joe's" />
			
			<h2 class="bubbleHeader">Cotton Eyed Joe's</h2>
			<p class ="bubbleInfo">
				Known for its line dances, and not just to country music. It 
				seems that many of the popular songs, have an associated line 
				dance. As such, in between the normal songs that allow people to 
				pair up and dance, they have group dances to particular songs. 
				Helps ease people onto the dance floor.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funOld" class="bubble noFloat" onclick="location.href='night_fun.php#funOld'">
			<img class="bubblePic" src="images/old_city_small.jpg" alt="Old City" />
			
			<h2 class="bubbleHeader">Old City</h2>
			<p class ="bubbleInfo">
				Old City is located in the city's downtown area. Old City is an 
				offbeat urban neighborhood, home to several unique restaurants, 
				bars, clubs, and shops.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funSalsa" class="bubble noFloat" onclick="location.href='night_fun.php#funSalsa'">
			<img class="bubblePic" src="images/salsaknox_small.jpg" alt="SalsaKnox" />
			
			<h2 class="bubbleHeader">SalsaKnox</h2>
			<p class ="bubbleInfo">
				Salsa Dance company, which hosts various Latin parties and 
				weekly dance lessons. This is where I took my first dance class, 
				and thoroughly enjoyed. We learned to dance to salsa and bachata, 
				at various levels. During those 6 months, I started at beginner 
				and made it all the way to advanced.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>