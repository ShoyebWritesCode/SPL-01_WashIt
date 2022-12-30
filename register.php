<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Mobile No.</label>
  	  <input type="mobile" name="mobile" value="<?php echo $mobile; ?>">
  	</div>
	  <div class="input-group">
	  <label>Student ID</label>
  	  <input type="sid" name="sid" value="<?php echo $sid; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title = "Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>