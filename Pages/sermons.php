<?php 
require_once("back/connection.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sermons</title>
	<link rel="stylesheet" type="text/css" href="sermon.css">
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	        <!-- Animate.css -->
    <link rel="stylesheet" href="glow/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="glow/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="glow/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="glow/css/magnific-popup.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="glow/css/superfish.css">

    <link rel="stylesheet" href="glow/css/style.css">


    <!-- Modernizr JS -->
    <script src="glow/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div class="row">
	<div id="wrap">
		<div id="text">
			<!-- <i class="fa fa-home"></i><span>/Sermons/</span> -->

			<!----------------header---------------->

            <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="glow/index.php">ST.Paul's</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="">
                                    <a href="glow/index.php">Home</a>
                                </li>
                                <li>
                                    <a href="ministries.php" class="fh5co-sub-ddown">Ministries</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="ministries.php" target="_blank">Men</a></li>
                                        <li><a href="ministries.php" target="_blank">Women</a></li>
                                        <li><a href="ministries.php" target="_blank">Youth</a></li>
                                        <li><a href="ministry/ministry.html" target="_blank">Children</a></li>
                                        <li><a href="ministry/ministry.html" target="_blank">Golden Age</a></li>
                                        <li><a href="ministry/ministry.html" target="_blank">Choir</a></li>
                                    </ul>
                                </li>
                                <li  class="active">
                                    <a href="sermons.php" class="fh5co-sub-ddown">Sermons</a>
<!--
                                     <ul class="fh5co-sub-menu">
                                        <li><a href="left-sidebar.html">Web Development</a></li>
                                        <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Free HTML5</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">UI Animation</a></li>
                                        <li><a href="#">Copywriting</a></li>
                                        <li><a href="#">Photography</a></li> 
                                    </ul>
-->
                                </li>
                                <li><a href="About_Us/aboutus.php">About</a></li>
                                <li><a href="blog/blogpage.php">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
			<div class="header_img">
        
			<!-- <div class="nav__container">
			<div class="navbars">
               <ul>
			   <a href="Home/home.php"><li>Home</li></a>
                    <a href="sermons.php"><li>Sermons</li></a>
                     <a href="blog/blogpage.php"><li>Blog</li></a>
                     <a href="ministries.php"><li>Ministries</li></a>
                     <a href="About_Us/aboutus.html"><li>About US</li></a>
               </ul>
		   </div>
		   </div> -->
				<?php 
$sql = "SELECT * FROM `sermon` ORDER BY `Date_Created` DESC LIMIT 1";
$result = $db->query($sql);
$Title ="";
while ($row = $result ->fetch_Array()) {
 	$Title = $row['Title'];
 	$Verse = $row['Bible_Verse'];
 	$Reading = $row['Reading'];
 	$Datecreated = $row['Date_Created'];
 	$Status = $row['Status'];

  ?>
				 <h1><?=$Title?></h1>

			</div>
 	 	</div>
	</div>
	<div class="col-12">
			<!-- <div class="header_img">
				<i class="fa fa-home"></i><span>/Sermons/</span>
				
				<h1>Prayer Increases our Faith</h1>
				<h3>(Hebrews 11:1-10) (Genesis 5:10-20)</h3>
			</div> -->

			<h3 class="verses"><?=$Verse?></h3>
	<div class="col-1"></div>
<?php } ?>
	</div>
	<div class="col-1"></div>
</div>
<div class="row sermon">
	<div class="col-4">
		<div class="sermpic">
			<img src="images/flip_bible.jpg">
		</div>
	</div>
	<div class="col-7">
		<!-- <p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p> -->

		<audio controls>
			<source src="StPaulsSermonloveyourEnemi.mp3" type="audio/mp3">
		</audio>
	</div>
	<div class="col-1"></div>
</div>
<div class="prev">
	<i class="fa fa-arrow-left"></i>
	<span>Previous sermons</span>
</div>
<?php 
$sql = "SELECT * FROM `sermon` ORDER BY `Date_Created` ASC LIMIT 2";
$result = $db->query($sql);
while ($row = $result ->fetch_Array()) {
 	$Title = $row['Title'];
 	$Verse = $row['Bible_Verse'];
 	$Reading = $row['Reading'];
 	$Datecreated = $row['Date_Created'];
 	$Status = $row['Status'];

  ?>

 <div class="row">
	<div class="col-1"></div>
	<div class="col-2"><img src="images/open_bible.jpg" width="100%" height="150px"></div>
	<div class="col-3">
		<h2><?=$Title?></h2>
		<!-- <p><?=$Reading ?> </p>  -->
		<audio controls>
			<source src="StPaulsSermonloveyourEnemi.mp3" type="audio/mp3">
		</audio>
	</div>
	<div class="col-2"></div>
	<div class="col-3">
		<h3>Share sermon</h3>
		<i class="fab fa-twitter"></i>
		<i class="fab fa-facebook"></i>
		<i class="fab fa-instagram"></i>
		<i class="fab fa-whatsapp"></i>
	</div> 
	<!-- <div class="col-1"></div> -->
</div>

<?php } ?>
<!-- <div class="row">
	<div class="col-1"></div>
	<div class="col-2"><img src="images/pencil_bible.jpg" width="100%" height="150px"></div>
	<div class="col-3">
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. </p>
	</div>
</div> -->
<script src="glow/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="glow/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="glow/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="glow/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="glow/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="glow/js/hoverIntent.js"></script>
	<script src="glow/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="glow/js/jquery.magnific-popup.min.js"></script>
	<script src="glow/js/magnific-popup-options.js"></script>

	<!-- Main JS -->
	<script src="glow/js/main.js"></script>
</body>
</html>