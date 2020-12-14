<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`khoa` WHERE `idKhoa` = '$_GET[idKhoa]' ";
	mysqli_query($conn,$sql);
	header('location:khoa.php?page_layout=danhsach');

?>