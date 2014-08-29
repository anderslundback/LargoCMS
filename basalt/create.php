<?php
	include 'includes/mysql_connect.php';
	
	$name = $_POST['inputName'];
	$date = $_POST['inputDate'];
	$empNr = $_POST['inputEmployeeNr'];
	$destination = $_POST['inputDestination'];
	$Privatbile_status = 'unchecked';
	$business_status = 'unchecked';
	$radio_type = "Car type not chosen";

	
	
	if(!$_POST['submit']) {
		echo "Please fill out the form";
		header('Location: index.php');

	} else {
		
		$selected_radio = $_POST['inputType'];
		
		if($selected_radio == 'privateCar') {
			$Privatbil_status = 'checked'; 
			$radio_type = "private car";
		}
		else if($selected_radio == 'businessCar') {
			$business_status == 'checked'; 
			$radio_type = "business car";
		}
		
	
		mysql_query("INSERT INTO journalentries (`id`, `Name`, `EmployeeNr`, `Date`, `Route`, `CarType`)
					VALUES (NULL, '$name', '$empNr', '$date', '$destination', '$radio_type' )") or die(mysql_error() );
	
	
	header('Location: index.php');
	}

?>