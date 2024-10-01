<?php
session_start();
	if(empty($_SESSION['aid']))
		{
		?>
		<script>window.location.href='login.php';</script>
		<?php
	}
?>
<?php
	include('header.php');
	include('sidebar.php');
?>

<?php
	include('footer.php');
?>