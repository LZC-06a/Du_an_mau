<?php

class AuthController
{
    public function showLogin()
    {
        if (!empty($_SESSION['admin'])) {
            header('Location:' . BASE_URL_ADMIN);
            exit();
        }
        $view = 'auth/login';
        $title = 'Đăng nhập admin';
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function login()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ($email === ADMIN_EMAIL && $password === ADMIN_PASSWORD) {
            $_SESSION['admin'] = [
                'email' => $email,
            ];
            $_SESSION['success'] = 'Đăng nhập thành công';
            header('Location:' . BASE_URL_ADMIN);
            exit();
        }
        $_SESSION['error'] = 'Email hoặc mật khẩu không đúng';
        header('Location:' . BASE_URL_ADMIN . '&action=login');
        exit();
    }
    public function logout()
    {
        unset($_SESSION['admin']);
        $_SESSION['success'] = 'Đã đăng xuất';
        header('Location:' . BASE_URL_ADMIN . '&action=login');
        exit();
    }
}

