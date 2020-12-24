<?php

include "../../../../config/config.php";
$sql_idGiangvien = "SELECT * FROM `quanlytruonghoc`.`giangvien`";
$query_idGiangvien = mysqli_query($conn, $sql_idGiangvien);
session_start();

if (isset($_POST["process"])) {

    $idMonhoc = '';

    $tenMonhoc = $_POST["tenMonhoc"];

    $soTinchi = $_POST["soTinchi"];

    $idGiangvien = $_POST["idGiangvien"];

    $tenGiangvien = $_POST["tenGiangvien"];

    $sql_idMonhoc = "SELECT * FROM `quanlytruonghoc`.`monhoc` WHERE `tenMonhoc` = '$tenMonhoc'";

    $query_idMonhoc = mysqli_query($conn, $sql_idMonhoc);

    $img = $_FILES['imgUpload']['name'];
    if ($img !=null) {
        $path = "imgUpload/";

        $tmp_name = $_FILES['imgUpload']['tmp_name'];

        $img = $_FILES['imgUpload']['name'];

        move_uploaded_file($tmp_name, $path . $img);
    }else{
        $img = "html.png";
    }



        
    $count = mysqli_num_rows($query_idMonhoc);
    if ($count == 0) {

        $sql = "INSERT INTO `quanlytruonghoc`.`monhoc` VALUES ('$idMonhoc','$tenMonhoc','$soTinchi','$idGiangvien','$img')";

        mysqli_query($conn, $sql);

        header('location:monhoc.php?page_layout=danhsach');
    } else {
        echo "<script>var r = confirm(\"Tên đã có trong CSDL,vẫn muốn thêm?\"); 
        if(r == true){
            window.location.assign('http://localhost:8910/BTL_PTUDW/user/view/main/Monhoc/monhoc.php?page_layout=loi&tenMonhoc=$tenMonhoc&soTinchi=$soTinchi&idGiangvien=$idGiangvien&imgMonhoc=$img')
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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DANH SÁCH SINH VIÊN</title>
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
                    <h2>THÊM THÔNG TIN MÔN HỌC</h2>
                </div>
                <form class="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-input">
                        <div class="text">
                            <p>Tên Môn Học</p>
                        </div>
                        <div class="input-right">
                            <input type="text" placeholder="Tên môn học mới" name="tenMonhoc" required="required">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Ảnh Môn Học</p>
                        </div>
                        <div>
                            <input type="file" name="imgUpload">
                        </div>
                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Số Tín Chỉ</p>
                        </div>
                        <div class="input-right">
                            <input type="number" min='1' max='5' name="soTinchi" required="required">
                        </div>

                    </div>
                    <div class="form-input">
                        <div class="text">
                            <p>Môn học của Giảng viên</p>
                        </div>
                        <div class="input-right">
                            <select name="idGiangvien" required="required">
                                <option value="">Tên Giảng Viên</option>
                                <?php
                                while ($row_idGiangvien = mysqli_fetch_assoc($query_idGiangvien)) { ?>
                                    <option value="<?php echo $row_idGiangvien['idGiangvien']; ?>"><?php echo $row_idGiangvien['tenGiangvien']; ?></option>
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