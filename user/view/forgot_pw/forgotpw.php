<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/register.css">
    <script src="../../js/register.js"></script>
    <title>Forget Password</title>
</head>

<body>
    <p>
        <?php
        echo "<script>alert(\"Vui lòng nhập đầy đủ thông tin để cấp lại mật khẩu\");</script>";
        ?>
        <p>
            <div class="form">
                <div class="bao-logo">
                    <img class="logo" src="../../image/logo.jpg" alt="">
                </div>
                <form method="post" name="login" action="forgetpw_submit.php" onsubmit="return check()">
                    <div class="bao-input">
                        <p class="p-text">Họ</p>
                        <div class="input-div">
                            <input type="text" id="name" name="name" placeholder="Họ của bạn">
                        </div>
                    </div>
                    <div class="bao-input">
                        <p class="p-text">Tên</p>
                        <div class="input-div">
                            <input type="text" id="name_ten" name="name_ten" placeholder="Tên của bạn">
                        </div>
                    </div>
                    <div class="bao-input">
                        <p class="p-text">Email</p>
                        <div class="input-div">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="bao-input">
                        <p class="p-text">Tên đăng nhập</p>
                        <div class="input-div">
                            <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="btn">
                        <input class="submit" id="submit" type="submit" value="Đổi mật khẩu">
                    </div>

                    <div class="a-login">
                        <a class="link-login" href="..\login\login.php">Đã có tài khoản, đăng nhập tại đây...</a>
                    </div>
                </form>
            </div>
</body>

</html>