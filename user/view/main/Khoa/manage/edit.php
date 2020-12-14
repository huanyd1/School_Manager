<?php

include "../../../../config/config.php";
//session_start();

$sql = "SELECT * FROM `quanlytruonghoc`.`khoa` WHERE `idKhoa` = '$_GET[idKhoa]' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if (isset($_POST["process"])) {

	$tenKhoa = mysqli_escape_string($conn, $_POST["tenKhoa"]);

    $idKhoa = $_POST['idKhoa'];

    $tenKhoa =$_POST["tenKhoa"];

    $img = $_FILES['imgUpload']['name'];

    if ($img != null) {

        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);


        $sql = "UPDATE `quanlytruonghoc`.`khoa` SET `imgKhoa` = '$img' where `idKhoa` ='$_GET[idKhoa]'";

        mysqli_query($conn, $sql);

        header('location:khoa.php');

    }


    $sql = "UPDATE `quanlytruonghoc`.`khoa` SET `idKhoa` = '$idKhoa'  , `tenKhoa` = '$tenKhoa' where `idKhoa` = '$_GET[idKhoa]' ";

    mysqli_query($conn, $sql);
    
    header('location:khoa.php?page_layout=danhsach');

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
                    <a class="a-left" href="../isAdmin/list.php">USER</a>
                </li>
                <li class="li-left active">
                    <a class="a-left" href="khoa.php">KHOA</a>
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
                <h2>SỬA THÔNG TIN KHOA</h2>
            </div>
            <form class="form" action="" method="post" enctype="multipart/form-data">

            <div class="form-input">
                <div class="text">
                    <p>Mã Khoa</p>
                </div>
                <div class="input-right">
                    <input type="text" placeholder="Tên khoa" value="<?php echo $row['idKhoa']; ?>" name="tenKhoa">
                </div>
            </div>  
            <div class="form-input">
                <div class="text">
                    <p>Tên Khoa</p>
                </div>
                <div class="input-right">
                    <input type="text" placeholder="Tên khoa" value="<?php echo $row['tenKhoa']; ?>" name="tenKhoa">
                </div>
            </div>
            <div class="form-input">
                <div class="text">
                    <p>Ảnh Khoa</p>
                </div>
                <div class="input-right">
                <img src="imgUpload/<?php echo $row['imgKhoa']; ?>" style="max-width: 100px;">
                </div>
            </div>
            <div class="form-input">
                <div class="text">
                    <p></p>
                </div>
                <div class="input-right">
                <button style="display:block;width:120px; height:30px;" onclick="document.getElementById('getFile').click()">Thay ảnh mới</button>
                <input type='file' id="getFile" name="imgUpload" style="display:none">                </div>
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


