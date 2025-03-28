<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    <link rel="stylesheet" href="/../site-adm-grid/view/assets/css/components/sidebar.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="logo" src="/../site-adm-grid/view/assets/img/logo.jpeg" alt="logo">

            <!-- botao para fechar e abrir a sidebar -->
            <button class="voltar sidebar-voltar">
                <span class="material-symbols-outlined"> chevron_left </span>
            </button>
        </header>
        <nav class="sidebar-nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/../site-adm-grid/index.php">
                        <span class="nav-icone material-symbols-outlined"> home </span>
                        <span class="nav-label">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/../site-adm-grid/view/pages/categoria.php">
                        <span class="nav-icone material-symbols-outlined"> category </span>
                        <span class="nav-label">Categoria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/../site-adm-grid/view/pages/produtos.php">
                        <span class="nav-icone material-symbols-outlined"> news </span>
                        <span class="nav-label">Artigos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/../site-adm-grid/view/pages/usuarios.php">
                        <span class="nav-icone material-symbols-outlined"> person </span>
                        <span class="nav-label">Usuarios</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <script src="/../site-adm-grid/view/assets/js/sidebar.js" defer></script>
</body>

</html>