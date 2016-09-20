<?php
	require_once('../../inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>
   <section class="mainForm">
   <h2>Business Settings</h2>
   <form method="post" enctype="multipart/form-data" autocomplete="on">
    <table>
      <tr class="trLength">
        <td class="tdLength"><label for="businessPic" class="label_setting_style">Profile Picture</label></td>
        <td class="tdInput"><input name="businessPic" type="file" id="businessPic"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessName" class="label_setting_style">Business Name</label></td>
        <td class="tdInput"><input type="text" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessAddress" class="label_setting_style">Address</label></td>
        <td class="tdInput"><input type="text" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessCityTown" class="label_setting_style">City/Town</label></td>
        <td class="tdInput"><input type="text" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessState" class="label_setting_style">State</label></td>
        <td class="tdInput"><input type="text" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessZipCode" class="label_setting_style">Zip Code</label></td>
        <td class="tdInput"><input type="text" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><label for="businessPhoneNumber" class="label_setting_style">Phone Number</label></td>
        <td class="tdInput"><input type="tel" required="required" autocomplete="on" class="Inputbars"></td>
      </tr>
      <tr class="trLength">
        <td class="tdLength"><a href="<?php echo BASE_URL; ?>business/delete-place" class="linkStyle">Delete Your Place</a></td>
      </tr>         
    </table>
   <div class="trLength">
    <input type="button" name="submitBtn" id="submitBtn" value="Submit"/>
   </div>
   </form>
   </section>
<?php 
	include(ROOT_PATH . 'inc/footer.php'); 
?>