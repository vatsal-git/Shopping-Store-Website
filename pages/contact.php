<?php include('../admin/server/contact_server.php'); ?>
<?php include('../admin/partials/header.php'); ?>

<div id="user-section">

	<div class="user-form">
		<div class="form-logo">
			<a href="index.php"><img src="../img/trac-logo.svg" alt="logo"></a>
		</div><br><br>
		<h2>Log in</h2><br>
		<form method="post" action="contact.php">

 <?php include('../admin/error/error.php'); ?>

			<div class="mb-2">
				<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
			</div>
			<div class="mb-2">
				<input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>">
			</div>
			<div class="mb-2">
				<input type="text" name="message" class="form-control" placeholder="Message" value="<?php echo $message; ?>">
			</div><br>
			<button type="submit" class="btn btn-lg form-submit" name="login_user">Submit</button><br><br>
		</form>
	</div>
</div>
<?php include('../admin/partials/footer.php'); ?>