<?php include_once("doctype.html"); ?>
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
			<h1>Night Life</h1>
			<p>
				Like most citites, the night is owned by the younger populace.
				Knoxville has plenty of night clubs and bars to offer, you just 
				have decide on which. From the three story club in Old City, to the 
				huge edifice of Cotton Eyed Joe's, the atmosphere to every place
				has its own vibe and provides much needed variety.
			</p>
		</div>
		
		<div id="funCEJ" class="item noFloat">
			<h2><a href="http://cottoneyedjoe.com/">Cotton Eyed Joe's</a></h2>
			<img src="images/cej_med.jpg" alt="Cotton Eyed Joe's" />
			<p>
				Known for its line dances, and not just to country music. It 
				seems that many of the popular songs, have an associated line 
				dance. As such, in between the normal songs that allow people to 
				pair up and dance, they have group dances to particular songs. 
				Helps ease people onto the dance floor.
				<br /><br />
				Aside from playing popular music, it was here that I was exposed
				to country music. Prior to my trip, I thought the genre was 
				dreadful (like most northerners). But with all the exposure, and 
				learning some line dances, its nice to hear some of those 
				familar songs every once in awhile.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat">&nbsp;</div>
		</div>
		
		<div id="funOld" class="item noFloat">
			<h2><a href="http://www.downtownknoxville.org/">Old City</a></h2>
			<img src="images/old_city_med.jpg" alt="Old City" />
			<p>
				Old City is located in the city's downtown area. Old City is an 
				offbeat urban neighborhood, home to several unique restaurants, 
				bars, clubs, and shops.
				<br /><br />
				During the weekends, this little strip of night clubs and bars
				is littered with students and people looking to party the night 
				away. It has this awesome pizzeria, that stays open till 3am on 
				the weekends, that offers good tasting pizza and moderate prices.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat"></div>
		</div>
		
		<div id="funSalsa" class="item noFloat">
			<h2><a href="http://www.salsaknox.com/">SalsaKnox</a></h2>
			<img src="images/salsaknox.jpg" alt="SalsaKnox" />
			<p>
				Salsa Dance company, which hosts various Latin parties and 
				weekly dance lessons. This is where I took my first dance class, 
				and thoroughly enjoyed. We learned to dance to salsa and bachata, 
				at various levels. During those 6 months, I started at beginner 
				and made it all the way to advanced.
			</p>
			
			<!--Use this to make parent div fit the height of the floated img-->
			<div class="noFloat">&nbsp;</div>
		</div>

<!--
		<div class="item noFloat">
			<h2>Item name</h2>
			<img src="" alt="">
			<p>
				Description of the item, as well as my thoughts on it
			</p>
			
			<div class="noFloat"></div>
		</div>
-->
		
		<div id="pageNav">
			<a href='day_fun.php'>Day Time Fun</a> 
			| 
			<a href='comments.php'>Comments</a>
		</div>
	</div>
	
	<?php include_once("footer2.html"); ?>
</div>
</body>
</html>