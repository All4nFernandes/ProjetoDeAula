<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\UsuarioModel.php";
require_once __DIR__ . "\..\..\components/head.php";

$usuarioModel = new UsuarioModel();
$usuario = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data_nascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];

    $sucesso = $usuarioModel->editar($id, $nome, $email, $data_nascimento, $cpf, $telefone);

    if ($sucesso) {
        return header("Location: usuarios.php?mensagem=sucesso");
    } else {
        return header("Location: usuarios.php?mensagem=erro");
    }
} else if ($_SERVER["REQUEST_METHOD"] === "GET" && !empty($_GET['id'])) {
    $usuariosEncontrados = $usuarioModel->buscarPorId($_GET['id']);
    if (is_array($usuariosEncontrados) && count($usuariosEncontrados) > 0) {
        $usuario = $usuariosEncontrados[0];
    } else {
        return header("Location: usuarios.php?mensagem=nao_encontrado");
    }
} else {
    return header("Location: usuarios.php?mensagem=acesso_invalido");
}
?>

<body>
    <?php require_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main class="main-editar">
        <section class="form-container-devmedia">
            <form class="form-devmedia" action="usuario-editar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $usuario->id; ?>">

                <h1 class="title-devmedia">Editar Usuário</h1>

                <div class="form-group-devmedia">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?php echo $usuario->nome; ?>" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo $usuario->email; ?>" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" value="<?php echo $usuario->data_nascimento; ?>" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" value="<?php echo $usuario->cpf; ?>" required>
                </div>

                <div class="form-group-devmedia">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" value="<?php echo $usuario->telefone; ?>" required>
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