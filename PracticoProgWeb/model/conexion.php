<?php 
    class Conexion extends PDO
    {
        private const USER = "root";
        private const PASS = "";
        private const DB = "directorio";
        private const PORT = "3306";
        private const HOST = "localhost" . ":" . self::PORT;
        private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=utf8";
    }
    
?>