<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\CategoriaModel.php";
require_once __DIR__ . "\..\..\components/head.php";


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

<body>

    <?php require_once __DIR__ . "../../../components/sidebar.php"; ?>

    <main>
        <div>
            <h1 class="title-h1-devmedia table-h1">DevMedia</h1>
        </div>
        <div>
            <a class="link-btn" href="categoria-cadastro.php">
                <button type="button" class="btn-padrao btn-new">Novo</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $item) { ?>
                    <tr class="body-table-row">
                        <td class="body-table-id"><?php echo $item['id'] ?></td>
                        <td class="body-table-nome"><?php echo $item['nome'] ?></td>
                        <td>
                            <form action="categoria-editar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                <button class="btn-icon">
                                    <span class="material-symbols-outlined table">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="categoria-excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                <button class="btn-icon"
                                    onclick="return confirm('Tem certeza que deseja excluir a categoria?')">
                                    <span class="material-symbols-outlined table">
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

</body>

</html>