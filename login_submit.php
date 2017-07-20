<?php
require "includes/common.php";
$str="</h1>No data available.please check ur entry or please Sign up!</h1>";
$email=mysqli_real_escape_string($con,$_POST['email']);

$password=mysqli_real_escape_string($con,$_POST['password']);

$encrpass=md5($password);

$query="SELECT id,email FROM users where email='$email' AND password='$encrpass'";

$query_result=mysqli_query($con,$query) or die(mysqli_error($con));

$no_of_rows=mysqli_num_rows($query_result);

if($no_of_rows==0){echo $str;
}
else
{
$row=mysqli_fetch_array($query_result);
$_SESSION['id']=$row['id'];;
$_SESSION['email']=$row['email'];
}
if (isset($_SESSION['email'])) { 
header('location: products.php');
 }
 
?>