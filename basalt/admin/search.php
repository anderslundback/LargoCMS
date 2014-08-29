<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" />
<title>Basalt Driver's log</title>
</head>

<body>

<div id="wrapper">
	<div id="header">
    <p align="left"> <img src="../images/basaltlogo_no_text.jpg"></p>
    	<div id="nav">
        	<a href="addEntry.php">Add entry</a>
			<a href="entries.php">Manage entries</a>
			<a href="logout.php">Logout</a>
        </div>
        
    </div>
    
	<div id="content">

        <h1>Keyword search </h1>
        <form method="post">
        <input type="text" name="inputsearch" value=""/>
        <input type="submit" name = "submit"/>
        </form>
        <br/>

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
    
       
        
			<?php
            include 'includes/mysql_connect.php';
            if(isset($_POST['submit'])) {	
                $keyword = $_POST['inputsearch'];
                $query = "SELECT Name, EmployeeNr, Date, Route, Kilometers, CarType from journalentries WHERE Name LIKE '%".$keyword."%' OR EmployeeNr LIKE '%".$keyword."%' OR 		Date LIKE '%".$keyword."%' OR Route LIKE '%".$keyword."%' OR CarType LIKE '%".$keyword."%'";
                $result = mysql_query($query);
                    
                while($post = mysql_fetch_assoc($result)) {
                    echo("<tr><td>" . $post['Name'] . "</td><td>" . $post['EmployeeNr'] . "</td><td>" . $post['Date'] . "</td><td>" . $post['Route'] . "</td><td>" . 	$post['Kilometers'] . "</td><td>" . $post['CarType'] . "</td>");
                }	
            }
            
            ?>
    
        </tbody>
        
        </table>
    
    </div>
</div>


</body>

</html>