<?php
	require_once('inc/route.php');
	include_once(ROOT_PATH . 'inc/var.php'); 
	include_once(ROOT_PATH . 'inc/head.php'); 
?>
<script>
var map;

function load_info() {
  var currentPopup;
  var bounds = new google.maps.LatLngBounds();
  var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/red.png", new google.maps.Size(32, 32), new google.maps.Point(0, 0), new google.maps.Point(16, 32));
  function addMarker(lat, lng, info) {
	var pt = new google.maps.LatLng(lat, lng);
	bounds.extend(pt);
	var marker = new google.maps.Marker({ position: pt, icon: icon, map: map });
	var popup = new google.maps.InfoWindow({
		content: '<div style="color: #000; width: 100px; text-align: center;">' + info + '</div>', maxWidth: 300,
	});
	google.maps.event.addListener(marker, "click", function() {
		if (currentPopup != null) {
			currentPopup.close();
			currentPopup = null;
	 	}
		popup.open(map, marker);
		currentPopup = popup;
		});
	 google.maps.event.addListener(popup, "closeclick", function() {
	 	currentPopup = null;
	});
	}
	<?php 
	$query = mysqli_query($dbc, "SELECT * FROM location");
	while ($row = mysqli_fetch_array($query)){
		$name=$row['name'];
		$addr=$row['address'];
		$city=$row['city'];
		$state=$row['state'];
		$zip=$row['zip'];
		$country=$row['country'];
		$lat=$row['lat'];
		$lng=$row['lng'];
		
		echo "addMarker($lat, $lng,'<strong>" . $name ."</strong><br><a href=\"http://www.google.com\">Visit Page</a><br/>$addr<br/>$city, $state $zip<br />$country');\n";
   }
	?>
}

function initialize() {
	var mapOptions = {
	zoom: 14,
	};
	map = new google.maps.Map(document.getElementById('map'),mapOptions);
	load_info();
	// Try HTML5 geolocation
	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {   
			var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);	
			map.setCenter(pos);
	}, function() {
	  		handleNoGeolocation(true);
	});
	} else {
		// Browser doesn't support Geolocation
		handleNoGeolocation(false);
	}


function handleNoGeolocation(errorFlag) {
		if (errorFlag) {
			load_info();
			var content = '<p style="text-align:center;"><strong>Error:</strong><br> The Geolocation service failed. <br> So we\'ve placed you here.</p>';
		} else {
			load_info();
			var content = 'Error: Your browser doesn\'t support geolocation.';
		}
		
		var options = {
			map: map,
			position: new google.maps.LatLng(41.878807, -87.636005),
			content: content
		};
		
		map.setCenter(options.position);
	}
}
google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    	<div class="map_container">
    		<div id="map"></div>
    	</div>
<?php include_once(ROOT_PATH . 'inc/footer.php'); ?>