<?php 
	$userHashed = $_GET['user'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("inc-header.php"); ?>
<style type="text/css">
	a{
		text-decoration: none !important;
	}
	#profile_image {
	  border-radius: 5px;
	  cursor: pointer;
	  transition: 0.3s;
	}

	#profile_image:hover {opacity: 0.7;}

	/* The Modal (background) */
	.modal {
	  display: none; /* Hidden by default */
	  position: fixed; /* Stay in place */
	  z-index: 1; /* Sit on top */
	  padding-top: 100px; /* Location of the box */
	  left: 0;
	  top: 0;
	  width: 100%; /* Full width */
	  height: 100%; /* Full height */
	  overflow: auto; /* Enable scroll if needed */
	  background-color: rgb(0,0,0); /* Fallback color */
	  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}

	/* Modal Content (Image) */
	.modal-content {
	  margin: auto;
	  display: block;
	  width: 80%;
	  max-width: 700px;
	}

	/* Caption of Modal Image (Image Text) - Same Width as the Image */
	#caption {
	  margin: auto;
	  display: block;
	  width: 80%;
	  max-width: 700px;
	  text-align: center;
	  color: #ccc;
	  padding: 10px 0;
	  height: 150px;
	}

	/* Add Animation - Zoom in the Modal */
	.modal-content, #caption { 
	  animation-name: zoom;
	  animation-duration: 0.6s;
	}

	@keyframes zoom {
	  from {transform:scale(0)} 
	  to {transform:scale(1)}
	}

	/* The Close Button */
	.close {
	  position: absolute;
	  top: 15px;
	  right: 35px;
	  color: #f1f1f1;
	  font-size: 40px;
	  font-weight: bold;
	  transition: 0.3s;
	}

	.close:hover,
	.close:focus {
	  color: #bbb;
	  text-decoration: none;
	  cursor: pointer;
	}

	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px){
	  .modal-content {
	    width: 100%;
	  }
	}
</style>
	<title>Student Portfolio</title>
</head>
<body>
	<!-- NAVIGATION BAR -->
	<?php require_once("inc-navigationbar.php"); ?>
  
	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- The Close Button -->
	  <span class="close">&times;</span>

	  <!-- Modal Content (The Image) -->
	  <img class="modal-content" id="img01">

	  <!-- Modal Caption (Image Text) -->
	  <div id="caption"></div>
	</div>
  	<div class="container">
  		<!-- PROFILE -->
	  	<div class="row">
	  		<br>
		    <div class="col-md-6 img text-right">
		      <img style="width:600; height:600; max-height: 80%; max-width:80%;" src="http://papers.co/wallpaper/papers.co-hr24-redvelvet-girl-kpop-smile-irene-25-wallpaper.jpg"  alt="Profile image" class="img-rounded" id="profile_image">
		    </div>
		    <div class="col-md-6 details offset-mt-5">
		      <blockquote>
		        <h5>Bae Joo-hyun (Irene)</h5>
		        <small><cite>Daegu, South Korean</cite></small>
		      </blockquote>
		      <p>
		      	<?php echo $userHashed; ?><br>
		        March 29, 1991<br>
		        Leader of Red Velvet <br>
		        http://redvelvet.smtown.com/
		      </p>
		    </div>

		  </div>
		<div class="row text-center" style="margin-top:7px">
			<?php require_once("inc-sosmed.php") ?>
			<a href="https://www.facebook.com/redvelvet.baeirene/" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-instagram"></a>
			<a href="#" class="fa fa-snapchat-ghost"></a>
		</div>
		<hr>
		<!-- ITEMS -->
		<div class="row">
			<a data-toggle="collapse" href="#myprojects"><h1 class="text-center">My Projects</h1></a>
			<div id="myprojects" class="collapse in">
			  	<div class="table-responsive">  
					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>No.</th>
					        <th>Title</th>
					        <th>Links</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>Doe</td>
					        <td>john@example.com</td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>Moe</td>
					        <td>mary@example.com</td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>Dooley</td>
					        <td>july@example.com</td>
					      </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('profile_image');
	var modalImg = document.getElementById("img01");
	var captionText;
	img.onclick = function(){
	  modal.style.display = "block";
	  modalImg.src = this.src;
	  captionText.innerHTML = "This is the original size.";
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  modal.style.display = "none";
	}
</script>