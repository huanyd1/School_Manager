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

    $lanThi = $_POST["lanThi"];

    $diemThi = $_POST["diemthi_sv"];

//    var_dump($diemThi);

    $sql = "INSERT INTO `quanlytruonghoc`.`diemthi` VALUES ('$idSinhvien','$idMonhoc','$lanThi','$diemThi')";

    mysqli_query($conn, $sql);

    header('location:diemthi.php?page_layout=danhsach');


}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH ĐIỂM THI</title>
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
                        <a class="a-left" href="../isAdmin/list.php">USER</a>
                    </li>
                    <li class="li-left ">
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
                    <li class="li-left active">
                        <a class="a-left" href="../Diemthi/diemthi.php">ĐIỂM</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class='title'>
                    <h2>THÊM THÔNG TIN ĐIỂM</h2>
                </div>
                <form class="form" name="add" action="" method="post" enctype="multipart/form-data" onsubmit="return check()">

                    <div class="form-input">
                        <div class="text">
                            <p>Tên Sinh viên</p>
                        </div>
                        <div class="input-right">
                            <select name="idSinhvien">
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
                            <select name="idMonhoc">
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
                            <input type="number" min = '1' max = '2' name="lanThi" value="1" placeholder="Lần thi">
                        </div>
                    </div>

                    <div class="form-input">
                        <div class="text">
                            <p>Điểm thi</p>
                        </div>
                        <div class="input-right">
                            <input type="number" name="diemthi_sv" min = '1' max = '10' value="" placeholder="Điểm thi">
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

