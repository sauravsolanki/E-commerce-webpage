<?php
require "includes\common.php";
if (isset($_SESSION['email'])){
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
 <!--
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/ />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	<style>
 .banner-image{
           padding-top: 75px;
           padding-bottom: 50px;
           text-align: center;
           color: #f8f8f8;
           background: url(internshal_pics/intro-bg_1.jpg) no-repeat center center;
           background-size: cover;
 
 }
 .banner-content{
           position: relative;
           padding-top: 6%;
           padding-bottom: 6%;
           margin-top: 12%;
           margin-bottom: 12%;
           background-color: rgba(0, 0, 0, 0.7);
           max-width: 660px;}
 footer{
 padding: 10px 0;
background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%;}
	</style>
</head>
<body>
<?php 
include "includes/header.php";
?>
<!--button????-->

<div class="banner-image">
           <div class="container"><center>
		        <div class="banner-content">
				
				<h1>We sell lifestyle</h1>
				<p>Flat 40% OFF on premium brands</p>
				     <a href="products.php">
					 <button type="button" class="btn btn-danger btn-lg btn active">Shop now</button>
					 </a>
			    
				</div>
            </div></center>		   
</div> 
  
<?php 
include "includes/footer.php";
?>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
