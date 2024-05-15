
	<!DOCTYPE html>
<?php include "header.php";?>
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Payment</h3>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-sm-12">
						
							<div class="card card-table">
								<div class="card-body">
									<!-- Page Header -->
									<div class="page-header">
										<div class="row align-items-center">
											<div class="col">
												<h3 class="page-title">Dues</h3>
											</div>

										</div>
									</div>
									<!-- /Page Header -->
									<div class="table-responsive">
										<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
											<thead class="student-thread">
												<tr>
													<th>ID</th>
													<th>Fees Name</th>
													
													<th>Amount</th>
													<th>Status</th>
													
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												
												
												<?php
                       include '../db_conn.php';

					   $ncclass = $_SESSION['role'];
    $sql = "SELECT name, link, price, id FROM fees";
    $result = mysqli_query($conn, $sql);
	if ($_SESSION['fee'] === "0"){
	$fesd = "Paid";
	$fesx = "#";
	}else{
	$fesd = "Not Paid";
	$fesx = "pay.php#id=".$_SESSION['id']."amount=".$_SESSION['fee'];
	}
    if(mysqli_num_rows($result) > 0)
    {
       
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '					<tr>
		   <td>' . $row["id"] . '<td>
		   <h2>
			   <a>' . $row["name"] . '</a>
			   </h2>
		   </td>
		   
		   <td>'. $row["price"] . '</td>
		   <td>' . $fesd .'</td>
		   
		   <td class="text-end">
			   <div class="actions">
				   
				   <a href="'.$fesx .'" class="btn btn-sm bg-danger-light">
				   Pay 
					   <i class="feather-edit"></i>
				   </a>
			   </div>
		   </td>
	   </tr>';
       }
      
    }
    else
    {
        echo "0 results";
    } 
	mysqli_close($conn);

	?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>							
						</div>					
					</div>					
				</div>

				<!-- Footer -->
				<?php 
   					include "footer.php";
     			?>
				<!-- /Footer -->
				
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
    </body>

</html>
