<?php
	include('connection.php');
	
?>
<?php
	$r="select * from `background` where `status`='active'" ;
	$rr=mysqli_query($conn,$r);
	if($rr)
	{
		foreach($rr as $srow)
		{

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POPRI WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstraplink.css">

	<script type="text/javascript" src="javascriptlink.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<style type="text/css">
		.back1{
			
			background-image:url("panel/photo/<?php echo $srow['desktop_back'];?>");
			background-repeat:no-repeat;
			background-size:cover;
			width:100%;
			height:120vh;
			opacity:0.55;
			position:relative;
		}
	</style>
	
</head>
<body>
<div class="container-fluid p-0 m-0">
		<div class="col-12 mback">
			<marquee class="para">
				<span class="header">Upto <i class="fa-solid fa-indian-rupee-sign"></i> 500 off + 2-Day Express Delivery On Prepaid Order🚚 </span>
				<span class="header">Upto <i class="fa-solid fa-indian-rupee-sign"></i> 500 off + 2-Day Express Delivery On Prepaid Order🚚 </span>
				<span class="header">Upto <i class="fa-solid fa-indian-rupee-sign"></i> 500 off + 2-Day Express Delivery On Prepaid Order🚚</span>
				<span class="header">Upto <i class="fa-solid fa-indian-rupee-sign"></i> 500 off + 2-Day Express Delivery On Prepaid Order🚚</span>

				</marquee>
		</div>
</div>
<!-- NAVBAR SECTION -->
<div class="container-fluid position-absolute" style="z-index:99;">
	   
	   <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  	  
  	  	
    	<a class="navbar-brand ps-3" href="popri.php"><img src="popri_images/poprilogo.png" height="150px" width="150px"></a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav ms-auto">
        		<li class="nav-item" >
          			<a class="nav-link active content" aria-current="page" href="#" style="color:#00008B;"><div></div>Home</a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link content" href="#" style="color:#00008B;"><div></div>Category</a>
        		</li>
        		<li class="nav-item" >
          			<a class="nav-link content" href="#" style="color:#00008B; "><div></div>Best Seller</a>
        		</li>
        		<li class="nav-item" >
          			<a class="nav-link content" href="#" style="color:#00008B;"><div></div>Sale</a>
        		</li>
        		<li class="nav-item " >
          			<a class="nav-link content" href="#" style="color:#00008B;"><div></div>Profile</a>
        		</li>
        		<li class="nav-item " >
          			<a class="nav-link " href="#" style="text-decoration:none;color:black;"><i class="fa-solid fa-cart-shopping"></i>
          			<sup class="bg-danger rounded-circle" style="color:white; text-align:center;padding-inline:4px">0</sup>
          				
          			</a>
        		</li>
        		<li class="nav-item " >
          			<a class="nav-link " href="#" style="text-decoration:none;color:black"><i class="fa-solid fa-heart" ></i><sup class="bg-danger rounded-circle" style="color:white;padding-inline:4px ">0</sup>
          				
          			</a>
        		</li>
        		
      		</ul>
      		
    	</div>
  		</nav>

  	
</div>
<div class=" autoplay d-none d-lg-block">
	<video playsinline="true" autoplay="" loop="loop" muted="" width="100%">
   	<source src="panel/photo/<?php echo $srow['desktop_back']?>" type="video/mp4"></video>
</div>
<div class="autoplay d-block d-lg-none">
   <video playsinline="true" autoplay="" loop="loop" muted="" width="100%">
   	<source src="panel/photo/<?php echo $srow['mobile_back']?>" type="video/mp4"></video>
</div>

<!-- SECTION-1-->
<div class="container-fluid mt-2" >
	<?php
		$cate="select * from `category` where master='Master'";
		$cate_r=mysqli_query($conn,$cate);
		$d="select * from `listing` where `status`='active' order by RAND() LIMIT 8 ";
		$d_r=mysqli_query($conn,$d);
	?>
	<div class="row">
  		<div class="container-fluid s1">
  			<div class="row">
  				<?php
  					if($cate_r)
  					{
  						foreach ($cate_r as $crow) {
  						
  						
  					
  				?>
  				<div class="col-lg-3 col-sm-6 col-6  ms-auto ps-3 py-4 p1  ">
  				   <a href="product.php?cate=<?php echo $crow['value']?>" style="text-decoration:none;color:black">
  					<img src="panel/photo/<?php echo $crow['category_image'];?>" class="img-fluid" >
  					<h4 style="text-align:center;" class="mt-3"><?php echo $crow['label'] ?></h4>
  					</a> 
  				</div>
  				
  				<?php
  					}
  				  }
  				?>
  			</div>
  			
  		</div>
  		<div class="col-12 mt-5">
  			<h1 style="text-align:center;" class="my-4">MUST HAVE</h1>
  		</div>
  		
  		<div class="col-12 mt-5">
  			<!-- section 2-->
  			<div class="row">
  				<?php
  					if($d_r)
  					{
  						foreach($d_r as $detail){


  				?>
  				
  				<div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-3">
  					
  					<div class="col-12 border border-dark sub2 " onmouseover="playvedio()" onmouseout="playout()" >
  					  <a href="product_detail.php?sid=<?php echo $detail['id']?>" >
  					     
  						
  								<img src="panel/photo/<?php echo $detail['image']?>"  class="img-fluid w-100 h-100 image" id="<?php echo $detail['name']?>">
  								<video playsinline="true" autoplay="" loop="loop" muted="" style="object-fit:fill;position:absolute;top:0px;left:0px;" class="w-100 vid" id="<?php echo $detail['product_video']?>"><source src="panel/photo/<?php echo $detail['product_video']?>" type="video/mp4"></video>
  							

  						
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  					  </a>
  					</div>


  					<div class="col-12 border border-dark border-top-0 pt-4 c1">
  						<h4 style="text-align:center;"class="mt-1 t1"><?php echo $detail['category']?></h4>
  						<h6 style="text-align:center;" class="t2"><?php echo $detail['name']?></h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $detail['price']?></h6>
  					</div>
  				
  				</div>
  				<!-- <div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2  ">
  						<img src="popri_images/p6.jpg" class="img-fluid h-100 w-100" >
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  						
  					</div>
  					<div class="col-12 border border-dark border-top-0  pt-4 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">DRESS</h4>
  						<h6 style="text-align:center;" class="t2">Yellow Printed Floral Maxi Dress</h6>
  						<h6 style="text-align:center;"class="t2" ><i class="fa-solid fa-indian-rupee-sign"></i>.2000/-</h6>
  					</div>
  					
  				</div>
  				<div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2">
  						<img src="popri_images/p7.jpg" class="img-fluid h-100 w-100">
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-5 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">TOPS</h4>
  						<h6 style="text-align:center;" class="t2" >TIE-TOP</h6>
  						<h6 style="text-align: center;" class="t2" ><i class="fa-solid fa-indian-rupee-sign"></i>.1260/- <del>₹.1400/-</del></h6>
  						
  					</div>
  					
  				</div>
  				<div class="col-lg-3 col-sm-6 col-md-4  col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark  border-bottom-0 sub2">
  						<img src="popri_images/p8.jpg"  class="ps-2 img-fluid h-100 w-95">
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  					</div>
  					<div class="col-12 border border-dark border-top-0  pt-5 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">DRESS</h4>
  						<h6 style="text-align:center;" class="t2">CHRISTINA DRESS</h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i>.1300/-</h6>
  					</div>
  					
  				</div> -->

  		
  			
  			<!-- section-3-->
  			
  				<!-- <div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-4">
  					<div class="col-12 border border-dark sub2">
  						
  						<img src="popri_images/p9.jpg"  class="img-fluid h-100 w-100" >
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  						
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-5 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">TOPS</h4>
  						<h6 style="text-align:center;" class="t2">PRINTED HALTER TOP NECK</h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i>.1500/-</h6>
  					</div>
  				</div>
  				<div class="col-lg-3 col-sm-6 col-md-4  col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2">
  						
  						<img src="popri_images/p10.jpg" class="img-fluid h-100 w-100">
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  						
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-5  c1">
  						<h4 style="text-align:center;"class="mt-2 t1">CO-ORDS</h4>
  						<h6 style="text-align:center;" class="t2">PINK TWO PIECE CORD SET</h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i>.2300/-</h6>
  					</div>
  				</div>
  				<div class="col-lg-3 col-sm-6 col-md-4  col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2">
  						
  						<img src="popri_images/p11.jpg" class="img-fluid h-100 w-100">
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-4 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">JUMPSUITS</h4>
  						<h6 style="text-align:center;" class="t2">PRINTED PATTERN DHOTI JUMPSUIT</h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i>.2200/-</h6>
  					</div>
  				</div>
  				<div class="col-lg-3 col-sm-6 col-md-4 col-6 mb-5 ps-3">
  					<div class="col-12 border border-dark sub2">
  						
  						<img src="popri_images/p12.jpg" height="100%"width="100%">
  						<div class="icon"><i class="fa-regular fa-heart fav"></i></div>
  						
  					</div>
  					<div class="col-12 border border-dark border-top-0 pt-4 c1">
  						<h4 style="text-align:center;"class="mt-2 t1">CO-ORDS</h4>
  						<h6 style="text-align:center;" class="t2">YELLOW PRINT THREE PIECE <br> CORD-SET</h6>
  						<h6 style="text-align:center;" class="t2"><i class="fa-solid fa-indian-rupee-sign"></i>.2300/-</h6>
  					</div>
  				</div> -->
  			<?php
  					}
  				 }
  			?>	
  		</div>
  			

  			
  	</div>
  		<div class="col-12 mt-5 product">
  			<button class="btn btn-outline-primary btn-lg  rounded-pill shadow-lg p-3 bg-body rounded">All Products</button>
  		</div>
  		<div class=" container-fluid col-12 mt-5 back_img h-auto" >
  			<div id="carouselExampleIndicators" class="carousel slide quote h-auto" data-bs-ride="carousel">
  				<div class="carousel-indicators">
    				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  				</div>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
     					 <p class="d-block w-100 line">In my job as social media strategist, I have tried every analytics<br> product on the market and when I came across.
     					 </p>
     					 <p class="d-block w-100 name1">Rosalie Peter
     					 </p>
     					 <p class="d-block w-100 post">CEO Adobe
     					 </p>
    				</div>
    				<div class="carousel-item">
      					  <p class="d-block w-100 line"> In my job as social media strategist, I have tried every analytics<br>product on the market and when I came across.
     					 </p>
     					 <p class="d-block w-100 name1">Gilbert Norton
     					 </p>
     					 <p class="d-block w-100 post">Designer
     					 </p>
    				</div>
    				<div class="carousel-item">
      					 <p class="d-block w-100 line" > In my job as social media strategist, I have tried every analytics<br>product on the market and when I came across.
     					 </p>
     					 <p class="d-block w-100 name1" >Robert Elliote
     					 </p>
     					 <p class="d-block w-100 post" >CEO Aplle
     					 </p>
    				</div>
    			</div>
    		</div>
  		</div>
  		<div class="container-fluid mt-5 form_bg h-auto" >
  			
  			<div class=" container col-xl-6 col-lg-8 col-md-10" >
  			  <p class="form_p1">LET'S TALK</p>
  			  <p class="form_p2">We would love to hear from you. Contact us for any questions,comments you may have!</p>
  			  <form action="" method="POST">
  			  	<div class="row justify-content-center align-items-center">
  			  		<input type="text" name="name" placeholder="Your Name" class="form-control  bg-dark text-light fw-bold fs-5 border-0 ps-4 mb-4 inp">
  			  		<input type="email" name="email" placeholder="Email Address" class="form-control bg-dark text-light fw-bold fs-5 border-0 ps-4 mb-4 inp ">
  			  		<input type="number" name="pno" placeholder="Phone Number" class="form-control w-500 bg-dark text-light fw-bold fs-5 border-0 ps-4 mb-4 inp">
  			  		<textarea placeholder="Your Message" name="msg" rows="4" class="form-control w-500 bg-dark text-light fw-bold fs-5 border-0 ps-4 mb-4 inp"></textarea>
  			  		<input type="submit" value="SUBMIT NOW"  name="sub" class="btn btn-danger w-100 submit mb-4"></button>
  			  	</div>

  			 </form>
  			</div>	
  		</div>
  		<!--  footer section 
  		<div class="container-fluid  footer1 h-auto">
  			<div class="row footer2" >
  				<div class="col-lg-3 col-md-6 col-12 fpart1 ps-md-5 pt-5">
  					<h5 class="fw-bold">WE ARE CREATIVE AGENCY</h5>
					<p> 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, et dolore magna aliqua.  ex ea commodo<br><br>
						<i class="fa-brands fa-facebook" style="letter-spacing:10px;"></i>
						<i class="fa-brands fa-instagram" style="letter-spacing:10px;"></i>
						<i class="fa-brands fa-whatsapp" style="letter-spacing:10px;"></i>
					</p>
  				</div>
  				<div class="col-lg-3 col-md-6 col-12 ps-md-5 pt-5 fpart2">
  					<h5 class="fw-bold"> COMPANY </h5>
					<a href="" >About Us</a><br>
					<a href="" >Contact Us</a><br>
					<a href="">Support</a><br>
  				</div>
  				<div class="col-lg-3 col-md-6 col-12 ps-md-5 pt-5 fpart2">
  					<h5 class="fw-bold"> RECENT POST </h5>
					<a href="">Summer Beach</a><br>
					<a href="">Beautiful Workspace</a><br>
					<a href="">Pink Bird</a><br>
					<a href="">Winter is Coming</a><br>
  				</div>
  				<div class="col-lg-3 col-md-6 col-12 ps-md-5 pt-5 fpart2">
  					<h5 class="fw-bold">USEFUL LINKS</h5>
					<a href="">Refund and Return Policy</a><br>
					<a href="">Exchange Policy</a><br>
					<a href="">Shipping Policy</a><br>
  				</div>
  				<p class="end">&copy Popri 2024 Design & Developed by Concentics Pvt. Ltd</p>
  			</div>
  			
  		</div> -->

 	</div>
	
</div>
</body>

</html>

<?php
    if(!empty($_POST['sub']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['pno'];
        $message=$_POST['msg'];

        $r="INSERT INTO `enquiry`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
        $ra=mysqli_query($conn,$r);
    }
 ?>

<?php
	include('p_footer.php');
?>


<script type="text/javascript">
	function playvedio(){
      
       
        var v=document.getElementById("<?php echo $detail['product_video']?>");
        
        v.play();

    } 
    function playout(){
       
        var v2=document.getElementById("<?php echo $detail['product_video']?>");
       
        v2.pause();
        
    }
  </script>
  
