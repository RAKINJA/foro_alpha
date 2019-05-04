<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    public function __construct(){
        $this->host    = 'localhost';     
        $this->db      = 'forodb';
        $this->user    = 'root';
        $this->pass    = 'misteryahonapsis';
        $this->charset = 'utf8mb4';
    }

    public function conectar(){
        try{
            $conn = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $opciones = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

            $pdo      = new PDO($conn,$this->user,$this->pass,$options);            
        }catch(PDOException $e){
            print_r("Error de Conexion: ".$e->getMessage() );
        }
    }
}
?>