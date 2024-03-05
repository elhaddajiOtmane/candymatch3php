<?php
include('../includes/config.php');

$email = $_POST['email'];
$points = $_POST['points'];

        // get users details:
        $sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
    
    $userLevel = $result->level + 1; // increase user level
    $userPoints = $result->mocions + $points; // increase user points
    

    $sql="UPDATE users SET level=(:userLevel), mocions=(:userPoints) where email=(:email)";
    $query = $dbh->prepare($sql);
	$query-> bindParam(':userLevel', $userLevel, PDO::PARAM_STR);
	$query-> bindParam(':userPoints', $userPoints, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query->execute();
	
	echo "Success";

}

?>