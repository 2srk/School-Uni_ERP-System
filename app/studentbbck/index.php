<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
	<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>My Guidance - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="student/assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="student/assets/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="student/assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="student/assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="student/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="student/assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="student/assets/css/style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="student/assets/img/login.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Welcome to MyGuidance</h1>
								<p class="account-subtitle">Need an account?  Contact ERP</p>
								<?php if (isset($_GET['error'])) { ?>
									<div class="alert alert-danger" role="alert">
									  <?=$_GET['error']?>
								  </div>
								  <?php } ?>
								<h2>Sign in</h2>
								<!-- Form -->
								<form action="php/check-login.php" 
								method="post">
									<div class="form-group">
										<label >ID Number <span class="login-danger">*</span></label>
										<input class="form-control" 
										type="text" 
										name="username" 
										id="username">
										<span class="profile-views"><i class="fas fa-user-circle"></i></span>
									</div>
									<div class="form-group">
										<label >Password <span class="login-danger">*</span></label>
										<input class="form-control pass-input" type="text" id="password" name="password">
										<span class="profile-views feather-eye toggle-password"></span>
									</div>
									<div class="forgotpass">
										<div class="remember-me" style="display:none">
											<select class="form-select mb-3"
											name="role" 
											aria-label="Default select example">
										<option selected value="user">Student</option>
										<option value="admin">Counsiler</option>
									</select>
											</label>
										</div>
										<a href="forgot-password.html">Forgot Password?</a>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								  
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" ><i class="fab fa-google"></i></a>
	
								<!-- /Social Login -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="student/assets/js/jquery-3.7.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="student/assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="student/assets/js/feather.min.js"></script>
		
		<!-- Custom JS -->
		<script src="student/assets/js/script.js"></script>
		
    </body>

</html>
<?php }else{
	header("Location: ./student/student-dashboard.php");
} ?>