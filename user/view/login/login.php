<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/login.css">
    <script src="../../js/login.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="form">
        <div class="bao-logo">
            <img class="logo" src="../../image/logo.jpg" alt="">
        </div>
        <form method="post" name="login" action="login_submit.php" onsubmit="return check()">
            <div class="bao-input">
                <p class="p-text">User</p>
                <div class="input-div">
                    <input type="text" id="user" name="username" placeholder="Email hoặc tên đăng nhập">
                </div>
            </div>
            <div class="bao-input">
                <p class="p-text">Password</p>
                <div class="input-div">
                    <input type="password" id="pwd" name="password" placeholder="Password">
                </div>
            </div>
            <div class="btn">
                <input class="submit" id="submit" type="submit" value="Đăng nhập">
            </div>
            <div class="a-forgetpw">
                <a class="link-forgetpw" href="..\fog_pw\forgetpw.php">Quên mật khẩu?</a>
            </div>
            <div class="line"></div>
            <div class="a-register">
                <a class="link-register" href="..\register\register.php">Chưa có tài khoản, đăng ký ngay...</a>
            </div>
        </form>
    </div>
</body>

</html>