<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Add function (hidden code) </title>
</head>
<body>

<?php
include('includes/mysql_connect.php');


function getEntries() {
	$query = mysql_query("SELECT * from journalentries") or die(mysql_error());
	if(mysql_num_rows($query) == 0) {
		echo "<tr><td colspan=\"3\">No entries were found</td></tr>";
	} 
	else 
	{
		$query = mysql_query("SELECT * FROM journalentries") or die(mysql_error());
		while($post = mysql_fetch_assoc($query)) {
			echo "<tr><td>" . $post['Name'] . "</td><td>" . $post['EmployeeNr'] . "</td><td>" . $post['Date'] . "</td><td>" . $post['Route'] . "</td><td>" . $post['Kilometers']. "</td><td>" . $post['CarType'] . "</td><td><a href=\"delete.php?id=" . $post['id'] 
			. "\">Delete</a><br /><a href=\"edit.php?id=" . $post['id'] . "\">Edit</a></td></tr>";
		}
	}
}


function deletePost($id) {
	$id = (int) $id;
	mysql_query("DELETE FROM journalentries WHERE `id` = '$id'") or die(mysql_error());
	header("Location: entries.php");
}

?>

</body>
</html>