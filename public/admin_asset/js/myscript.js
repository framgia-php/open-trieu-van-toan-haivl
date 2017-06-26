$(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
//delay alert
$("div.alert").delay(3000).slideUp();

//delete
function confirm_delete(msg){
    if (window.confirm(msg)) {
        return true;
    }
    return false;
}

//add more images
$('#addimage').click(function() {
    $('#insert').append("<div class='form-group'><input type='file' name='fImgdetails[]' /></div>");
});

//delete-image 
$('a#del_img').click(function() {
    var idHinh = $(this).parent().find('img').attr('idHinh');
    var rid = $(this).parent().find('img').attr('id');
    var self = $(this);
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    
    $.ajax({
    url: '/admin/image/delimg/'+ idHinh,
    type: 'GET',
    cache: false,
    data: {'idHinh':idHinh},
    success: function(data) 
    {
        if (data.trim() == 'success') {
            self.closest('.form-group').remove();
        } else {

            alert('Errors !! Contact admin');
        }
    }
    });
});


