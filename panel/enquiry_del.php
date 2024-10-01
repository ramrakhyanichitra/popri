<?php
	$conn=mysqli_connect("localhost","root","","popri");
	$fid=$_GET['fid'];
	$s="DELETE FROM `enquiry` WHERE id='$fid'";
	$sr=mysqli_query($conn,$s);
	header('loaction:enquiry.php');
?>