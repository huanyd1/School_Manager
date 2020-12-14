<?php
    include "../../../../config/config.php";
	$sql = "DELETE FROM `quanlytruonghoc`.`bomon` WHERE `idBomon` = '$_GET[idBomon]' ";
	mysqli_query($conn,$sql);
	header('location:bomon.php?manage=danhsach');

?>