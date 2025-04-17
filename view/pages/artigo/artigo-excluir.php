<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\ArtigoModel.php";
require_once __DIR__ . "\..\..\components/head.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];

    if (!empty($id)) {
        $artigo = new ArtigoModel();
        $sucesso = $artigo->excluir($id);
        if ($sucesso) {
            return header("Location: /site-adm-grid/view/pages/artigos.php?mensagem=sucesso");
        } else {
            return header("Location: /site-adm-grid/view/pages/artigos.php?mensagem=erro");
        }
    }
}

return header("Location:/site-adm-grid/view/pages/artigos.php");


?>