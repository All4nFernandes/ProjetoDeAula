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

<?php
    require_once __DIR__ . '\..\components\head.php'
?>


<body>

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
                    <td><?php echo $item['id'] ?></td>
                    <td><?php echo $item['nome'] ?></td>
                    <td>
                        <!-- METHODS - Get / Post -->
                        <form class="reset-form" action="visualizar.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button class="btn-icon">
                                <span class="material-symbols-outlined tabela">
                                    visibility
                                </span>
                            </button>
                        </form>

                        <form class="reset-form" action="cadastro.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button class="btn-icon">
                                <span class="material-symbols-outlined tabela">
                                    edit
                                </span>
                            </button>
                        </form>

                        <form class="reset-form" action="excluir.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <button class="btn-icon" onclick="return confirm('Tem certeza que deseja excluir o filme?')">
                                <span class="material-symbols-outlined tabela">
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