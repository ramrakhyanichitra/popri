<?php
	$conn=mysqli_connect("localhost","root","","popri");
	include('header.php');
	include('sidebar.php');

?>
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				 <div class="col-12">
				 	<div class="page-title-box d-sm-flex align-items-center justify-content-between">
				 		<a href="add_product.php"><button class="btn btn-success"><i class="ri-add-line"></i> Add Product</button></a>
				 		 
				 	</div>
				 </div>
				 <div class="row">
            			<div class="col-xl-12">
               				 <div class="card">
               				 	<div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                        	<table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Product Category</th>
                                                        <th scope="col">Product Price</th>
                                                        <th scope="col">Product Thumbnail</th>
                                                        <th scope="col">Update</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	<?php
                                                		$f="SELECT * FROM `listing` order by `id` DESC";
                                                		$fr=mysqli_query($conn,$f);
                                                		$count=0;
                                                		foreach($fr as $frow)
                                                		{
                                                			if($frow['status'] =='active')
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
                                                				echo"<td>".$frow['name']."</td>";
                                                				echo"<td>".$frow['category']."</td>";
                                                				echo"<td>".$frow['price']."</td>";
                                                				echo"<td><img src='photo/". $frow['image']."'style=width:50px;height:70px;></td>";
                                                				echo"<td><a href='listing_update.php?pid=$frow[id];'><button class='btn btn-primary' onclick='display($count,1)'>Update</button></a></td>";
                                                				echo"<td><a href='listing_delete.php?cid=$frow[id];' ><button class='btn btn-danger' 
                                                					onclick='display($count,2)'>Delete</button></a></td>";
                                                				echo"<td><a href='listing_status.php?id=$frow[id]&status=$status'><button class='btn $bgcolor' onclick='display($count,3)'>$disable</button></a></td>";


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
</div>
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
	include('footer.php');
?>