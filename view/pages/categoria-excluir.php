<?php

require_once __DIR__ . "\..\..\Model\CategoriaModel.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];

    if (!empty($id)) {
        $categoria = new CategoriaModel();
        $sucesso = $categoria->excluir($id);
        if ($sucesso) {
            return header("Location: /site-adm-grid/view/pages/categoria.php?mensagem=sucesso");
        } else {
            return header("Location: /site-adm-grid/view/pages/categoria.php?mensagem=erro");
        }
    }
}

return header("Location:/site-adm-grid/view/pages/categoria.php");


?>