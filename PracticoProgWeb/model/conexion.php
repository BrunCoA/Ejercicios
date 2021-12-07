<?php 
    class Conexion extends PDO
    {
        private const USER = "root";
        private const PASS = "";
        private const DB = "directorio";
        private const PORT = "3306";
        private const HOST = "localhost" . ":" . self::PORT;
        private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=utf8";

        public function __CONSTRUCT()
        {
           try {
              parent::__CONSTRUCT(self::DSN, self::USER, self::PASS);
                
           } catch (PDOException $e) {
              throw new Exception('Falló la conexión con la DB: ' . $e->getMessage());
           }
        }
     
    }
    
?>