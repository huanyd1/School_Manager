
function InvalidMsg(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Tên Sinh viên không được để trống');
    }
    // else if (textbox.validity.typeMismatch){
    //     textbox.setCustomValidity('please enter a valid email address');
    // }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
