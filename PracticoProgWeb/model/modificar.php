<?php 
    include_once("conexion.php");
        try {
        $con = new Conexion();
        $bCi=$_POST['b_cedula'];
        $sql = "UPDATE clientes 
                SET cedula=?, nombre=?, apellido=?, direccion=?, telefono=?, email=? 
                WHERE cedula=$bCi";
        $update = $con->prepare($sql);
        $update->bindParam(1, $_POST["p_cedula"], PDO::PARAM_INT);
        $update->bindParam(2, $_POST["p_nombre"], PDO::PARAM_STR, 64);
        $update->bindParam(3, $_POST["p_apellido"], PDO::PARAM_STR, 64);
        $update->bindParam(4, $_POST["p_direccion"], PDO::PARAM_STR, 255);
        $update->bindParam(5, $_POST["p_telefono"], PDO::PARAM_STR, 16);
        $update->bindParam(6, $_POST["p_mail"], PDO::PARAM_STR, 128);
        $update->execute();
    } catch (PDOException $e) {
        throw new Exception($e->getMessage());
    }
?>