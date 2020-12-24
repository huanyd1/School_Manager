<?php

include "../../../../config/config.php";
session_start();

$sql = "SELECT * FROM `quanlytruonghoc`.`monhoc` WHERE `idMonhoc` = '$_GET[idMonhoc]' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

$sql_idGiangvien = "SELECT * FROM `quanlytruonghoc`.`giangvien`";

$query_idGiangvien = mysqli_query($conn, $sql_idGiangvien);


if (isset($_POST["process"])) {

    $tenMonhoc = mysqli_escape_string($conn, $_POST["tenMonhoc"]);

    $idMonhoc = $_POST['idMonhoc'];

    $tenMonhoc = $_POST["tenMonhoc"];

    $soGio = $_POST["soGio"];

    $idGiangvien = $_POST['idGiangvien'];
    $tenGiangvien = $_POST['tenGiangvien'];

    $img = $_FILES['imgUpload']['name'];



    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);

        $sql = "UPDATE `quanlytruonghoc`.`monhoc` SET `imgMonhoc` = '$img' where `idMonhoc` ='$_GET[idMonhoc]'";

        mysqli_query($conn, $sql);

        header('location:monhoc.php?page_layout=danhsach');
    }



    $sql = "UPDATE `quanlytruonghoc`.`monhoc` SET `tenMonhoc` = '$tenMonhoc', `soGio` = '$soGio', `idGiangvien` = '$idGiangvien' where `idMonhoc` = '$_GET[idMonhoc]' ";

    mysqli_query($conn, $sql);

    header('location:monhoc.php?page_layout=danhsach');
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH MÔN HỌC</title>
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
                    <li class="li-left">
                        <a class="a-left" href="../Lop/lop.php">LỚP</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Giangvien/giangvien.php">GIẢNG VIÊN</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Sinhvien/sinhvien.php">SINH VIÊN</a>
                    </li>
                    <li class="li-left active">
                        <a class="a-left" href="../monhoc.php">MÔN HỌC</a>
                    </li>
                    <li class="li-left">
                        <a class="a-left" href="../Diemthi/diemthi.php">ĐIỂM</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class='title'>
                    <h2>SỬA THÔNG TIN MÔN HỌC</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-input">
                        <div class="text">
                            <p>Mã Môn Học</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Mã môn học" name="idMonhoc" value="<?php echo $row['idMonhoc']; ?>">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Tên Môn Học</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên môn học mới" name="tenMonhoc" value="<?php echo $row['tenMonhoc']; ?>">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Môn Học</p>
                        </div>
                        <div class="input-right">
                            <img src="imgUpload/<?php echo $row['imgMonhoc']; ?>" style="max-width: 100px;">
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
                            <p>Số Tín Chỉ</p>
                        </div>
                        <div class="input-right">
                            <input type="number" min='1' max='5' name="soTinchi" value="<?php echo $row['soTinchi']; ?>">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Môn học của Giảng viên</p>
                        </div>
                        <div class="input-right">
                            <select name="idGiangvien">
                                <?php
                                while ($row_idGiangvien = mysqli_fetch_assoc($query_idGiangvien)) { ?>
                                    <option value="<?php echo $row_idGiangvien['idGiangvien']; ?>" <?php if ($row['idGiangvien'] == $row_idGiangvien['idGiangvien']) {
                                                                                            echo ("selected");
                                                                                        } ?>>
                                        <?php echo $row_idGiangvien['tenGiangvien']; ?>
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