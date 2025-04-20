<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\UsuarioModel.php";
require_once __DIR__ . "\..\..\components\head.php";

$usuarioModel = new UsuarioModel();
$usuario = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];

    $sucesso = $usuarioModel->novoUsuario($nome, $email, $data_nascimento, $cpf, $telefone);

    if ($sucesso) {
        return header("Location: usuarios.php?mensagem=sucesso");
    } else {
        return header("Location: usuarios.php?mensagem=erro");
    }
}
?>

<body>
    <?php require_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main class="main-editar">
        <section class="form-container-devmedia">
            <form class="form-devmedia" action="" method="POST">
                <h1 class="title-devmedia">Cadastrar Usuario</h1>

                <div class="form-group-devmedia">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" required maxlength="11">
                </div>

                <div class="form-group-devmedia">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" required maxlength="11">
                </div>

                <button class="btn-devmedia" type="submit">
                    <span class="material-symbols-outlined">save</span>
                    Salvar
                </button>
            </form>

            <form class="form-devmedia" action="usuarios.php" method="GET">
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