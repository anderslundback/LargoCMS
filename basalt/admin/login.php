<html>
<head>
<link rel="stylesheet" href="../css/style.css" />
<title> Basalt admin area login</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['user'])) {
	header("Location: index.php");
	} else {
?>
<div id="wrapper">
	<div id="header">
    	<p align="left"> <img src="../images/basaltlogo_no_text.jpg"></p>
        
    </div>
    
    <div id="content">
  		<form action= "dologin.php" method = "post">
		<table>
			<tr>
    			<td><span>Username:</span></td>
        		<td><input type = "text" name = "username" /></td>
    		</tr>
    		<tr>
    			<td><span>Password:</span></td>
        		<td><input type = "password" name = "password" /></td>
    		</tr>
    			<tr>
    			<td colspan="2" align="right"><input type="submit" name = "login" value="Login" /></td>
    		</tr>
		</table></p>
	</div>

</div>


<?php } ?>
</body>
</html>