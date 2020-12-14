<?php
session_start();
include '../../../config/config.php';
    $email = $_POST["username"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $sql1 = "SELECT * FROM user WHERE Email = '$email' AND password = '$password' ";
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
    $user = mysqli_query($conn, $sql);
    $email_login = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($user) > 0 || mysqli_num_rows($email_login) > 0) {
        $_SESSION["user"] = $username;
        header("location:../main/index.php");
    } else {
        header("location:login.php");
        echo "<script>alert(\"Bạn cần đăng nhập trước\");</script>";
    }
?>