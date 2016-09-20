<?php
	//DB Credentials
	define('DB_HOST', 'localhost');
	define('DB_USER', 'viddyh5_bill');
	define('DB_PW', 'H1n0str0z@93!');
	define('DB_NAME', 'viddyh5_hut');
	
	//Connect to DB
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME) or die('Error connecting to DB');
	
	//Code for Month, Days and Years for form.
	function list_months(){
		$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
		for($i = 0; $i <= 11; $i++){
		     echo '<option value="'. $i .'">'. $months[$i] . '</option>';
		}
	}
	
	function list_days(){
		for($i = 1; $i <= 31; $i++){
			echo '<option value="'. $i .'">'. $i . '</option>';
		}
	}
	
	function list_years(){
		for($i = 2014; $i >= 1940; $i--){
			echo '<option value="'. $i .'">'. $i . '</option>';
		}
	}
	
	function return_months($get_month){
		switch ($get_month) {
		  case 0:
		    echo "January";
		    break;
		  case 1:
		    echo "February";
		    break;
		  case 2:
		    echo "March";
		    break;
		  case 3:
		    echo "April";
		    break;
		  case 4:
		    echo "May";
		    break;
		  case 5:
		    echo "June";
		    break;
		  case 6:
		    echo "July";
		    break;
		  case 7:
		    echo "August";
		    break;
		  case 8:
		    echo "September";
		    break;
		  case 9:
		    echo "October";
		    break;
		  case 10:
		    echo "November";
		    break;
		  case 11:
		    echo "December";
		    break;
		  default:
		    echo "You broke the birthday algorithm!";
		}
	}
	
	//Code for Hours and Minutes for form.
	function list_hours(){
		for($i = 12; $i >= 1; $i--){
			echo '<option value="'. $i .'">'. $i . '</option>';
		}
	}
	
	function list_minutes(){
		for($i = 0; $i <= 45; $i+=15){
			echo '<option value="'. $i .'">'. $i . '</option>';
		}
	}
?>