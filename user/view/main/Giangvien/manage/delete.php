<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`giangvien` WHERE `idGiangvien` = '$_GET[idGiangvien]' ";
	mysqli_query($conn,$sql);
	header('location:giangvien.php?manage=danhsach');

?>