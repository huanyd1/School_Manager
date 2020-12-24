<?php
include "../../../../config/config.php";

$idSinhvien = '';

$tenSinhvien = $_GET["tenSinhvien"];

$gioiTinh = $_GET["gioiTinh"];

$ngaySinh = $_GET["ngaySinh"];

$idLop = $_GET["idLop"];

$img = $_GET["imgSinhvien"];

$sql = "INSERT INTO `quanlytruonghoc`.`sinhvien` VALUES ('$idSinhvien','$tenSinhvien','$gioiTinh','$ngaySinh',$idLop,'$img')";



mysqli_query($conn, $sql);

header('location:sinhvien.php?page_layout=danhsach');

?>