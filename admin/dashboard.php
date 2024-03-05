<?php
session_start();
error_reporting(0);
include('../includes/config.php');

if(strlen($_SESSION['alogin']) == 0)
{	
    header('location:index.php');
} else{
    
    
    function appName($dbh)
    {
        $sql = "SELECT * from frontend;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		
	    echo htmlentities($result->name);
    }
    
    $sql ="SELECT SUM(mocions) as total_points FROM users";
    $query = $dbh -> prepare($sql);
    $query->execute();
	$result=$query->fetch(PDO::FETCH_OBJ);
	
	if($query->rowCount() > 0)
	{
	    $totalPoints = $result->total_points;
	}
	
	function setTopUser($dbh, $data)
    {
        $sql = "SELECT id, name, CONVERT(`mocions`,INT) AS points FROM users ORDER BY points DESC LIMIT 1;";
        $query = $dbh -> prepare($sql);
        $query->execute();
        $results=$query->fetch(PDO::FETCH_OBJ);
        
        return $results->$data;
    }
    
    function getPaidChart($status, $dbh)
    {
        
        if ($status == "paid")
        {
            $sql = "SELECT COUNT(*) AS total FROM payments WHERE confirm =1";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_OBJ);
            echo $results->total;
        }
        
        if ($status == "unpaid")
        {
            $sql = "SELECT COUNT(*) AS total FROM payments WHERE confirm =0";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_OBJ);
            echo $results->total;
        }
    }

    function getConfirmedChart($status, $dbh)
    {
        if ($status == "confirmed")
        {
            $sql = "SELECT COUNT(*) AS total FROM users WHERE status =1";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_OBJ);
            echo $results->total;
        }
        
        if ($status == "unconfirmed")
        {
            $sql = "SELECT COUNT(*) AS total FROM users WHERE status =0";
            $query = $dbh -> prepare($sql);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_OBJ);
            echo $results->total;
        }
    }   
?>
	
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - <?php appName($dbh); ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    
    <!-- Website Logo -->
    <link href="assets/img/favicon.ico" rel="icon">
</head>

<body id="page-top">
    <div id="wrapper">
                <?php include('../includes/leftbar.php'); ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>
                    </div>
<?php 
$sql ="SELECT id from users";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$bg=$query->rowCount();
?>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total users</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo htmlentities($bg);?></span></div>
                                            <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='users-list.php'">View All</button>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
$reciver = 'Admin';
$sql1 ="SELECT id from feedback where reciver = (:reciver)";
$query1 = $dbh -> prepare($sql1);;
$query1-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$regbd=$query1->rowCount();
?>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>users Feedback</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo htmlentities($regbd);?></span></div>
                                            <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='feedback.php'">View All</button>
                                        </div>
                                        <div class="col-auto"><i class="far fa-edit fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
$reciver = 'Admin';
$sql12 ="SELECT id from notification where notireciver = (:reciver)";
$query12 = $dbh -> prepare($sql12);;
$query12-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
$query12->execute();
$results12=$query12->fetchAll(PDO::FETCH_OBJ);
$regbd2=$query12->rowCount();
?>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>notifications</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span><?php echo htmlentities($regbd2);?></span></div>
                                                    <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='notifications.php'">View All</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="far fa-bell fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
$sql6 ="SELECT id from payments ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Withrwawal requests</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo htmlentities($query); ?></span></div>
                                            <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='withdrawal-requests.php'">View All</button>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-money-bill-wave fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Total points of all the users -->
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Total All Users Points</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo htmlentities($totalPoints);?></span></div>
                                            <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='users-list.php'">View All</button>
                                        </div>
                                        <div class="col-auto"><i class="fa-solid fa-coins fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Best User -->
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Best User</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo setTopUser($dbh, "name"); ?></span></div>
                                            <button class="btn btn-primary btn-sm" style="margin-top:10px;" onclick="document.location='edit-user.php?edit=<?php echo setTopUser($dbh, "id"); ?>'">View Details</button>
                                        </div>
                                        <div class="col-auto"><i class="fa fa-user fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                
                </div>
                
                 <div class="row">
                    
                    <!-- Users Withdrawals Chart -->
                <div class="col-lg-5 col-xl-4" style="margin-left: 20px;">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Users Withdrawals</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Unpaid&quot;,&quot;Paid&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;<?php getPaidChart("unpaid",$dbh); ?>&quot;,&quot;<?php getPaidChart("paid",$dbh); ?>&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}" width="668" height="640" style="display: block; height: 320px; width: 334px;" class="chartjs-render-monitor"></canvas></div>
                                    <div class="text-center small mt-4"><span class="me-2"><i class="fas fa-circle text-primary"></i>&nbsp;Unpaid</span><span class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;Paid</span></div>
                                </div>
                            </div>
                        </div>
                    <!-- End: Users Withdrawals Chart -->
                    
                <!-- Active Users Chart -->
                <div class="col-lg-5 col-xl-4" style="margin-left: 20px;">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Active Users</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Blocked&quot;,&quot;Active&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;<?php getConfirmedChart("unconfirmed", $dbh); ?>&quot;,&quot;<?php getConfirmedChart("confirmed", $dbh); ?>&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}}}" width="668" height="640" style="display: block; height: 320px; width: 334px;" class="chartjs-render-monitor"></canvas></div>
                                    <div class="text-center small mt-4"><span class="me-2"><i class="fas fa-circle text-primary"></i>&nbsp;Blocked</span><span class="me-2"><i class="fas fa-circle text-success"></i>&nbsp;Active</span></div>
                                </div>
                            </div>
                        </div>
                 <!-- End: Users Confirmed Chart -->
                </div>
                
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span><a href="https://ibrahimodeh.com">Copyright © IbrahimOdeh 2021-<?php echo date('Y'); ?></a></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    
    <!-- JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
<?php } ?>