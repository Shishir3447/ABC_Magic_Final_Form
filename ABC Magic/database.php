<?php
include 'connect.php';

if (isset($_POST['submit'])) 
{


    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];


$ss="INSERT INTO `user_info` VALUES ('$name', '$number', '$email', '$password');";
if (mysqli_query($con,$ss)) {
    echo "<script> alert('new recode insert')</script>";
}
else
{
    echo "error:".mysqli_error($con);
}
mysqli_close($con);
}

?>