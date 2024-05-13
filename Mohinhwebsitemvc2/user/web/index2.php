<?php
// Start the session
session_start();

// Include the required configuration and functions
include ("../config/config.php");
include ("../config/danhmuc.php");
include ("../config/sanpham.php");

// Get all product categories
$dsdm = getall_dm();

// Include the header view
include ("../view/666shop/header2.php");

// Determine which action to perform
$action = isset($_GET["act"]) ? $_GET["act"] : 'home';

// Perform the action based on the query parameter 'act'
switch ($action) {
    case "about":
        include ("../view/666shop/about.php");
        break;
    case "shop":
        // Initialize $id to avoid undefined variable error
        $id = 0;
        if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
            $id = intval($_GET['id']);
        }
        include ("../view/666shop/shop.php");
        break;
    case "contact":
        include ("../view/666shop/contact.php");
        break;
    case "home":
        include ("../view/666shop/index.php");
        break;
    case "shop-single":
        // Initialize $id to avoid undefined variable error
        include ("../view/666shop/shop-single.php");
        break;

    default:
        include ("../view/666shop/index.php");
        break;
}

// Include the footer view
include ("../view/666shop/footer.php");
