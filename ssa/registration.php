<?php

$con = mysqli_connect('localhost','root','','soulspacearts')
or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
header('location:login.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'soulspacearts','');

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$pass = $_POST['password'];
$pass = mysqli_real_escape_string($con, $pass);
$password = MD5($pass);


$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$query = "select * from usertable where name = '$name'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.html?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.html?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.html?m2=' . $m);
  } else {

    $query = "INSERT INTO usertable(name, email, password)VALUES('" . $name . "','" . $email . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: auction.html');
  }
?>