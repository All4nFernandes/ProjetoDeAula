<?php

require_once __DIR__ . "..\..\config\Database.php";

class ArtigoModel
{

    protected $conn;
    private $tabela = "artigo";


    public function __construct()
    {

        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar()
    {
        $query = "
            SELECT 
                artigo.id,
                artigo.titulo,
                artigo.conteudo,
                artigo.id_categoria,
                categoria.nome AS nome_categoria
            FROM artigo
            INNER JOIN categoria ON artigo.id_categoria = categoria.id
        ";

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
        return $stmt->fetchAll();
    }

    public function excluir($id): mixed
    {
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function novoArtigo($titulo, $id_categoria, $conteudo)
    {
        $query = "INSERT INTO $this->tabela (titulo, id_categoria, conteudo) VALUES (:titulo, :id_categoria, :conteudo)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->bindParam(":conteudo", $conteudo);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function editar($id, $titulo, $id_categoria, $conteudo)
    {
        $query = "UPDATE $this->tabela
                  SET titulo = :titulo, id_categoria = :id_categoria, conteudo = :conteudo WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":id_categoria", $id_categoria);
        $stmt->bindParam(":conteudo", $conteudo);
        return $stmt->rowCount() > 0;
    }


}