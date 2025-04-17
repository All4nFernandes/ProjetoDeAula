<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\ArtigoModel.php";
require_once __DIR__ . "\..\..\..\Model\CategoriaModel.php";
require_once __DIR__ . "\..\..\components/head.php";

$artigoModel = new ArtigoModel();
$categoriaModel = new CategoriaModel();

$artigo = null;
$categorias = $categoriaModel->listar();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $id_categoria = $_POST["id_categoria"];
    $conteudo = $_POST["conteudo"];

    $sucesso = $artigoModel->novoArtigo($titulo, $id_categoria, $conteudo);

    if ($sucesso) {
        return header("Location: artigos.php?mensagem=sucesso");
    } else {
        return header("Location: artigos.php?mensagem=erro");
    }
}
?>


<body>
    <?php require_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main class="main-editar">
        <section class="form-container-devmedia">
            <form class="form-devmedia" action="" method="POST">

                <h1 class="title-devmedia">Novo Artigo</h1>

                <div class="form-group-devmedia">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="id_categoria">Categoria:</label>
                    <select name="id_categoria" required>
                        <option value="">Selecione uma categoria</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?php echo $categoria['id']; ?>">
                                <?php echo $categoria['nome']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group-devmedia">
                    <label for="conteudo">Conteúdo:</label>
                    <textarea name="conteudo" required></textarea>
                </div>

                <button class="btn-devmedia" type="submit">
                    <span class="material-symbols-outlined">save</span>
                    Salvar
                </button>
            </form>
            <form class="form-devmedia" action="artigos.php" method="GET">
                <button class="btn-devmedia" type="submit">
                    <span class="material-symbols-outlined">arrow_back</span>
                    Voltar
                </button>
            </form>

        </section>
    </main>

    <?php require_once __DIR__ . "/../../components/footer.php"; ?>
</body>

</html>