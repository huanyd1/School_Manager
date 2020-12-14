function check() {

    // check user
    var x = document.forms["login"]["user"].value;
    if (x == "") {
        alert("Bạn chưa nhập email hoặc tên đăng nhập");
        return false;
    }
    // check mật khẩu
    var b = document.forms["login"]["pwd"].value;
    if (b == "") {
        alert("Bạn chưa nhập Password");
        return false;
    }


}