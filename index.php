<?php 
  //echo "My name is Moe";








?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
	<title>Matt: Home</title>
	<link rel="stylesheet" href="CSS/HomeStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="JS/Slideshow.js"></script>
  </head>
  <body>
    <header> 
      <nav>
        <a href="index.php">Home</a>
        <a href="Education.php">Education</a>
        <a href="AboutMe.php">About Me</a>
        <a href="ContactMe.php">Contact Me</a>
		<a href="DnD.php">Character Builder</a>
      </nav>		
	</header>
	<br/>
	<p id="intro">
	  Hello! Welcome to the personal webpage of Matthew Snyder. A project designed and created as part of CS1520 - Programming Languages for Web Applications. I'm glad you're taking the time to visit my site, perhaps you'll be inspired to make your own site as well some day, but maybe not. Either way, enjoy!
	</p>
	
	<div id="slideshow">
     <div>
       <img src="Images/Kirito.jpg">
     </div>
     <div>
       <img src="Images/White_kitsune.jpg">
     </div>
     <div>
       <img src="Images/Kitsune_samurai.jpg"  style="position:absolute;"/>
     </div>
	   <!--I know you said you didn't want inline styling, but I couldn't figure out how to do a slideshow without. All the examples I found online had it like this-->
    </div>
	
  </body>
</html>