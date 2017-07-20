<?php 
require "includes/common.php";
if (isset($_SESSION['email']))
{
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
 position:fixed;bottom:0;left:0;right:0;height:40px;
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
<?php
include "includes/header.php";
?>

<div class="container col-md-4 col-md-offset-4">
<section>
<div class="row">
<div class="panel panel-primary" >
     <div class="panel-heading">Login
	 </div>
 
  
	 <div class="panel-body">
	 <p class="text-warning">Login to make a purchase</p>
	
	 
	 <form method="POST" action="login_submit.php">
	 
     <div class="form-group">
        <label for="email">Email</label>
       <input type="email" class="form-control" id="email" name="email">
    </div>
                          
    <div class="form-group">
        <label for="password">Password</label>
       <input type="text" class="form-control" id="phone" name="password">
     </div>
							
       <button type="submit" class="btn btn-primary" value=”registration_submit” name="submit">Submit</button>
	   
     </form>
	 
	 
	 
	 
	 <br/><br/>
	 <br/>
	 </div>
	 <div class="panel-footer">Don't have an account? <span class="text-primary">Register</span>
	 </div>
	 </div>
	 </div>
  </section>
</div>




<?php 
include "includes/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>