<?php
    include '../../../config/config.php';
    $name = $_POST["name"];
    $name_ten = $_POST["name_ten"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $sql = "SELECT * FROM `quanlytruonghoc`.`user` WHERE `HoNd` = '$name' AND `TenNd` = '$name_ten' AND `Email` = '$email' AND `Username` = '$username'";
        $old = mysqli_query($conn,$sql); 
        if(mysqli_num_rows($old) > 0){
            //Đặt lại mật khẩu mặc định : 123456
            $sql = "UPDATE `quanlytruonghoc`.`user` SET `Password` = 'e10adc3949ba59abbe56e057f20f883e' WHERE `HoNd` = '$name' AND `TenNd` = '$name_ten' AND `Email` = '$email' AND `Username` = '$username'";
            mysqli_query($conn,$sql);
            header('location:../login/login.php');
            echo "Đổi mật khẩu thành công";
        }
        else{
            echo "Thông tin nhập vào không chính xác, vui lòng kiểm tra lại";
        }
?>