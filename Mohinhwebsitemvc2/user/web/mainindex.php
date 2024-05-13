<?php
// Start the session
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['user'])) {
    header("Location: index2.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>