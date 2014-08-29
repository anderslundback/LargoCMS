<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ta bort resa</title>
</head>
<?php
	include 'includes/mysql_connect.php';
	

		mysql_query("DELETE FROM journalentries WHERE id = $_GET[id]") or die(mysql_error() );
	
	echo "Resan har raderats!";
	header('Location: index.php');
	

?>

<body>
</body>
</html>