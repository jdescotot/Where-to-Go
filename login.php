<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="stylesignup.css">
</head>
<body>
	
		<div id="nav">
			<ul>
				<li><a id="home" href="index.php">Home</a></li>
				<li><a href="login.php">LogIn</a></li>
				<li><a href="signup.php">SignUp</a></li>	
			</ul>
		</div>
	
  <div class="header">
	<h2>Login</h2>
	</div>
	 
  <form method="post" action="login.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" >	
    </div>
	<div class="input-group">
		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Don't have an acount? <a href="signup.php">Sign up</a>
	</p>
	</form>
</body>
</html>