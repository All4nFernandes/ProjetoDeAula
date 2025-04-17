<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\ArtigoModel.php";
require_once __DIR__ . "\..\..\components/head.php";


if (isset($_GET["id"])) {
    $modo = "EDICAO";
    $ArtigoModel = new ArtigoModel();
    $artigo = $ArtigoModel->buscarPorId($_GET["id"]);
} else {
    $modo = "CRIACAO";
    $categoria = [
        "id" => "",
        "nome" => "",
    ];
}


$ArtigoModel = new ArtigoModel();
$lista = $ArtigoModel->listar();

?>

<body>

    <?php require_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main>
        <div>
            <h1 class="title-h1-devmedia table-h1">Artigos</h1>
        </div>
        <div>
            <a class="link-btn" href="Artigo-cadastro.php">
                <button type="button" class="btn-padrao btn-new">Novo</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Conteudo</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php foreach ($lista as $item) { ?>
                    <tr class="body-table-row">
                        <td class="body-table-id"><?php echo $item['id'] ?></td>
                        <td class="body-table-nome"><?php echo $item['titulo'] ?></td>
                        <td class="body-table-nome"><?php echo $item['nome_categoria'] ?></td>
                        <td class="body-table-nome"><?php echo $item['conteudo'] ?></td>
                        <td>
                            <form action="artigo-editar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                <button class="btn-icon">
                                    <span class="material-symbols-outlined table">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="artigo-excluir.php" method="POST">
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
    <?php require_once __DIR__ . "/../../components/footer.php"; ?>

</body>

</html>