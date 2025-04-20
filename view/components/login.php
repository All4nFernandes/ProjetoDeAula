<?php
session_start();
require_once __DIR__ . "/../../Model/LoginModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["username"];
    $senha = $_POST["senha"];

    $loginModel = new LoginModel();

    if ($loginModel->login($usuario, $senha)) {
        $_SESSION["usuario_logado"] = $usuario;
        header("Location: /site-adm-grid/view/pages/home.php?status=sucesso");
        exit();
    } else {
        header("Location: /site-adm-grid/view/pages/home.php?status=erro");
        exit();
    }
}
?>