<div class="col-12 col-md-6 offset-md-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center mb-4">Đăng nhập admin</h4>
            <form action="<?= BASE_URL_ADMIN . '&action=handle-login' ?>" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required value="<?= $_POST['email'] ?? '' ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>

