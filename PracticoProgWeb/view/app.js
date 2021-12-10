
$(function () {
    $('#buscar_m').on('click', onClickBotonBuscar);
    $('#cancelar').on('click', onClickBotonCancelar);

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
                location.reload();
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
                location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
    
        
    
    $(this).on('submit', '#frmEliminar', function (event) {
        event.preventDefault();
        $('#m_eliminar').modal('hide');
    })

    $(this).on('click', '#aceptar', function (event) {
        var cedula = $('#etxtCi').val();
        $.ajax({
            url: "../model/eliminar.php",
            method: 'POST',
            data: {
                p_cedula: cedula
            }, 
            success: function (data) {
                $('#frmEliminar')[0].reset();
                $('#m_confirmar').modal('hide');
                location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});

function onClickBotonBuscar(){
    $('#m_bModificar').modal('hide');
    var bcedula = $('#b_txtCi').val();
    $('#mtxtCi').setAttribute('value', 'bcedula');
}

function onClickBotonCancelar(){
    $('#m_confirmar').modal('hide');
}
