<?php 
include "includes/common.php";
if(!isset($_SESSION['email'])){
	header('location:index.php');
}
$users_id=$_SESSION['id'];
$query="UPDATE users_items SET status='Confirmed' WHERE users_id='$users_id'";

$query_result=mysqli_query($con,$query);


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
<div class="container text-center">
    <h1>Your order is confirmed.Thank you for shopping with us.
	<hr/>
	<h3>Click <a class="text-primary" href="products.php">here</a> to purchase any another items</h3>
</div>





 
<?php
include "includes/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>