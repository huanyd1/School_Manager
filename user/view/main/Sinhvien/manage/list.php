<?php
$sql = "SELECT * FROM `quanlytruonghoc`.`sinhvien`";
$query = mysqli_query($conn, $sql);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH SINH VIÊN</title>
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
                    <h2>DANH SÁCH SINH VIÊN</h2>
                </div>
                <div class='table'>
                    <table >
                        <thead>
                        <tr>
                            <th>Mã Sinh Viên</th>
                            <th>Tên Sinh Viên</th>
                            <th>Giới Tính</th>
                            <th>Ngày Sinh</th>
                            <th>Ảnh Sinh Viên</th>
                            <th>Mã Lớp</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) { ?>
                            <tr class="" bordercolor="#DCDCDC">
                                <td><?php echo $row['idSinhvien']; ?></td>
                                <td><?php echo $row['tenSinhvien']; ?></td>
                                <td><?php echo $row['gioiTinh']; ?></td>
                                <td><?php echo $row['ngaySinh']; ?></td>
                                <td>
                                    <img style="width: 100px" src="imgUpload/<?php echo $row['imgSinhvien']; ?>"></img>
                                </td>
                                <td><?php echo $row['idLop']; ?></td>
                                <td>
                                    <a href="sinhvien.php?page_layout=sua&idSinhvien=<?php echo $row['idSinhvien']; ?>">
                                        <img src="imgUpload/edit.png" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return window.confirm('Bạn có thực sự muốn xóa Sinh viên không?');" href="sinhvien.php?page_layout=xoa&idSinhvien=<?php echo $row['idSinhvien']; ?>">
                                        <img src="imgUpload/del.png" alt="">
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                    <div class="up">
                        <a href="http://localhost:444/BTL_PTUDW/user/view/main/Sinhvien/sinhvien.php?page_layout=them"><button>Thêm Sinh Viên</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>