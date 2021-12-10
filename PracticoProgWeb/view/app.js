
$(function () {
    $('#buscar_m').on('click', onClickBotonBuscar);

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

    $(this).on('submit', '#frmModificar', function (event) {
        event.preventDefault();
        var bcedula = $('#b_txtCi').val();
        var cedula = $('#mtxtCi').val();
        var nombre = $('#mtxtNom').val();
        var apellido = $('#mtxtApe').val();
        var direccion = $('#mtxtDir').val();
        var telefono = $('#mtxtTel').val();
        var mail = $('#mtxtMail').val();
        $.ajax({
            url: "../model/modificar.php",
            method: 'POST',
            data: {
                b_cedula: bcedula,
                p_cedula: cedula,
                p_nombre: nombre,
                p_apellido: apellido,
                p_direccion: direccion,
                p_telefono: telefono,
                p_mail: mail
            }, 
            success: function (data) {
                $('#frmModificar')[0].reset();
                $('#frmBuscar_m')[0].reset();
                $('#m_modificar').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
    
    $(this).on('submit', '#frmEliminar', function (event) {
        event.preventDefault();
        var cedula = $('#etxtCi').val();
        $.ajax({
            url: "../model/eliminar.php",
            method: 'POST',
            data: {
                p_cedula: cedula
            }, 
            success: function (data) {
                $('#frmEliminar')[0].reset();
                $('#m_eliminar').modal('hide');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
});

function onClickBotonBuscar(){
    $('#m_bModificar').modal('hide');
}
