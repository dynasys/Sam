<?php
	include "adminApproveDeleteScript.php";
	$connection=mysql_connect("localhost", "root", "");
	
	//select db
	$db=mysql_select_db("csconnect", $connection);
	
	$adminUser=$_SESSION["username"];
	
	$adminAppQuery=mysql_query("SELECT Company_ID, name, Rep_First_Name, Rep_Last_Name, Rep_Phone, Rep_Email, About
								FROM company
								WHERE Approved='N'", $connection);
								
	while ($row=mysql_fetch_array($adminAppQuery)){
		echo "<tr>";
			//$CID=$row["Company_ID"];
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["Rep_First_Name"] . " " . $row["Rep_Last_Name"] . "</td>";
			echo "<td>" . $row["Rep_Phone"] . "</td>";
			echo "<td>" . $row["Rep_Email"] . "</td>";
			echo "<td>" . $row["About"] . "</td>";
			echo "<td><form method='post' class='submit'>
			<input type='hidden' name='CID' value='" . $row["Company_ID"] . "'>
			<input type='submit' value='Approve' name='Approve'>
			<input type='submit' value='Delete' name='Delete'>
			</form></td>";
			
		echo "</tr>";
	}
	
	mysql_free_result($adminAppQuery);
	
	mysql_close($connection);
	
?>
