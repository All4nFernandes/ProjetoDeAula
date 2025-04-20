<?php

require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\UsuarioModel.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];

    if (!empty($id)) {
        $usuario = new UsuarioModel();
        $sucesso = $usuario->excluir($id);
        if ($sucesso) {
            return header("Location: /site-adm-grid/view/pages/usuario/usuarios.php?mensagem=sucesso");
        } else {
            return header("Location: /site-adm-grid/view/pages/usuario/usuarios.php?mensagem=erro");
        }
    }
}

return header("Location:/site-adm-grid/view/pages/usuario/usuarios.php");


?>