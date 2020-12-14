<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`diemthi` WHERE `idSinhvien` = '$_GET[idSinhvien]' and `idMonhoc` = '$_GET[idMonhoc]' ";
	mysqli_query($conn,$sql);
	header('location:diemthi.php?manage=manage');

?>