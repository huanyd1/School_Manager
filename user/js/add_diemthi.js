function check() {

    // check user
    var x = document.forms["add"]["idSinhvien"].value;
    if (x == "") {
        alert("Bạn chưa chọn tên sinh viên");
        return false;
    }
    // check mật khẩu
    var b = document.forms["add"]["idMonhoc"].value;
    if (b == "") {
        alert("Bạn chưa chọn môn học");
        return false;
    }

    var c = document.forms["add"]["lanThi"].value;
    if (c == "") {
        alert("Bạn chưa nhập lần thi");
        return false;
    }


    var d = document.forms["add"]["diemthi_sv"].value;
    if (d == "") {
        alert("Bạn chưa nhập điểm thi");
        return false;
    }


}