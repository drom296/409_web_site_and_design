<?php include_once("doctype.html"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Welcome to Knoxville</title>
	<?php include_once('page_parts/css_links.php'); ?>
	<link type="text/css" rel="stylesheet" href="css/item_info.css" />
</head>
<body id="navCuisine">
<div id="page">
	<?php include_once("banner2.html"); ?>
	
	<?php include_once("nav2.html"); ?>
	
	<div id="content">
		<div id="itemsIntro">
			<h1>Everything Else</h1>
			<p>
				Aside for my love of BBQ, there were other places that were 
				unique to me that Knoxville offered. They each have their 
				separate appeal, and I wish I could have them back in the North.
			</p>
		</div>
		
		<div id="foodSonic" class="item noFloat">
			<h2><a href="www.sonicdrivein.com/">Sonic</a></h2>
			<img src="images/sonic_small.jpg" alt="Sonic" />
			<p>
				America's Drive-in, one I've never experienced before. Think 
				drive-thru but lazier. You have your own parking spot, that has 
				its own menu, card-swipe, and speaker. You order what you want 
				in the comfort of your car (no need to exit those nice leather 
				cushions), and pay right there. Then one of the waiter comes 
				out, in roller blades, and brings you your meal.
				<br /><br />
				After being taunted all those years about Sonic by TV commercials,
				I was glad that I was finally able to experience skate-served 
				cuisine. The service was good, and quickly replaced my normal 
				fast food places like McD or Burger King.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="foodCici" class="item noFloat">
			<h2><a href="http://www.cicispizza.com/_template.php">Cici's Pizza</a></h2>
			<img src="images/cicis_pizza_small.jpg" alt="Cici's Pizza" />
			<p>
				Buffet of pizza, need I say more! Simplistic in nature, it 
				provides exactly what pizza lovers need: more variety. They of 
				the classics of course, cheese and pepperoni, but also various 
				others: the cheeseburger pizza, Hawaiian, pizza quesadillas, and
				pizza deserts (could do without the last one).
				<br /><br />
				The best part about it was that the price to enter the buffet, 
				is the same as getting a regular meal elsewhere. If it wasn't
				for the obvious side effects that would come from eating at a 
				Buffet daily, this would have been lunch and dinner everyday.
			</p>

		</div>
		
		<div id="foodShoney" class="item noFloat">
			<h2><a href="http://www.shoneys.com/">Shoney's</a></h2>
			<img src="images/shoneys_bear_small.jpg" alt="Shoney's Bear" />
			<p>
				Comparatively similar to Denny's of the North with one twist, 
				you have the option of going buffet. Just like Denny's you the 
				full menu of items, which are at a good price, but you also 
				could pay for a buffet pass. The buffet consists of more common 
				foods, and if that's all you want it's perfection.
				<br /><br />
				
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"><br /></div>
		</div>
		
		<div id="pageNav">
			<a href='bbq.php'>BBQ</a> 
			| 
			<a href='entertainment.php'>Entertainment</a>
		</div>
		
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>