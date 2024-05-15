
   <!DOCTYPE html>

    

			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Holiday</h3>

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
												<h3 class="page-title">Holiday</h3>
											</div>
											<div class="col-auto text-end float-end ms-auto download-grp">
												<a href="../Dynam/holiday.pdf" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
												
											</div>
										</div>
									</div>
									<!-- /Page Header -->
									
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
<?php if ($_SESSION['role'] == 'admin') {?>
	<!-- For Admin -->

	  <?php include 'php/members.php';
	   if (mysqli_num_rows($res) > 0) {?>
		
	 
			<?php 
			$i =1;
			while ($rows = mysqli_fetch_assoc($res)) {?>
		  
		  <?php $i++; }?>
		
	  <?php }?>

<?php }else { ?>
	<!-- FORE USERS -->
	
		  <?=$_SESSION['name']?>
	 
<?php } ?>

