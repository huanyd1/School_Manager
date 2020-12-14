<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`user` WHERE `idUser` = '$_GET[idUser]' ";
	mysqli_query($conn,$sql);
	header('location:list.php');

?>