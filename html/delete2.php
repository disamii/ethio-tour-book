<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "bookforms"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$id = $_GET["id"];
$sql = "DELETE FROM `history` WHERE sno = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: RECORD.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}