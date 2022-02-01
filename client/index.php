<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
    <meta name="author" content="coodiv.net (nedjai mohamed)">
    <link rel="icon" href="favicon.ico">
    <title>Status - Xnorm Cloud</title>
    <link rel="icon" href="img/header/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet">

</head>

<body>
    <!-- start body -->

    <!-- start modal video -->
    <div class="modal fade" id="videomodal" tabindex="-1" role="dialog" aria-labelledby="videomodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="video"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal video -->

    <div class="preloader">
        <!-- start preloader -->
        <div class="preloader-container">
            <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="#675cda" stroke="none" cx="6" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15" repeatCount="indefinite" begin="0.1" />
                </circle>
                <circle fill="#675cda" stroke="none" cx="30" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10" repeatCount="indefinite" begin="0.2" />
                </circle>
                <circle fill="#675cda" stroke="none" cx="54" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5" repeatCount="indefinite" begin="0.3" />
                </circle>
            </svg>
            <span>loading</span>
        </div>
    </div>
    <!-- end preloader -->

    <div id="coodiv-header" class="d-flex mx-auto flex-column subpages-header  moon-edition">
        <div class="bg_overlay_header">
		<div id="particles-bg"></div>
        <div class="bg-img-header-new-moon">&nbsp;</div>
		<span class="header-shapes shape-02"></span>
		<span class="header-shapes shape-03"></span>
        </div>
        <!-- Fixed navbar -->
        <nav id="coodiv-navbar-header" class="navbar navbar-expand-md fixed-header-layout">
            <div class="container main-header-coodiv-s">
                <a class="navbar-brand" href="index.html">
				<img class="w-logo" src="img/header/logo-w.png" alt="" />
				<img class="b-logo" src="img/header/logo.png" alt="" />
				</a>
            </div>
        </nav>
        <div class="mt-auto header-top-height"></div>
        <main class="container mb-auto">
            <h3 class="mt-3 main-header-text-title"><span>Check in real time our servers status</span>services Status
	  <p class="sub-page-breadcrumb">Return to <a href="https://xnorm.cloud">homepage</a></p>
	  </h3>

        </main>
        <div class="mt-auto"></div>
    </div>

	
	<section class="padding-50-0">
	<div class="container">
	
    <div class="time-line-status">
    <div class="tt-time-status">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <span class="title-status">Identified</span>
            </div>
            <div class="col-md-10">
                <h5 class="title-status-h5">Servers Status<span id="current-time"><?php getServerDate(); ?></span></h5>
                <p class="title-status-p">Information y refreshed every 10 seconds. Please reload</p>
            </div>
            <div class="status-div-optionel chck">
                <p><b>Internal Systems</b> Our main website, internal systems and cloud master platform. <span>Operational <i class="fa fa-circle-o-notch" aria-hidden="true"></i></span></p>
            </div>
            <div class="status-div-optionel non">
                <p><b>Internal Systems</b> Our main website, internal systems and cloud master platform. <span>Offline <i class="fa fa-circle-o-notch" aria-hidden="true"></i></span></p>
            </div>
            <div class="status-div-optionel non-chck">
                <p><b>Internal Systems</b> Our main website, internal systems and cloud master platform. <span>Offline <i class="fa fa-circle-thin" aria-hidden="true"></i></span></p>
            </div>
        </div>
    </div>
    </div>



	</div>
	</section>
	

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 quiq-links-footer">
                    <h5 class="quiq-links-footer-title">Quick Links</h5>
                    <div class="row">
                        <ul class="col-md-6 quiq-links-footer-ul">
                            <li><a href="#">Latest news</a></li>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Latest news</a></li>
                            <li><a href="#">Knowledgebase</a></li>
                            <li><a href="#">Latest news</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <h5 class="quiq-links-footer-title">contact</h5>
                    <div class="footer-contact-method">
                        <a href="#">
                            <span>email us :</span>
                            <b>contact@xnorm.cloud</b>
                            <i class="fas fa-at"></i>
                        </a>
                    </div>
                    <div class="footer-contact-method">
                        <a href="#">
                            <span>Support</span>
                            <b>Open a Support ticket</b>
                            <i class="fas fa-ticket-alt"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mr-tp-40 row justify-content-between footer-area-under">
                <div class="col-md-4">
                    <a href="" class="toTopNav"><img class="footer-logo-blue" src="img/header/logo-w-f.png" alt="" /></a>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitch"></i></a>
                    </div>
                </div>


            </div>

            <div class="row justify-content-between final-footer-area mr-tp-40">
                <div class="final-footer-area-text">
                    © Copyright 2022 xnorm.cloud
                </div>

                <div class="footer-lang-changer">
                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" role="button" id="dropupmenulagchanger" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fas fa-globe-asia"></i> english</a>
                        <div class="dropdown-menu dropupmenulagchanger" aria-labelledby="dropupmenulagchanger">
                            <a class="dropdown-item" href="#">english</a>
                        </div>
                    </div>

                    <div class="lang-changer-drop-up">
                        <a class="menu-btn-changer" href="#"><img src="img/flags/eu.png" alt="" /> Europe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- template JavaScript -->
    <script src="js/template-scripts.js"></script>
    <!-- flickity JavaScript -->
    <script src="js/flickity.pkgd.min.js"></script>
    <!-- carousel JavaScript -->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- parallax JavaScript -->
    <script src="js/parallax.min.js"></script>
    <!-- mailchamp JavaScript -->
    <script src="js/mailchamp.js"></script>
    <!-- bootstrap offcanvas -->
    <script src="js/bootstrap.offcanvas.min.js"></script>
    <!-- touchSwipe JavaScript -->
    <script src="js/jquery.touchSwipe.min.js"></script>
</body>

</html>
<?php
function getServerDate() {
    date_default_timezone_set('Europe/Madrid');
    $date = date('d/m/Y h:i');
    echo $date;
}
 // call the function
?>