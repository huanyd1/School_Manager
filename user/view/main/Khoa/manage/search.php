<?php
include "../../../../../config/config.php";
$sql = "SELECT * FROM `quanlytruonghoc`.`khoa`";
$query = mysqli_query($conn, $sql);
//session_start();
if (!empty($_POST["btnSub"])) {
    if (isset($_POST["btnSub"])) {
        $search = $_POST["input_search"];
        $sql_search = "SELECT * FROM `quanlytruonghoc`.`khoa` WHERE `tenKhoa` LIKE '%$search%'";
        $result = mysqli_query($conn, $sql_search);
    } else {
        $sql_all = "SELECT * FROM `quanlytruonghoc`.`khoa`";
        $query = mysqli_query($conn, $sql_all);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH KHOA</title>
    <link rel="stylesheet" href="../../../../css/khoa.css">
    <link rel="stylesheet" href="../../../../css/styles.css">
    <script src="../../../../js/khoa.js"></script>

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
                    <li class="li-left active">
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
                    <h2>DANH SÁCH KHOA</h2>
                </div>
                <div class="search">
                    <form method="post" action="search.php">
                        <a>Tìm kiếm Khoa:</a>
                        <input type="text" name="input_search" placeholder="Nhập từ khóa để tìm kiếm..." oninvalid="InvalidMsg(this);"oninput="InvalidMsg(this);" required="required"></input>
                        <input type="submit" name="btnSub" value="Tìm kiếm" style="background-image: '../imgUpload/search.png';";/>

                </div>
                <div class='table'>
                    <table>
                        <thead>
                            <tr>
                                <th>Mã Khoa</th>
                                <th>Tên Khoa</th>
                                <th>Ảnh</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($_POST['btnSub'])) {

                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr class="" bordercolor="#DCDCDC">
                                        <td><?php echo $row['idKhoa']; ?></td>
                                        <td><?php echo $row['tenKhoa']; ?></td>
                                        <td>
                                            <img style="width: 100px" src="../imgUpload/<?php echo $row['imgKhoa']; ?>"></img>
                                        </td>

                                        <td>
                                            <a href="khoa.php?page_layout=sua&idKhoa=<?php echo $row['idKhoa']; ?>">
                                                <img src="../imgUpload/edit.png" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="return window.confirm('Bạn có thực sự muốn xóa Khoa không?');" href="khoa.php?page_layout=xoa&idKhoa=<?php echo $row['idKhoa']; ?>">
                                                <img src="../imgUpload/del.png" alt="">
                                            </a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>

                            <?php
                            if (empty($_POST['btnSub'])) {

                                $i = 1;
                                while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <tr class="" bordercolor="#DCDCDC">
                                        <td><?php echo $row['idKhoa']; ?></td>
                                        <td><?php echo $row['tenKhoa']; ?></td>
                                        <td>
                                            <img style="width: 100px" src="../imgUpload/<?php echo $row['imgKhoa']; ?>"></img>
                                        </td>

                                        <td>
                                            <a href="khoa.php?page_layout=sua&idKhoa=<?php echo $row['idKhoa']; ?>">
                                                <img src="../imgUpload/edit.png" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a onclick="return window.confirm('Bạn có thực sự muốn xóa Khoa không?');" href="khoa.php?page_layout=xoa&idKhoa=<?php echo $row['idKhoa']; ?>">
                                                <img src="../imgUpload/del.png" alt="">
                                            </a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                    <div class="up">
                        <a href="http://localhost:444/BTL_PTUDW/user/view/main/Khoa/khoa.php?page_layout=them"><button id="newid" name="newname">Thêm Khoa</button></a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>