<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Cửa hàng điện thoại</title>
    <link rel="stylesheet" href="frontend/style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="assets/logo.png" alt="Shop Điện Thoại"></a>
        </div>
        <nav>
            <ul>
                <li><a href="../frontend/index.php">Trang chủ</a></li>
                <li class="dropdown">
                    <a href="products.php">Danh mục</a>
                    <ul class="dropdown-menu">
                        <li><a href="products.php?brand=samsung">Samsung</a></li>
                        <li><a href="products.php?brand=iphone">iPhone</a></li>
                        <li><a href="products.php?brand=xiaomi">Xiaomi</a></li>
                    </ul>
                </li>
                <li>
                    <form action="search.php" method="GET" class="search-form">
                        <input type="text" name="q" placeholder="Tìm kiếm...">
                        <button type="submit">🔍</button>
                    </form>
                </li>
                <li><a href="cart.php">🛒 Giỏ hàng</a></li>

                <?php if (isset($_SESSION["user_id"])): ?>
                    <!-- Nếu đã đăng nhập -->
                    <li class="user-menu">
                        <a href="#">👤 <?php echo $_SESSION["username"]; ?></a>
                        <ul class="user-dropdown">
                            <li><a href="orders.php">Quản lý đơn hàng</a></li>
                            <li><a href="users.php">Quản lý người dùng</a></li>
                            <li><a href="change_password.php">Đổi mật khẩu</a></li>
                            <li><a href="logout.php">Đăng xuất</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <!-- Nếu chưa đăng nhập -->
                    <li><a href="frontend/login/login.html">Đăng nhập</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Chào mừng đến với cửa hàng điện thoại</h2>
        <p>Mua sắm các sản phẩm điện thoại mới nhất với giá tốt nhất!</p>
        <section class="product-list">
            <?php include 'fetch_products.php'; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Shop Điện Thoại. All rights reserved.</p>
    </footer>
</body>
</html>
