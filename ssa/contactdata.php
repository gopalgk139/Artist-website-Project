<?php

session_start();
header('location:contact.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'soulspacearts');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$s = "select * from contact where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg="insert into contact(Name ,Email ,subject) values ('$name' ,'$email' ,'$subject')";
    mysqli_query($con, $reg);
    echo"Successful";
}
?>