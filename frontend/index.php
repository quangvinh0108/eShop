<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Cửa hàng điện thoại</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Shop Điện Thoại</h1>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="products.php">Sản phẩm</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Chào mừng đến với cửa hàng điện thoại</h2>
        <p>Mua sắm các sản phẩm điện thoại mới nhất với giá tốt nhất!</p>
        <section class="product-list">
            <!-- Danh sách sản phẩm sẽ được tải từ CSDL -->
            <?php include 'fetch_products.php'; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Shop Điện Thoại. All rights reserved.</p>
    </footer>
</body>
</html>
