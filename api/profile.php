<?php
include('../includes/config.php');

$sql = "SELECT * from admin;";
$query = $dbh -> prepare($sql);
$query->execute();
$result=$query->fetch(PDO::FETCH_OBJ);
		
$code = $result->purchaseCode;
		
if ($code == "")
 {
 echo "Not Verified";
 }
else{
    
    if (chechTheCode($dbh, $code) == "Success")
    {
$status = '1';
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";

$query = $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();

$results=$query->fetchAll(PDO::FETCH_OBJ);

$app = $_GET['app'];

$data = file_get_contents('https://ibrahimodeh.com/codecanyon/app-var.php?userApp='.$app);

if ($data == "True")
{

if($query->rowCount() > 0)
{

$sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	

if($query->rowCount() > 0)
{
    
echo "N1".$result->name."N2";
echo "M1".$result->mocions."M2";
echo "E1".$result->email."E2";
echo "I1".$result->id."I2";
echo "L1".$result->level."L2";

} else{
 echo "Sorry, your email or password is incorrect";
}
}else {
    
    $sql = "SELECT * from users where email = (:email);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
        echo $result->status;
}

}else{
    echo "Contact me for this error: support@ibrahimodeh.com";
}
    }else{
         echo "Not Verified";
    }
		    
}

function chechTheCode($dbh, $code)
{
	$data = file_get_contents('https://ibrahimodeh.com/codecanyon/code.php?pCode='.$code);
	
	if ($data == "Success")
	{
	    $msg = "Success";
	}else{
	    $msg = "Error";
	}
	
	return $msg;
}
?>