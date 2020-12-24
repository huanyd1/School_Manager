<?php

include "../../../../config/config.php";
$sql_idKhoa = "SELECT * FROM `quanlytruonghoc`.`khoa`";
$query_idKhoa = mysqli_query($conn, $sql_idKhoa);
session_start();

if (isset($_POST["process"])) {

    $idBomon = '';

    $tenBomon = $_POST["tenBomon"];

    $idKhoa = $_POST["idKhoa"];

    $img = $_FILES['imgUpload']['name'];

    $sql_idBomon = "SELECT * FROM `quanlytruonghoc`.`bomon` WHERE `tenBomon` = '$tenBomon' AND `idKhoa` = '$idKhoa'";

    $query_idBomon = mysqli_query($conn, $sql_idBomon);

    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];



        move_uploaded_file($tmp_name, $path . $img);
    }else{
        $img = "logo-dhmo.jpg";
    }


    $count = mysqli_num_rows($query_idBomon);
    if ($count == 0) {

        $sql = "INSERT INTO `quanlytruonghoc`.`bomon` VALUES ('$idBomon','$tenBomon','$idKhoa','$img')";

        mysqli_query($conn, $sql);

        header('location:bomon.php?page_layout=danhsach');
    } else {
        echo "<script>var r = confirm(\"Tên đã có trong CSDL,vẫn muốn thêm?\"); 
        if(r == true){
            window.location.assign('http://localhost:444/BTL_PTUDW/user/view/main/Bomon/bomon.php?page_layout=loi&tenBomon=$tenBomon&idKhoa=$idKhoa&imgKhoa=$img')
        }else{
            history.back()
        }
        </script>";
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH BỘ MÔN</title>
    <link rel="stylesheet" href="../../../css/add.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <script src="../../../js/bomon.js"></script>

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
                    <h2>THÊM THÔNG TIN BỘ MÔN MỚI</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                <div class="form-input">
                        <div class="text">
                            <p>Tên Bộ Môn</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên bộ môn mới" name="tenBomon" oninvalid="InvalidMsg(this);"oninput="InvalidMsg(this);" required="required">
                        </div>
                    </div>    
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Bộ Môn</p>
                        </div>
                        <div>
                        <input type="file" name="imgUpload">
                        </div>
                    </div>  
                    <div class="form-input">
                        <div class="text">
                            <p>Bộ môn của Khoa</p>
                        </div>
                        <div class="input-right">
                            <select name="idKhoa">
                                <option value="">Tên Khoa</option>
                                <?php
                                while($row_idKhoa = mysqli_fetch_assoc($query_idKhoa)){?>
                                    <option value="<?php echo $row_idKhoa['idKhoa'];?>"><?php echo $row_idKhoa['tenKhoa'];?></option>
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

