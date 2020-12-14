function check() {

    // check họ
    var a = document.forms["register"]["name"].value;
    if (a == "") {
        alert("Bạn chưa nhập họ");
        return false;
    }
    // check tên
    var b = document.forms["register"]["name_ten"].value;
    if (b == "") {
        alert("Bạn chưa nhập tên");
        return false;
    }

    var c = document.forms["register"]["email"].value
    if(c == ""){
        alert("Bạn chưa nhập email")
        return false;
    }

    var d = document.forms["register"]["username"].value
    if(d == ""){
        alert("Bạn chưa điền tên đăng nhập")
        return false;
    }


    var e = document.forms["register"]["pwd"].value
    if(e == ""){
        alert("Bạn chưa nhập mật khẩu")
        return false;
    }

    var f = document.forms["register"]["repwd"].value
    if(f == ""){
        alert("Bạn chưa nhập lại mật khẩu")
        return false;
    }
    if (f != e){
        alert("Mật khẩu không giống nhau")
        return false;
    }else{

    }








}