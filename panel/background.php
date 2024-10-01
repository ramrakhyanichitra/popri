<?php
    
	include('header.php');
	include('sidebar.php');
?>
<?php
    include('connection.php');
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
            <form  method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-12">
                	<div class="card">
                		<div class="card-body">
							<div class="live-preview">
								<div class="row gy-4">
                                       <div class="col-xl-6 col-md-4">
                                       	  <div>
                                           		<label for="desktop" class="form-label">Desktop Background</label>
                                                <input class="form-control" type="file" name="upload1" id="destop">
                                           </div>
                                       </div>
                                       <div class="col-xl-6 col-md-4">
                                          <div>
                                                <label for="mobile" class="form-label">Mobile Background</label>
                                                <input class="form-control" type="file" name="upload2" id="mobile">
                                           </div>
                                       </div>
                                       <div class="col-xxl-3 col-md-4">
                                            <div>
                                                <input type="submit"  name="sub" class="btn btn-success" value="Submit">
                                             </div>
                    
                                       </div>
                                 </div>

							</div>
						</div>
                	</div>
                </div>
              </div>
             </form>
        
	<div class="row">
     <div class="col-xl-12">
           <div class="card">
                    
               <div class="card-body">
                    <div class="live-preview">
                        <div class="table-responsive">
                           <table class="table align-middle table-nowrap mb-0">
                                <thead>
									<tr>
                                        <th scope="col">SL#</th>
										<th scope="col">Desktop_Background</th>
                                        <th scope="col">Mobile_Background</th>
										
										<th scope="col">Update</th>
										<th scope="col">Delete</th>
										<th scope="col">Status</th>
									</tr>
                                </thead>

                                <tbody>
                                   <?php
                                    $p="SELECT *FROM `background`";
                                    $pr=mysqli_query($conn,$p);
                                    $count=0;
                                    foreach ($pr as $rowp)
                                    {
                                    	if($rowp['status'] =='active')
                                    	{
                                    		$status='pending';
                                    		$bgcolor='btn-dark';
                                            $disable='ENABLED';
                                    	}
                                    	else{
                                    		$status='active';
                                    		$bgcolor='btn-info';
                                            $disable='DISABLED';
                                    	}
										echo"<tr>";
											echo"<td>".++$count."</td>";
                                                                
											echo"<td> <video src='photo/".$rowp['desktop_back']."'style='width:50px;height:50px;'></td>";
                                            echo"<td> <video src='photo/".$rowp['mobile_back']."'style='width:50px;height:50px;'></video></td>";
                                       		echo"<td><a href='back_upd.php?bid=$rowp[id];'><button class='btn btn-primary' onclick='display($count,1)'>UPDATE</button></a></td>";
                                      		echo"<td><a href='back_del.php?del=$rowp[id];'><button class='btn btn-danger' onclick='display($count,2)' >DELETE</button></a></td>";
                                      		echo"<td><a href='status.php?id=$rowp[id]&status=$status'><button class='btn $bgcolor' onclick='display($count,3)'>$disable</button></a></td>";
                                        echo"</tr>";
                                    }
                                  ?>
                                                  
                               </tbody>
                           	</table>
                        </div>
                    </div>
                </div>

            </div>
     </div>
  </div>
 </div>
</div>

</div>
<?php
	if(!empty($_POST['sub']))
	{
		$back1=$_FILES['upload1']['name'];
		$temp1=$_FILES['upload1']['tmp_name'];
		$location1="photo/".$back1;
		move_uploaded_file($temp1, $location1);
        $back2=$_FILES['upload2']['name'];
        $temp2=$_FILES['upload2']['tmp_name'];
        $location2="photo/".$back2;
        move_uploaded_file($temp2, $location2);
		$qr="INSERT INTO `background`(`desktop_back`,`mobile_back`) VALUES ('$back1','$back2')";
		$qr_r=mysqli_query($conn,$qr);

	}
	
?>
<script type="text/javascript">
    function display(count,action)
    {
        if(action=='1')
        {
            alert("Do you want to update data for SL# "+count+"?");
        }
        else if(action=='2')
        {
             alert("Do you want to delete data for SL# "+count+"?");
        }
        else
        {
             alert("Do you want to disble status  for SL# "+count+"?");
        }
    }
</script>

<?php
    include('footer.php')
?>