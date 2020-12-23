<?php
    include '../../../config/config.php';
    //Lỗi if
    //if(isset($_POST['submit']) && $_POST["name"] != '' && $_POST['name_ten'] != '' && $_POST['email'] != '' && $_POST['gender'] != '' && $_POST['username'] != '' && $_POST['pwd'] != '' && $_POST['repwd'] != '' && $_POST['note'] != ''){
        //Thực hiện xử lý khi người dùng nhấn nút submit và điền đầy đủ thông tin
        $name = $_POST["name"];
        $name_ten = $_POST["name_ten"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $repwd = $_POST["repwd"];
        $note = $_POST["note"];
        if($pwd != $repwd){
            header("location:register.php");
            die();
        }
        $sql = "SELECT * FROM `quanlytruonghoc`.`user` WHERE `Username` = '$username'";
        $old = mysqli_query($conn,$sql); 
        $pwd = md5($pwd);
        if(mysqli_num_rows($old) > 0){
            header("location:register.php");
            echo "Tài khoản đã tồn tại, vui lòng nhập tài khoản khác";
            die();
        }
        $sql = "INSERT INTO `quanlytruonghoc`.`user` VALUES ('','$name','$name_ten','$email','$username','$pwd','$gender','$note',0)";
        mysqli_query($conn,$sql);
        header('location:../login/login.php');
        echo "Đã đăng ký thành công";
    //}
   // else{
        //header("location:register.php");
       // echo "Chưa điền đủ thông tin";
    //}
?>