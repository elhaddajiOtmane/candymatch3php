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
	<meta property="og:site_name" content="Lucky Scratch App" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="Lucky Scratch App"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Free mobile app to earn money from scratching cards." /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Privacy Policy - <?php echo htmlentities($result->name);?></title>
    
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
                <div class="col-md-12">
                    <h1>Privacy Policy</h1>
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
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                       
                       
<div><span data-darkreader-inline-color="">Thank you for choosing to be part of our community at&nbsp;<?php echo htmlentities($result->name);?>&nbsp;("<strong>Company</strong>," "<strong>we</strong>," "<strong>us</strong>," or "<strong>our</strong>"). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice or our practices with regard to your personal information, please contact us at&nbsp;<?php echo htmlentities($result->email);?>.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">This privacy notice describes how we might use your information if you:</span>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">Download and use our mobile application&nbsp;&mdash;&nbsp;<?php echo htmlentities($result->name);?></span></li>
</ul>
<div>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">Engage with us in other related ways ― including any sales, marketing, or events</span></li>
</ul>
<div><span data-darkreader-inline-color="">In this privacy notice, if we refer to:</span>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">"<strong>App</strong>," we are referring to any application of ours that references or links to this policy, including any listed above</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">"<strong>Services</strong>," we are referring to our</span><span data-darkreader-inline-color="">&nbsp;App,</span><span data-darkreader-inline-color="">&nbsp;and other related services, including any sales, marketing, or events</span></li>
</ul>
<div><span data-darkreader-inline-color="">The purpose of this privacy notice is to explain to you in the clearest way possible what information we collect, how we use it, and what rights you have in relation to it. If there are any terms in this privacy notice that you do not agree with, please discontinue use of our Services immediately.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>Please read this privacy notice carefully, as it will help you understand what we do with the information that we collect.</strong></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>TABLE OF CONTENTS</strong></span></div>
<div>&nbsp;</div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#infocollect" data-custom-class="link"><span data-darkreader-inline-color="">1. WHAT INFORMATION DO WE COLLECT?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#infouse" data-custom-class="link"><span data-darkreader-inline-color="">2. HOW DO WE USE YOUR INFORMATION?</span></a></div>
<div><span data-darkreader-inline-color=""><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#infoshare" data-custom-class="link">3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</a></span></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#sociallogins" data-custom-class="link"><span data-darkreader-inline-color="">4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#3pwebsites" data-custom-class="link"><span data-darkreader-inline-color="">5. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#inforetain" data-custom-class="link"><span data-darkreader-inline-color="">6. HOW LONG DO WE KEEP YOUR INFORMATION?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#infosafe" data-custom-class="link"><span data-darkreader-inline-color="">7. HOW DO WE KEEP YOUR INFORMATION SAFE?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#infominors" data-custom-class="link"><span data-darkreader-inline-color="">8. DO WE COLLECT INFORMATION FROM MINORS?</span></a></div>
<div><span data-darkreader-inline-color=""><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#privacyrights" data-custom-class="link">9. WHAT ARE YOUR PRIVACY RIGHTS?</a></span></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#DNT" data-custom-class="link"><span data-darkreader-inline-color="">10. CONTROLS FOR DO-NOT-TRACK FEATURES</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#caresidents" data-custom-class="link"><span data-darkreader-inline-color="">11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#policyupdates" data-custom-class="link"><span data-darkreader-inline-color="">12. DO WE MAKE UPDATES TO THIS NOTICE?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#contact" data-custom-class="link"><span data-darkreader-inline-color="">13. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></a></div>
<div><a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#request" data-custom-class="link"><span data-darkreader-inline-color="">14. HOW CAN YOU REVIEW, UPDATE OR DELETE THE DATA WE COLLECT FROM YOU?</span></a></div>
<div>&nbsp;</div>
<div id="infocollect"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>1. WHAT INFORMATION DO WE COLLECT?</strong></span></span></div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>Personal information you disclose to us</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><strong><em>&nbsp;</em></strong><em>We collect personal information that you provide to us.</em></span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We collect personal information that you voluntarily provide to us when you&nbsp;register on the&nbsp;App,&nbsp;express an interest in obtaining information about us or our products and Services, when you participate in activities on the&nbsp;App&nbsp;or otherwise when you contact us.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">The personal information that we collect depends on the context of your interactions with us and the&nbsp;App, the choices you make and the products and features you use. The personal information we collect may include the following:</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>Personal Information Provided by You.</strong>&nbsp;We collect&nbsp;names;&nbsp;email addresses;&nbsp;usernames;&nbsp;billing addresses;&nbsp;and other similar information.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>Social Media Login Data.&nbsp;</strong>We may provide you with the option to register with us using your existing social media account details, like your Facebook, Twitter or other social media account. If you choose to register in this way, we will collect the information described in the section called "<a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#sociallogins" data-custom-class="link">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a>" below.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</span></div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>Information automatically collected</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><strong><em>&nbsp;</em></strong><em>Some information &mdash; such as your Internet Protocol (IP) address and/or browser and device characteristics &mdash; is collected automatically when you visit our&nbsp;App.</em></span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We automatically collect certain information when you visit, use or navigate the&nbsp;App. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our&nbsp;App&nbsp;and other technical information. This information is primarily needed to maintain the security and operation of our&nbsp;App, and for our internal analytics and reporting purposes.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">The information we collect includes:</span></div>
<ul>
<li><span data-darkreader-inline-color=""><em>Log and Usage Data.</em>&nbsp;Log and usage data is service-related, diagnostic, usage and performance information our servers automatically collect when you access or use our&nbsp;App&nbsp;and which we record in log files. Depending on how you interact with us, this log data may include your IP address, device information, browser type and settings and information about your activity in the&nbsp;App&nbsp;(such as the date/time stamps associated with your usage, pages and files viewed, searches and other actions you take such as which features you use), device event information (such as system activity, error reports (sometimes called 'crash dumps') and hardware settings).</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><em>Device Data.</em>&nbsp;We collect device data such as information about your computer, phone, tablet or other device you use to access the&nbsp;App. Depending on the device used, this device data may include information such as your IP address (or proxy server), device and application identification numbers, location, browser type, hardware model Internet service provider and/or mobile carrier, operating system and system configuration information.</span></li>
</ul>
<div>
<div>&nbsp;</div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>Information collected through our App</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><strong><em>&nbsp;</em></strong><em>We collect information regarding your&nbsp;mobile device,&nbsp;push notifications,&nbsp;when you use our App.</em></span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you use our App, we also collect the following information:</span>
<div>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><em>Mobile Device Data.&nbsp;</em>We automatically collect device information (such as your mobile device ID, model and manufacturer), operating system, version information and system configuration information, device and application identification numbers, browser type and version, hardware model Internet service provider and/or mobile carrier, and Internet Protocol (IP) address (or proxy server). If you are using our App, we may also collect information about the phone network associated with your mobile device, your mobile device&rsquo;s operating system or platform, the type of mobile device you use, your mobile device&rsquo;s unique device ID and information about the features of our App you accessed.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><em>Push Notifications.&nbsp;</em>We may request to send you push notifications regarding your account or certain features of the App. If you wish to opt-out from receiving these types of communications, you may turn them off in your device's settings.</span></li>
</ul>
<div>
<div><span data-darkreader-inline-color="">This information is primarily needed to maintain the security and operation of our App, for troubleshooting and for our internal analytics and reporting purposes.</span></div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>Information collected from other sources</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short: &nbsp;</em></strong><em>We may collect limited data from public databases, marketing partners,&nbsp;social media platforms,&nbsp;and other outside sources.</em></span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">In order to enhance our ability to provide relevant marketing, offers and services to you and update our records, we may obtain information about you from other sources, such as public databases, joint marketing partners, affiliate programs, data providers,&nbsp;social media platforms,&nbsp;as well as from other third parties. This information includes mailing addresses, job titles, email addresses, phone numbers, intent data (or user behavior data), Internet Protocol (IP) addresses, social media profiles, social media URLs and custom profiles, for purposes of targeted advertising and event promotion.&nbsp;If you interact with us on a social media platform using your social media account (e.g. Facebook or Twitter), we receive personal information about you such as your name, email address, and gender. Any personal information that we collect from your social media account depends on your social media account's privacy settings.</span></div>
<div>&nbsp;</div>
<div id="infouse"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>2. HOW DO WE USE YOUR INFORMATION?</strong></span></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short: &nbsp;</em></strong><em>We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent.</em></span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We use personal information collected via our&nbsp;App&nbsp;for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations. We indicate the specific processing grounds we rely on next to each purpose listed below.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We use the information we collect or receive:</span></div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To facilitate account creation and logon process.</strong>&nbsp;If you choose to link your account with us to a third-party account (such as your Google or Facebook account), we use the information you allowed us to collect from those third parties to facilitate account creation and logon process for the performance of the contract.&nbsp;See the section below headed "<a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#sociallogins" data-custom-class="link">HOW DO WE HANDLE YOUR SOCIAL LOGINS?</a>" for further information.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To post testimonials.</strong>&nbsp;We post testimonials on our&nbsp;App&nbsp;that may contain personal information. Prior to posting a testimonial, we will obtain your consent to use your name and the content of the testimonial. If you wish to update, or delete your testimonial, please contact us at&nbsp;<?php echo htmlentities($result->email);?>&nbsp;and be sure to include your name, testimonial location, and contact information.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Request feedback.&nbsp;</strong>We may use your information to request feedback and to contact you about your use of our&nbsp;App.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To enable user-to-user communications.</strong>&nbsp;We may use your information in order to enable user-to-user communications with each user's consent.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To manage user accounts.&nbsp;</strong>We may use your information for the purposes of managing our account and keeping it in working order.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To send administrative information to you.&nbsp;</strong>We may use your personal information to send you product, service and new feature information and/or information about changes to our terms, conditions, and policies.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To protect our Services.&nbsp;</strong>We may use your information as part of our efforts to keep our&nbsp;App&nbsp;safe and secure (for example, for fraud monitoring and prevention).</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To enforce our terms, conditions and policies for business purposes, to comply with legal and regulatory requirements or in connection with our contract.</strong></span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To respond to legal requests and prevent harm.&nbsp;</strong>If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond.</span></li>
</ul>
<p>&nbsp;</p>
<ul>
<li><span data-darkreader-inline-color=""><strong>Fulfill and manage your orders.&nbsp;</strong>We may use your information to fulfill and manage your orders, payments, returns, and exchanges made through the&nbsp;App.</span></li>
</ul>
<p>&nbsp;</p>
<ul>
<li><span data-darkreader-inline-color=""><strong>Administer prize draws and competitions.</strong>&nbsp;We may use your information to administer prize draws and competitions when you elect to participate in our competitions.</span></li>
</ul>
<p>&nbsp;</p>
<ul>
<li><span data-darkreader-inline-color=""><strong>To deliver and facilitate delivery of services to the user.</strong>&nbsp;We may use your information to provide you with the requested service.</span></li>
</ul>
<p>&nbsp;</p>
<ul>
<li><span data-darkreader-inline-color=""><strong>To respond to user inquiries/offer support to users.</strong>&nbsp;We may use your information to respond to your inquiries and solve any potential issues you might have with the use of our Services.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>To send you marketing and promotional communications.</strong>&nbsp;We and/or our third-party marketing partners may use the personal information you send to us for our marketing purposes, if this is in accordance with your marketing preferences. For example, when expressing an interest in obtaining information about us or our&nbsp;App, subscribing to marketing or otherwise contacting us, we will collect personal information from you. You can opt-out of our marketing emails at any time (see the "<a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#privacyrights" data-custom-class="link">WHAT ARE YOUR PRIVACY RIGHTS?</a>" below).</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Deliver targeted advertising to you.</strong>&nbsp;We may use your information to develop and display personalized content and advertising (and work with third parties who do so) tailored to your interests and/or location and to measure its effectiveness.</span></li>
</ul>
<div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div id="infoshare"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:</em></strong><em>&nbsp; We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We may process or share your data that we hold based on the following legal basis:</span></div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Consent:</strong>&nbsp;We may process your data if you have given us specific consent to use your personal information for a specific purpose.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Legitimate Interests:</strong>&nbsp;We may process your data when it is reasonably necessary to achieve our legitimate business interests.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Performance of a Contract:</strong>&nbsp;Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Legal Obligations:</strong>&nbsp;We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Vital Interests:</strong>&nbsp;We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</span></li>
</ul>
<div><span data-darkreader-inline-color="">More specifically, we may need to process your data or share your personal information in the following situations:</span></div>
<ul>
<li><span data-darkreader-inline-color=""><strong>Business Transfers.</strong>&nbsp;We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</span></li>
</ul>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div id="sociallogins"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short: &nbsp;</em></strong><em>If you choose to register or log in to our services using a social media account, we may have access to certain information about you.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Our&nbsp;App&nbsp;offers you the ability to register and login using your third-party social media account details (like your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile information about you from your social media provider. The profile information we receive may vary depending on the social media provider concerned, but will often include your name, email address, friends list, profile picture as well as other information you choose to make public on such social media platform.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We will use the information we receive only for the purposes that are described in this privacy notice or that are otherwise made clear to you on the relevant&nbsp;App. Please note that we do not control, and are not responsible for, other uses of your personal information by your third-party social media provider. We recommend that you review their privacy notice to understand how they collect, use and share your personal information, and how you can set your privacy preferences on their sites and apps.</span></div>
<div><span data-darkreader-inline-color="">&nbsp;</span></div>
<div><span id="3pwebsites" data-darkreader-inline-color=""><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>5. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</strong></span></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><em>&nbsp;We are not responsible for the safety of any information that you share with third-party providers who advertise, but are not affiliated with, our Website.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">The&nbsp;App&nbsp;may contain advertisements from third parties that are not affiliated with us and which may link to other websites, online services or mobile applications. We cannot guarantee the safety and privacy of data you provide to any third parties. Any data collected by third parties is not covered by this privacy notice. We are not responsible for the content or privacy and security practices and policies of any third parties, including other websites, services or applications that may be linked to or from the&nbsp;App. You should review the policies of such third parties and contact them directly to respond to your questions.</span></div>
<div>&nbsp;</div>
<div id="inforetain"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>6. HOW LONG DO WE KEEP YOUR INFORMATION?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><em>&nbsp;We keep your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this notice will require us keeping your personal information for longer than&nbsp;the period of time in which users have an account with us.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</span></div>
<div>&nbsp;</div>
<div id="infosafe"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>7. HOW DO WE KEEP YOUR INFORMATION SAFE?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><em>&nbsp;We aim to protect your personal information through a system of organizational and technical security measures.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our&nbsp;App&nbsp;is at your own risk. You should only access the&nbsp;App&nbsp;within a secure environment.</span></div>
<div>&nbsp;</div>
<div id="infominors"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>8. DO WE COLLECT INFORMATION FROM MINORS?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:</em></strong><em>&nbsp; We do not knowingly collect data from or market to children under 18 years of age.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We do not knowingly solicit data from or market to children under 18 years of age. By using the&nbsp;App, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent&rsquo;s use of the&nbsp;App. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we may have collected from children under age 18, please contact us at&nbsp;<?php echo htmlentities($result->email);?></span></div>
<div>&nbsp;</div>
<div id="privacyrights"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>9. WHAT ARE YOUR PRIVACY RIGHTS?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:</em></strong><em>&nbsp;&nbsp;In some regions, such as the European Economic Area (EEA) and United Kingdom (UK), you have rights that allow you greater access to and control over your personal information.&nbsp;You may review, change, or terminate your account at any time.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">In some regions (like the EEA and UK), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of your personal information; and (iv) if applicable, to data portability. In certain circumstances, you may also have the right to object to the processing of your personal information. To make such a request, please use the&nbsp;<a href="https://ibrahimodeh.com/codecanyon/RewardsBirdGame/privacy_policy.php#contact" data-custom-class="link">contact details</a>&nbsp;provided below. We will consider and act upon any request in accordance with applicable data protection laws.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If we are relying on your consent to process your personal information, you have the right to withdraw your consent at any time. Please note however that this will not affect the lawfulness of the processing before its withdrawal, nor will it affect the processing of your personal information conducted in reliance on lawful processing grounds other than consent.</span></div>
<div><span data-darkreader-inline-color="">&nbsp;</span></div>
<div><span data-darkreader-inline-color="">If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here:&nbsp;<a href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" target="_blank" rel="noopener noreferrer" data-custom-class="link">https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you are a resident in Switzerland, the contact details for the data protection authorities are available here:&nbsp;<a href="https://www.edoeb.admin.ch/edoeb/en/home.html" target="_blank" rel="noopener noreferrer" data-custom-class="link">https://www.edoeb.admin.ch/edoeb/en/home.html</a>.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you have questions or comments about your privacy rights, you may email us at&nbsp;<?php echo htmlentities($result->email);?></span></div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>Account Information</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you would at any time like to review or change the information in your account or terminate your account, you can:</span></div>
<ul>
<li><span data-darkreader-inline-color="">Contact us using the contact information provided.</span></li>
</ul>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><u>Opting out of email marketing:</u></strong>&nbsp;You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list &mdash; however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may:</span></div>
<ul>
<li><span data-custom-class="body_text">Contact us using the contact information provided.</span></li>
</ul>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div id="DNT"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>10. CONTROLS FOR DO-NOT-TRACK FEATURES</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.&nbsp;</span></div>
<div>&nbsp;</div>
<div id="caresidents"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</strong></span></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong><em>In Short:&nbsp;</em></strong><em>&nbsp;Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you are under 18 years of age, reside in California, and have a registered account with&nbsp;the App, you have the right to request removal of unwanted data that you publicly post on the&nbsp;App. To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the&nbsp;App, but please be aware that the data may not be completely or comprehensively removed from all our systems (e.g. backups, etc.).</span></div>
<div><span data-custom-class="heading_2" data-darkreader-inline-color=""><strong><u><br /></u></strong><strong>CCPA Privacy Notice</strong></span></div>
<div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">The California Code of Regulations defines a "resident" as:</span></div>
</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">(1) every individual who is in the State of California for other than a temporary or transitory purpose and</span></div>
<div><span data-darkreader-inline-color="">(2) every individual who is domiciled in the State of California who is outside the State of California for a temporary or transitory purpose</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">All other individuals are defined as "non-residents."</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If this definition of "resident" applies to you, we must adhere to certain rights and obligations regarding your personal information.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>What categories of personal information do we collect?</strong></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We have collected the following categories of personal information in the past twelve (12) months:</span></div>
<div>&nbsp;</div>
<table>
<tbody>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top=""><br /><span data-darkreader-inline-color=""><strong>Category</strong></span><br /><br /></td>
<td data-darkreader-inline-border-top="" data-darkreader-inline-border-right=""><br /><span data-darkreader-inline-color=""><strong>Examples</strong></span><br /><br /></td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top=""><br /><span data-darkreader-inline-color=""><strong>Collected</strong></span><br /><br /></td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">A. Identifiers</span></div>
</td>
<td data-darkreader-inline-border-top="" data-darkreader-inline-border-right="">
<div><span data-darkreader-inline-color="">Contact details, such as real name, alias, postal address, telephone or mobile contact number, unique personal identifier, online identifier, Internet Protocol address, email address and account name</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">YES</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">B. Personal information categories listed in the California Customer Records statute</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Name, contact information, education, employment, employment history and financial information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">YES</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">C. Protected classification characteristics under California or federal law</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Gender and date of birth</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">YES</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">D. Commercial information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Transaction information, purchase history, financial details and payment information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">E. Biometric information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Fingerprints and voiceprints</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">F. Internet or other similar network activity</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Browsing history, search history, online behavior, interest data, and interactions with our and other websites, applications, systems and advertisements</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">YES</span></div>
<div><span data-darkreader-inline-color="">&nbsp;</span></div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">G. Geolocation data</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Device location</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">H. Audio, electronic, visual, thermal, olfactory, or similar information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Images and audio, video or call recordings created in connection with our business activities</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">I. Professional or employment-related information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Business contact details in order to provide you our services at a business level, job title as well as work history and professional qualifications if you apply for a job with us</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-left="" data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">J. Education Information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div><span data-darkreader-inline-color="">Student records and directory information</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">NO</span></div>
<div>&nbsp;</div>
</td>
</tr>
<tr>
<td data-darkreader-inline-border-top="" data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-left="">
<div><span data-darkreader-inline-color="">K. Inferences drawn from other personal information</span></div>
</td>
<td data-darkreader-inline-border-bottom="" data-darkreader-inline-border-top="" data-darkreader-inline-border-right="">
<div><span data-darkreader-inline-color="">Inferences drawn from any of the collected personal information listed above to create a profile or summary about, for example, an individual&rsquo;s preferences and characteristics</span></div>
</td>
<td data-darkreader-inline-border-right="" data-darkreader-inline-border-bottom="" data-darkreader-inline-border-top="">
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">YES</span></div>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We may also collect other personal information outside of these categories instances where you interact with us in-person, online, or by phone or mail in the context of:</span></div>
<ul>
<li><span data-darkreader-inline-color="">Receiving help through our customer support channels;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">Participation in customer surveys or contests; and</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">Facilitation in the delivery of our Services and to respond to your inquiries.</span></li>
</ul>
<div><span data-darkreader-inline-color=""><strong>How do we use and share your personal information?</strong></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">More information about our data collection and sharing practices can be found in this privacy notice</span>.</div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">You may contact us&nbsp;by email at&nbsp;<?php echo htmlentities($result->email);?>&nbsp;</span><span data-custom-class="body_text">or by referring to the contact details at the bottom of this document.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you are using an authorized agent to exercise your right to opt-out we may deny a request if the authorized agent does not submit proof that they have been validly authorized to act on your behalf.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>Will your information be shared with anyone else?</strong></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We may disclose your personal information with our service providers pursuant to a written contract between us and each service provider. Each service provider is a for-profit entity that processes the information on our behalf.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We may use your personal information for our own business purposes, such as for undertaking internal research for technological development and demonstration. This is not considered to be "selling" of your personal data.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><?php echo htmlentities($result->name);?>e&nbsp;has not disclosed or sold any personal information to third parties for a business or commercial purpose in the preceding 12 months.&nbsp;<?php echo htmlentities($result->name);?>&nbsp;will not sell personal information in the future belonging to website visitors, users and other consumers.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><strong>Your rights with respect to your personal data</strong></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><u>Right to request deletion of the data - Request to delete</u></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">You can ask for the deletion of your personal information. If you ask us to delete your personal information, we will respect your request and delete your personal information, subject to certain exceptions provided by law, such as (but not limited to) the exercise by another consumer of his or her right to free speech, our compliance requirements resulting from a legal obligation or any processing that may be required to protect against illegal activities.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><u>Right to be informed - Request to know</u></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Depending on the circumstances, you have a right to know:</span></div>
<ul>
<li><span data-darkreader-inline-color="">whether we collect and use your personal information;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">the categories of personal information that we collect;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">the purposes for which the collected personal information is used;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">whether we sell your personal information to third parties;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">the categories of personal information that we sold or disclosed for a business purpose;</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">the categories of third parties to whom the personal information was sold or disclosed for a business purpose; and</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">the business or commercial purpose for collecting or selling personal information.</span></li>
</ul>
<div><span data-darkreader-inline-color="">In accordance with applicable law, we are not obligated to provide or delete consumer information that is de-identified in response to a consumer request or to re-identify individual data to verify a consumer request.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><u>Right to Non-Discrimination for the Exercise of a Consumer&rsquo;s Privacy Rights</u></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We will not discriminate against you if you exercise your privacy rights.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><u>Verification process</u></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Upon receiving your request, we will need to verify your identity to determine you are the same person about whom we have the information in our system. These verification efforts require us to ask you to provide information so that we can match it with information you have previously provided us. For instance, depending on the type of request you submit, we may ask you to provide certain information so that we can match the information you provide with the information we already have on file, or we may contact you through a communication method (e.g. phone or email) that you have previously provided to us. We may also use other verification methods as the circumstances dictate.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We will only use personal information provided in your request to verify your identity or authority to make the request. To the extent possible, we will avoid requesting additional information from you for the purposes of verification. If, however, we cannot verify your identity from the information already maintained by us, we may request that you provide additional information for the purposes of verifying your identity, and for security or fraud-prevention purposes. We will delete such additionally provided information as soon as we finish verifying you.</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color=""><u>Other privacy rights</u></span></div>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">you may object to the processing of your personal data</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">you may request correction of your personal data if it is incorrect or no longer relevant, or ask to restrict the processing of the data</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">you can designate an authorized agent to make a request under the CCPA on your behalf. We may deny a request from an authorized agent that does not submit proof that they have been validly authorized to act on your behalf in accordance with the CCPA.</span></li>
</ul>
<div>&nbsp;</div>
<ul>
<li><span data-darkreader-inline-color="">you may request to opt-out from future selling of your personal information to third parties. Upon receiving a request to opt-out, we will act upon the request as soon as feasibly possible, but no later than 15 days from the date of the request submission.</span></li>
</ul>
<div><span data-darkreader-inline-color="">To exercise these rights, you can contact us&nbsp;by email at&nbsp;<?php echo htmlentities($result->email);?>,&nbsp;</span><span data-custom-class="body_text">or by referring to the contact details at the bottom of this document. If you have a complaint about how we handle your data, we would like to hear from you.</span><span data-darkreader-inline-color="">&nbsp;&nbsp;</span></div>
<div>&nbsp;</div>
<div id="policyupdates"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>12. DO WE MAKE UPDATES TO THIS NOTICE?</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<div><em>&nbsp;</em></div>
<div><span data-darkreader-inline-color=""><em><strong>In Short:&nbsp;</strong>&nbsp;Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">We may update this privacy notice from time to time. The updated version will be indicated by an updated "Revised" date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.</span></div>
<div>&nbsp;</div>
<div id="contact"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>13. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">If you have questions or comments about this notice, you may&nbsp;email us at&nbsp;<?php echo htmlentities($result->email);?>&nbsp;or by post to:</span></div>
<div>&nbsp;</div>
<div>Lucky Scratch App</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div id="request"><span data-darkreader-inline-color=""><span id="control" data-darkreader-inline-color=""><strong>14. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</strong>&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
<div>&nbsp;</div>
<div><span data-darkreader-inline-color="">Based on the applicable laws of your country, you may have the right to request access to the personal information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information, please&nbsp;submit a request form by clicking&nbsp;<a href="https://app.termly.io/notify/17536d0f-d1a6-40a8-9d34-58f2fd4d8222" target="_blank" rel="noopener noreferrer" data-custom-class="link">here</a></span><span data-custom-class="body_text">.</span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

                        
                    <a class="btn-outline-reg back" href="index.php">BACK</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><i class="fa fa-angle-double-right"></i><span>Privacy Policy</span>
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