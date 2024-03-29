<?php
include('includes/config.php');

if(isset($_POST['submit']))
{

    $user = $_POST['cemail'];
	$title = $_POST['cname'];
    $message = $_POST['cmessage'];
	$reciver = 'Admin';
    $noti_type = 'Sent From Contact Form';

    $noti_reciver = 'Admin';
    $sql_noti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
    
    
    $query_noti = $dbh->prepare($sql_noti);
	$query_noti-> bindParam(':notiuser', $user, PDO::PARAM_STR);
	$query_noti-> bindParam(':notireciver', $noti_reciver, PDO::PARAM_STR);
    $query_noti-> bindParam(':notitype', $noti_type, PDO::PARAM_STR);
    $query_noti->execute();

	$sql="insert into feedback (sender, reciver, title, feedbackdata) values (:user, :reciver, :title, :message)";
	
	$query = $dbh->prepare($sql);
	$query-> bindParam(':user', $user, PDO::PARAM_STR);
	$query-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
	$query-> bindParam(':title', $title, PDO::PARAM_STR);
	$query-> bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute(); 

}

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
    <title><?php echo htmlentities($result->name);?></title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
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
        <a class="navbar-brand logo-text page-scroll" href="index.php"><?php echo htmlentities($result->name);?></a>

        <!-- Image Logo -->
         <!--  <a class="navbar-brand logo-image" href="index.php"><img src="frontend/images/logo.png" alt="<?php echo htmlentities($result->name);?>"></a>  -->
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview">PREVIEW</a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACT</a>
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
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>AMAZING GAME <br>FOR <span id="js-rotating">Earn Money, Extra Money, Easy Money</span></h1>
                            <p class="p-large">Candy Match 3 Game is for making you earn money from your mobile phone from Playing this Amazing Game. Download it now!</p>
                            <a class="btn-solid-lg page-scroll" href="#your-link"><i class="fab fa-google-play"></i>PLAY STORE</a>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="frontend/images/header-phone.png" alt="header screenshots">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 1">
                                        <div class="card-body">
                                            <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                         <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 2">
                                        <div class="card-body">
                                            <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                         <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 3">
                                        <div class="card-body">
                                            <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                         <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 4">
                                        <div class="card-body">
                                            <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                         <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 5">
                                        <div class="card-body">
                                            <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                         <img class="card-image" src="frontend/images/rating.png" alt="App testimonial 6">
                                        <div class="card-body">
                                           <p class="testimonial-text">Testimonial Text Message Here</p>
                                            <p class="testimonial-author">Testimonial Author</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->
    

    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>GAME FEATURES</h2>
                    <div class="p-heading p-large">See all the amazing features here</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><?php echo htmlentities($result->name);?></a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="lenoTabsContent">
                    
                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card left-pane first">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Game Goal</h4>
                                                <p>Users will earn money easily and redeem the coins to money.</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-compass"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Clean Code</h4>
                                                <p>The game is clean code and without bugs</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Candy Crush CLone</h4>
                                                <p>This amazing game like the popular game Candy Cruch.</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-gem"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="frontend/images/features-phone.png" alt="features phone">
                                </div>
                                <!-- end of image pane -->
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card right-pane first">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Request Redeem</h4>
                                                <p>After you requested your money, you will recieved it within 7 days only.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Daily Gift</h4>
                                                <p>Open the app daily to get gift everyday to earn more points.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Amazing UI Design</h4>
                                                <p>The Game has Amazing UI Design with beautiful colors and Animation Splash Screen.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row --> 
        </div> <!-- end of container --> 
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Video -->
    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PREVIEW</h2>
                    <div class="p-heading p-large">Watch the video</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="<?php echo htmlentities($result->youtubeLink);?>" data-effect="fadeIn">
                                <img class="img-fluid" src="frontend/images/video-frame.jpg" alt="video-frame">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->

    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-1.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-1.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-2.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-2.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-3.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-3.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-4.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-4.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-5.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-5.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="frontend/images/screenshot-6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="frontend/images/screenshot-6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Download <span class="blue"><?php echo htmlentities($result->name);?></span></h2>
                        <p class="p-large">Do you love the app and you want to make money? What are you waiting for, download the app now.</p>
                        <a class="btn-solid-lg" href="<?php echo htmlentities($result->playStore);?>"><i class="fab fa-google-play"></i>PLAY STORE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="frontend/images/header-phone.png" alt="App Screenshots">
                    </div> <!-- end of img-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="1000">1</div>
                            <p class="counter-info">Total Users</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="500">1</div>
                            <p class="counter-info">Total Payout</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="50">1</div>
                            <p class="counter-info">Good Reviews</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="500">1</div>
                            <p class="counter-info">Happy Users</p>
                        </div>
                    </div>
                    <!-- end of counter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Contact -->
    <div id="contact" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CONTACT US</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us an email or just use the contact form below</li>
                        <li><i class="fas fa-map-marker-alt"></i>Internet</li>
                        <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:<?php echo htmlentities($result->email);?>"><?php echo htmlentities($result->email);?></a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                    <!-- Contact Form -->
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" name="cterms" value="Agreed-to-Terms" required>I have read and agree to the app conditions in <a href="privacy-policy.php">Privacy Policy</a> and <a href="terms-conditions.php">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->


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