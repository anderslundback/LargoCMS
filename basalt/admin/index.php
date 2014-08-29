<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" />
<title> Basalt admin area </title>
</head>
<body>
<?php
include 'includes/mysql_connect.php';
session_start();
if(isset($_SESSION['user'])) {
	

?>
<div id="wrapper">
	<div id="header">
    <p align="left"> <img src="../images/basaltlogo_no_text.jpg"></p>
    	<div id="nav">
    		<a href="addEntry.php">Add entry</a>
			<a href="search.php">Search</a>
			<a href="entries.php">Manage entries</a>
			<a href="logout.php">Logout</a>
        </div>
        
    </div>

<br>
<br>
<span> Logged in! Welcome <?php echo $_SESSION['user']; ?>.</span>
<?php
	
	if($_SESSION['user'] == 'admin') {
		echo 'You have administrator privilidges.';
	}
?>

<?php
} else {
	header("Location: login.php");
}
?>

</body>
</html>
