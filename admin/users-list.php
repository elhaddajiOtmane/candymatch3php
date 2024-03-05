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
    
if(isset($_GET['del']) && isset($_GET['name']))
{
    $id=$_GET['del'];
    $name=$_GET['name'];
    
    $sql = "delete from users WHERE id=:id";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':id',$id, PDO::PARAM_STR);
    $query -> execute();
    
    $sql2 = "insert into deleteduser (email) values (:name)";
    $query2 = $dbh->prepare($sql2);
    $query2 -> bindParam(':name',$name, PDO::PARAM_STR);
    $query2 -> execute();

    $msg="Data Deleted successfully";
}

if(isset($_REQUEST['unconfirm']))
{
	$aeid=intval($_GET['unconfirm']);
	$memstatus=1;
	$sql = "UPDATE users SET status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
	$msg="Changes Sucessfully";
}

if(isset($_REQUEST['confirm']))
{
	$aeid=intval($_GET['confirm']);
	$memstatus=0;
	$sql = "UPDATE users SET status=:status WHERE  id=:aeid";
	$query = $dbh->prepare($sql);
	$query -> bindParam(':status',$memstatus, PDO::PARAM_STR);
	$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
	$query -> execute();
	$msg="Changes Sucessfully";
}
	
 ?>
 
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users List - <?php appName($dbh); ?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include('../includes/leftbar.php'); ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Users List</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Manage Users</p>
                        </div>
                        
<?php 
$results_per_page = 50; 

$page = $_GET["page"];
    
if (!isset ($_GET['page']) ) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}
    
$sql01 = "SELECT * FROM users order by id ASC";
$query01 = $dbh -> prepare($sql01);
$query01->execute();
$results01 = $query01->fetchAll(PDO::FETCH_OBJ);

$number_of_result = $query01->rowCount();  
    
