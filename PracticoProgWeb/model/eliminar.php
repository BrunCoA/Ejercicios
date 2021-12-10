<?php 
    include_once("conexion.php");
        try {
        $con = new Conexion();
        $sql = "DELETE FROM clientes WHERE cedula=?";
        $insert = $con->prepare($sql);
        $insert->bindParam(1, $_POST["p_cedula"], PDO::PARAM_INT);
        $insert->execute();
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
?>