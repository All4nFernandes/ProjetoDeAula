<?php

require_once __DIR__ . "..\..\config\Database.php";

class UsuarioModel
{

    protected $conn;
    private $tabela = "usuario";

    public function __construct()
    {

        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar()
    {
        $query = "SELECT * FROM $this->tabela";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();


    }

    public function buscarPorId($id)
    {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir($id): mixed
    {
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }


    public function novoUsuario($nome, $email, $data_nascimento, $cpf, $telefone)
    {
        $query = "INSERT INTO $this->tabela (nome, email, data_nascimento, cpf, telefone) VALUES (:nome, :email, :data_nascimento, :cpf, :telefone)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function editar($id, $nome, $email, $data_nascimento, $cpf, $telefone)
    {
        $query = "UPDATE $this->tabela
                  SET nome = :nome, email = :email, data_nascimento = :data_nascimento, cpf = :cpf, telefone = :telefone WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":data_nascimento", $data_nascimento);
        $stmt->bindParam(":cpf", $cpf);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }


}
