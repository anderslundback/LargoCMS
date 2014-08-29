<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modify an entry</title>
</head>

<body>

<?php
	include 'includes/mysql_connect.php';
	if(!isset($_POST['sumbit']) ) {
		$q = "SELECT * FROM journalentries WHERE id = $_GET[id]";
		$result = mysql_query($q);
		$person = mysql_fetch_array($result);
	}
?>
	<h1>Ändra en resa</h1>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
	Namn <input type="text" name="inputName" value="<?php echo $person['Name']; ?>"/>
    Anställningsnummer <input type="text" name="inputEmployeeNr" value="<?php echo $person['EmployeeNr']; ?>"/>
	Datum <input type="text" name="inputDate" value= "<?php echo $person['Date']; ?>"/>
	Destination <input type="text" name="inputDestination" value="<?php echo $person['Route']; ?>" />
    Privatbil <input type="radio" name="inputType" value="privatbil" />
	Affärsbil <input type="radio" name="inputType" value="business" />
	
    <br />
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?> " />
	<input type="submit" name = "submit" value="Modify" />
    </form>

<?php		
	if(isset($_POST['submit']) ) {
		$u = "UPDATE journalentries SET `Name` = '$_POST[inputName]', `Date` = '$_POST[inputDate]', `EmployeeNr` = '$_POST[inputEmployeeNr]', `Route` = '$_POST[inputDestination]', `CarType` = '$_POST[inputType]' WHERE id = $_POST[id]";
		mysql_query($u) or die(mysql_error() );
	
	
	echo "Resan har ändrats!";
	header("Location: index.php");
	} else {
	
	}
	

	
?>


</body>
</html>