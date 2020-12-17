<?php
include "../../../../config/config.php";

$idKhoa = '';

$tenKhoa = $_GET["tenKhoa"];

$img = $_GET["imgKhoa"];

$sql = "INSERT INTO `quanlytruonghoc`.`khoa` VALUES ('$idKhoa','$tenKhoa','$img')";

mysqli_query($conn, $sql);

header('location:khoa.php?page_layout=danhsach');

?>