<?php
    $conn=mysqli_connect("localhost","root","","popri");
	include('header.php');
	include('sidebar.php');
	$bid=$_GET['bid'];
	$up="select * from `background` where id='$bid'";
	$upr=mysqli_query($conn,$up);

?>
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			 <!-- start page title -->
			 <div class="row">
                   <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        	<h4 class="mb-sm-0">POPRI</h4>
                         </div>
                    </div>
             </div>
            <form action="background.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-12">
                	<div class="card">
                		<div class="card-body">
							<div class="live-preview">
								<div class="row gy-4">
                                       <div class="col-xl-12 col-md-4">
                                       	  <div>
                                           		<label for="formFile" class="form-label">Background Image</label>
                                                <input class="form-control" type="file" name="upload1" id="formFile">

                                           </div>
                                       </div>
                                       <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <input type="submit"  name="sub1" class="btn btn-success" value="update">
                                             </div>
                    
                                       </div>
                                 </div>

							</div>
						</div>
                	</div>
                </div>
              </div>
             </form>
         </div>
    </div>
</div>
<?php
	if(!empty($_POST['sub1']))
	{
		header('loaction:background.php');
	}
?>