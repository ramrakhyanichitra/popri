<?php
    $conn=mysqli_connect("localhost","root","","popri");
	include('header.php');
	include('sidebar.php');
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
                    <form action="category.php" method="POST" enctype="multipart/form-data">
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
                                                    <input type="text" class="form-control" id="placeholderInput" name="label" placeholder="Enter Label">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                   <label for="placeholderInput" class="form-label">Value</label>
                                                    <input type="text" class="form-control" id="placeholderInput" name="value" placeholder="Enter Value">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <label for="formFile" class="form-label">Category</label>
                                                    <input class="form-control" type="file" name="upload" id="formFile">
                                                </div>
                                            </div>
                                            <!--end col--> 
                                            <div class="col-xxl-3 col-md-4">
                                                <div>
                                                    <input type="submit"  name="sub" class="btn btn-success" value="Submit">
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
         <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                                    <!-- <h4 class="card-title mb-0 flex-grow-1">Default Table</h4> -->
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <!-- <label for="default-showcode" class="form-label text-muted">Show Code</label> -->
                                            <input class="form-check-input code-switcher" type="checkbox" id="default-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                 <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SL#</th>
                                                        <th scope="col">Master</th>
                                                        <th scope="col">Label</th>
                                                        <th scope="col">Value</th>
                                                        <th scope="col">Category Image</th>
                                                        <th scope="col">Update</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                        $b="SELECT *FROM `category`";
                                                        $br=mysqli_query($conn,$b);
                                                        $count=0;
                                                        foreach ($br as $row)
                                                        {
                                                            echo"<tr>";
                                                                echo"<td>".++$count."</td>";
                                                                echo"<td>".$row['master']."</td>";
                                                                echo"<td>".$row['label']."</td>";
                                                                echo"<td>".$row['value']."</td>";
                                                                echo"<td> <img src='photo/".$row['category_image']."'style='width:50px;height:70px;'></td>";
                                                                echo"<td><a href='update.php?uid=$row[id];'><button class='btn btn-primary'>UPDATE</button></a></td>";
                                                                echo"<td><a href='delete.php?did=$row[id];'><button class='btn btn-danger'>DELETE</button></a></td>";
                                                            echo"</tr>";
                                                        }
                                                    ?>
                                                    <!-- <tr>

                                                        <td scope="row"></td>
                                                        <td>Bobby Davis</td>
                                                        <td>October 15, 2021</td>
                                                        <td>$2,300</td>
                                                        <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#" class="fw-medium">#VZ2109</a></th>
                                                        <td>Christopher Neal</td>
                                                        <td>October 7, 2021</td>
                                                        <td>$5,500</td>
                                                        <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#" class="fw-medium">#VZ2108</a></th>
                                                        <td>Monkey Karry</td>
                                                        <td>October 5, 2021</td>
                                                        <td>$2,420</td>
                                                        <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><a href="#" class="fw-medium">#VZ2107</a></th>
                                                        <td>James White</td>
                                                        <td>October 2, 2021</td>
                                                        <td>$7,452</td>
                                                        <td><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                 </div>

                </div>
            </div>
         </div>



<?php
        if(!empty($_POST['sub']))
        {
            $label=$_POST['label'];
            $value=$_POST['value'];
            $file=$_FILES['upload']['name'];
            $temp=$_FILES['upload']['tmp_name'];
            $location="photo/".$file;
            move_uploaded_file($temp,$location);

            $q="INSERT INTO `category`(`label`, `value`, `category_image`) VALUES ('$label','$value','$file')";
            $qr=mysqli_query($conn,$q);
            
        }

?>
<?php
	include('footer.php');
?>