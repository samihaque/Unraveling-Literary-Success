<?php
$servername = "localhost";
$username = "id18900232_root";
$password = "XfBTOjwe1VmUm<b6";
$database = "id18900232_judge";

// Create connection
$db = new mysqli($servername, $username, $password, $database);
//$db = new mysqli("localhost","id18900232_root","F+PFl$+]3q+4i<E~","id18900232_judge");

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}




?>