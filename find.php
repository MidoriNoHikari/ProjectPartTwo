<?php 
  session_start();
  $db = mysqli_connect("localhost","root","","cs1520");
  
  $result = mysqli_query("SELECT * FROM characterlist");
   


?>