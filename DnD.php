<?php
  session_start();
  $db = mysqli_connect("localhost","root","","cs1520");

  if (isset($_POST['submit'])) {
	$PlayerName = $_POST['playerName'];
	$CharacterName = $_POST['characterName'];
	$Age = $_POST['age'];
	$Gender = $_POST['gender'];
	$Race = $_POST['race'];
	$Class = $_POST['class'];
	$Alignment = $_POST['alignment'];
	$Strength = $_POST['str'];
	$Dexterity = $_POST['dex'];
	$Constitution = $_POST['con'];
	$Intelligence = $_POST['inT'];
	$Wisdom = $_POST['wis'];
	$Charisma = $_POST['cha'];
	$Backstory = $_POST['background'];
	
	mysqli_query($db,"INSERT INTO characterList (PlayerName, CharacterName, Age, Gender, Race, Class, Alignment, Strength, Dexterity, Constitution, Intelligence, Wisdom, Charisma, Backstory) VALUES ('$PlayerName', '$CharacterName', '$Age', '$Gender', '$Race', '$Class', '$Alignment', '$Strength', '$Dexterity', '$Constitution', '$Intelligence', '$Wisdom', '$Charisma', '$Backstory')");
	
	mysqli_close();
  }
  
  if (isset($_POST['finder'])){
    $name = $_POST['yourName'];
	/**search character database for matching and return all that match report values**/ 
	$result = mysqli_query($db, "SELECT * FROM characterlist;");
	$num = mysqli_num_rows($result);
	echo "<p>
	  <center>Database Output</center>
	  </p>
	  <br/><br/>";
	$i=0; 
	while ($i < $num){
      $field1=mysqli_result($result,$i,"Field1");
	  $field2=mysqli_result($result,$i,"Field2");
	  echo "<p>
	    $field1 $field2 </p><br/><br/>
		<hr><br/>";
	  $i++;
	}
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>CS 1520: Assignment 2</title>
	<link href="CSS/Form.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="JS/DnDCharacter.js"></script>
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
    <div id="intro">
	  <h1>D&amp;D Character Creation: Level 1</h1>
	  <p> 
	    Welcome to the D&amp;D Character Creator Page. This tool is part of a project for CS 1520, it doesn't actually submit to a real server, nevertheless do enjoy it. For skill points, we will be using the point-buy system. Every skill starts off at 8 (a -1 to each stat) and you may add the remaining 27 points as you see fit. This will not include any bonuses associated with your race.
	  </p>
	</div>
	<div id="characterForm">
	  <form action="" method="post">
	    <fieldset>
	      <label for="playerName">Player Name:<span></label>
	      <input type="text" name="playerName">
		  <br/>
		  <label for="characterName">Character Name:</label>
	      <input type="text" name="characterName">
		  <br/>
		  <label for="age">Age:</label>
		  <input type="number" name="age" id="age">
		  <br/>
		  <label for="gender">Gender:</label>
		  <select name="gender">
		    <option value="male">Male</option>
		    <option value="female">Female</option>
		  </select>
		  <br/><br/>
		  <label for="alignment">Alignment:</label>
	      <select name="alignment">
		    <option value="lawfulGood">Lawful Good</option>
		    <option value="lawfulNeutral">Lawful Neutral</option>
		    <option value="lawfulEvil">Lawful Evil</option>
		    <option value="neutralGood">Neutral Good</option>
		    <option value="neutralNeutral">True Neutral</option>
		    <option value="neutralEvil">Netural Evil</option>
		    <option value="chaoticGood">Chaotic Good</option>
		    <option value="chaoticNeutral">Chaotic Neutral</option>
		    <option value="chaoticEvil">Chaotic Evil</option>
		  </select>
		  </br></br>
		  <label for="race">Race:</label>
	      <select name="race">
	        <option value="human">Human</option>
		    <option value="elf">Elf</option>
		    <option value="dwarf">Dwarf</option>
		    <option value="gnome">Gnome</option>
		    <option value="halfOrc">Half-Orc</option>
		    <option value="halfling">Halfling</option>
			<option value="dragonBorn">Dragonborn</option>
	      </select>
		  <br/>
		  <label for="class">Class:</label>
	      <select name="class">
	        <option value="barbarian">Barbarian</option>
		    <option value="bard">Bard</option>
		    <option value="cleric">Cleric</option>
		    <option value="druid">Druid</option>
		    <option value="fighter">Fighter</option>
		    <option value="monk">Monk</option>
		    <option value="paladin">Paladin</option>
		    <option value="ranger">Ranger</option>
	        <option value="rogue">Rogue</option>
		    <option value="sorcerer">Sorcerer</option>
		    <option value="warlock">Warlock</option>
		    <option value="wizard">Wizard</option>
	      </select>
		  <br/><br/>
		</fieldset>
		<fieldset>
		  <label for="str">Strength:</label>
		  <input type="number" name="str" class="stats" value="8" onchange="statChangeHandler(event);">
		  <br/>
		  <label for="dex">Dexterity:</label>
		  <input type="number" name="dex" class="stats" value="8" onchange="statChangeHandler(event);">
	  	  <br/>
		  <label for="con">Constitution:</label>
		  <input type="number" name="con" class="stats" value="8" onchange="statChangeHandler(event);">
		  <br/>
		  <label for="inT">Intelligence:</label>
		  <input type="number" name="inT" class="stats" value="8" onchange="statChangeHandler(event);">
		  <br/>
		  <label for="wis">Wisdom:</label>
		  <input type="number" name="wis" class="stats" value="8" onChange="statChangeHandler(event);">
		  <br/>
		  <label for="cha">Charisma:</label>
		  <input type="number" name="cha" class="stats" value="8" onChange="statChangeHandler(event);">
		  <br/><br/>
		  <textarea rows="5" cols="80" name="background">
		    Enter your character's background story here.
		  </textarea>
		  <br/><br/>
		</fieldset>
		<input type="button" value="Validate" name="button" onclick="validateForm();">
		<input type="submit" name="submit" id="submission">
      </form>
	</div>
	<div id="characterPanel">
	  <form action="" method="post">
	    <label for="yourName">Your Name: </label><br/>
		<input type="text" name="yourName">
		<br/>
	    <label for="finder">Search for previous characters:</label>
		<br/>
	    <input type="button" value="Query" name="finder" onclick="find();">
	  </form>
	</div>
  </body>
</html>