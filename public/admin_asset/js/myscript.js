
//delay alert
$("div.alert").delay(3000).slideUp();

//delete
function confirm_delete(msg){
    if (window.confirm(msg)) {
        return true;
    }
    return false;
}

