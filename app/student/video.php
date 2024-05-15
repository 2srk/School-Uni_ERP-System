
	<!DOCTYPE html>
<?php include "header.php";?>

			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">E-Learn</h3>
								
							</div>
						</div>
					</div>
					

					<!-- /Page Header -->
					<?php
                       include '../db_conn.php';

					   $ncclass = $_SESSION['role'];
    $sql = "SELECT name, link, class, id FROM video WHERE class = $ncclass OR class = 'all'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '					<div class="row">
		   <div class="col-lg-6">
			   <div class="card">
				   <div class="card-body">
					   <h4 class="header-title">' . $row["name"] . '</h4>
					   <p class="sub-header">For Class  <code>' . $row["class"] . '</code></p>
					   <!-- 16:9 aspect ratio -->
					   <div class="ratio ratio-16x9">
						   <iframe src="'. $row["link"] . '"></iframe>
					   </div>
				   </div>
			   </div>
		   </div> 
	   </div>';
       }
      
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($conn);

?>


				
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
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>