$number_of_page = ceil($number_of_result / $results_per_page);
$page_first_result = ($page-1) * $results_per_page;
$second_last = $number_of_page - 1;
$adjacents = "2";
$next_page = $page + 1;
    
    
//Checks to see if the user has pressed the search button
if(isset($_POST['searchSubmit']))
{
    $searchterm = $_POST['emailSearch'];
    $sql = "SELECT * FROM users WHERE email LIKE :searchterm LIMIT 0, 50";
    $query = $dbh->prepare($sql);
    $query->execute(array(':searchterm' => '%' . $searchterm . '%'));
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
}else {
    $sql = "SELECT * FROM users ORDER BY id DESC LIMIT :page_first_result, :results_per_page";
    $query = $dbh->prepare($sql);
    $query->bindParam(':page_first_result', $page_first_result, PDO::PARAM_INT);
    $query->bindParam(':results_per_page', $results_per_page, PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    }
?>	
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label"><?php echo "Total Users: ".$number_of_result; ?></label></div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Search -->
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <form method="POST">
                                        <input type="search" name="emailSearch" placeholder="search by email" />
                                        <input id="search" name="searchSubmit" type="submit" value="Search"/>
                                        </form>
                                        <label class="form-label"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Points</th>
                                            <th>Level</th>
                                            <th>Phone Info</th>
                                            <th>Status</th>
                                            <th>Action</th>	
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
if($query->rowCount() > 0)
{
foreach($results as $result)
{				
?>	
<tr>
											<td><?php echo htmlentities($cnt); ?></td>
                                            <td><?php echo htmlentities($result->name); ?></td>
                                            <td><?php echo htmlentities($result->email); ?></td>
                                            <td><?php echo htmlentities($result->mocions); ?></td>
                                            <td><?php echo htmlentities($result->level); ?></td>
                                            <td><div style = "width:130px; word-wrap: break-word"><?php echo htmlentities($result->deviceinfo); ?> 
                                            </div>
                                            <td>
                                            <?php if($result->status == 1)
                                                    { ?>
                                                    <a href="users-list.php?confirm=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Do you really want to Un-Active this Account')">Active <i class="fa fa-check-circle"></i></a> 
                                                    <?php } else { ?>
                                                    <a href="users-list.php?unconfirm=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Do you really want to Active this Account')">Un-Active <i class="fa fa-times-circle"></i></a>
                                                    <?php } ?>
</td>
                                            </td>
											
<td>
<a href="edit-user.php?edit=<?php echo $result->id; ?>" onclick="return confirm('Do you want to Edit');">&nbsp; <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
<a href="users-list.php?del=<?php echo $result->id; ?>&name=<?php echo htmlentities($result->email); ?>" onclick="return confirm('Do you want to Delete');"><i class="fa fa-trash" style="color:red"></i></a>&nbsp;&nbsp;
</td>
										</tr>
										<?php $cnt=$cnt+1; }}?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
<!-- pagination -->
 <!-- PHP -->
    <p></p><ul class="pagination">

    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
<?php

    if ($number_of_page <= 10){ 
    for($counter = 1; $counter<= $number_of_page; $counter++) 
    {  
        
        if ($page == $counter) {
	   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
		} else {
		    echo '<li class="page-item"><a class="page-link" href="?page='.$counter.'">'.$counter.' </a></li>';
		}
    }
    }elseif($number_of_page > 10){
		
	if($page <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page) {
		   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
				}else{
           echo '<li class="page-item"><a class="page-link" href="?page='.$counter.'">'.$counter.' </a></li>';
				}
        }
		echo "<li class='page-item'><a class='page-link'>...</a></li>";
		echo "<li class='page-item'><a class='page-link' href='?page=$second_last'>$second_last</a></li>";
		echo "<li class='page-item'><a class='page-link' href='?page=$number_of_page'>$number_of_page</a></li>";
		}
		
		elseif($page > 4 && $page < $number_of_page - 4) {		 
		echo "<li class='page-item'><a class='page-link' href='?page=1'>1</a></li>";
		echo "<li class='page-item'><a class='page-link' href='?page=2'>2</a></li>";
        echo "<li class='page-item'><a class='page-link'>...</a></li>";
        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {			
           if ($counter == $page) {
		   echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";	
				}else{
           echo '<li class="page-item"><a class="page-link" href="?page='.$counter.'">'.$counter.' </a></li>';
				}                  
       }
       echo "<li class='page-item'><a class='page-link'>...</a></li>";
	   echo "<li class='page-item'><a class='page-link' href='?page=$second_last'>$second_last</a></li>";
	   echo "<li class='page-item'><a class='page-link' href='?page=$number_of_page'>$number_of_page</a></li>";      
            }
		
		else {
        echo "<li class='page-item'><a class='page-link' href='?page=1'>1</a></li>";
		echo "<li class='page-item'><a class='page-link' href='?page=2'>2</a></li>";
        echo "<li class='page-item'><a class='page-link'>...</a></li>";

        for ($counter = $number_of_page - 6; $counter <= $number_of_page; $counter++) {
          if ($counter == $page) {
		  echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";		
				}else{
           echo '<li class="page-item"><a class="page-link" href="?page='.$counter.'">'.$counter.' </a></li>';
				}                   
                }
            }
    
    }
    
    ?>
    
    <li class="page-item" <?php if($page >= $number_of_page){ echo "class='disabled'"; } ?>>
	<a class="page-link" <?php if($page < $number_of_page) { echo "href='?page=$next_page'"; } ?>>Next</a>
	</li>
    
    <li class="page-item"><a class="page-link" href="?page=<?php echo $number_of_page; ?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
    </ul>
    
    <strong>Page <?php echo $page." of ".$number_of_page; ?></strong>  
                             </div>
                        </div>
                    
                </div>
            </div>
                             </div>
                        </div>
                    
                </div>
            </div>
            
            
                <!--End: content -->

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
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