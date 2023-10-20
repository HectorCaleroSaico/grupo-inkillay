$(document).ready(function() {
    $('#cambiar').click(function(e) {
        e.preventDefault();
        var token = $('#token').val();
        var pass_1 = $('#pass_1').val();
        var pass_2 = $('#pass_2').val();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + '/recuperarcontrasena/validarToken';
        var formData = new FormData();
        formData.append('token', token);
        formData.append('pass_1', pass_1);
        formData.append('pass_2', pass_2);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
        request.onreadystatechange = function() {
        if (request.readyState != 4) return;
        if (request.status == 200) {
            var objData = JSON.parse(request.responseText);
            if (objData.status) {
                Swal.fire({
                    position: 'center',
                    icon: objData.type,
                    title: objData.msg,
                    showConfirmButton: true,
                    allowOutsideClick : false,
                    allowEscapeKey : false,
                    allowEnterKey : false,
                    iconColor: "#16e15d",
                    confirmButtonColor:"#16e15d"
                }).then((result) => {
                        if (result.isConfirmed) { 
                              window.location.href=base_url ;
                        }
                    });
            } else {
                Swal.fire({
                    position: 'center',
                    icon: objData.type,
                    title: objData.msg,
                    showConfirmButton: true,
                    allowOutsideClick : false,
                    allowEscapeKey : false,
                    allowEnterKey : false,
                    iconColor: "#16e15d",
                    confirmButtonColor:"#16e15d"
                }).then((result) => {
                    if (result.isConfirmed) { 
                          window.location.reload();
                    }
                });
            }
        } else {
            Swal.fire({
                position: 'center',
                icon: objData.type,
                title: objData.msg,
                showConfirmButton: true,
                allowOutsideClick : false,
                allowEscapeKey : false,
                allowEnterKey : false,
                iconColor: "#16e15d",
                confirmButtonColor:"#16e15d"
            }).then((result) => {
                if (result.isConfirmed) { 
                      window.location.reload();
                }
            });
        }
        return false;
        }
    });
});
  
  