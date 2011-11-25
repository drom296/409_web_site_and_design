<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Become more dynamic with SVG</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
  	<link rel="stylesheet" type="text/css" href="layout.css" />
  	<link rel="stylesheet" type="text/css" href="form.css" />
  	<script type="text/javascript" src="validateForm.js"></script>
  </head>
  <body>
    <h1 id="title" onmouseover="this.className='titleChange';" onmouseout="this.className='';">Become more dynamic with SVG</h1>
    
    <div id="col1" class="col">
		<p>
			For most of you, whose experiences run more toward design, you may not realize how close you might be to adding dynamic interaction to your work. Illustrator is a great starting point for creating more interactive content. Any graphic you make, it is able to save as an SVG file (an acronym for Scalable Vector Graphics). SVG can be viewed as a beginning into a larger world for many of you - not simply designing, but also some simple interaction programming.
		</p>
		<p>
			Rules<br />
			In this article, we'll give you some background on what SVG is and how Illustrator can help you in the creation of SVG files. At this time, Illustrator isn't able to make the interaction happen on it's own - you'll have to write some code for that but we'll begin to show you how it's done.
		</p>
		<p>
			Define SVG<br />
			Lets start from the top, and talk a little about what SVG is and what it is capable of doing. SVG is a graphics standard from the World Wide Web Consortium (W3C) designed to handle bitmap, vector and animated graphics in XML, that buzzword most of us have heard so much recently. XML is the acronym for extensi-ble markup language, which is a generic syntax used to mark up (think html) data with simple, human-readable tags. What this means is that SVG is a graphics standard that you can create and read with a simple editor.
		</p>
		<p>
			This example uses SMIL to make the circle's radius grow from 25 pixels to 100 pixels over a period of 2.1 seconds when the cursor rolls over it, and then shrink back to 25 pixels over 2.1 seconds when the mouse rolls back off of it as you can see in the rollover above. Notice in this case that the two &lt;animate&gt; tags are surrounded by the beginning and ending of the &lt;circle&gt; tag. This lets SMIL know which element to animate (the one the code is embedded inside of). The fill="freeze" attribute is there so that once the animation is completed (small to large), the animation stops at the large (without, it would return to it's original size). You can see this working here: <a href="http://dan.rit.edu/svg-11-03/circleAni.html"  style="color:green;">http://dan.rit.edu/svg-11-03/circleAni.html</a>
		</p>
	</div>
	
	<div id="col2" class="col">
		<img src="small.gif" alt="Japan Dot?" onmouseover="this.src='large.gif';" onmouseout="this.src='small.gif';" onclick="window.location='http://people.rit.edu/~pjm8632/409/';"/>
<!--
		<p>
			This example uses SMIL to make the circle's radius grow from 25 pixels to 100 pixels over a period of 2.1 seconds when the cursor rolls over it, and then shrink back to 25 pixels over 2.1 seconds when the mouse rolls back off of it as you can see in the rollover above. Notice in this case that the two &lt;animate&gt; tags are surrounded by the beginning and ending of the &lt;circle&gt; tag. This lets SMIL know which element to animate (the one the code is embedded inside of). The fill="freeze" attribute is there so that once the animation is completed (small to large), the animation stops at the large (without, it would return to it's original size). You can see this working here: <a href="http://dan.rit.edu/svg-11-03/circleAni.html">http://dan.rit.edu/svg-11-03/circleAni.html</a>
		</p>
-->
		<!-- <p> -->
		<br />
			<code>
				&lt;circle cx="150px" cy="150px" r="25px" fill="red"&gt;<br />
				&lt;animate begin="mouseover" dur="2.1s" attributeName="r" from="25" to="100" /&gt;<br />
				&lt;animate begin="mouseout" dur="2.1s" attributeName="r" from="100" to="25" /&gt;<br />
				&lt;/circle&gt;
			</code>
		<!-- </p> -->
		<p>
			What are the problems with SVG?<br />
			There are some definite drawbacks to using SVG (as there always are to all new technologies). The most important is that SVG can't be shown natively in any existing Web browser, which means that if the visitor to your Website doesn't have the necessary plug-in, they won't be able to view your page. (This is true if you are using Flash as well.) The best SVG plug-in currently available is Adobe's, which can be downloaded at <a href="http://www.adobe.com/svg" style="color:green;">http://www.adobe.com/svg</a>.
		</p>
		<p>
			Beyond this simple matter of installing a plug-in, another problem is that there are some slight differences in how your computer, Mac or PC, is able to download and view SVG. At this time, the best results come from embedding your SVG file into an html document, this way you can be sure that your pages will be viewed the same way cross-platform.
		</p>
	</div>
<!--
	<div>
		<form name="form1" id="form1" action="index.php" onsubmit="return validateForm();">
			<label for="uName">Name</label>
			<input id="uName" name="uName" type="text" />
			<br />
			
			<label for="SVGThoughts">Thoughts on SVG</label>
			<textarea rows="10" cols="30" name="SVGThoughts" id="SVGThoughts"></textarea>
			<br />
			
			<input name="submit" id="submit" type="submit" value="Tell us!" />
		</form>
	</div>
-->

    <div id="feedback" style="position:absolute;top:600px;width:800px;background:#a9a;height:200px;overflow:auto; white-space: nowrap;">
    	<!-- submit feedback -->
		<?php
			// validate input
			if (isset($_POST['uName']) && strlen($_POST['uName'])>0 && isset($_POST['SVGThoughts']) && strlen($_POST['SVGThoughts'])>0){
			
				// set variables
				$uName = $_POST['uName'];
				$feedBack = $_POST['SVGThoughts'];
				
				// connect and choose database
				include('db_connect.php');
				
				// build query to display all results
				$query = "insert into prac (name, feedback) values ('".$uName."','".$feedBack."')";
	
				// run the query
				$res = mysql_query($query);
			}
		?>
    	
    	
    	<h2>Enter Your Feedback:</h2>
		<form name="form1" id="form1" method="post" action="index.php" onsubmit="return validateForm();">
			<label for="uName">Name</label> <br />
			<input id="uName" name="uName" type="text" />
			<br />
			
			<label for="SVGThoughts">Thoughts on SVG</label><br />
			<textarea rows="10" cols="30" name="SVGThoughts" id="SVGThoughts"></textarea>
			<br />
			
			<input name="submit" id="submit" type="submit" value="Tell us!" />
		</form>
		
		<h2>Feedback:</h2>
		<div id="allComments">
			<?php
				// connect and choose database
				include('db_connect.php');
				
				// build query to display all results
				$query = "select * from prac";
				
				// run query
				$res = mysql_query($query);
				
				// print results
				if (mysql_num_rows($res) > 0 && $res){
					// set up to skip the first row
					$firstRow = true;
					
					while ($row = mysql_fetch_assoc($res)){
						$result .= "<div class='singleFeedback'>";
						
						// display the name and feedback
						$result .= "<p>".$row["name"].": ".$row["feedback"]."</p>";
							
						$result .= "</div>";
					}
					
					echo $result;					
				}
				
			?>
		</div>
    </div>
  </body>
</html>
