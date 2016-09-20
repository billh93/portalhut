<?php
	require_once('../inc/route.php'); 
	include_once(ROOT_PATH . 'inc/var.php');
	include(ROOT_PATH . 'inc/head.php'); 
?>
  <section class="mainForm">
	<h2>Account Settings</h2>
	<form method="post" enctype="multipart/form-data" action="">
	    <table>
	      <tr class="trLength">
		  	<img style="width: 200px; height: 200px;" src="<?php echo BASE_URL; ?>user_imgs/me.jpg" alt="">
	        <td class="tdLength">
	        	<label for="new_picture" class="label_setting_style">Profile Picture</label>
	        </td>
	        <td class="tdInput">
	        	<input type="file" name="new_picture" id="new_picture">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="firstname" class="label_setting_style">First Name</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" id="firstname" name="firstname" class="Inputbars" value="">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="lastname" class="label_setting_style">Last Name</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" id="lastname" name="lastname" class="Inputbars" value="">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="email" class="label_setting_style">Email Address</label>
	        </td>
	        <td class="tdInput">
	        	<input type="email" id="email" name="email" class="Inputbars" value="">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="occupation" class="label_setting_style">Occupation</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" id="occupation" name="occupation" class="Inputbars" value="">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="phonenumber" class="label_setting_style">Phone Number</label>
	        </td>
	        <td class="tdInput">
	          <input type="tel" name="phonenumber" id="phonenumber" value="" class="Inputbars"></td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="DOB" class="label_setting_style">Date of Birth</label>
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdInput">
	          <select name="month" id="month">
	            <option value="">Month</option>
	            <?php
					list_months();
				?>
	          </select>
	          <select name="day" id="day">
			  	<option value="">Day</option>
			  	<?php
					list_days();
				?>
	          </select>
	          <select name="year">
				<option value="">Year</option>				
				<?php
					list_years();
				?>	
			  </select>
			</td>
      	  </tr>
      	  <tr class="trLength">
	      	<td class="tdLength">
	      		<label for="gender" class="label_setting_style">Gender</label>
	      	</td>
		  	<td class="tdInput">
		      	<select id="gender" name="gender">
		        	<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
	  	   </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="address" class="label_setting_style">Address</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="address" id="address" value=""class="Inputbars">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="city" class="label_setting_style">City</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="city" id="city" value="" class="Inputbars">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="state" class="label_setting_style">State</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="state" id="state" value="" class="Inputbars">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="zipcode" class="label_setting_style">Zip code</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="zipcode" id="zipcode" value="" class="Inputbars"  maxlength="5">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="languages" class="label_setting_style">Languages</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="languages" id="languages" value="" class="Inputbars">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<label for="religion" class="label_setting_style">Religious Views</label>
	        </td>
	        <td class="tdInput">
	        	<input type="text" name="religion" id="religion" value="" class="Inputbars">
	        </td>
	      </tr>
	      <tr class="trLength">
	        <td class="tdLength">
	        	<a href="<?php echo BASE_URL; ?>change-password" class="linkStyle">Change Password?</a>
	        </td>
	      </tr> 
	      <tr class="trLength">
	        <td class="tdInput">
	        	<input type="submit" name="submit" value="Submit">
	        </td>
	      </tr>
	    </table>
	    </form>
	  </section>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>