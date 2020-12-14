<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/register.js"></script>
    <title>Login</title>
</head>
<body>
<div class="form">
    <div class="bao-logo">
        <img class="logo" src="img/logo.jpg" alt="">
    </div>
    <form method="post" name="register" action="register_submit.php" onsubmit="return checkinput()">
        <div class="bao-input">
            <p class="p-text">FirstName</p>
            <div class="input-div">
                <input type="text" id="firstname" name="firstname" placeholder="Họ của bạn">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">LastName</p>
            <div class="input-div">
                <input type="text" id="lastname" name="lastname" placeholder="Tên của bạn">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Email</p>
            <div class="input-div">
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
        </div>
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
        <div class="bao-input">
            <p class="p-text">Repassword</p>
            <div class="input-div">
                <input type="password" id="repwd" name="repassword" placeholder="Nhập lại password">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Date of Birth</p>
            <div class="input-div">
                <input type="password" id="dateofbirth" name="dateofbirth" placeholder="Ngày sinh">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Giới tính</p>
            <div class="input-div">
                <input type="password" id="sex" name="sex" placeholder="Giới tính">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Note</p>
            <div class="input-div">
                <input type="password" id="note" name="note" placeholder="Thông tin thêm">
            </div>
        </div>
        <div class="btn">
            <input class="register" id="register" type="submit" value="Đăng ký">
        </div>
        <div class="lg-a">
            <a href="login.php">Đã có tài khoản, đăng nhập...</a>
        </div>
    </form>
</div>
</body>
</html>
