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
            parent::__CONSTRUCT(self::DSN, self::USER, self::PASS, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

      } catch (PDOException $e) {
         throw new Exception('Falló la conexión con la DB: ' . $e->getMessage());
         // echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         // exit;
      }
   }
   }
?>