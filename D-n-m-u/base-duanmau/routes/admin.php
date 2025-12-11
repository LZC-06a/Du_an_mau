<?php

$action = $_GET['action'] ?? '/';

// Các route không cần đăng nhập
$publicActions = ['login', 'handle-login'];

// Kiểm tra đăng nhập admin
if (empty($_SESSION['admin']) && !in_array($action, $publicActions)) {
    header('Location:' . BASE_URL_ADMIN . '&action=login');
    exit();
}
// Nếu đã đăng nhập mà vào trang login thì chuyển về dashboard
if (!empty($_SESSION['admin']) && $action === 'login') {
    header('Location:' . BASE_URL_ADMIN);
    exit();
}


match ($action) {
    '/'         => (new DashboardController)->index(),
    'login'     => (new AuthController)->showLogin(),
    'handle-login' => (new AuthController)->login(),
    'logout'    => (new AuthController)->logout(),
    
    // CRUD PRODUCT
    'index-product' => (new ProductController)->index(), // Hiển thị danh sách
    'show-product' => (new ProductController)->index(), // Hiển thị chi tiết (tạm chuyển về danh sách)
    'delete-product' => (new ProductController)->delete(), // Xóa
    'create-product' => (new ProductController)->create(), // Hiển thị form tạo mới
    'store-product' => (new ProductController)->store(), // Lưu dữ liệu trên form vào CSDL
    'edit-product' => (new ProductController)->index(), // Hiển thị form (tạm chuyển về danh sách)
    'update-product' => (new ProductController)->index(), // Lưu dữ liệu cập nhật (tạm chuyển về danh sách)
    default => (new DashboardController)->index(), // Mặc định về trang dashboard
};

?>