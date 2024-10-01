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
                        <h4 class="mb-sm-0">POPRI</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                             <table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Messages</th>
                                                        <th scope="col">Time</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $a="SELECT * FROM  `enquiry`";
                                                        $ar=mysqli_query($conn,$a);
                                                        foreach($ar as $arow)
                                                        {
                                                            echo"<tr>";
                                                                 echo"<td>".$arow['id']."</td>";
                                                                 echo"<td>".$arow['name']."</td>";
                                                                 echo"<td>".$arow['email']."</td>";
                                                                 echo"<td>".$arow['phone']."</td>";
                                                                 echo"<td>".$arow['message']."</td>";
                                                                 echo"<td>".$arow['updated_date']."</td>";
                                                                 echo"<td><a href='enquiry_del.php?fid=$arow[id];'><button class='btn btn-danger'>Delete</button></a></td>";
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
	include('footer.php');
?>