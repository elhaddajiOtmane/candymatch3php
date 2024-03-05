<?php
session_start();
error_reporting(0);
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
    
    function purchaseCode($dbh)
    {
        $sql = "SELECT * from admin;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
		$code = $result->purchaseCode;
		
		if ($code == "")
		{
		    echo htmlentities("");
		}
		else{
		    echo htmlentities($code);
		}
    }
    
    function verifedCode($dbh)
    {
        $sql = "SELECT * from admin;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
		$code = $result->purchaseCode;
		
		if ($code == "")
		{
		    echo htmlentities("");
		}
		else{
		    echo htmlentities("Verifed");
		}
    }
    
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
	$purchaseCode = $_POST['purchaseCode'];
	
	$data = file_get_contents('https://ibrahimodeh.com/codecanyon/code.php?pCode='.$purchaseCode);
	
	if ($data == "Success")
	{
	    $sql="UPDATE admin SET purchaseCode=(:purchaseCode)";
    	$query = $dbh->prepare($sql);
	    $query-> bindParam(':purchaseCode', $purchaseCode, PDO::PARAM_STR);
    	$query->execute();
	
	    $msg = "Successfully";
	}else{
	    $msg = "Error";
	}
  }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Verify Purchase - <?php appName($dbh); ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    
    <!-- Website Logo -->
    <link href="../assets/img/favicon.ico" rel="icon">
    
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('../includes/leftbar.php');?>
        
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Verify Purchase</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Verify Your Purchase Code: <?php verifedCode($dbh); ?></p>
                                        </div>
                                        
<?php if($msg == "Successfully"){?><div class="card textwhite bg-success text-white shadow"><strong>SUCCESS</strong></div><?php } ?>

<?php if($msg == "Error"){ ?><div class="card textwhite bg-danger text-white shadow"><strong>Wrong Purchase Code</strong></div><?php } ?>

                                        <div class="card-body">
                                            <!-- Settings Form -->
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Item Perchase Code:</strong></label>
                                                        <input class="form-control" type="text" id="purchaseCode" placeholder="Purchase Code" name="purchaseCode" required></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" name="submit" type="submit">Verify</button></div>
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
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
<?php } ?>