<?php
session_start();
error_reporting(0);
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	
	 function appName($dbh)
    {
        
        $sql = "SELECT * from frontend;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
	    echo htmlentities($result->name);
	    
    }
    
    
// Code for change password	
if(isset($_POST['submit']))
	{
$password = md5($_POST['password']);
$new_password = md5($_POST['new_password']);
$username = $_SESSION['alogin'];
$sql = "SELECT Password FROM admin WHERE UserName=:username and Password=:password";
$query = $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con = "update admin set Password=:new_password where UserName=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
$chngpwd1-> bindParam(':new_password', $new_password, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is not valid.";	
} 

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Change Password - <?php appName($dbh); ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body>
    <div id="wrapper">
        <?php include('../includes/leftbar.php');?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Change Password</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Change Password</p>
                                        </div>
                                        <?php if($msg){?><div class="card textwhite bg-success text-white shadow"><strong>SUCCESS</strong><?php echo htmlentities($msg); ?> </div><?php } ?>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Current Password</strong><br></label><input class="form-control" type="password" name="password" required></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>New Password</strong></label><input class="form-control" type="password" name="new_password" required></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Confirm Password</strong></label><input class="form-control" type="password" name="confirmpassword" required></div>
                                                    </div>
        
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" name="submit" type="submit">Save</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span><a href="https://ibrahimodeh.com">Copyright © IbrahimOdeh 2021-<?php echo date('Y'); ?></a></span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

<?php } ?>