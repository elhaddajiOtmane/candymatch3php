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
    
	
if(isset($_POST['submit']))
  {	
	$withdrawalName = $_POST['withdrawalName'];
	$withdrawalMethod = $_POST['withdrawalMethod'];
	$pointsConvert = $_POST['pointsConvert'];
	$note = $_POST['note'];
	$minPoints = $_POST['minPoints'];
	$appVersion = $_POST['appVersion'];

	$sql="UPDATE settings SET withName=(:withdrawalName), withMethod=(:withdrawalMethod), withNote=(:note), pointsConv=(:pointsConvert), 
	appVersion=(:appVersion), withMin=(:minPoints)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':withdrawalName', $withdrawalName, PDO::PARAM_STR);
	$query-> bindParam(':withdrawalMethod', $withdrawalMethod, PDO::PARAM_STR);
	$query-> bindParam(':note', $note, PDO::PARAM_STR);
	$query-> bindParam(':pointsConvert', $pointsConvert, PDO::PARAM_STR);
	$query-> bindParam(':minPoints', $minPoints, PDO::PARAM_STR);
	$query-> bindParam(':appVersion', $appVersion, PDO::PARAM_STR);
	$query->execute();
	$msg="Settings Updated Successfully";

}  
  

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>App Settings - <?php appName($dbh); ?></title>
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
		$sql = "SELECT * from settings;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
    <div id="wrapper">
        <?php include('../includes/leftbar.php');?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">App Settings</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Withdrawal Settings</p>
                                        </div>
                                        <?php if($msg){?><div id="succWrap" class="card textwhite bg-success text-white shadow"><strong>SUCCESS</strong><?php echo htmlentities($msg); ?> </div><?php } ?>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Withdrawal Name</strong><br></label><input class="form-control" type="text" name="withdrawalName" required value="<?php echo htmlentities($result->withName);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Withdrawal Method</strong></label><input class="form-control" type="text" name="withdrawalMethod" required value="<?php echo htmlentities($result->withMethod);?>"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Points Convert</strong></label><input class="form-control" type="text" name="pointsConvert" required value="<?php echo htmlentities($result->pointsConv);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Withdrawal Note</strong></label><input class="form-control" type="text" name="note" required value="<?php echo htmlentities($result->withNote);?>"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Minimum Withdrawal</strong></label><input class="form-control" type="text" name="minPoints" required value="<?php echo htmlentities($result->withMin);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>App Version</strong></label><input class="form-control" type="text" name="appVersion" required value="<?php echo htmlentities($result->appVersion);?>"></div>
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