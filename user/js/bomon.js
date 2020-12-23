
function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Tên Bộ môn không được để trống');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
