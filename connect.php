<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname   = "robotbase";
// Establish the connection
 $connection = new mysqli($servername, $username, $password);
 if (!$connection){
     die("Connection failed: ". mysqli_connect_error());
 }
 // Connect with the database
 $selected_db = mysqli_select_db($connection, $dbname);
 // Check for errors
  if (!$selected_db){
     die("Connection failed: ". mysqli_error($connection));
}
?>