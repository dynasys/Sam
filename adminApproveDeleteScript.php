<?php
if(isset($_POST['Approve'])){
    $CID = $_GET['CID'];
    //$CID = $_SESSION['companyID'];
    //$Name = $_SESSION['compname'];
    echo $CID;
	echo "Approved ran";
   
	header("location: adminApprove.php");
    /*$connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db ("csconnect", $connection);
    $sql = "UPDATE company
            SET Approved='Y'
            WHERE Company_ID=" . $CID;
            
    mysql_query($sql,$connection);
    
    mysql_close($connection);*/
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
