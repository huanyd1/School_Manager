<?php
session_start();
$sql = "SELECT * FROM `quanlytruonghoc`.`diemthi`";
$query = mysqli_query($conn, $sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH KHOA</title>
    <link rel="stylesheet" href="../../../css/khoa.css">
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
        <img src="../../../image/img.jpg" alt="">
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
                    <h2>DANH SÁCH ĐIỂM THI</h2>
                </div>
                <div class='table'>
                    <table >
                        <thead>
                        <tr>
                            <th>Mã sinh viên</th>
                            <th>Môn học</th>
                            <th>Lần thi</th>
                            <th>Điểm thi</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                            <tr class="" bordercolor="#DCDCDC">
                                <td>
                                    <?php
                                        $sql_namesv = "SELECT * FROM `quanlytruonghoc`.`sinhvien` where idSinhvien = ".$row['idSinhvien'];
                                        $query_name_sv = mysqli_query($conn, $sql_namesv);
                                        $row_name_sv = mysqli_fetch_assoc($query_name_sv);
                                        $name_sv = $row_name_sv['tenSinhvien'];
                                        echo $name_sv;
                                    ?>

                                </td>
                                <td>
                                    <?php
                                        $sql_namemonhoc = "SELECT * FROM `quanlytruonghoc`.`monhoc` where idMonhoc = ".$row['idMonhoc'];
                                        $query_name_monhoc = mysqli_query($conn, $sql_namemonhoc);
                                        $row_name_monhoc = mysqli_fetch_assoc($query_name_monhoc);
                                        $name_monhoc = $row_name_monhoc['tenMonhoc'];
                                        echo $name_monhoc;

//                                    echo $row['idMonhoc'];
                                    ?>
                                </td>
                                <td><?php echo $row['lanThi']; ?></td>
                                <td><?php echo $row['diemThi']; ?></td>
<!--                                <td>-->
<!--                                    <img style="width: 100px" src="imgUpload/--><?php //echo $row['imgKhoa']; ?><!--"></img>-->
<!--                                </td>-->

                                <td>
                                    <a href="diemthi.php?page_layout=sua&idSinhvien=<?php echo $row['idSinhvien']; ?>&idMonhoc=<?php echo $row['idMonhoc']; ?>">
                                        <img src="imgUpload/edit.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return window.confirm('Bạn có thực sự muốn xóa Khoa không?');" href="diemthi.php?page_layout=xoa&idSinhvien=<?php echo $row['idSinhvien']; ?>&idMonhoc=<?php echo $row['idMonhoc']; ?>">
                                        <img src="imgUpload/del.png" alt="">
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                    <div class="up">
                        <a href="http://localhost:444/BTL_PTUDW/user/view/main/diemthi/diemthi.php?page_layout=them"><button>Thêm điểm</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>