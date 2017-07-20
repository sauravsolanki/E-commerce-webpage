<?php
 include "includes/common.php";
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
 padding: 10px 0;
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
 include "includes/check_if_added.php";
?>

 <div class="container">
  <div class="jumbotron">
     <h1>Welcome to our Lifestyle Store</h1>
	 <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place</p>
  </div>
  
  
  <div class="row text-center">
  
     <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/5.jpg"/ alt="">
		 <div class="caption">
		      <h3>Cannon EOS</h3>
			  <p>Price:Rs. 36000.00</p> 
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php 
			  }else {
				  if (check_if_added_to_cart(1)){  
			         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
		  
		            else  { 
		 ?>           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } 
		 } ?>
	  
			
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/2.jpg"/ alt="">
		 <div class="caption">
		      <h3>Nikon DSLR</h3>
			  <p>Price: Rs. 40000.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  {if (check_if_added_to_cart(2)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/3.jpg"/ alt="">
		 <div class="caption">
		      <h3>Sony DSLR</h3>
			  <p>Price: Rs. 45000.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  {if (check_if_added_to_cart(3)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/4.jpg"/ alt="">
		 <div class="caption">
		      <h3>Olympus DSLR</h3>
			  <p>Price: Rs. 50000.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  {if (check_if_added_to_cart(4)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 
	 
  </div><!--end of row 1-->
  
  
  
  
  
  
  
  
  
   <div class="row text-center">
  
     <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/18.jpg"/ alt="">
		 <div class="caption">
		      <h3>Titan Model #301</h3>
			  <p>Price: Rs. 13000.00</p>
			 <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(5)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/19.jpg"/ alt="">
		 <div class="caption">
		      <h3>Titan Model #201</h3>
			  <p>Price: Rs. 3000.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(6)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/20.jpg"/ alt="">
		 <div class="caption">
		      <h3>HMT Milan</h3>
			  <p>Price: Rs. 8000.00</p>
			 <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(7)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/21.jpg"/ alt="">
		 <div class="caption">
		      <h3>Faber Luba #111</h3>
			  <p>Price: Rs. 18000.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(8)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 
	 
  </div><!--end of row 2-->
  
  
  
  
  
  
  
   <div class="row text-center">
  
     <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/22.jpg"/ alt="">
		 <div class="caption">
		      <h3>H&W</h3>
			  <p>Price: Rs. 800.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(9)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/23.jpg"/ alt="">
		 <div class="caption">
		      <h3>Luis Phil</h3>
			  <p>Price: Rs. 1000.00</p>
			<?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(10)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/24.jpg"/ alt="">
		 <div class="caption">
		      <h3>John Zok</h3>
			  <p>Price: Rs. 1500.00</p>
			 <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(11)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 <div class="col-md-3 col-sm-6">
	      <div class="thumbnail">
		  <img src="internshal_pics/25.jpg"/ alt="">
		 <div class="caption">
		      <h3>Jhalsani</h3>
			  <p>Price: Rs. 1300.00</p>
			  <?php 
			  if (!isset($_SESSION['email'])) { ?> 
			  <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
			  <?php } 
			  else 
			  { if (check_if_added_to_cart(12)) 
			  {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
		  } else 
		  { ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
			 
		 </div>
		  </div>
	 </div>
	 
	 
	 
	 
	 
  </div><!--end of row 3-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 </div>
 
 
 
 
 
<?php
include "includes/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>