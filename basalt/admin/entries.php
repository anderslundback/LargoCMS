<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="calendar.js"></script>
<link rel="stylesheet" href="../css/style.css" />
<title> Basalt admin area </title>
</head>
<body>
<?php
include('includes/functions.php');
session_start();
if(isset($_SESSION['user'])) {
	

?>

<div id="wrapper">
	<div id="header">
    <p align="left"> <img src="../images/basaltlogo_no_text.jpg"></p>
    	<div id="nav">
        	<a href="addEntry.php">Add entry</a>
			<a href="search.php">Search</a>
			<a href="logout.php">Logout</a>
        </div>
        
    </div>
    
	<div id="content">
    
        <!--<span> Logged in! Welcome <?php echo $_SESSION['user']; ?>.</span> -->
    
        <table cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <td><u>Name</u></td>
                <td><u>Employee number</u></td>
                <td><u>Date</u></td>
                <td><u>Route</u></td>
                <td><u>Kilometers</u></td>
                <td><u>Car type</u></td>
            </tr>
        
        </thead>
        <tbody>
        <?php getEntries();?>
        </tbody>
        </table>

	</div>
</div>
<?php
} else {
	header("Location: login.php");
}
?>

</body>
</html>
