<?php
//echo "PHP Ran";
session_start();

if(isset($_POST['Search'])){
	
	//echo "First if ran";
	
	$keywords=$_POST['keywords'];
	$zip=$_POST['zip'];
	$city=$_POST['city'];
	$type=$_POST['type'];
	
	$connection = mysql_connect('localhost', 'root', '');
	//Security functions
	$keywords=stripslashes($keywords);
	//$intern=stripslashes($intern);
	//$job=stripslashes($job);
	$zip=stripslashes($zip);
	$city=stripslashes($city);
	
	
	$keywords=mysql_real_escape_string($keywords);
	//$intern=mysql_real_escape_string($intern);
	//$job=mysql_real_escape_string($job);
	$zip=mysql_real_escape_string($zip);
	$city=mysql_real_escape_string($city);
	
	//select database
	$db=mysql_select_db('csconnect', $connection);
	
	//Search query
	if($type == "internship"){
		$query="SELECT *
				FROM jobs
				WHERE City = '" . $city . "' AND Zip_Code LIKE '%" . $zip . "%' AND Position_Title LIKE '%" . $keywords . "%' AND Type='Internship'";
	}elseif($type == "job"){
		$query="SELECT *
				FROM jobs
				WHERE Type='Job' AND City = '" . $city . "' AND Zip_Code LIKE '%" . $zip . "%' AND Position_Title '%" . $keywords . "%'";
	}
	
	$result=mysql_query($query);
	
	if(mysql_num_rows($result)>0){
		echo "<br>";
		
		while($row = mysql_fetch_assoc($result)){
			echo $row["Position_Title"] . " " . $row["City"] . " " . $row["Zip_Code"] . " " . $row["Post_Date"] . " " . $row["Description"] . " " . $row["Type"] .
			"<br>";
		}
	}else{
		echo "0 results";
	}
	
	mysql_close($connection);
}
?>
