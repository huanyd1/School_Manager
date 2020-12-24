<?php
include "../../../../config/config.php";

$idGiangvien = '';

$tenGiangvien = $_GET["tenGiangvien"];

$idBomon = $_GET["idBomon"];

$chucVu = $_GET["chucVu"];

$img = $_GET["imgGiangvien"];

$sql = "INSERT INTO `quanlytruonghoc`.`giangvien` VALUES ('$idGiangvien','$tenGiangvien','$idBomon','$chucVu','$img')";

mysqli_query($conn, $sql);

header('location:giangvien.php?page_layout=danhsach');


?>