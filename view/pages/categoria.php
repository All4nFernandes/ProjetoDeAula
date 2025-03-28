<?php
require_once __DIR__ . "/../../config/env.php";
require_once __DIR__ . "\..\..\Model\CategoriaModel.php";


if (isset($_GET["id"])) {
    $modo = "EDICAO";
    $categoriaModel = new CategoriaModel();
    $categoria = $categoriaModel->buscarPorId($_GET["id"]);
} else {
    $modo = "CRIACAO";
    $categoria = [
        "id" => "",
        "nome" => "",
    ];
}


$categoriaModel = new CategoriaModel();
$lista = $categoriaModel->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/../site-adm-grid/view/assets/css/style.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $item) { ?>
                <tr>
                    <td><?php echo $categoria['id'] ?></td>
                    <td><?php echo $categoria['nome'] ?></td>
                    <td>
                        <!-- METHODS - Get / Post -->
                        <form action="visualizar.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $categoria['id'] ?>">
                            <button>
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </button>
                        </form>

                        <form action="cadastro.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button>
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </button>
                        </form>

                        <form action="excluir.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button onclick="return confirm('Tem certeza que deseja excluir o filme?')">
                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>