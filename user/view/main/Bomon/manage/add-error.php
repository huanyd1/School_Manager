<?php
include "../../../../config/config.php";

$idBomon = '';

$tenBomon = $_GET["tenBomon"];

$idKhoa = $_GET["idKhoa"];

$img = $_GET["imgKhoa"];

$sql = "INSERT INTO `quanlytruonghoc`.`bomon` VALUES ($idKhoa,'$tenBomon',$idKhoa,'$img')";


mysqli_query($conn, $sql);

header('location:bomon.php?page_layout=danhsach');

?>