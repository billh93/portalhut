<?php
	require_once('../inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>

<form id="change_password_form">
  <h4>Change Password</h4>
  <input class="change_password_input" type="password" placeholder="Current Password"/>
  <input class="change_password_input" type="password" placeholder="New Password"/>
  <input class="change_password_input" type="password" placeholder="Verify New Password"/>
  <input class="sub" type="submit" value="Save Changes"/>
</form>

<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>