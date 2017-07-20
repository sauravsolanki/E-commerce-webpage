<?php 
require "includes/common.php";
if (isset($_SESSION['email'])) { 
header('location: products.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<title>bootstrap</title>

<style>
footer{
position:fixed;
 bottom:0;left:0;right:0;height:40px;
 padding-top:8px;
background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%;}
 body{
 padding-top:100px;}
	</style>
	</head>
<body>
<div class="container-fluid">
<?php 
include "includes/header.php";
?>
</div>
 <div class="container">
<div class="row col-md-6 col-md-offset-3"> 
 <h1><b>Sign up</b></h1>



	 <form method="post" action="signup_script.php">
	 
                            <div class="form-group">					     
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
								<div><?php if(isset($_POST['submit'])){echo $_GET['email_error'];} ?></div>
                            </div>
                           
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" pattern=".{6,}"/>
								<div><?php if(isset($_POST['submit'])){echo $_GET['password_error'];} ?></div>
                            </div>
							
							<div class="form-group">
                                <label for="contact">contact</label>
                                <input type="text" class="form-control"  name="contact"/>
                            </div>
							
							<div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
							
							<div class="form-group">
                                <label for="address">address</label>
                                <input type="text" class="form-control"  name="address">
                            </div>
							
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   </form>


</div>
</div>
<?php
include "includes/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>