<?php
#session_start();
ob_start();
require_once "../Model/Model.php";
$toeic = new model();
if (isset($_GET['p']))
    $p = $_GET['p'];
if (!isset($_SESSION['login_id']) && $_SERVER['REQUEST_URI'] != "/ToeicThi/View/Login.html")
    $_SESSION['back'] = "http://localhost" . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Deus | Toeic Testing</title>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:400,600,700%7CRoboto:400,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-icons.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/colors/cyan.css"/>

    <link rel="stylesheet" href="css/Thanh-Style.css"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>
 
    <script src="js/jquery.min.js"></script>
</head>

<body class="bg-dark style-music">

<!-- Preloader -->
<!-- <div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div> -->
<!-- Bg Overlay -->
<div class="content-overlay"></div>
<!-- Sidenav -->
<header class="sidenav" id="sidenav">
    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>
    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">
            <li><a href="View/" class="sidenav__menu-url">Trang chủ</a></li>
            
                
                    <!-- Categories -->
                    <li>
                        <a href="View/lienhe.html" class="sidenav__menu-url">Liên hệ</a>
                    </li>
                    <li>
                        <a href="View/gioithieu.html" class="sidenav__menu-url">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="View/Login.html" class="sidenav__menu-url">Đăng nhập</a>
                    </li>
                    <li>
                        <a href="#" class="sidenav__menu-url">Đăng kí</a>
                    </li>
                </ul>
            </nav>
            <div class="socials sidenav__socials">
                <a class="social social-facebook" href="http://www.facebook.com" target="_blank" aria-label="facebook">
                    <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href="http://www.twitter.com" target="_blank" aria-label="twitter">
                    <i class="ui-twitter"></i>
                </a>
                <a class="social social-google-plus" href="http://www.google.com" target="_blank" aria-label="google">
                    <i class="ui-google"></i>
                </a>
                <a class="social social-youtube" href="http://www.youtube.com" target="_blank" aria-label="youtube">
                    <i class="ui-youtube"></i>
                </a>
                <a class="social social-instagram" href="http://www.instagram.com" target="_blank" aria-label="instagram">
                    <i class="ui-instagram"></i>
                </a>
            </div>
        </header> <!-- end sidenav -->
        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <!-- Socials -->
                    <div class="col-lg-12">
                        <div id="top-sign-in-out">
                            <a class="btn btn-sm btn-light" href="View/Login.html" onfocus="false">
                                <span>Đăng nhập</span>
                            </a>
                            <a  class="btn btn-sm btn-light" href="View/Register.html" onfocus="false">
                                <span>Đăng kí</span>
                            </a>
                        </div>
                        <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                            <a class="social social-facebook" href="https://www.facebook.com/" target="_blank"
                            aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter" href="https://www.twitter.com/" target="_blank"
                        aria-label="twitter">
                        <i class="ui-twitter"></i>
                    </a>
                    <a class="social social-google-plus" href="https://www.google.com/" target="_blank"
                    aria-label="google">
                    <i class="ui-google"></i>
                </a>
                <a class="social social-youtube" href="https://www.youtube.com/" target="_blank"
                aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="https://www.instagram.com/" target="_blank"
            aria-label="instagram">
            <i class="ui-instagram"></i>
        </a>
    </div>

</div>
</div>
</div>
</div>
<!-- end top bar -->
<!-- Navigation -->
<header class="nav">
    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">
                <!-- Side Menu Button -->
                <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                  <span class="nav-icon-toggle__box">
                    <span class="nav-icon-toggle__inner"></span>
                </span>
            </button>
            <!-- Logo -->
            <a href="View/" class="logo">
                <img class="logo__img" src="img/logo_default.png"
                srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
            </a>
            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">
                <ul class="nav__menu">
                    <li class="active">
                        <a href="View/">Trang chủ</a>
                    </li>
                    
                    <li>
                        <a href="View/lienhe.html">Liên hệ</a>
                    </li>
                    <li>
                        <a href="View/gioithieu.html">giới thiệu</a>
                    </li>
                </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->
            <!-- Nav Right -->
            <div class="nav__right">
                <!-- Search -->
                <div class="nav__right-item nav__search">
                    <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                        <i class="ui-search nav__search-trigger-icon"></i>
                    </a>
                    <div class="nav__search-box" id="nav__search-box">
                        <form class="nav__search-form">
                            <input type="text" placeholder="Search an article" class="nav__search-input">
                            <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                <i class="ui-search nav__search-icon"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- end nav right -->
        </div> <!-- end flex-parent -->
    </div> <!-- end container -->
</div>
</header>
<!-- end Navigation -->