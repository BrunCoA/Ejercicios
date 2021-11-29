<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Clientes</h1>
        <div>
            <button id="agregar" data-bs-toggle="modal" data-bs-target="#agregar">
                Agregar Cliente
            </button>
            <button id="modificar" data-bs-toggle="modal" data-bs-target="#modificar">
                Agregar Cliente
            </button>
            <button id="eliminar" data-bs-toggle="modal" data-bs-target="#eliminar">
                Agregar Cliente
            </button>
        </div>
        <table id="datos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>

<!--    Modal AGREGAR   -->
<div class="modal" id="agregar" tabindex="-1">
    <div>
        <form method="POST" id="frmAgregar">
            <div>
                <div>
                    <h5>Agregar Cliente</h5>
                    <a href=""><img src="CSS/cerrar.svg" alt=""></a>
                </div>
            </div>
        </form>
    </div>
</div>

<!--    Modal MODIFICAR   -->

<!--    Modal ELIMINAR   -->
