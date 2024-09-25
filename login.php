<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập BookReview</title>
    <link rel="stylesheet" href="./asset/main.css">
    <link rel="stylesheet" href="./asset/base.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="loginForm" class="form" action="?action=login" method="POST"  >
                <h2 class="form-title">Đăng nhập</h2>
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="loginEmail" >
                <small>Error message</small>
                <label for="loginPassword">Mật khẩu:</label>
                <input type="password" id="loginPassword" name="loginPassword" >
                <small>Error message</small>
                <button type="submit" class="button-form">Đăng nhập</button>
                <div class="form-control">
                    <p><a href="?action=signin" id="showRegisterForm">Đăng ký</a></p>
                    <p><a href="?action=forgetpass" id="showForgotPasswordForm">Quên mật khẩu</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
