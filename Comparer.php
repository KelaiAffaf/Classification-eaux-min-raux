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
                    <figure class="logo-box"><a href="index.html"><img src="images/logoU.png" alt=""></a></figure>
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
                                    <li class="dropdown"><a href="liste.html">la liste des marques</a> </li>
                                    <li class="dropdown"><a href="Comparer.html">Comparaison</a></li>
                                    <li class="dropdown"><a href="signin.html">sign in </a></li>                               
                                    <li><a href="login.html">log in </a></li>
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
                <figure class="logo-box"><a href="index.html"><img src="images/logoU.png" alt=""></a></figure>
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
            <div class="nav-logo"><a href="index.html"><img src="images/footer-logo.png" alt="" title=""></a></div>
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


    
    


   

<!-- contact-section -->
<section class="contact-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                <div class="info-box">
                    <br/>
                    <br/>
                    <br/>
                    <h2 class="title-text">Comparer entre de marque d'eau  </h2>
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="inner-box">
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="form-inner">
                        <form method="post" action="./Comparaison.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Marque 1</label>
                                    <input type="text" name="text1" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Marque 2 </label>
                                    <input type="text" name="text2" required>
                                </div>
                                
                                
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" name="submit-form">Comparer </button>
                                </div>
                            </div>
                        </form>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


    


    

    


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="border-shap">
                <div class="border-3" style="background-image: url(images/icons/border-4.png);"></div>
            </div>
            <div class="auto-container">
                
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
                                <figure class="footer-logo"><a href="index.html"><img src="images/logoU.png" alt=""></a></figure>
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
