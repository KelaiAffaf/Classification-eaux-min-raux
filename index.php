<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Uaques - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="css/font-awesome-all.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/imagebg.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header">
        <div class="outer-container">
            <div class="header-upper clearfix">
                <div class="upper-left pull-left clearfix">
                    <figure class="logo-box"><a href="index-2.html"><img src="images/logoU.png" alt=""></a></figure>
                    <div class="info-box">
                        <div class="box">
                            <div class="icon-box"><i class="flaticon-telephone"></i></div>
                            <div class="text">Contact us </div>
                            <h3><a href="tel:8120703692">021 23 45 67 </a></h3>
                        </div>
                    </div>
                </div>
                <div class="upper-right pull-right clearfix">
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a></li>                                       
                                    <li class="dropdown"><a href="liste.php">la liste des marques</a> </li>
                                    <li class="dropdown"><a href="Comparer.html">Comparaison</a></li>
                                    <li class="dropdown"><a href="signin.php">sign in </a></li>                               
                                    <li><a href="login.php">log in </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="images/logoU.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="images/footer-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- main-slider -->
    <section class="main-slider">
        <div class="pattern-layer" style="background-image: url(images/icons/pattern-1.png);"></div>
        <div class="main-slider-carousel owl-carousel owl-theme">
            <div class="slide">
                <div class="large-container">
                    <div id="starshine">
                        <div class="shine shine-two shine-1">1</div>
                        <div class="shine shine-two shine-2">2</div>
                        <div class="shine shine-two shine-3">3</div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="top-text">Mini-Projet Web </div>
                                <h1>Classification des eaux embouteillées</h1>
                                <div class="text">Realiser Par RYM </div>
                                <div class="btn-box">
                                    <a href="#" class="theme-btn style-one">Login</a>
                                    <a href="#" class="theme-btn style-two">Signin </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <div class="bg-layer" style="background-image: url(images/icons/ice-1.png);"></div>
                                <figure class="image"><img src="images/resource/bottle-1.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            </div>
            
        </div>
    </section>
    <!-- main-slider end -->

    


    <!-- video-section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="upper-content">
            
                <div class="top-title clearfix">
                    <div class="title-inner">
                        <div class="sec-title"><h1>Généralités et Les Composants de l'eau</h1></div>
                    </div>
                    <div class="text-inner">
                        <div class="text">L'eau minérale naturelle
                            D'origine souterraine protégée de toute pollution humaine, sa composition physicochimique constante dans le temps. L'eau minérale possède des propriétés favorables à la
                            santé. Dans son parcours naturel, elle est chargée de sels minéraux et de microorganismes présents dans la nature.</div>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <figure class="image-box wow flipInY" data-wow-delay="00ms" data-wow-duration="1500ms"><a href="images/resource/video-1.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/video-1.jpg" alt=""></a></figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <figure class="image-box wow flipInY" data-wow-delay="300ms" data-wow-duration="1500ms"><a href="images/resource/video-2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/video-2.jpg" alt=""></a></figure>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 image-column">
                        <figure class="image-box wow flipInY" data-wow-delay="600ms" data-wow-duration="1500ms"><a href="images/resource/video-3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/video-3.jpg" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- composition-section -->
    <section class="composition-section bg-color-1">
        <div class="border-shap">
            <div class="border-1" style="background-image: url(images/icons/border-1.png);"></div>
            <div class="border-2" style="background-image: url(images/icons/border-2.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Composant basic <br />de l'eau </h1>
            </div>
            <div class="upper-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 left-column">
                        <div class="inner-box">
                            <div class="single-item wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <figure class="icon-box">
                                    <span>K+</span>
                                    <img src="images/icons/water-drop-1.png" alt="">
                                </figure>
                                <h3><a href="#">Potassium</a></h3>
                                <h5>2.5 mg/L</h5>
                                <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                            </div>
                            <div class="single-item wow slideInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <figure class="icon-box">
                                    <span>Fl</span>
                                    <img src="images/icons/water-drop-1.png" alt="">
                                </figure>
                                <h3><a href="#">Fluoride</a></h3>
                                <h5>0.5 mg/L</h5>
                                <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="pattern-bg" style="background-image: url(images/icons/pattern-2.png);"></div>
                            <figure class="image wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="images/resource/water-glass-1.png" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="single-item wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <figure class="icon-box">
                                    <span>Cl</span>
                                    <img src="images/icons/water-drop-1.png" alt="">
                                </figure>
                                <h3><a href="#">Chloride</a></h3>
                                <h5>350a mg/L</h5>
                                <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                            </div>
                            <div class="single-item wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <figure class="icon-box">
                                    <span>Mg</span>
                                    <img src="images/icons/water-drop-1.png" alt="">
                                </figure>
                                <h3><a href="#">Magnesium</a></h3>
                                <h5>14.5 mg/L</h5>
                                <div class="text">Exercitation lamco laboris aliquip duis aute irure dolor rep...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-content clearfix">
                <div class="single-item wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h3>Nitrates</h3>
                    <h5>2 mg/L</h5>
                </div>
                <div class="single-item wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <h3>Bicarbonates</h3>
                    <h5>157 mg/L</h5>
                </div>
                <div class="single-item wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <h3>Sulphates</h3>
                    <h5>5.6 mg/L</h5>
                </div>
                <div class="single-item wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <h3>Sodium</h3>
                    <h5>0.4 mg/L</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- composition-section end -->


    


    

    


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="border-shap">
                <div class="border-3" style="background-image: url(images/icons/border-4.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="subscribe-form pull-left">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email address to subscribe" required="">
                                <button type="submit" class="theme-btn style-two">subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-social pull-right">
                        <ul class="social-links clearfix"> 
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-upper">
            <div class="auto-container">
                <div class="widget-section wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="images/logoU.png" alt=""></a></figure>
                                <div class="text">ce mini projet est dans le cadre du module programmation web L3 realisee par RYM </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h3 class="widget-title">About Us</h3>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="shediul-widget footer-widget">
                                <h3 class="widget-title">Heur de Travail </h3>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li>Dimanche-Jeudi : 9am - 5pm</li>
                                        <li>Samedi : 10am-4pm</li>
                                        <li>Vendredi : Fermee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Contactez nous </h3>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li>Beb Zouar Alger</li>
                                        <li>Call Us <a href="tel:12078761059">0 21 34 56 67 </a></li>
                                        <li>E-mail: <a href="mailto:info@example.com">bebz@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright">Copyrights &copy; 2019 <a href="#">RYM RYM </a>. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>


<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/scrollbar.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Uaques/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jan 2020 23:28:50 GMT -->
</html>
