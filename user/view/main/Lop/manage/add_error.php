<?php
include "../../../../config/config.php";

$idLop = '';

$tenLop = $_GET["tenLop"];

$idBomon= $_GET["idBomon"];

$img = $_GET["imgLop"];

$sql = "INSERT INTO `quanlytruonghoc`.`lop` VALUES ('$idLop','$tenLop','$idBomon','$img')";

mysqli_query($conn, $sql);

header('location:lop.php?page_layout=danhsach');

?>