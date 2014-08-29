<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add entry</title>
</head>
<body>

<?php
	include 'includes/mysql_connect.php';
	
	$name = $_POST['inputName'];
	$date = $_POST['inputDate'];
	$empNr = $_POST['inputEmployeeNr'];
	$destination = $_POST['inputDestination'];
	$kilometers = $_POST['inputKilometers'];
	$Privatbile_status = 'unchecked';
	$bCarPetrol_status = 'unchecked';
	$bCarDiesel_status = 'unchecked';
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
		else if($selected_radio == 'bCarPetrol') {
			$bCarPetrol_status == 'checked'; 
			$radio_type = "business car petrol";
		}
		else if($selected_radio == 'bCarDiesel') {
			$bCarDiesel_status == 'checked'; 
			$radio_type = "business car diesel";
		}
		
	
		mysql_query("INSERT INTO journalentries (`id`, `Name`, `EmployeeNr`, `Date`, `Route`, `Kilometers`, `CarType`)
					VALUES (NULL, '$name', '$empNr', '$date', '$destination', $kilometers, '$radio_type' )") or die(mysql_error() );
	
	echo "Entry added successfully";
	header('Location: addEntry.php');
	}

?>

</body>
</html>