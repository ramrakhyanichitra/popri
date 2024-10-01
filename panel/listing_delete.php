<?php
	$conn=mysqli_connect("localhost","root","","popri");
	$cid=$_GET['cid'];
	$e="DELETE FROM `listing` WHERE id='$cid'";
	$er=mysqli_query($conn,$e);
	header('location:product_listing.php');

?>