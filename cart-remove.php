<?php 
include "includes/common.php";
$item_id=$_GET['id'];
$users_id=$_SESSION['id'];
$query="DELETE FROM `users_items` WHERE `users_items`.`item_id` = '$item_id' AND `users_items`.`users_id`='$users_id' ;";

$query_result=mysqli_query($con,$query);
header('location:cart.php');

?>