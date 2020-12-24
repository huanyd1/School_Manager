<?php

include "../../../../config/config.php";
$sql_idBomon = "SELECT * FROM `quanlytruonghoc`.`bomon`";
$query_idBomon = mysqli_query($conn, $sql_idBomon);
session_start();

$sql = "SELECT * FROM `quanlytruonghoc`.`lop` WHERE `idLop` = '$_GET[idLop]' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if (isset($_POST["process"])) {

    $tenLop = mysqli_escape_string($conn, $_POST["tenLop"]);

    $idLop = $_POST['idLop'];

    $tenLop = $_POST["tenLop"];

    $idBomon = $_POST["idBomon"];

    $img = $_FILES['imgUpload']['name'];



    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);

        $sql = "UPDATE `quanlytruonghoc`.`lop` SET `imgLop` = '$img' where `idLop` ='$_GET[idLop]'";

        mysqli_query($conn, $sql);

        header('location:lop.php');
    }

    $sql = "UPDATE `quanlytruonghoc`.`lop` SET `idLop` = '$idLop' , `tenLop` = '$tenLop', `idBomon` = '$idBomon' where `idLop` = '$_GET[idLop]' ";

    mysqli_query($conn, $sql);

    header('location:lop.php?page_layout=danhsach');
}



?>
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
                    <h2>SỬA THÔNG TIN LỚP</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-input">
                        <div class="text">
                            <p>Mã Lớp</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Mã lớp" name="idLop" value="<?php echo $row['idLop']; ?>" name="idLop">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Tên Lớp</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên lớp" name="tenLop" value="<?php echo $row['tenLop']; ?>" name="tenLop">
                        </div>
                    </div>
                   <div class="form-input">
                <div class="text">
                    <p>Ảnh Khoa</p>
                </div>
                <div class="input-right">
                <img src="imgUpload/<?php echo $row['imgKhoa']; ?>" style="max-width: 100px;">
                <input type='file' id="getFile" name="imgUpload">                
                </div>
            </div>
                   
                    <div class="form-input">
                        <div class="text">
                            <p>Lớp của Bộ môn</p>
                        </div>
                        <div class="input-right">
                        <select name="idBomon">
                                    <?php
                                    while ($row_idBomon = mysqli_fetch_assoc($query_idBomon)) { ?>
                                    <option value="<?php echo $row_idBomon['idBomon']; ?>" <?php if($row['idBomon']== $row_idBomon['idBomon']){echo ("selected");} ?>>
                                    <?php echo $row_idBomon['tenBomon'];?>
                                    </option>
                                    <?php } ?></select>
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