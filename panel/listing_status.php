<?php
	include('connection.php');
	if($_GET['id'])
	{
		echo $id=$_GET['id'];
		echo $list_stat=$_GET['status'];
		$ls="UPDATE `listing` SET `status`='$list_stat' WHERE `id`='$id'";
		$ls_r=mysqli_query($conn,$ls);
		if($ls_r){
			echo '<script>window.location.href="product_listing.php"</script>';
		}
	}
?>
