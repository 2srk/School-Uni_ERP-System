
	<!DOCTYPE html>
<?php include "header.php";?>
	
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<div class="page-sub-header">
									<h3 class="page-title">Welcome <?=$_SESSION['name']?>!</h3>
									
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Overview Section -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100"><a href="video.php">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Study Material</h6>
											<h3></h3>
											
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/teacher-icon-01.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div></a>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100"><a href="exam.php">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>Test</h6>
											
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/teacher-icon-02.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div></a>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 d-flex">
							<div class="card bg-comman w-100"><a href="exam.php">
								<div class="card-body">
									<div class="db-widgets d-flex justify-content-between align-items-center">
										<div class="db-info">
											<h6>My Guide</h6>
											
										</div>	
										<div class="db-icon">
											<img  src="assets/img/icons/student-icon-01.svg"  alt="Dashboard Icon">
										</div>
									</div>
								</div></a>
							</div>
						</div>

					</div>
					<!-- /Overview Section -->				

					<!-- Student Dashboard -->
					<div class="row">
						<div class="col-12 col-lg-12 col-xl-8">

							<div class="card flex-fill comman-shadow">
								<div class="card-header">
									<div class="row align-items-center">
										<div class="col-6">
											<h5 class="card-title">My ID</h5>
										</div>
										
									</div>						
								</div>

								<div class="dash-circle">
									<div class="row">
										<div class="col-lg-3 col-md-3 dash-widget1">
											<div class="circle-bar circle-bar2">
												
											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="dash-details">
												<div class="lesson-activity">
													<div class="lesson-imgs">
														<img  src="assets/img/icons/lesson-icon-01.svg"  alt="">
													</div>
													<div class="views-lesson">
														<h5>Class</h5>
														<h4><?=$_SESSION['role']?></h4>
													</div>
												</div>
												<div class="lesson-activity">
													<div class="lesson-imgs">
														<img  src="assets/img/icons/lesson-icon-02.svg"  alt="">
													</div>
													<div class="views-lesson">
														<h5>Status</h5>
														<h4><?=$_SESSION['status']?></h4>
													</div>
												</div>
												
											</div>
										</div>
										<div class="col-lg-3 col-md-3">
											<div class="dash-details">
												<div class="lesson-activity">
													<div class="lesson-imgs">
														<img  src="assets/img/icons/lesson-icon-04.svg"  alt="">
													</div>
													<div class="views-lesson">
														<h5>School</h5>
														<h4>Kaziranga Univercity</h4>
													</div>
												</div>
												<div class="lesson-activity">
													<div class="lesson-imgs">
														<img  src="assets/img/icons/lesson-icon-05.svg"  alt="">
													</div>
													<div class="views-lesson">
														<h5>Student ID</h5>
														<h4><?=$_SESSION['id']?></h4>
													</div>
												</div>
											
											</div>
										</div>
										<div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
											<div class="skip-group">
												<a href="guide.php">
												<button type="submit" class="btn btn-info skip-btn">My Guide</button>
											</a>
												<a href="profile.php">
												<button  class="btn btn-info continue-btn">My Account</button>
											</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							
								
						</div>

						<div class="col-12 col-lg-12 col-xl-4 d-flex">
							<div class="card flex-fill comman-shadow">
								<div class="card-body">
									<div id="calendar-doctor" class="calendar-container"></div>
									
								</div>
							</div>
						</div>	
					</div>
					<!-- /Student Dashboard -->
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
		
		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>

		<!-- Calendar Js -->
		<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
		<script src="assets/js/calander.js"></script>

		<!-- Circle Progress JS -->
		<script src="assets/js/circle-progress.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

</html>
