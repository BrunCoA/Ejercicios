<?php 
include_once ("conexion.php");
    try {

        //$obj_conexion = Conexion::getConexion();
        $con = new Conexion();

        if (!$con) {
            echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
        } else {
            /* ejemplo de una consulta */

            $consulta = "SELECT * FROM clientes";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);

            if ($resultado) {
                echo '<table id="datos" class="table table-bordered table-striped">
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
                </thead>';
                foreach ($resultado as $fila) {

                    echo "<tr>
                    <td>" . $fila["id_cliente"] . "</td>";
                    echo "<td>" . $fila["cedula"] . "</td>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["apellido"] . "</td>";
                    echo "<td>" . $fila["direccion"] . "</td>";
                    echo "<td>" . $fila["telefono"] . "</td>";
                    echo "<td>" . $fila["email"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                 echo "No hay Registros";
            }
        }
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>