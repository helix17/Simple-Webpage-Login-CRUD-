<?php
session_start();
if($_SESSION["user"] == NULL) { 
   header('Location: Login.php'); 
} 
//connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_REQUEST['id'];
$query = "DELETE FROM build WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: build.php"); 
?>