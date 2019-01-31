<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("inc-header.php"); ?>
	<title>Sign In Teacher</title>
	<style>
		.alert{
			display:none;
		}
		html,
		body {
		  height: 100%;
		}

		body {
		  -ms-flex-align: center;
		  align-items: center;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: auto;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
	</style>
</head>

<body class="text-center">

	<!-- NAVIGATION BAR -->
	<?php require_once("inc-navigationbar.php"); ?>

	<div class="container">
		<div class="row">
			<br>
		    <form class="form-signin" action="login.php" method="post">
				 <img class="mb-4" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-128.png" alt="" width="72" height="72">
				 <h1 class="h3 mb-3 font-weight-normal">Teacher Login</h1>
				 <hr>
				 <label for="inputEmail" class="sr-only">Email address</label>
				 <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				 <label for="inputPassword" class="sr-only">Password</label>
				 <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				 <div class="checkbox mb-3 text-left">
				   <label>
				     <input type="checkbox" value="remember-me"> Remember me
				   </label>
				  </div>
				  Are you a teacher? <a href="page-login_teacher.php">Sign in here!</a>
				 <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 10px;">Sign in</button>
			</form>	
		</div>
	</div>
</body>
</html>	