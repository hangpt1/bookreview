<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký BookReview</title>
    <link rel="stylesheet" href="./asset/css/base.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="assets/fontawesome-free-6.5.2-web (1)/fontawesome-free-6.5.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
            <center>
            <div class="form-container">
                <form id="loginForm" class="form" action="?action=login" method="POST"  >
                    <h2 class="form-title">Đăng ký</h2><br>

                    <label for="loginEmail">Email <span style="color:red;">*</span></label>
                    <input type="email" id="loginEmail" name="loginEmail" placeholder="Email" ><br><br>
                    <!-- <small>Error message</small> -->
                     
                    <label for="loginName">Name <span style="color:red;">*</span></label>
                    <input type="text" id="loginName" name="loginName" placeholder="Name" ><br><br>
                    <!-- <small>Error message</small> -->
                    <label for="loginPassword">Mật khẩu <span style="color:red;">*</span></label>
                    <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" ><br><br>
                    <!-- <small>Error message</small> -->
                    <button type="submit" class="button-form">Đăng nhập</button>
                    <div class="form-control">
                        <p>Đã có tài khoản? <a href="?action=login" id="showLoginForm">Đăng nhập</a></p>
                    </div>
                </form>
            </div>
            </center>
        </div>
    

</body>
</html>
