         <?php
         
         $page = basename($_SERVER['PHP_SELF']);
         
         ?>
        <!--start: Left Bar -->
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-globe-americas"></i></div>
                    <div class="sidebar-brand-text mx-3"><span><?php appName($dbh); ?></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "dashboard.php" ? "active" : "")?>" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "profile.php" ? "active" : "")?>" href="profile.php"><i class="fas fa-user"></i><span>My Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "settings.php" ? "active" : "")?>" href="settings.php"><i class="fa fa-cog"></i><span>App Settings</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "site-settings.php" ? "active" : "")?>" href="site-settings.php"><i class="fa fa-cog"></i><span>Site Settings</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "users-list.php" ? "active" : "")?>" href="users-list.php"><i class="fas fa-table"></i><span>Users List</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "feedback.php" ? "active" : "")?>" href="feedback.php"><i class="fa fa-edit"></i><span>Users Feedback</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "withdrawal-requests.php" ? "active" : "")?>" href="withdrawal-requests.php"><i class="fa fa-money"></i><span>Withdrawal Requests</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "notifications.php" ? "active" : "")?>" href="notifications.php"><i class="fa fa-bell-o"></i><span>Notifications</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "deleted-users.php" ? "active" : "")?>" href="deleted-users.php"><i class="fa fa-user-times"></i><span>Deleted Users</span></a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($page == "verify-purchase.php" ? "active" : "")?>" href="verify-purchase.php"><i class="fa fa-code"></i><span>Verify Purchase</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://codecanyon.net/user/ibrahimodeh/portfolio"><i class="far fa-gem"></i><span><strong>• BUY IT NOW </strong>(Thieves will suspended on play store)</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <!-- Admin Drop list -->
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="../admin/assets/img/avatars/game-logo.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="settings.php"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="change-password.php"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Change Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--end: Left Bar -->