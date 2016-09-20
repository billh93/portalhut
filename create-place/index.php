<?php
	require_once('../inc/route.php'); 
	include(ROOT_PATH . 'inc/head.php'); 
?>
    <section class="mainForm">
   		<h2>Create Business Place</h2>
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
		    </table>
		    <div id="mapSection">
		    	<h3>Your Business Location</h3>
				<div id="map-canvas"></div>
		    </div>
		    <p>I accept Portalhut <a href="#" class="linkStyle">Terms of Service</a> when signing up.</p>
		    <div class="trLength">
		    	<input type="button" name="createPlaceBtn" id="createPlaceBtn" value="Submit"/>
		    </div>
	    </form>
	</section>
<script type="text/javascript">
function initialize() {
	var mapOptions = {
	  center: new google.maps.LatLng(-34.397, 150.644),
	  zoom: 8
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),
	  mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>