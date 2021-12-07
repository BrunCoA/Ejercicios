<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.1/kt-2.6.2/r-2.2.9/sl-1.3.3/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/clientes.css"/>
</head>
<body>
    <div class="container box">
        <h1 align="center">Lista de Clientes</h1>
        <br>
        <div>
            <div align="left">
                <button id="btn_agregar" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#c_agregar">
                    Agregar Cliente
                </button>
                <button id="btn_modificar" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#c_modificar">
                    Modificar Cliente
                </button>
                <button id="btn_eliminar" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#c_eliminar">
                    Eliminar Cliente
                </button>
            </div>
            <br>
            <?php
                include("../model/listar.php")
            ?>
        </div>
    </div>
</body>
</html>

<!--    Modal AGREGAR   -->
<div class="modal fade" id="c_agregar" tabindex="-1" aria-labelledby="titleA">
    <div class="modal-dialog">
        <form method="POST" id="frmAgregar">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleA">Agregar Cliente</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="txtCi">Cédula</label>
                    <input type="number" name="txtCi" id="txtCi" class="form-control">
                    <br>

                    <label for="txtNom">Nombre</label>
                    <input type="text" name="txtNom" id="txtNom" class="form-control">
                    <br>

                    <label for="txtApe">Apellido</label>
                    <input type="text" name="txtApe" id="txtApe" class="form-control">
                    <br>

                    <label for="txtDir">Dirección</label>
                    <input type="text" name="txtDir" id="txtDir" class="form-control">
                    <br>

                    <label for="txtTel">Teléfono</label>
                    <input type="tel" name="txtTel" id="txtTel" class="form-control">
                    <br>

                    <label for="txtMail">E-Mail</label>
                    <input type="email" name="txtMail" id="txtMail" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="accion" id="a_accion" value="Agregar" class="btn btn-outline-success">
                </div>
            </div>
        </form>
    </div>
</div>

<!--    Modal MODIFICAR   -->
<div class="modal fade" id="c_modificar" tabindex="-1" aria-labelledby="titleM">
    <div class="modal-dialog">
        <form method="POST" id="frmModificar">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleM">Modificar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="txtCi">Cédula</label>
                    <input type="number" name="txtCi" id="txtCi" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="accion" id="m_accion" value="Modificar" class="btn btn-outline-primary">
                </div>
            </div>
        </form>
    </div>
</div>

<!--    Modal ELIMINAR   -->
<div class="modal fade" id="c_eliminar" tabindex="-1" aria-labelledby="titleE">
    <div class="modal-dialog">
        <form method="POST" id="frmEliminar">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleE">Eliminar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="txtCi">Cédula</label>
                    <input type="number" name="txtCi" id="txtCi" class="form-control">
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="accion" id="e_accion" value="Eliminar" class="btn btn-outline-danger">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/jszip-2.5.0/dt-1.10.25/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/date-1.1.1/kt-2.6.2/r-2.2.9/sl-1.3.3/datatables.min.js"></script>