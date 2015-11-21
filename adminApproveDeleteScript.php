<?php
if(isset($_POST['Approve'])){
    $CID = $_POST['CID'];
	
	header("location: adminApprove.php?CID=".urlencode("$CID"));
}
if(isset($_POST['Delete'])){
    $CID = $_GET['CID'];
	
	$connection=mysql_connect("localhost", "root", "");
	$db=mysql_select_db("csconnect", $connection);
	$sql="DELETE FROM company
			WHERE Company_ID=" . $CID;

	mysql_query($sql, $connection);
	
	mysql_close($connection);
}
?>
