<?php
include('../includes/config.php');

$email = $_POST['email'];
$action = $_POST['action'];
$achievementID = (isset($_POST['achID'])) ? $_POST['achID'] : 0;

if ($action === "Get")
{
 $sql = "SELECT * FROM `users` WHERE email=(:email)";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
    echo "N1".$result->achiev_1."N2";
    echo "M1".$result->achiev_2."M2";
    echo "E1".$result->achiev_3."E2";
}   
}else if ($action === "Set")
{
    if ($achievementID === "1")
    {
        $sql = "UPDATE users SET achiev_1=1 WHERE email=(:email)";
        echo "Done";
    }
    else if ($achievementID === "2")
    {
        $sql = "UPDATE users SET achiev_2=1 WHERE email=(:email)";
        echo "Done";
    }
    else if ($achievementID === "3")
    {
        $sql = "UPDATE users SET achiev_3=1 WHERE email=(:email)";
        echo "Done";
    } else
    {
        $sql = null;
        echo "Null";
    }
    
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
}


?>