<?php
// Kiểm tra session trước khi bắt đầu
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Bắt đầu session nếu chưa được kích hoạt
    ob_start(); // Bắt đầu bộ đệm đầu ra
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SLX Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../view/666shop/assets/img/category_img_02.png">
    <link rel="shortcut icon" type="image/x-icon" href="../view/666shop/assets/img/category_img_02.png">

    <link rel="stylesheet" href="../view/666shop/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/666shop/assets/css/templatemo.css">
    <link rel="stylesheet" href="../view/666shop/assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../view/666shop/assets/css/fontawesome.min.css">

    <link rel="stylesheet" type="text/css" href="../view/666shop/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="../view/666shop/assets/css/slick-theme.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
</head>
<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php?act=home">
              SLX
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>

                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>

                    <!-- User Profile Dropdown -->
                    <div class="dropdown">
                        <a class="nav-icon position-relative text-decoration-none dropdown-toggle" href="#" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <?php if(isset($_SESSION['user'])) : ?>
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="index.php?act=logout">Logout</a></li>
                        <?php else : ?>
                            <li><a class="dropdown-item" href="../../admin/wiew/login.php">Login</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End User Profile Dropdown -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header --> 
