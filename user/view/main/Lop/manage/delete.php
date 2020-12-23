<?php
    include "../../../../config/config.php";
  
	$sql = "DELETE FROM `quanlytruonghoc`.`lop` WHERE `idLop` = '$_GET[idLop]' ";
	mysqli_query($conn,$sql);
	header('location:lop.php?page_layout=danhsach');

?>