<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`monhoc` WHERE `idMonhoc` = '$_GET[idMonhoc]' ";
	mysqli_query($conn,$sql);
	header('location:monhoc.php?page_layout=danhsach');

?>