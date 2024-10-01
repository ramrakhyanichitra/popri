<?php
	
	include('header.php');
	include('sidebar.php');

	$conn=mysqli_connect("localhost","root","","popri");
	$uid=$_GET['uid'];
	$u="SELECT * FROM  `category` WHERE id='$uid'";
	$ur=mysqli_query($conn,$u);
	$row2=mysqli_fetch_row($ur);

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
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <!-- <h4 class="card-title mb-0 flex-grow-1">Input Example</h4> -->
                                    <div class="flex-shrink-0">
                                        <div>
                                            <!-- <label for="form-grid-showcode" class="form-label text-muted">Show
                                                Code</label> -->
                                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->  
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                   <label for="placeholderInput" class="form-label">Label</label>
                                                    <input type="text" class="form-control" id="placeholderInput" name="label" placeholder="Enter Label" value="<?php echo $row2[2];?>">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                   <label for="placeholderInput" class="form-label">Value</label>
                                                    <input type="text" class="form-control" id="placeholderInput" name="value" placeholder="Enter Value" value="<?php echo $row2[3];?>">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="formFile" class="form-label">Category</label>
                                                    <input class="form-control" type="file" name="upload" id="formFile" value="<?php echo $row2[4];?>">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <input type="submit"  name="sub2" class="btn btn-success" value="Update">
                                                </div>
                    
                                            </div>
                                            
                    </form>
                                            <!--end col--> 
                                       </div>
                              </div>
                     </div>
                </div>
          
             </div>
         </div>
         
<?php
	if(!empty($_POST['sub2']))
	{
		$label=$_POST['label'];
		$value=$_POST['value'];
        $file=$_FILES['upload']['name'];
        $temp=$_FILES['upload']['tmp_name'];
        $location="photo/".$file;
        move_uploaded_file($temp,$location);
        $upd="UPDATE `category` SET `label`='$label',`value`='$value',`category_image`='$file' WHERE id='$uid'";
				
		$upr=mysqli_query($conn,$upd);
		// header('location:category.php');

                ?>
                <script>
                    window.location.href='category.php';
                </script>
                <?php
	}
	
?>