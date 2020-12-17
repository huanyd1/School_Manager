<?php

include "../../../../config/config.php";
$sql_idLop = "SELECT * FROM `quanlytruonghoc`.`lop`";
$query_idLop = mysqli_query($conn, $sql_idLop);
session_start();

if (isset($_POST["process"])) {

    $idSinhvien = '';

    $tenSinhvien = $_POST["tenSinhvien"];

    $gioiTinh = $_POST["gioiTinh"];

    $ngaySinh = $_POST["ngaySinh"];

    $idLop = $_POST["idLop"];

    $img = $_FILES['imgUpload']['name'];



    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);

        $sql = "INSERT INTO `quanlytruonghoc`.`sinhvien` VALUES ('$idSinhvien','$tenSinhvien','$gioiTinh','$ngaySinh','$idLop','$img')";

        mysqli_query($conn, $sql);

        header('location:sinhvien.php?page_layout=danhsach');
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH SINH VIÊN</title>
    <link rel="stylesheet" href="../../../css/add.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <script src="../../../js/sinhvien.js"></script>

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
                    <li class="li-left active">
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
                    <h2>THÊM SINH VIÊN MỚI</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-input">
                        <div class="text">
                            <p>Tên Sinh Viên</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên sinh viên mới" name="tenSinhvien" oninvalid="InvalidMsg(this);"oninput="InvalidMsg(this);" required="required">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Sinh Viên</p>
                        </div>
                        <div>
                            <input type="file" name="imgUpload">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Giới Tính</p>
                        </div>
                        <div>
                            <select name="gioiTinh">
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ngày Sinh</p>
                        </div>
                        <div>
                            <input type="date" min="1998-01-01" max="2003-01-01" name="ngaySinh">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Sinh viên của Lớp</p>
                        </div>
                        <div class="input-right">
                            <select name="idLop">
                                <option value="">Tên Lớp</option>
                                <?php
                                while ($row_idLop = mysqli_fetch_assoc($query_idLop)) { ?>
                                    <option value="<?php echo $row_idLop['idLop']; ?>"><?php echo $row_idLop['tenLop']; ?></option>
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