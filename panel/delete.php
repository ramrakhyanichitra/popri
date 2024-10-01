<?php
	$conn=mysqli_connect("localhost","root","","popri");
	$did=$_GET['did'];
	$d="DELETE FROM `category` WHERE id='$did'";
	$r=mysqli_query($conn,$d);
	header('location:category.php')
?>