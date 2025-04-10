<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\ArtigoModel.php";
require_once __DIR__ . "\..\..\components/head.php";

$artigoModel = new ArtigoModel();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    $sucesso = false;

    if (!empty($id)) {
        //fluxo para editar

        $nome = $_POST["nome"];

        $sucesso = $artigoModel->editar($id, $titulo, $id_categoria, $conteudo)
    } else {


        $nome = $_POST["nome"];

        $sucesso = $artigoModel->novaCategoria($nome);
    }

    if ($sucesso) {
        return header("Location: categoria.php?mensagem=sucesso");
    } else {
        return header("Location: categoria.php?mensagem=erro");
    }
} else if ($_SERVER["REQUEST_METHOD"] === "GET") {


    $categoria = null;

    if (!empty($_GET['id'])) {

        $categoria = $categoriaModel->buscarPorId($_GET['id']);
    } else {
        $categoriaModel = new CategoriaModel();
    }

}

?>

<body>

    <?php require_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main>
        <section class="form-container-devmedia">
            <form class="form-devmedia" action="categoria-editar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $categoria->id ?>">

                <h1 class="title-devmedia">Editar Categoria</h1>

                <div class="form-group-devmedia">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?php echo $categoria->nome; ?>" required>
                </div>

                <button class="btn-devmedia" type="submit">
                    <span class="material-symbols-outlined">save</span>
                    Salvar
                </button>
            </form>

            <form class="form-devmedia" action="categoria.php" method="GET">
                <button class="btn-devmedia" type="submit">
                    <span class="material-symbols-outlined">arrow_back</span>
                    Voltar
                </button>
            </form>
        </section>
    </main>
    <?php require_once __DIR__ . "../../components/footer.php"; ?>
</body>

</html>