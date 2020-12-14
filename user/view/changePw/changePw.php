<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/change.css">
    <script @src="../../js/register.js"></script>
    <title>Register</title>
</head>
<body>
<div class="form">
    <div class="bao-logo">
        <img class="logo" src="../../image/logo.jpg" alt="">
    </div>
    <form method="post" name="login" action="changePw_submit.php" onsubmit="return check()">
            <div class="bao-input">
                <p class="p-text">Old Password</p>
                <div class="input-div">
                    <input type="password" id="old" name="old" placeholder="Mật khẩu cũ">
                </div>
            </div>
            <div class="bao-input">
                <p class="p-text">New Password</p>
                <div class="input-div">
                    <input type="password" id="pwd" name="pwd" placeholder="Mật khẩu mới">
                </div>
            <div class="bao-input">
                <p class="p-text">RePassword</p>
                <div class="input-div">
                    <input type="password" id="repwd" name="repwd" placeholder="Nhập lại mật khẩu mới">
                </div>    
            </div>
            <div class="btn">
                <input class="submit" id="submit" type="submit" value="Đổi mật khẩu">
            </div>
        </form>
</div>
</body>
</html>