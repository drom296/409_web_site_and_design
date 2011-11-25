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
<body id="navCuisine">
<div id="page">
	<?php include_once("banner2.html"); ?>

	<?php include_once("nav2.html"); ?>
	
	<!--
		local cuisine
			BBQ
				Famous Dave's
				Dead End BBQ
				Calhoun's
				Sweet Pea's
			Everything else
				Sonic (drivein)
				Cici's Pizza
				Shoney's
	-->
	
	<div id="content">
		<h1>Cuisine</h1>
		<h2 class="hr">BBQ</h2>
		
		<div id="foodDave" class="bubble noFloat" onclick="location.href='bbq.php#foodDave'">
			<img class="bubblePic" src="images/famous_daves_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Famous Dave's</h2>
			<p class ="bubbleInfo">
				A chain of southern-style BBQ restaurants. Started
				by Dave Anderson back in 1994 in Wisconsin. Famous Dave's now
				has 37 locations in the U.S.				
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="foodDead" class="bubble noFloat" onclick="location.href='bbq.php#foodDead'">
			<img class="bubblePic" src="images/dead_end_bbq_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Dead End BBQ</h2>
			<p class ="bubbleInfo">
				A fine dining location that seems to cater more to the business 
				crowd. It's a tad more expense than Famous Dave's, and a little 
				bit off the main road, but it's definitely a "must-visit." BBQ 
				with some class!
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="foodCalhoun" class="bubble noFloat" onclick="location.href='bbq.php#foodCalhoun'">
			<img class="bubblePic" src="images/calhouns.jpg" alt="" />
			
			<h2 class="bubbleHeader">Calhoun's</h2>
			<p class ="bubbleInfo">
				Similar to Famous Dave's (without the table of awesomeness), 
				within a bigger building, with more seating, and a bigger menu. 
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<h2 class="hr">Everything Else</h2>
		
		<div id="foodSonic" class="bubble noFloat" onclick="location.href='misc.php#foodSonic'">
			<img class="bubblePic" src="images/sonic_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Sonic Drive-In</h2>
			<p class ="bubbleInfo">
				America's Drive-in, one I've never experienced before. Think 
				drive-thru but lazier. You have your own parking spot, that has 
				its own menu, card-swipe, and speaker. You order what you want 
				in the comfort of your car (no need to exit those nice leather 
				cushions), and pay right there. Then one of the waiter comes 
				out, in roller blades, and brings you your meal.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="foodCici" class="bubble noFloat" onclick="location.href='misc.php#foodCici'">
			<img class="bubblePic" src="images/cicis_pizza_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Cici's Pizza</h2>
			<p class ="bubbleInfo">
				Buffet of pizza, need I say more! Simplistic in nature, it 
				provides exactly what pizza lovers need: more variety. They of 
				the classics of course, cheese and pepperoni, but also various 
				others: the cheeseburger pizza, Hawaiian, pizza quesadillas, and 
				pizza deserts (could do without the last one).
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="foodShoney" class="bubble noFloat" onclick="location.href='misc.php#foodShoney'">
			<img class="bubblePic" src="images/shoneys_bear_small.jpg" alt="" />
			
			<h2 class="bubbleHeader">Shoney's Family Restaurant</h2>
			<p class ="bubbleInfo">
				Comparatively similar to Denny's of the north with one twist, 
				you have the option of going buffet. Just like Denny's you the 
				full menu of items, which are at a good price, but you also 
				could pay for a buffet pass. The buffet consists of more common 
				foods, and if that's all you want it's perfection.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>