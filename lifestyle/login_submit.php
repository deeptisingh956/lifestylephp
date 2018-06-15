<?php
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5($_POST['password']);
$select_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$select_query_result=mysqli_query($con, $select_query);
if(mysqli_num_rows($select_query_result)==0)
    echo 'Incorrect username or password';
else {
   $row= mysqli_fetch_array($select_query_result);
   $_SESSION['email']=$row['email'];
   $_SESSION['password']=$row['password'];
   header('location: products.php');
}
?>