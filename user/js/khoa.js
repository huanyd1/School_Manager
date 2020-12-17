
function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Tên khoa không được để trống');
    }
    return true;
}
