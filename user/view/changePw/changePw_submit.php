<?php
    include '../../../config/config.php';
    $oldPw = $_POST["old"];
    $newPw = $_POST["pwd"];

    $oldPw = md5($oldPw);
    $newPw = md5($newPw);
    $sql = "SELECT * FROM `quanlytruonghoc`.`user` WHERE `password` = '$oldPw'";

        $old = mysqli_query($conn,$sql); 
        if(mysqli_num_rows($old) > 0){
            $sql = "UPDATE `quanlytruonghoc`.`user` SET `password` = '$newPw'";
            mysqli_query($conn,$sql);
            header('location:../main/index.php');
            echo "Đổi mật khẩu thành công";
        }
        else{
            echo "Thông tin nhập vào không chính xác, vui lòng kiểm tra lại";
        }
?>