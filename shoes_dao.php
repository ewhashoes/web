<?php
$servername = "localhost";
$username="root";
$password="root";
$dbname="shoes";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  die("메세지: " . $conn->connect_error);
}

?>
