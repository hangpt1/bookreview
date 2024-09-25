<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng ký </title>
    <link rel="stylesheet" href="./asset/main.csss">
    <link rel="stylesheet" href="./asset/base.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="registerForm" class="form" action="?action=signin" method="POST">
                <h2 class="form-title">Đăng ký</h2>
                <label for="registerEmail">Email:</label>
                <input type="email" id="registerEmail" name="registerEmail">
                <small>Error message</small>

                <label for="username">Tên người dùng</label>
                <input type="text" id="username" name="username">
                <small>Error message</small>

                <label for="registerPassword">Mật khẩu:</label>
                <input type="password" id="registerPassword" name="registerPassword">
                <small>Error message</small>

                <label for="confirmPassword">Xác nhận mật khẩu:</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                <small>Error message</small>

                <button class="button-form" type="submit">Đăng ký</button>
                <div class="form-control">
                    <p>Đã có tài khoản? <a href="?action=login" id="showLoginForm">Đăng nhập</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
