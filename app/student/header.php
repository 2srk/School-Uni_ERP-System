<?php 
   session_start();
   include "db_conn.php";
   
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
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

<?php }else{
header("Location: index.php");
} ?>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>MyGuidance</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<!-- Fontfamily -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/plugins/feather/feather.css">
		
		<!-- Pe7 CSS -->
		<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Calendar CSS -->
		<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.php" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<div class="menu-toggle">
					<a href="javascript:void(0);" id="toggle_btn">
						<i class="fas fa-bars"></i>
					</a>
				</div>
				
				<!-- Search Bar -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- /Search Bar -->
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fas fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->
					
					<!-- /Notifications -->
					<li  class="nav-item zoom-screen me-2">
						<a href="#" class="nav-link header-nav-list">
							<img src="assets/img/icons/header-icon-04.svg" alt="">
						</a>
					</li>
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow new-user-menus">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<div class="user-img">
								<img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor">
								<div class="user-text">
									<h6><?=$_SESSION['name']?></h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6><?=$_SESSION['name']?></h6>
									
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="inbox.php">Inbox</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main Menu</span>
							</li>
							<li>
								<a href="./student-dashboard.php"><i class="feather-grid"></i> <span> Dashboard</span> </a>
								
							</li>
							
							<li>
								<a href="video.php"><i class="fas fa-chalkboard-teacher"></i> <span> Study Material</span></a>
								
							</li>
						
						
						

							<li class="submenu">
								<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Account</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="profile.php">My Info</a></li>
									<li><a href="profile.php">Password Change</a></li>
									
									
								</ul>
							</li>
							<li> 
								<a href="holiday.php"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
							</li>
							<li> 
								<a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
							</li>
							<li> 
								<a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
							</li>
							<li> 
								<a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
							</li>
							<li> 
								<a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
							</li>
							
							<li class="submenu">
                                <a href="#"><i class="fa fa-newspaper"></i> <span> Blogs</span>
                                    <span class="menu-arrow"></span>
                                </a>
                               
                            </li>
							
							

							
							
							
						</ul>
					</div>
                </div>
            </div>