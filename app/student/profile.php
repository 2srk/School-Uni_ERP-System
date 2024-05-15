<?php include "header.php";?>
	<!DOCTYPE html>

			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
										</a>
									</div>
									<div class="col ms-md-n2 profile-user-info">
										<h4 class="user-name mb-0"><?=$_SESSION['name']?></h4>
										<h6 class="text-muted">Student</h6>
										
									</div>
									
								</div>
							</div>
							<div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div>	
							<div class="tab-content profile-tab-cont">
								
								<!-- Personal Details Tab -->
								<div class="tab-pane fade show active" id="per_details_tab">
								
									<!-- Personal Details -->
									<div class="row">
										<div class="col-lg-9">
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Personal Details</span> 
														<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
													</h5>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
														<p class="col-sm-9"><?=$_SESSION['name']?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Class</p>
														<p class="col-sm-9"><?=$_SESSION['role']?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
														<p class="col-sm-9"><?=$_SESSION['username']?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
														<p class="col-sm-9"><?=$_SESSION['phone']?></p>
													</div>
													<div class="row">
														<p class="col-sm-3 text-muted text-sm-end mb-0">ID</p>
														<p class="col-sm-9 mb-0"><?=$_SESSION['id']?></p>
														
													</div>
												</div>
											</div>
											
										</div>

										<div class="col-lg-3">
											
											<!-- Account Status -->
											<div class="card">
												<div class="card-body">
													<h5 class="card-title d-flex justify-content-between">
														<span>Account Status</span>
														
													</h5>
													<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> <?=$_SESSION['status']?></button>
												</div>
											</div>
											<!-- /Account Status -->



										</div>
									</div>
									<!-- /Personal Details -->

								</div>
								<!-- /Personal Details Tab -->
								
								<!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">
								
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Change Password Tab -->
								
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
		
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


