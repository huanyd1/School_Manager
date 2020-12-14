<?php

include "../../../../config/config.php";
$sql_idKhoa = "SELECT * FROM `quanlytruonghoc`.`khoa`";
$query_idKhoa = mysqli_query($conn, $sql_idKhoa);
session_start();

$sql = "SELECT * FROM `quanlytruonghoc`.`bomon` WHERE `idBomon` = '$_GET[idBomon]' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if (isset($_POST["process"])) {

    $tenBomon = mysqli_escape_string($conn, $_POST["tenBomon"]);

    $idBomon = $_POST['idBomon'];

    $tenBomon = $_POST["tenBomon"];

    $idKhoa = $_POST["idKhoa"];

    $img = $_FILES['imgUpload']['name'];



    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);

        $sql = "UPDATE `quanlytruonghoc`.`bomon` SET `imgBomon` = '$img' where `idBomon` ='$_GET[idBomon]'";

        mysqli_query($conn, $sql);

        header('location:bomon.php?page_layout=danhsach');
    }

    $sql = "UPDATE `quanlytruonghoc`.`bomon` SET `idBomon` = '$idBomon' , `tenBomon` = '$tenBomon', `idKhoa` = '$idKhoa' where `idBomon` = '$_GET[idBomon]' ";

    mysqli_query($conn, $sql);

    header('location:bomon.php?page_layout=danhsach');
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH KHOA</title>
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
                    <li class="li-left active">
                        <a class="a-left" href="bomon.php">BỘ MÔN</a>
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
                    <h2>SỬA THÔNG TIN BỘ MÔN</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-input">
                        <div class="text">
                            <p>Mã Bộ Môn</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Mã Bộ Môn" readonly='true' value="<?php echo $row['idBomon']; ?>" name="tenBomon">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Tên Bộ Môn</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên Bộ Môn" value="<?php echo $row['tenBomon']; ?>" name="tenBomon">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Khoa</p>
                        </div>
                        <div class="input-right">
                            <img src="imgUpload/<?php echo $row['imgBomon']; ?>" style="max-width: 100px;">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p></p>
                        </div>
                        <div class="input-right">
                            <button style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">Thay ảnh mới</button>
                            <input type='file' id="getFile" name="imgUpload" style="display:none"> </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Bộ môn của Khoa</p>
                        </div>
                        <div class="input-right">
                        <select name="idKhoa">
                                    <?php
                                    while ($row_idKhoa = mysqli_fetch_assoc($query_idKhoa)) { ?>
                                    <option value="<?php echo $row_idKhoa['idKhoa']; ?>" <?php if($row['idKhoa']== $row_idKhoa['idKhoa']){echo ("selected");} ?>>
                                    <?php echo $row_idKhoa['tenKhoa'];?>
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