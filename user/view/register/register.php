<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/register.css">
    <script src="../../js/register.js"></script>
    <title>Register</title>
</head>
<body>
<div class="form">
    <div class="bao-logo">
        <img class="logo" src="../../image/logo.jpg" alt="">
    </div>
    <form method="post" name="register" action="register_submit.php" onsubmit="return check()">
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
            <p class="p-text">Giới tính</p>
            <div class="input-div input-gioitinh">
                <input checked  type="radio" class="check_radio" name="gender" value="male">
                <a>Nam</a>

                <input  type="radio" class="check_radio" name="gender" value="female">
                <a>Nữ</a>
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Tên đăng nhập</p>
            <div class="input-div">
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Mật khẩu</p>
            <div class="input-div">
                <input type="password" id="pwd" name="pwd" placeholder="Mật khẩu">
            </div>
        </div>
        <div class="bao-input">
            <p class="p-text">Nhập lại mật khẩu</p>
            <div class="input-div">
                <input type="password" id="repwd" name="repwd" placeholder="Nhập lại mật khẩu">
            </div>
        </div>

        <div class="bao-input">
            <p class="p-text">Ghi chú</p>
            <textarea type="text" name="note" cols="47" rows="4" class="form-control" onblur="if(this.value == ''){this.value='Điền thêm một vài thông tin';}" onfocus="this.value='';"></textarea>
        </div>

        <div class="btn">
            <input class="submit" id="submit" type="submit" value="Đăng ký">
        </div>

        <div class="a-login">
            <a class="link-login" href="..\login\login.php">Đã có tài khoản, đăng nhập tại đây...</a>
        </div>
    </form>
</div>
</body>
</html>