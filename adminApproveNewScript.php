<?php
if(isset($_Post["submit"])){
	$CID = $_GET["CID"];
	$username = $_Post["username"];
	$password = $_Post["password"];
	
	$connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);
    $sql = "UPDATE company
            SET Approved='Y' 
            WHERE Company_ID=" . $CID . ";"
            
    mysql_query($sql,$connection);
	
	$sql = "INSERT INTO authentication
			VALUES  (" . $username . ", " . $password . ", "c");"
    
    mysql_close($connection);
}
?>
