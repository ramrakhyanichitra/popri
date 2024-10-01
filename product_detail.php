<?php
	include('connection.php');
	include('p_header.php');
	$sid=$_GET['sid'];
?>
<div class="top">
	<div class="row" >
	 
	 	<div class="col-lg-3 col-md-6 col-12 w-100">
	 		<p class="cn">PRODUCT DETAILS</p>
	 	</div>
	 
	</div>

</div>

<div class="container-fluid mt-2" >
	<?php
		$pd="select * from `listing` where id='$sid'";
		$pd_r=mysqli_query($conn,$pd);
	?>
	<?php
  		if($pd_r)
  		{
  			foreach($pd_r as $drow)
  			{


  	?>
	<div class="row">
		
		<div class="col-lg-4 col-12 col-md-5 p-lg-5 ">
			<div class="pdetail pb-5">
				<img src="panel/photo/<?php echo $drow['image'];?>" class="img-fluid w-100 h-100">

  			</div>

		
			<div class="pt-0  d-flex" style="overflow-x: scroll; scrollbar-width: none;">
				<?php
					$str=substr($drow['gallery_image'],0,strlen($drow['gallery_image'])-1);
					$ig = explode(',', $str);
					foreach ($ig as $s) { 
						?>
				<img src="panel/photo/<?php echo $s;?>" style="width:80px; margin-right:5px; ">
				<?php
				}
					// echo "<br>";
				
				?>

			</div>
		</div>
		
		<div class="col-lg-7 col-12 col-md-7 pt-5">
			<h4 style="text-transform:capitalize;"class="mt-1 pn"><?php echo $drow['name'] ?></h4>
			<h6 class="pp" style="color:orange;"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $drow['price'];?></h6>
			<p class="des"><?php echo $drow['description'];?></p>
			<form>
				
					<label class="form-label ">SIZE:</label><br>
				  <div class="ht d-flex">
					<select class="form-control pb-2 pt-2 w-50 rounded-pill d-inline-block">
						<option>--select--</option>
					</select>
					<button class=" btn btn-dark rounded-circle h-40 w-42 ms-3  text-white fs-3"><i class="fa-regular fa-heart"></i></button>
				</div>
				
				<br><br>
				<label class="form-label ">QUANTITY:</label><br>
				<div class="ht d-flex">
					<select class="form-control pb-2 pt-2 w-50 rounded-pill d-inline-block">
						<option>--select--</option>
					</select>
					<button class=" btn btn-dark rounded-pill h-40 w-42 ms-3  text-white fs-5">Share</button>
				</div><br>

				<div class="ht pt-5 ps-0 "><button class=" btn btn-dark rounded-pill h-40 w-42 ms-3  text-white fs-6" type="submit">Add To Cart</button></div>
				<div class="ht pt-5 ps-0 d-inline-block"><button class=" btn btn-dark rounded-pill h-40 w-42 ms-3  text-white fs-6" type="submit">BULK ORDER</button></div>

			</form>
		</div>
	</div>
	
	<?php
	  }
	}
	?>
</div>
<?php
	include('p_footer.php');
?>