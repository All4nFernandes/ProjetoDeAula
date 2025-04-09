<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\CategoriaModel.php";
require_once __DIR__ . "\..\..\components/head.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];

    $categoriasModel = new CategoriaModel();
    $sucesso = $categoriasModel->novaCategoria($nome);

    if ($sucesso) {
        return header("location: categoria.php?mensagem=sucesso");
    } else {
        return header("location: categoria.php?mensagem=erro");
    }
}
?>

<body>
    <?php
    require_once __DIR__ . "../../components/sidebar.php";
    ?>
    <main>
        <h1 class="title-h1-devmedia table-h1">Cadastrar nova categoria</h1>
        <section class="cadastrar_categoria">
            <form action="" method="POST">
                <div>
                    <label for="nome">Categoria</label>
                    <input type="text" name="nome" required>
                </div>
                <button class="btn-padrao" type="submit">
                    <span class="material-symbols-outlined">save</span>
                </button>
            </form>

            <!-- Voltar para a listagem -->
            <form action="categoria.php" method="GET">
                <button class="btn-padrao" type="submit">
                    <span class="material-symbols-outlined  ">arrow_back</span>
                </button>
            </form>
        </section>
    </main>
</body>

</html>