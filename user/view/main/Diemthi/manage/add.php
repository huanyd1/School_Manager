<?php

include "../../../../config/config.php";
session_start();
$sql_id_sv = "SELECT * FROM `quanlytruonghoc`.`sinhvien`";
$query_id_sv = mysqli_query($conn, $sql_id_sv);

$sql_id_monhoc = "SELECT * FROM `quanlytruonghoc`.`monhoc`";
$query_id_monhoc = mysqli_query($conn, $sql_id_monhoc);

if (isset($_POST["process"])) {

    $idSinhvien = $_POST["idSinhvien"];


//    lấy tên sinh viên






//    $name_sv =

    $idMonhoc= $_POST["idMonhoc"];

    $sql_namemonhoc = "SELECT * FROM `quanlytruonghoc`.`monhoc` where idMonhoc = ".$idMonhoc;
    $query_name_monhoc = mysqli_query($conn, $sql_namemonhoc);
    $row_name_monhoc = mysqli_fetch_assoc($query_name_monhoc);
    $name_monhoc = $row_name_monhoc['tenMonhoc'];



    $lanThi = $_POST["lanThi"];

    $diemThi = $_POST["diemthi_sv"];

//    var_dump($diemThi);

    $sql = "INSERT INTO `quanlytruonghoc`.`diemthi` VALUES ('$idSinhvien','$idMonhoc','$name_monhoc','$lanThi','$diemThi')";
//var_dump($sql);die;
    mysqli_query($conn, $sql);

    header('location:diemthi.php?page_layout=danhsach');

//    $img = $_FILES['imgUpload']['name'];


//
//    if ($img != null) {
//
//
//
//
//
//        $path = "imgUpload/";
//
//        $tmp_name = $_FILES['imgUpload']['tmp_name'];
//
//        $img = $_FILES['imgUpload']['name'];
//
//
//
//        move_uploaded_file($tmp_name, $path.$img);
//
//
//
//    }

}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH KHOA</title>
    <link rel="stylesheet" href="../../../css/add.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <script src="../../../js/add_diemthi.js"></script>
</head>
<body>
    <div class="header">
        <div class="bao-logo">
            <img class="logo" src="../../../image/logo.png" alt="">
        </div>
        <div class="user">
            <p><?php echo $_SESSION["user"] ?></p>
        </div>
        <div class="out">
            <a href="">Đăng xuất</a>
        </div>
    </div>
    <div class="banner">
        <img src="../../image/img.jpg" alt="">
    </div>
    <div class="container">
        <div class="content">
            <div class="left">
                <h2><a href="">Trang chủ</a></h2>
                <ul class="ul-left">
                    <li class="li-left">
                        <a class="a-left" href="../Isadmin/list.php">USER</a>
                    </li>
                    <li class="li-left ">
                        <a class="a-left" href="../khoa.php">KHOA</a>
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
                    <li class="li-left active">
                        <a class="a-left" href="diemthi.php">ĐIỂM</a>
                    </li>
<!--                    <li class="li-left active">-->
<!--                        <a class="a-left" href="diemthi.php?manage=manage">ĐIỂM</a>-->
<!--                    </li>-->
                </ul>
            </div>
            <div class="right">
                <div class='title'>
                    <h2>THÊM ĐIỂM</h2>
                </div>
                <form class="form" name="add" action="" method="post" enctype="multipart/form-data" onsubmit="return check()">

                    <div class="form-input">
                        <div class="text">
                            <p>Tên Sinh viên</p>
                        </div>
                        <div class="input-right">
                            <select name="idSinhvien" required="required">
                                <option value="">Tên sinh viên</option>
                                <?php
                                while($row_id_sv = mysqli_fetch_assoc($query_id_sv)){?>
                                    <option value="<?php echo $row_id_sv['idSinhvien'];?>"><?php echo $row_id_sv['tenSinhvien'];?></option>
                                <?php } ?></select>
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Tên môn học</p>
                        </div>
                        <div class="input-right">
                            <select name="idMonhoc" required="required">
                                <option value="">Tên môn học</option>
                                <?php
                                while($row_id_monhoc = mysqli_fetch_assoc($query_id_monhoc)){?>
                                    <option value="<?php echo $row_id_monhoc['idMonhoc'];?>"><?php echo $row_id_monhoc['tenMonhoc'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="text">
                            <p>Lần thi</p>
                        </div>
                        <div class="input-right">
                            <input type="text" name="lanThi" value="" placeholder="Lần thi" required="required">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="text">
                            <p>Điểm thi</p>
                        </div>
                        <div class="input-right">
                            <input type="text" name="diemthi_sv" value="" placeholder="Điểm thi" required="required">
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

