<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main>
        <aside class="sidebar">
            <header class="sidebar-header">
                Sidebar

                <!-- botao para fechar e abrir a sidebar -->
                <button class="voltar">
                    <span class="material-symbols-outlined"> chevron_left </span>
                </button>
            </header>
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link" href="/../site-adm-grid/view/pages/index.php">
                            <span class="material-symbols-outlined"> home </span>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/../site-adm-grid/view/pages/categorias.php">
                            <span class="material-symbols-outlined"> category </span>
                            Categoria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/../site-adm-grid/view/pages/produtos.php">
                            <span class="material-symbols-outlined"> inventory_2 </span>
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/../site-adm-grid/view/pages/usuarios.php">
                            <span class="material-symbols-outlined"> person </span>
                            Usuarios
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
    </main>
</body>

</html>