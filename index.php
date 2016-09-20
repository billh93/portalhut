<?php
	require_once('inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>
	<form id="msform">
		<ul id="progressbar">
			<li class="active">Account Setup</li>
			<li>Social Profiles</li>
			<li>Personal Details</li>
		</ul>
		<fieldset>
			<h2 class="fs-title">Create your account</h2>
			<h3 class="fs-subtitle">Step 1</h3>
			<input type="text" name="email" placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<input type="password" name="cpass" placeholder="Confirm Password" />
			<input type="button" name="next" class="next action-button" value="Next" />
			<a class="signup_login_link" href="<?php echo BASE_URL; ?>login">Log In?</a>
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Social Profiles</h2>
			<h3 class="fs-subtitle">Your presence on the social network</h3>
			<input type="text" name="twitter" placeholder="Twitter" />
			<input type="text" name="facebook" placeholder="Facebook" />
			<input type="text" name="gplus" placeholder="Google Plus" />
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="button" name="next" class="next action-button" value="Next" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">Personal Details</h2>
			<h3 class="fs-subtitle">We will never sell it</h3>
			<input type="text" name="fname" placeholder="First Name" />
			<input type="text" name="lname" placeholder="Last Name" />
			<input type="text" name="occupation" placeholder="Occupation (Ex. Student)" />
			<input type="text" name="un" placeholder="Username (Keep it professional)" />
			<input type="button" name="previous" class="previous action-button" value="Previous" />
			<input type="submit" name="submit" class="submit action-button" value="Submit" />
		</fieldset>
	</form>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>