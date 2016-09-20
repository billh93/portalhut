<?php
	require_once('../inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>
	<div class="login-card">
	    <h1>Log-in</h1><br>
	  <form>
	    <input type="text" name="user" placeholder="Username">
	    <input type="password" name="pass" placeholder="Password">
	    <input type="submit" name="login" class="login login-submit" value="login">
	  </form>
	    
	  <div class="login-help">
	    <a href="<?php echo BASE_URL; ?>">Sign Up</a> • <a href="<?php echo BASE_URL; ?>forgot-password">Forgot Password</a>
	  </div>
	</div>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>