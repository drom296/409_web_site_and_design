<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<?php include_once('page_parts/css_links.php'); ?>
	<link type="text/css" rel="stylesheet" href="css/item_info.css" />
</head>
<body id="navEntertain">
<div id="page">
	<?php include_once("banner2.html"); ?>
	
	<?php include_once("nav2.html"); ?>
	
	<div id="content">
		<div id="itemsIntro">
			<h1>Daytime Fun</h1>
			<p>
				There is plenty of fun to have in the South. When the weather 
				plays nice, its generally warmer and sunny, encouraging you to 
				go enjoy the outdoors. 
				<br />
				With so much to do, its hard to decide. Go spend the day at the 
				Great Smoky Mountains and enjoy the scenery. Or visit Gaitlinburg
				and enjoy some of their attractions.
			</p>
		</div>
		
		<div id="funSmoky" class="item noFloat">
			<h2><a href="http://www.nps.gov/grsm/index.htm">Smoky Mountains</a></h2>
			<img src="images/smoky_mountains_med.jpg" alt="Smoky Mountains" />
			<p>
				Located in Gatlinburg, TN, the Smokies are one of the few free
				national parks. The Smokies offer fantastic scenery to take the 
				whole family to enjoy. They have various trails, camping grounds,
				fishing areas, horseback riding, waterfalls, and plenty of other 
				things to enjoy.
				<br />
				
				The smokies offer an escape from the bustle of the day-to-day 
				life in the city. I enjoyed car rides through the mountains, via
				the auto-tour route, and was able to see various wildlife and 
				plants.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funGatlinburg" class="item noFloat">
			<h2><a href="http://www.gatlinburg.com/default.asp">Gatlinburg</a></h2>
			<img src="images/gatlinburg_night_med.jpg" alt="Gatlinburg" />
			<p>
				The main strip at least, is similar to Coney Island of New York. 
				Lots of shops to go through, mixed in with activities like 
				go-karts, makes for a good way to spend an afternoon.
				<br /><br />
				I especially liked that you could rent a scooter and roll around
				the town. It makes it easy for tourists to get around and find
				parking in this busy town.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat">&nbsp;</div>
		</div>
		
		<div id="funRipley" class="item noFloat">
			<h2><a href="http://gatlinburg.ripleyaquariums.com/">Ripley's Aquarium of The Smokies</a></h2>
			<img src="images/ripleys_med.jpg" alt="Ripley's Aquarium" />
			<p>
				Smaller than expected but still filled with amazing things. 
				Families seem to flock here to go see the fish. One of the 
				amazing exhibits, outside of the penguins of course, was a 
				tunnel that went under the main bay, which you could walk 
				through. 
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat">&nbsp;</div>
		</div>
		
		<div id="funMotor" class="item noFloat">
			<h2><a href="http://sundaymorningrides.com/road/states/TN.shtml">Motorcycle Trips</a></h2>
			<img src="images/motorcycle_med.jpg" alt="Motorcycle" />
			<p>
				Lots of routes to take, with plenty of scenic areas around. A 
				good one goes through the smokey mountains, which has plenty of 
				twists and turns. My longest trip was my intended route to 
				Myrtle Beach, South Carolina, which ended up taking 11 hrs 
				(yikes!).
				<br /><br />
				I received my motorcycle license in Knoxville. It provided the 
				ultimate learning grounds for me and my Honda Rebel. I explored 
				my surroundings, made frequent trips to various attractions, and 
				enjoyed the freedom.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat">&nbsp;</div>
		</div>
		
		<div id="pageNav">
			<a href='entertainment.php'>Entertainment</a> 
			| 
			<a href='night_fun.php'>Night Life</a>
		</div>
	
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>