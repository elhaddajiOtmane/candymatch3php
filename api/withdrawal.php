<?php

include('../includes/config.php');


$email = $_POST['email'];


$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

if($query->rowCount() > 0)
{
    
// echo "M1".$result->mocions."M2";

$mocions = $result->mocions;

$int = (int)$mocions;

$sql = "SELECT * from settings";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

if($query->rowCount() > 0)
{
    $minPoints = $result->withMin;
    
    // Min. Payout:
if ($int >= $minPoints)
{
    $user = $_POST['email'];
	$method = $_POST['method'];
    $mocion = $mocions;
	$reciver = 'Admin';
    $noti_type = 'Payment Request';
		
	
	$noti_reciver = 'Admin';
    $sql_noti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    
    
    $query_noti = $dbh->prepare($sql_noti);
	$query_noti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$query_noti-> bindParam(':notireciver', $noti_reciver, PDO::PARAM_STR);
    $query_noti-> bindParam(':notitype', $noti_type, PDO::PARAM_STR);
    $query_noti->execute();

	$sql="insert into payments (sender, method, mocions, confirm) values (:sender, :method, :minPoints, 0)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':sender', $user, PDO::PARAM_STR);
	$query-> bindParam(':method', $method, PDO::PARAM_STR);
	$query-> bindParam(':minPoints', $minPoints, PDO::PARAM_STR);
    $query->execute(); 
	$msg="Request Send";
	
	echo "Request Send";
	
	$mocions = $mocions - $minPoints;
	
	$sqle="UPDATE users SET mocions=(:mocions) where email=(:email)";
	$querye = $dbh->prepare($sqle);
	$querye-> bindParam(':email', $email, PDO::PARAM_STR);
	$querye-> bindParam(':mocions', $mocions, PDO::PARAM_STR);
	$querye->execute();
}
else{
    echo "You need more Points";
}
}

} else{
    
 echo "Sorry, your email or password is incorrect";
 
}


?>