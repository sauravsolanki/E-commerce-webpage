<?php
include "includes/common.php";
if (!isset($_SESSION['email'])) { 
header('location: products.php');
 }
 $new_password=$_GET['new_password'];
 $retype_password=$_GET['retype_password'];
 $old_password_enter=$_GET['old_password'];
 
 if(strlen($newpassword)<6||strlen(retypepassword)<6){
	 header('location:setting.php?length_error=enter password greater than 6');
 }
 
 if($new_password!=$retype_password){
	 header('location:setting.php?match_error=new password not matched');
 }
 
$old_password_enter=md5($old_password_enter);

 $query="select * from users where password='$old_password_enter'";
 
 $query_result=mysqli_query($con,$query);
 
 $num=mysqli_num_rows($query_result);
 
 if($num==0){
	  header('location:setting.php?old_password_error=enter correct password');
 }
?>