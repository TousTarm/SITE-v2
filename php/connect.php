<?php
$mysqli = new mysqli("localhost","root","","toustbook_db");
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return $mysqli;
?>