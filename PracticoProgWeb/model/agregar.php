<?php 
    include_once("conexion.php");
        try {
        $con = new Conexion();
        $sql = "INSERT INTO clientes (cedula, nombre, apellido, direccion, telefono, email) 
                VALUES (?,?,?,?,?,?)";
        $insert = $con->prepare($sql);
        $insert->bindParam(1, $_POST["p_cedula"], PDO::PARAM_INT);
        $insert->bindParam(2, $_POST["p_nombre"], PDO::PARAM_STR, 64);
        $insert->bindParam(3, $_POST["p_apellido"], PDO::PARAM_STR, 64);
        $insert->bindParam(4, $_POST["p_direccion"], PDO::PARAM_STR, 255);
        $insert->bindParam(5, $_POST["p_telefono"], PDO::PARAM_STR, 16);
        $insert->bindParam(6, $_POST["p_mail"], PDO::PARAM_STR, 128);
        $insert->execute();
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
?>