<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Home' ?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-xxl bg-light justify-content-center">
        <ul class="navbar-nav flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL ?>"><b>Home</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase"><b>Quản lý danh mục</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase"><b>Quản lý sản phẩm</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase"><b>Quản lý người dùng</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase"><b>Quản lý bình luận</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase"><b>Thống kê</b></a>
            </li>
            <?php if (!empty($_SESSION['admin'])): ?>
                <li class="nav-item">
                    <span class="nav-link text-uppercase"><?= htmlspecialchars($_SESSION['admin']['email']) ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-danger" href="<?= BASE_URL_ADMIN . '&action=logout' ?>"><b>Đăng xuất</b></a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="<?= BASE_URL_ADMIN . '&action=login' ?>"><b>Đăng nhập</b></a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="container">
        <h1 class="mt-3 mb-3"><?= $title ?? 'Home' ?></h1>
        <?php if (!empty($_SESSION['success'])): ?>
            <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>
        <?php if (!empty($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <div class="row">
            <?php
            if (isset($view)) {
                require_once PATH_VIEW_ADMIN . $view . '.php';
            }
            ?>
        </div>
    </div>

</body>

</html>