<?php
	include 'includes/mysql_connect.php';
	$keyword = $_POST['inputsearch'];
	
	function doSearch() {
		$query = "SELECT Name, EmployeeNr, Date, Route, CarType from journalentries WHERE Name LIKE '%".$keyword."%' OR EmployeeNr LIKE '%".$keyword."%' OR 		Date LIKE '%".$keyword."%' OR Route LIKE '%".$keyword."%' OR CarType LIKE '%".$keyword."%'";
		$result = mysql_query($query);
		
		while($post = mysql_fetch_assoc($query)) {
			echo("<tr><td>" . $post['Name'] . "</td><td>" . $post['EmployeeNr'] . "</td><td>" . $post['Date'] . "</td><td>" . $post['Route'] . "</td><td>" . 	$post['CarType'] . "</td><td>");
		}
		
		
	}
	header("Location: search.php");

?>