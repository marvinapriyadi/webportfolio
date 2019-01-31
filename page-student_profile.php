<?php
	include_once 'inc-connectDB.php';
	include_once 'inc-functions.php';

	$username = $_GET['user'];

	$query = "SELECT * FROM `users` WHERE USERNAME='$username' LIMIT 1";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

	$count = mysqli_num_rows($result);
	if ($count < 1){
        header('Location: 404.php');
	}

	while($row = mysqli_fetch_array($result)) {
		$username = $row['USERNAME'];
        $profile_pic_path = $row['PROFILE_PIC_PATH'];
        $fullname = $row['FULLNAME'];
        $currentClass = $row['CURRENT_CLASS'];
        $userrole = $row['ROLE'];
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("inc-header.php"); ?>
<style type="text/css">
	/***
	User Profile Sidebar by @keenthemes
	A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
	Licensed under MIT
	***/

	body {
	  background: #F1F3FA;
	}

	/* Profile container */
	.profile {
	  margin: 20px 0;
	}

	/* Profile sidebar */
	.profile-sidebar {
	  padding: 20px 0 10px 0;
	  background: #fff;
	}

	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  max-height: 150px;
	  max-width: 150px;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}

	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #5a7391;
	  font-size: 16px;
	  font-weight: 600;
	  margin-bottom: 7px;
	}

	.profile-usertitle-job {
	  text-transform: uppercase;
	  color: #5b9bd1;
	  font-size: 12px;
	  font-weight: 600;
	  margin-bottom: 15px;
	}

	.profile-userbuttons {
	  text-align: center;
	  margin-top: 10px;
	}

	.profile-usersosmed {
	  text-align: center;
	  margin-top: 10px;
	  margin-left: auto;
	  margin-right: auto;
	}

	.profile-userbuttons .btn {
	  text-transform: uppercase;
	  font-size: 11px;
	  font-weight: 600;
	  padding: 6px 15px;
	  margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
	  margin-right: 0px;
	}
	    
	.profile-usermenu {
	  margin-top: 30px;
	}

	.profile-usermenu ul li {
	  border-bottom: 1px solid #f0f4f7;
	}

	.profile-usermenu ul li:last-child {
	  border-bottom: none;
	}

	.profile-usermenu ul li a {
	  color: #93a3b5;
	  font-size: 14px;
	  font-weight: 400;
	}

	.profile-usermenu ul li a i {
	  margin-right: 8px;
	  font-size: 14px;
	}

	.profile-usermenu ul li a:hover {
	  background-color: #fafcfd;
	  color: #5b9bd1;
	}

	.profile-usermenu ul li.active {
	  border-bottom: none;
	}

	.profile-usermenu ul li.active a {
	  color: #5b9bd1;
	  background-color: #f6f9fb;
	  border-left: 2px solid #5b9bd1;
	  margin-left: -2px;
	}

	/* Profile Content */
	.profile-content {
	  padding: 20px;
	  background: #fff;
	  min-height: 460px;
	}
</style>
</head>
<body>
	<!-- NAVIGATION BAR -->
	<?php require_once("inc-navigationbar.php"); ?>

	<div class="container">
	    <div class="row profile">
			<div class="col-md-3">
				<div class="profile-sidebar">
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<?php 
						echo "<img src='". $profile_pic_path ."' class='img-responsive' alt='profile_picture'>";
						?>
					</div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<?php  
						echo "<div class='profile-usertitle-name'>
							". $username ."
						</div>
						<div class='profile-usertitle-job'>
							". $fullname ." - " . $currentClass . "<br>
							". $userrole ."
						</div>"
						?>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					<!-- SIDEBAR BUTTONS -->
					<!-- <div class="profile-userbuttons">
						<button type="button" class="btn btn-success btn-sm">Follow</button>
						<button type="button" class="btn btn-danger btn-sm">Message</button>
					</div> -->
					<!-- END SIDEBAR BUTTONS -->

					<!-- <div class="profile-usersosmed">
						<?php //require_once("inc-sosmed.php") ?>
						<a href="https://www.facebook.com/redvelvet.baeirene/" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-instagram"></a>
						<a href="#" class="fa fa-snapchat-ghost"></a>
					</div> -->
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="active">
								<a href="#">
								<i class="glyphicon glyphicon-home"></i>
								Overview </a>
							</li>
							<li>
								<a href="#">
								<i class="glyphicon glyphicon-user"></i>
								Account Settings </a>
							</li>
							<li>
								<a href="#" target="_blank">
								<i class="glyphicon glyphicon-ok"></i>
								Tasks </a>
							</li>
							<li>
								<a href="#">
								<i class="glyphicon glyphicon-flag"></i>
								Help </a>
							</li>
						</ul>
					</div>
					<!-- END MENU -->
				</div>
			</div>
			<div class="col-md-9">
	            <div class="profile-content">
				  	PROJECTS
	            </div>
			</div>
		</div>
	</div>
</body>
</html>