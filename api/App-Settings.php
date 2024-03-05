<?php
include('../includes/config.php');


$sql = "SELECT * from settings";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
    
echo "N1".$result->withName."N2";
echo "M1".$result->pointsConv."M2";
echo "E1".$result->withMethod."E2";
echo "I1".$result->withNote."I2";

// Today Date
echo "T1".date("Y-m-d")."T2";


} else{
    
 echo "Sorry, your email or password is incorrect";
 
}



?>