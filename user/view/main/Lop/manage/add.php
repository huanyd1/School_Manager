<?php

include "../../../../config/config.php";
$sql_idBomon = "SELECT * FROM `quanlytruonghoc`.`bomon`";
$query_idBomon = mysqli_query($conn, $sql_idBomon);
session_start();

if (isset($_POST["process"])) {

    $idLop = '';

    $tenLop = $_POST["tenLop"];
     $monhoc = $_POST["monhoc"];
     $lopphu = $_POST["lopphu"];

    $idBomon = $_POST["idBomon"];

    $img = $_FILES['imgUpload']['name'];



    


    $path = "imgUpload/";

    $tmp_name = $_FILES['imgUpload']['tmp_name'];

    $img = $_FILES['imgUpload']['name'];



    move_uploaded_file($tmp_name, $path . $img);

    $sql = "INSERT INTO `quanlytruonghoc`.`lop` VALUES ('$idLop','$tenLop','$idBomon','$img','$monhoc','$lopphu')";
    // var_dump($)

    mysqli_query($conn, $sql);

    header('location:lop.php?page_layout=danhsach');
    
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH LỚP</title>
    <link rel="stylesheet" href="../../../css/add.css">
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
                    <li class="li-left">
                        <a class="a-left" href="">USER</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Khoa/khoa.php">KHOA</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Bomon/bomon.php">BỘ MÔN</a>
                    </li>
                    <li class="li-left active">
                        <a class="a-left" href="lop.php">LỚP</a>
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
                    <h2>THÊM THÔNG TIN LỚP</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-input">
                        <div class="text">
                            <p>Tên Lớp</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên lớp mới" name="tenLop" required="required">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Môn Học</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên môn học" name="monhoc" required="required">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Lớp Phụ</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên Lớp Phụ" name="lopphu" required="required">
                        </div>    
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Lớp</p>
                        </div>
                        <div>
                            <input type="file" name="imgUpload">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Lớp của Bộ môn</p>
                        </div>
                        <div class="input-right">
                            <select name="idBomon" required="required">
                                <option value="">Tên Bộ Môn</option>
                                <?php
                                while ($row_idBomon = mysqli_fetch_assoc($query_idBomon)) { ?>
                                    <option value="<?php echo $row_idBomon['idBomon']; ?>"><?php echo $row_idBomon['tenBomon']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="sb">
                        <input type="submit" name="process" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>