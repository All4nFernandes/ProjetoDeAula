<?php
include_once __DIR__ . "/../config/Database.php";
include_once __DIR__ . "/../config/env.php";

class LoginModel
{
    protected $conn;
    private $tabela = "login";

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function login($usuario, $senha){
    
        $query = "SELECT * FROM $this->tabela WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true se o login for bem-sucedido

    }
}


?>