<?php
include "includes/common.php";
if(!isset($_SESSION['id'])){
	header('location:index.php');
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
<body >
<div class="container ">
<?php 
include "includes/header.php";
?>
</div>
 <div class="container col-md-5 col-md-offset-3">
   <div class="row">
         <form method="post" action="setting_script.php">
		 <?php if(isset($_POST['button'])){echo '</h1>Password updated</h1>';}?>
		 <h1>Change Password</h1>
		 
		 <div class="form-group">
		 <label for="old_password">Old password</label>
		 <input type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="old password" name="old_password"/> <?php if(isset($_POST['button'])){  echo $_GET['old_password_error']; } ?><br/>
		 </div>
		 
		  <div class="form-group">
		  <label for="new_password">New password</label>
		 <input type="password" pattern=".{6,}" class="form-control" placeholder="New password" name="new_password"/>
		 <?php if(isset($_POST['button'])){echo $_GET['length_error'];}  ?><?php if(isset($_POST['button'])){echo $_GET['match_error'];}  ?><br/>
		  </div>
		  
		  <div class="form-group">
		  <label for="retype_password">Re-type new password</label>
		 <input type="password" pattern=".{6,}" class="form-control" placeholder="Re-type password" name="retype_password"/>
		 <?php  if(isset($_POST['button'])) {echo $_GET['length_error'];}  ?><br/>
		  </div>
		 <input type="submit" class="btn btn-primary" name="button" value="Change">
		 </form>
   </div>
 </div>
 
 
 
 
 
<?php include "includes/footer.php" ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src=?>"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>