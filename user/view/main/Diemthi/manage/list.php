<?php

session_start();
$isAdmin = $_SESSION["user"];




if (isset($_POST["btnSub_search"])) {
    $search = $_POST["input_search"];
    $sql = "SELECT * FROM `quanlytruonghoc`.`diemthi` WHERE `idSinhvien` LIKE '%$search%' or 'tenmonhoc' LIKE '%$search%'";
    $query = mysqli_query($conn, $sql);
}else{
    $sql = "SELECT * FROM `quanlytruonghoc`.`diemthi`";
    $query = mysqli_query($conn, $sql);
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>
</head>
<script !src="">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
<body>

    <div class="header">
        <div class="bao-logo">
            <img class="logo" src="../../../image/logo.png" alt="">
        </div>
        <div class="user">
            <p><?php echo $_SESSION["user"] ?></p>
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
                        <a class="a-left" href="../Isadmin/list.php">USER</a>
                    </li>
                    <li class="li-left ">
                        <a class="a-left" href="../khoa/khoa.php">KHOA</a>
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
                        <a class="a-left" href="">ĐIỂM</a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div class='title'>
                    <h2>DANH SÁCH ĐIỂM THI</h2>
                </div>
                <div class='table'>
                    <div class="search">
                        <form class="form_search" method="post" action="" >
                            <label>Tìm kiếm theo:</label>
                            <select>
                                <option>Mã Sinh Viên</option>
                                <option>Tên Sinh Viên</option>
                                <option>Tên Môn Học</option>
                            </select>
                            
                            <input class="in_search" type="text" name="input_search" placeholder="Nhập từ khóa để tìm kiếm..."></input>
                            <input class="sb_search" type="submit" name="btnSub_search" value="Tìm kiếm" style="background-image: '../imgUpload/search.png';";/>
                        </form>
                    </div>
                    <table id="table_id">
                        <thead>
                        <tr>
                            <th>Mã sinh viên</th>
                            <th>Tên sinh viên</th>
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
                                <td><?php echo $row['idSinhvien']; ?></td>
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

                                    ?>
                                </td>
                                <td><?php echo $row['lanThi']; ?></td>
                                <td><?php echo $row['diemThi']; ?></td>
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
                        <a href="http://localhost:8080/BTL_PTUDW/user/view/main/diemthi/diemthi.php?page_layout=them"><button>Thêm điểm</button></a>
                    </div>
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