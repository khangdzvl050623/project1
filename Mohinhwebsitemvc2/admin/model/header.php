<?php
// Kiểm tra session trước khi bắt đầu
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Bắt đầu session nếu chưa được kích hoạt
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website</title>
    <link rel="stylesheet" href="../model/style.css">
</head>
<body>
<header>
<?php
    if (isset($_SESSION['user'])) { // Kiểm tra session 'user' và hiển thị
        echo '<h2>Hello, ' . htmlspecialchars($_SESSION['user']) . '</h2>';
    } else {
        echo '<h2>Welcome</h2>'; // Nếu không có user trong session
    }
    ?>
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?act=danhmuc">Categories</a>
        <a href="index.php?act=sanpham">Products</a>
        <a href="index.php?act=taikhoan">Accounts</a>
        <a href="index.php?act=donhang">Orders</a>
        <a href="index.php?act=thoat">Logout</a>
    </nav>
</header>
</body>
</html>
