<?php

$con = mysqli_connect('localhost','root','','soulspacearts')
or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);

$query = "SELECT id and email FROM usertable WHERE name='" . $name . "' AND password='" . $pass . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if($num == 0){
  $error = $$_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: auction.html');
}
	
?>