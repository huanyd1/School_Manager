<?php
include "../../../../config/config.php";

$idMonhoc = '';

$tenMonhoc = $_GET["tenMonhoc"];

$soTinchi = $_GET["soTinchi"];

$idGiangvien = $_GET["idGiangvien"];

$img = $_GET["imgMonhoc"];

$sql = "INSERT INTO `quanlytruonghoc`.`monhoc` VALUES ('$idMonhoc','$tenMonhoc','$soTinchi','$idGiangvien','$img')";

mysqli_query($conn, $sql);

header('location:monhoc.php?page_layout=danhsach');


?>