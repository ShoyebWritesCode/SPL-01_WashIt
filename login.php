<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
</head>
<body>
<header>
    <div class="name">
        <h2> Wash.IT</h2>
    </div>
    <!--Navbar-->
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            
        </ul>
    </nav>
   </header> 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="firstName" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
		<br> Are you an admin? <a href="staffsignin.php">Click here</a>
  	</p>
  </form>
</body>
</html>