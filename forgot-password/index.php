<?php
	require_once('../inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>
	<div id="forgot_password_form">
		<h2><span class="fontawesome-lock"></span>Forgot Your Password?</h2>
		<form action="" method="POST">
			<fieldset>
				<p><label for="email">Please enter your email address to reset your password.</label></p>
				<p><input class="forgot_password_input" type="email" id="email" placeholder="Enter Your Email Address"</p>
				<p><input class="forgot_password_input" type="submit" value="Submit"></p>
			</fieldset>
		</form>
	</div>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>