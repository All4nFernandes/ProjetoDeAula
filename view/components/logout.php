<?php
session_start();
session_destroy();
echo "Redirecionando...";
header("Location: /site-adm-grid/view/pages/home.php?status=logout");
exit();
?>