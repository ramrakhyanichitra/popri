<?php
	include('connection.php');
	if($_GET['id'])
	{
		echo $id=$_GET['id'];
		echo $status2=$_GET['status'];
		$bs="UPDATE `background` SET `status`='$status2' WHERE `id`='$id'";
		$bs_r=mysqli_query($conn,$bs);
		if($bs_r){
			echo '<script>window.location.href="background.php"</script>';
		}
	}
?>
