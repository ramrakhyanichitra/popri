<?php
	$conn=mysqli_connect("localhost","root","","popri");
	$del=$_GET['del'];
	$ts="DELETE FROM `background` WHERE id='$del'";
	$tsr=mysqli_query($conn,$ts);
	header('location:background.php');
?>