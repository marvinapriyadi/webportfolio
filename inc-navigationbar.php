<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <?php
          if(isset($_SESSION['username']) && $_SESSION['role']=="student"){
            echo "<li><a href=''>Profile</a></li>
                  <li><a href=''>Upload</a></li>";
          }
        ?>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
		  <div class="input-group">
		    <input type="text" class="form-control" placeholder="Search">
		    <div class="input-group-btn">
		      <button class="btn btn-default" type="submit">
		        <i class="glyphicon glyphicon-search"></i>
		      </button>
		    </div>
		  </div>
	  </form>
      <ul class="nav navbar-nav navbar-right">
        <?php 
          if(!isset($_SESSION['username'])){
            echo"<li><a href='page-login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
          }
          else {
            echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
          }
        ?>
        </ul>
    </div>
  </div>
</nav>