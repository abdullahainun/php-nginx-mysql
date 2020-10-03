<?php
$mysqli = new mysqli("mysql","dev","dev","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
  echo "successfully to connect MySQL";
}
?>