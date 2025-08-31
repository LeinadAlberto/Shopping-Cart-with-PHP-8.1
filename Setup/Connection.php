<?php 

class Connection {
    private $server = "localhost";
    private $database = "carrito";
    private $charset = "UTF8";
    private $user = "root";
    private $password = "";

    public $pdo = null;

    function __construct() {
        $this->pdo = new PDO(
            "mysql:host={$this->server};dbname={$this->database};charset={$this->charset}", 
            $this->user, 
            $this->password
        );

        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}