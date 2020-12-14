<?php

include "../../../../config/config.php";
session_start();

if (isset($_POST["process"])) {

    $idUser = '';

    $fName = $_POST["fName"];

    $lName = $_POST["lName"];

    $email = $_POST["email"];

    $username = $_POST["username"];

    $password = md5(123456);

    $isAdmin = 0;

    $sql = "INSERT INTO `quanlytruonghoc`.`user`(`idUser`,`fName`,`lName`, `email`, `username`, `password`, `isAdmin`) VALUES ('$idUser','$fName','$lName', '$email', '$username','$password', '$isAdmin')";

    mysqli_query($conn, $sql);

    header('location:list.php');
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH BỘ MÔN</title>
    <link rel="stylesheet" href="../../../css/khoa.css">
    <link rel="stylesheet" href="../../../css/styles.css">
</head>

<body>
    <div class="header">
        <div class="bao-logo">
            <img class="logo" src="../../../image/logo.png" alt="">
        </div>
        <div class="user">
            <p><?php echo @$_SESSION["user"] ?></p>
        </div>
        <div class="out">
            <a href="">Đăng xuất</a>
        </div>
    </div>
    <!-- <div class="banner">
        <img src="../../image/img.jpg" alt="">
    </div> -->
    <div class="container">
        <div class="content">
            <div class="left">
                <h2><a href="">Trang chủ</a></h2>
                <ul class="ul-left">
                    <li class="li-left active">
                        <a class="a-left" href="list.php">USER</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Khoa/khoa.php">KHOA</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Bomon/bomon.php">BỘ MÔN</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Lop/lop.php">LỚP</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Giangvien/giangvien.php">GIẢNG VIÊN</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Sinhvien/sinhvien.php">SINH VIÊN</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Monhoc/monhoc.php">MÔN HỌC</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Diemthi/diemthi.php">ĐIỂM</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class='title'>
                    <h2>THÊM BỘ MÔN MỚI</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <table width="500" border="1" style="margin: auto;">



                        <tr>

                            <td>Họ Quản Trị</td>

                            <td><input type="text" name="fName"></td>

                        </tr>
                        <tr>

                            <td>Tên Quản Trị</td>

                            <td><input type="text" name="lName"></td>

                        </tr>
                        <tr>

                            <td>Email Quản Trị</td>

                            <td><input type="email" name="email"></td>

                        </tr>
                        <tr>

                            <td>Tên Đăng Nhập Quản Trị</td>

                            <td><input type="text" name="username"></td>

                        </tr>

                        <tr>

                            <td></td>

                            <td><input type="submit" name="process" value="Update"></td>

                        </tr>

                    </table>

                </form>
            </div>
        </div>
    </div>
</body>

</html>