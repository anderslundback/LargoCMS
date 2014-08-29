<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="../css/style.css" />
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
	$.datepicker.formatDate( "yy-mm-dd", new Date( 2007, 1 - 1, 26 ) );
	
  });
  </script>
<script language="javascript" src="../calendar/calendar/calendar.js"></script>




<title>Add entry</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])) {
	

?>

<div id="wrapper">
	<div id="header">
    <p align="left"> <img src="../images/basaltlogo_no_text.jpg"></p>
    	<div id="nav">
			<a href="search.php">Search</a>
			<a href="entries.php">Manage entries</a>
			<a href="logout.php">Logout</a>
        </div>
        
    </div>
    
	<div id="content">
    <h1> Add an entry</h1>
    
    <form action = "doAddEntry.php" method="post">
    
    Name <input type="text" name="inputName" value=""/>
    Employee number <input type="text" name="inputEmployeeNr" value=""/>
    Date: <input type="date" name="inputDate" id="datepicker">
    Route <input type="text" name="inputDestination" value="" />
    Kilometers <input type="text" name="inputKilometers" value""/>
    Private car <input type="radio" name="inputType" value="privateCar" />
    Business car petrol <input type="radio" name="inputType" value="bCarPetrol" />
    Business car diesel <input type="radio" name="inputType" value="bCarDiesel" />
    <input type="submit" name = "submit"/>
    </form>
    
    </div>

</div>


<?php
} else {
	header("Location: login.php");
}
?>

</body>
</html>
