<?php
	include('connection.php');
	include('p_header.php');
?>

<?php
	
	$cate=$_GET['cate'];
?>
<div class="top">
	<div class="row">
	 
	 	<div class="col-lg-3 col-md-6 col-12 w-100">
	 		<p class="cn"><?php echo $cate;?></p>
	 	</div>
	 
	</div>

</div>

<div class="container-fluid mt-2" >
	<div class="row">
  		<div class="container-fluid s1">
  			<?php
  				$prod="select * from `listing` where category='$cate'";
  				$prod_r=mysqli_query($conn,$prod);
  			?> -
  			<div class="row">
  				<?php
  					if($prod_r)
  					{
  						foreach($prod_r as $prow)
  						{


  				?>
  				<div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2">
  					  <a href="product_detail.php?sid=<?php echo $prow['id']?>">
  						<img src="panel/photo/<?php echo $prow['image'];?>"  class="img-fluid w-100 h-100" >
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  						</a>
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-4 c1">
  						<h4 style="text-align:center;"class="mt-1 t1"><?php echo $prow['category'] ?></h4>
  						<h6 style="text-align:center;" class="t2"><?php echo $prow['name'] ?></h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $prow['price'] ?></h6>
  					</div>
  					
  				</div>
  				
  				<?php
  					}
  				  }
  				?>
  			</div>
  		</div>
  	</div>
</div>
<?php
	include('p_footer.php');
?>