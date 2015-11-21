<?php

if(isset($_POST["submit"])){
	//echo "submit ran";
	$CID = $_GET["CID"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$repassword = $_POST["repassword"];
	
	if($username == null || $password == null || $repassword == null){
			echo "<br>All fields are required";
	}elseif($password != $repassword){
		echo "<br>Passwords do not match
		<br>Please re-enter passwords";
	}else{
		$connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db ("csconnect", $connection);
		
		$query = mysql_query("SELECT *
							FROM authentication
							WHERE username='$username'", $connection);
		$rows=mysql_num_rows($query);
		
		if($rows==1){
			echo "Username already exists";
			mysql_close($connection);
		}else{
			$sql = "UPDATE company
					SET Approved='Y', Username='$username' 
					WHERE Company_ID=' $CID '";
            
			mysql_query($sql,$connection);
	
			$sql = "INSERT INTO authentication
					VALUES  ('$username', '$password', 'c')";
		
			mysql_query($sql,$connection);
	
			mysql_close($connection);
	
			header("location: admin_home.php");
		}
	}
}
if(isset($_POST["cancel"])){
	header("location: admin_home.php");
}
?>
