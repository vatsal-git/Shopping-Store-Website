<?php include('contact server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>contact us</title>
</head>
<body>
  <div class="header">
  	<h2>contact us</h2>
  </div>
	
  <form method="post" action="contact us.php">
  	<?php include('contact error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Message</label>
  	  <input type="text" name="message" value="<?php echo $message; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">submit</button>
  	</div>
  </form>
</body>
</html>