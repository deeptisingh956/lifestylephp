<?php
include 'include/common.php';
$name=mysqli_real_escape_string($_POST['name']);
$email=mysqli_real_escape_string($_POST['email']);
$password=md5($_POST['password']);
$contact=mysqli_real_escape_string($_POST['contact']);
$city=mysqli_real_escape_string($_POST['city']);
$address=mysqli_real_escape_string($_POST['address']);
$insert_query="INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
$query_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));
$_SESSION['id']= mysqli_insert_id($con);
$_SESSION['email']= $email;
$_SESSION['password']=$password;
header('location: products.php');
?>
