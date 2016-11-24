<?php
  session_start();
  
  $db = mysqli_connect("localhost","root","","cs1520");

  if (isset($_POST['contactButton'])){
	$Name = $_POST['yourName'];
	$Email = $_POST['eMail'];
	$Message = $_POST['message'];
	
	mysqli_query($db, "INSERT INTO contactlist(Name, Email, Message) VALUES ('$Name', '$Email', '$Message')");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Contact Me</title>
	<link rel="stylesheet" href="CSS/ContactStyle.css">
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
	
    <p>Obviously, since you checked out this page called "Contact Me", you clearly want to get ahold of the awesome guy who designed this site, right? Well even if not, you can reach out to me in one of the following ways:</p>
	
	<h3>Verbal Communication:</h3>
	
	<p>I respond to most verbal communication, sometimes even if it's not directed at me, so there is a good chance of getting my attention if you yell out any mono-syllabic sound that sound something close to "Matt." It doesn't even have to rhyme, it just needs either a short 'a' sound or a hard 't' sound. I'll admit it, I have mistook someone going "Ack" for trying to get my attention.</p>
	
	<h3>Or you could use this form:</h3>
	
	<form name="contact" method="post" action="ContactMe.php">
	  <fieldset>
	    <label for="yourName">Name:</label>
	    <input type="text" name="yourName">
	    <br/>
	    <label for="eMail">E-Mail:</label>
	    <input type="text" name="eMail">
	    <br/>
	    <textarea name="message" rows="8" cols="100" >Send me a message!</textarea>
	  </fieldset>
	  <input type="submit" name="contactButton" value="Send Me a Message!">
	  
	</form>
  </body>
</html>