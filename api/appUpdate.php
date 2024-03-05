<?php
include('../includes/config.php');

$appVersion = $_POST['versionName'];

$sql = "SELECT * from settings;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
		
		$SqlAppVersion = $result->appVersion;
		
		if ($SqlAppVersion == $appVersion)
		{
		    echo "No Update";
		}
		else {
		    echo "Update the app: ".$appVersion;
		}

?>