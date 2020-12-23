<?php
$sql = "SELECT * FROM `quanlytruonghoc`.`khoa`";
$query = mysqli_query($conn, $sql);
//session_start();

if (isset($_POST["btnSub_search"])) {
    $search = $_POST["input_search"];
    $danhmuc = $_POST["danhmuc"];
    if ($danhmuc == 1) {
        $sql = "SELECT * FROM `quanlytruonghoc`.`khoa` WHERE `idKhoa` LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM `quanlytruonghoc`.`khoa` WHERE `tenKhoa` LIKE '%$search%'";
    }


    $query = mysqli_query($conn, $sql);
} else {
    $sql_all = "SELECT * FROM `quanlytruonghoc`.`khoa`";

    mysqli_query($conn, $sql_all);
}

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
                <div class='table'>
                    <div class="search">
                        <form class="form_search" method="post" action="">
                            <select class="selec_search" name="danhmuc" required="required">
                                <option value="">Tìm kiếm theo</option>
                                <option value="1">Mã Khoa</option>
                                <option value="2">Tên Khoa</option>
                            </select>
                            <input class="in_search" type="text" required="required" name="input_search" placeholder="Nhập từ khóa để tìm kiếm..."></input>
                            <input class="sb_search" type="submit" name="btnSub_search" value="Tìm kiếm" style="background-image: '../imgUpload/search.png';" ; />
                        </form>
                    </div>
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
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query)) { ?>
                                <tr class="" bordercolor="#DCDCDC">
                                    <td><?php echo $row['idKhoa']; ?></td>
                                    <td><?php echo $row['tenKhoa']; ?></td>
                                    <td>
                                        <img style="width: 100px" src="imgUpload/<?php echo $row['imgKhoa']; ?>"></img>
                                    </td>

                                    <td>
                                        <a href="khoa.php?page_layout=sua&idKhoa=<?php echo $row['idKhoa']; ?>">
                                            <img src="imgUpload/edit.png" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return window.confirm('Bạn có thực sự muốn xóa Khoa không?');" href="khoa.php?page_layout=xoa&idKhoa=<?php echo $row['idKhoa']; ?>">
                                            <img src="imgUpload/del.png" alt="">
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <div class="up">
                        <a href="http://localhost:444/BTL_PTUDW/user/view/main/Khoa/khoa.php?page_layout=them"><button>Thêm Khoa</button></a>
                    </div>
                    <a>1</a><a>2</a>

                </div>
            </div>
        </div>
    </div>

</body>

</html>

<style>
    .content .right .table .search {
        margin-right: 20px;
        text-align: right;
    }

    .content .right .table .search .form_search {
        margin-bottom: 20px;
    }

    .content .right .table .search .form_search .in_search {
        height: 36px;
        border-radius: 5px;
        border: 1px solid #777777;
    }

    .content .right .table .search .form_search .in_search:focus {
        outline: unset;
    }

    .content .right .table .search .form_search .sb_search {
        border: unset;
        height: 40px;
        border-radius: 5px;
    }

    .content .right .table .search .form_search .sb_search:focus {
        outline: unset;
    }

    .content .right .table .search .form_search .selec_search {
        height: 36px;
        border-radius: 5px;
        border: 1px solid #777777;
    }

    .content .right .table .search .form_search .selec_search:focus {
        outline: unset;
    }
</style>