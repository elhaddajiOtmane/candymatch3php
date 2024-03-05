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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$playStore = $_POST['playStore'];
	$youtubeLink = $_POST['youtubeLink'];
	$about = $_POST['about'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];

	$sql="UPDATE frontend SET name=(:name), email=(:email), playStore=(:playStore), youtubeLink=(:youtubeLink), 
	about=(:about), facebook=(:facebook), instagram=(:instagram), twitter=(:twitter)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':playStore', $playStore, PDO::PARAM_STR);
	$query-> bindParam(':youtubeLink', $youtubeLink, PDO::PARAM_STR);
	$query-> bindParam(':about', $about, PDO::PARAM_STR);
	$query-> bindParam(':facebook', $facebook, PDO::PARAM_STR);
	$query-> bindParam(':instagram', $instagram, PDO::PARAM_STR);
	$query-> bindParam(':twitter', $twitter, PDO::PARAM_STR);
	$query->execute();
	$msg="Settings Updated Successfully";

}  

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Site Settings - <?php appName($dbh); ?></title>
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
		$sql = "SELECT * from frontend;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
?>
    <div id="wrapper">
        <?php include('../includes/leftbar.php');?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Landing Page Settings</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Website Settings</p>
                                        </div>
                                        <?php if($msg){?><div id="succWrap" class="card textwhite bg-success text-white shadow"><strong>SUCCESS</strong><?php echo htmlentities($msg); ?> </div><?php } ?>
                                        <div class="card-body">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Website Name</strong><br></label><input class="form-control" type="text" name="name" required value="<?php echo htmlentities($result->name);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>About App</strong></label><input class="form-control" type="text" name="about" required value="<?php echo htmlentities($result->about);?>"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Your Email</strong></label><input class="form-control" type="text" name="email" required value="<?php echo htmlentities($result->email);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Play Store Link</strong></label><input class="form-control" type="text" name="playStore" required value="<?php echo htmlentities($result->playStore);?>"></div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Facebook Link</strong></label><input class="form-control" type="text" name="facebook" required value="<?php echo htmlentities($result->facebook);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Youtube Video Link</strong></label><input class="form-control" type="text" name="youtubeLink" required value="<?php echo htmlentities($result->youtubeLink);?>"></div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>instagram Link</strong></label><input class="form-control" type="text" name="instagram" required value="<?php echo htmlentities($result->instagram);?>"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"><strong>Twitter Link</strong></label><input class="form-control" type="text" name="twitter" required value="<?php echo htmlentities($result->twitter);?>"></div>
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