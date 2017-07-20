<?php
 require "includes/common.php";
 
 $email=mysqli_real_escape_string($con,$_POST['email']);
 $password=mysqli_real_escape_string($con,$_POST['password']);
 $city=mysqli_real_escape_string($con,$_POST['city']);
 $contact=mysqli_real_escape_string($con,$_POST['contact']);
 $address=mysqli_real_escape_string($con,$_POST['address']);
 
 $regex_email="/^[_a-z0-9-]+(\.[_aa-z0-9-]+)*@[a-z0-9-}]+(\.[a-z0-9-]+)*(\/[a-z]{2,3}$/";
 if(!preg_match($regex_email,$email)){
	 header('location: signup.php?email_error=enter correct email');
 }
 
 
 if(strlen($password)<6)
	 header('location: signup.php?password_error=enter correct password');
 
 
 
 $query="SELECT email,password FROM users WHERE email='$email'";
 
 $query_result=mysqli_query($con,$query);
 $no=mysqli_num_rows($query_result);
 $password=md5($password);
 if($no>0)
 {header('location:signup.php?entry_error=email id already exist!try another');
}
 else 
 {$query2="INSERT INTO users(email,password,contact,city,address) VALUES('$email','$password','$contact','$city','$address');";
 $query_result=mysqli_query($con,$query2);
 $_SESSION['id']=mysqli_insert_id($con);
 $_SESSION['email']=$email;
 header('location:products.php');
 }
 

 

 
 ?>
