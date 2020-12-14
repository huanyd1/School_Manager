<?php
include "../../../../config/config.php";
$sql = "SELECT * FROM `quanlytruonghoc`.`KH_user`";
$query = mysqli_query($conn, $sql);
session_start();

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
                    <li class="li-left active">
                        <a class="a-left" href="list.php">USER</a>
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
                    <h2>DANH SÁCH QUẢN TRỊ VIÊN</h2>
                </div>
                <!-- <div class="search">
                    <form method="post" action="manage/search.php">
                        <a>Tìm kiếm Khoa:</a>
                        <input type="text" name="search" placeholder="Nhập từ khóa để tìm kiếm..."></input>
                        <input type="submit" name="submit" value="Tìm kiếm" />
                </div> -->
                <div class='table'>
                    <table>
                        <thead>
                            <tr>
                                <th>Mã Quản Trị</th>
                                <th>Họ Quản Trị</th>
                                <th>Tên Quản Trị</th>
                                <th>Email</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query)) { ?>
                                <tr class="" bordercolor="#DCDCDC">
                                    <td><?php echo $row['idUser']; ?></td>
                                    <td><?php echo $row['fName']; ?></td>
                                    <td><?php echo $row['lName']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td>
                                        <a onclick="return window.confirm('Bạn có thực sự muốn xóa Quản Trị không?');" href="delete.php?&idUser=<?php echo $row['idUser']; ?>">
                                            <img src="del.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <div class="up">
                        <a href="http://localhost:444/BTL_PTUDW/user/view/main/Isadmin/add.php"><button>Thêm Quản Trị</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>