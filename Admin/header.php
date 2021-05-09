<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_style.css">
    <script src="../resources/ckeditor/ckeditor.js"></script>
    <title>Quản lý khách sạn</title>
</head>
<body>
    <?php
        session_start();
        include '../connect_db.php';
        if (!empty($_SESSION['current_user'])){
            ?>
            <div id="admin-heading-panel">
                <div class="container">
                    <div class="left-panel">
                        Xin chào <span>Admin</span>
                    </div>
                    <div class="right-panel">
                        <img src="../images/home.png" height="24" alt="">
                        <a href="../index.php">Trang chủ</a>
                        <img src="../images/logout.png" height="24" alt="">
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>

            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Admin menu</div>
                        <div class="menu-items">
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="product_listing.php">Room list</a></li>
                                <li><a href="service_listing.php">Service</a></li>
                                <li><a href="#">Order</a></li>
                            </ul>
                        </div>
                    </div>
        <?php } ?>