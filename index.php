<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once("inc-header.php");
?>
	<title>Student Portfolio</title>
</head>
<body>
	<!-- NAVIGATION BAR -->
	<?php require_once("inc-navigationbar.php") ?>

	<!-- JUMBOTRON -->
	<?php 
	//  echo "USERNAME " . $_SESSION['username'];
	//  echo "<br>ROLE " . $_SESSION['role'];
	?>
	<div class="jumbotron">
	  <div class="container text-center">
	    <h1>Students Portfolio</h1>
	  </div>
	</div>
	<!-- ITEMS -->
	<div class="container"> 
		<div class="row">
			<!-- ANNOUNCEMENT COLUMN -->
			<div class="col-sm-6">
				<h3 class="text-capitalize text-center">Announcement Max:5 </h3>
				<hr>
				<div class="list-group">
				  <a href="page-view_one_news.php" class="list-group-item">First item <span class="badge">23 Januari 2019</span></a>
				  <a href="#" class="list-group-item">Second item <span class="badge">22 Januari 2019</span></a>
				  <a href="#" class="list-group-item">Third item <span class="badge">21 Januari 2019</span></a>
				</div>
			</div>

			<!-- FEATURE/POPULAR/LATEST COLUMN -->
			<div class="col-sm-6 text-center">
				<div class="row">
					<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#1">Featured</a></li>
					<li><a data-toggle="tab" href="#2">Most Popular</a></li>
					<li><a data-toggle="tab" href="#3">Latest Uploads</a></li>
					</ul>
				</div>
				<div class="row">
				<div class="tab-content">
			  		<div id="1" class="tab-pane fade in active">
			  			<br>
				  	    <div class="col-sm-6">
					      <h4 class="text-capitalize"><a href="page-student_profile.php?user=t3sth4sh">nama lengkap</a></h4>
					      <a href="#">
					      	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
					      </a>
					    </div>
				  	    <div class="col-sm-6">
					      <h4 class="text-capitalize"><a href="page-student_profile.php?user=t3sth4sh">nama lengkap</a></h4>
					      <a href="#">
					      	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
					      </a>
					    </div>
				  	    <div class="col-sm-6">
					      <h4 class="text-capitalize"><a href="page-student_profile.php?user=t3sth4sh">nama lengkap</a></h4>
					      <a href="#">
					      	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
					      </a>
					    </div>
				  	    <div class="col-sm-6">
					      <h4 class="text-capitalize"><a href="page-student_profile.php?user=t3sth4sh">nama lengkap</a></h4>
					      <a href="#">
					      	<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
					      </a>
					    </div>
					</div>
					<div id="2" class="tab-pane fade">
						<h3>Popular This Month</h3>
						<p>Some content in menu 1.</p>
					</div>
					<div id="3" class="tab-pane fade">
						<h3>Recent Uploads</h3>
						<p>Some content in menu 2.</p>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div><br>


	<footer class="footer text-center">
	  <span class="text-muted">Place sticky footer content here.</span>
	</footer>
</body>
</html>