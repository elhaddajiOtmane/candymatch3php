<?php
include('includes/config.php');

$sql = "SELECT * from frontend;";
		$query = $dbh -> prepare($sql);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Free mobile app to earn money from scratching cards.">
    <meta name="author" content="Ibrahim">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="<?php echo htmlentities($result->name);?>" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="<?php echo htmlentities($result->name);?>"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Free mobile app to earn money from scratching cards." /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Terms and Conditions - <?php echo htmlentities($result->name);?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700" rel="stylesheet">
    <link href="frontend/css/bootstrap.css" rel="stylesheet">
    <link href="frontend/css/fontawesome-all.css" rel="stylesheet">
    <link href="frontend/css/swiper.css" rel="stylesheet">
	<link href="frontend/css/magnific-popup.css" rel="stylesheet">
    <link href="frontend/css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="frontend/images/favicon.ico">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.html"><?php echo htmlentities($result->name);?></a>

        <!-- Image Logo -->
        <!--<a class="navbar-brand logo-image" href="index.php"><img src="frontend/images/logo.png" alt="logo"></a> -->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#preview">PREVIEW</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.php#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php#contact">CONTACT</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="<?php echo htmlentities($result->facebook);?>">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="<?php echo htmlentities($result->twitter);?>">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Terms & Conditions</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Terms & Conditions</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                        Terms & Conditions Here
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <!-- end of terms content -->

    
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Terms & Conditions</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Footer -->
    <?php include('footer.php');?>
    <!-- end of footer -->

	
    <!-- Scripts -->
    <script src="frontend/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="frontend/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="frontend/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="frontend/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="frontend/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="frontend/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="frontend/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="frontend/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="frontend/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>