<?php

include "../../../../config/config.php";
session_start();

$sql_id_sv = "SELECT * FROM `quanlytruonghoc`.`sinhvien`";
$query_id_sv = mysqli_query($conn, $sql_id_sv);

$sql_id_monhoc = "SELECT * FROM `quanlytruonghoc`.`monhoc`";
$query_id_monhoc = mysqli_query($conn, $sql_id_monhoc);

$sql = "SELECT * FROM `quanlytruonghoc`.`diemthi` WHERE `idSinhvien` = '$_GET[idSinhvien]' ";

//var_dump($sql);die;
$id_sv = $_GET['idSinhvien'];

$id_mh = $_GET['idMonhoc'];
//var_dump($id_mh);die;

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
//var_dump($row);die;

if (isset($_POST["process"])) {


    $idMonhoc= $_POST["idMonhoc"];

    $lanThi = $_POST["lanThi"];

    $diemThi = $_POST["diemthi_sv"];

//    if ($img != null) {
//
//        $path = "imgUpload/";
//
//        $tmp_name = $_FILES['imgUpload']['tmp_name'];
//
//        $anh = $_FILES['imgUpload']['name'];
//
//
//
//        move_uploaded_file($tmp_name, $path . $img);
//
//        $sql = "UPDATE `quanlytruonghoc`.`khoa` SET `img` = '$img' where `IdKhoa` ='$_GET[IdKhoa]'";
//
//        mysqli_query($conn, $sql);
//
//        header('location:khoa.php');
//
//    }



    $sql = "UPDATE `quanlytruonghoc`.`diemthi` SET `idMonhoc` = '$idMonhoc' , `lanThi` = '$lanThi' , `diemThi` = '$diemThi' where `idSinhvien` = '$_GET[idSinhvien]' ";
//var_dump($sql);die;
    mysqli_query($conn, $sql);


    header('location:diemthi.php?manage=category');

}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <li class="li-left active">
                    <a class="a-left" href="Khoa/khoa.php">KHOA</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">CHUYÊN NGÀNH</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">LỚP</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">GIẢNG VIÊN</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">SINH VIÊN</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">MÔN HỌC</a>
                </li>
                <li class="li-left">
                    <a class="a-left" href="">ĐIỂM</a>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class='title'>
                <h2>SỬA ĐIỂM THI</h2>
            </div>
            <form class="form" action="" method="post" enctype="multipart/form-data">
                <div class="form-input">
                    <div class="text">
                        <p>Tên Sinh viên</p>
                    </div>
                    <div class="input-right">
                        <input type="text"
                               value="<?php
                                $sql_namesv = "SELECT * FROM `quanlytruonghoc`.`sinhvien` where idSinhvien = ".$row['idSinhvien'];
                                $query_name_sv = mysqli_query($conn, $sql_namesv);
                                $row_name_sv = mysqli_fetch_assoc($query_name_sv);
                                $name_sv = $row_name_sv['tenSinhvien'];
                                echo $name_sv;
                                ?>" disabled
                        >
                    </div>
                </div>
                <div class="form-input">
                    <div class="text">
                        <p>Tên môn học</p>
                    </div>
                    <div class="input-right">
                        <select name="idMonhoc">
                            <option value="">Tên môn học</option>
                            <?php
                            while($row_id_monhoc = mysqli_fetch_assoc($query_id_monhoc)){?>
                                <?php $checked =  (@$id_mh == $row_id_monhoc['idMonhoc'])?" selected = 'selected'": "";  ?>
                                <option value="<?php echo $row_id_monhoc['idMonhoc'];?>" <?php echo $checked ?>><?php echo $row_id_monhoc['tenMonhoc'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-input">
                    <div class="text">
                        <p>Lần thi</p>
                    </div>
                    <div class="input-right">
                        <input type="text" name="lanThi" value="<?php echo @$row['lanThi'] ?>" placeholder="Lần thi">
                    </div>
                </div>

                <div class="form-input">
                    <div class="text">
                        <p>Điểm thi</p>
                    </div>
                    <div class="input-right">
                        <input type="text" name="diemthi_sv" value="<?php echo @$row['diemThi'] ?>" placeholder="Điểm thi">
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


