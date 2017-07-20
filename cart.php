<?php 
include "includes/common.php";
if(!isset($_SESSION['email'])){
	header('location:products.php');
}
$sum=0;$id=null;
$users_id=$_SESSION['id'];

$query="Select b.name,b.price,b.id as item_id FROM users_items a,items b where a.users_id='$users_id' and a.status='Added to cart' and a.item_id=b.id";

$query_result=mysqli_query($con,$query);

$num=mysqli_num_rows($query_result);
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
	 padding-top:50px;
 }
	</style>
	</head>
<body >
<?php
include "includes/header.php";
?>
<div class="container">
 <table class="table" style="">
   <tr>
       <th>Item Number</th>
       <th>Item Name</th>
       <th>Price</th>
       <th></th>
   </tr>
   
   
  <?php    if($num==0) echo "Add items to the cart first";
else 
{while($row=mysqli_fetch_array($query_result)){
	$sum+=$row['price'];
	$id=$row['item_id'];
	echo "<tr><td>".$id."</td><td> ".$row['name']."</td><td>".$row['price']."</td><td> <a href='cart-remove.php?id={$id}' class='remove_item_link'> Remove</a></td>"."</tr><br/>";
	
}

} ?>
  
   <tr>  
   <td></td>
   <td>Total</td>
   <td><?php echo $sum."/-"; ?></td>
   <td><a href="success.php"><button type="button" class="btn btn-primary"> Confirm Order</button></a></td>
   
   
   </tr>
 </table>
 </div>
 
<?php 
 include "includes/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>