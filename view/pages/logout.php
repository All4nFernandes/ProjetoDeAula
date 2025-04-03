<?php
session_start();
session_destroy(); // Destroi a sessão
header("Location: /site-adm-grid/index.php?status=logout"); // Redireciona para a página inicial
exit();
?>