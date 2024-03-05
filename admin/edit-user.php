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
    
	
	if(isset($_GET['edit']))
	{
		$edit_id =$_GET['edit'];
	}


	
if(isset($_POST['submit']))
  {

	$name =$_POST['name'];
	$email= $_POST['email'];
	$mocions =$_POST['mocions'];
	$device_info =$_POST['deviceinfo'];
	$idedit = $_POST['idedit'];

	$sql="UPDATE users SET name=(:name), email=(:email), mocions=(:mocions), deviceinfo=(:deviceinfo) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':mocions', $mocions, PDO::PARAM_STR);
	$query-> bindParam(':deviceinfo', $device_info, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully :)";
} 

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit User - <?php appName($dbh); ?></title>
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
<?php
		$sql = "SELECT * from users where id = :editid";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':editid',$edit_id,PDO::PARAM_INT);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
    <div id="wrapper">
        <?php include('../includes/leftbar.php');?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit User</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Edit User : <?php echo htmlentities($result->name); ?></p>
                                        </div>
                                        <?php if($msg){?><div class="card textwhite bg-success text-white shadow"><strong>SUCCESS</strong><?php echo htmlentities($msg); ?> </div><?php } ?>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Name<span style="color:red">*</span></strong><br></label><input class="form-control" type="text" name="name" required value="<?php echo htmlentities($result->name);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Email<span style="color:red">*</span></strong></label><input class="form-control" type="email" name="email" required value="<?php echo htmlentities($result->email);?>"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Points<span style="color:red">*</span></strong></label><input class="form-control" type="text" name="mocions"  value="<?php echo htmlentities($result->mocions);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Device Info<span style="color:red">*</span></strong></label><input class="form-control" type="text" name="deviceinfo" required value="<?php echo htmlentities($result->deviceinfo);?>"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="hidden" name="idedit" value="<?php echo htmlentities($result->id);?>" >
                                                         </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" name="submit" type="submit">Save Settings</button></div>
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