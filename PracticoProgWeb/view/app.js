
$(function () {
  
    $(this).on('submit', '#frmAgregar', function (event) {
        event.preventDefault();
        var cedula = $('#txtCi').val();
        var nombre = $('#txtNom').val();
        var apellido = $('#txtApe').val();
        var direccion = $('#txtDir').val();
        var telefono = $('#txtTel').val();
        var mail = $('#txtMail').val();
        $.ajax({
            url: "../model/agregar.php",
            method: 'POST',
            data: {
                p_cedula: cedula,
                p_nombre: nombre,
                p_apellido: apellido,
                p_direccion: direccion,
                p_telefono: telefono,
                p_mail: mail
            }, 
            success: function (data) {
                $('#frmAgregar')[0].reset();
                $('#m_agregar').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
});
