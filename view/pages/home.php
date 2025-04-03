<?php
require_once __DIR__ . "/../../config/Database.php";
require_once __DIR__ . "/../../Model/LoginModel.php";
session_start(); // Inicia a sessão para armazenar o login


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["username"];
    $senha = $_POST["senha"];
    $acesso = new LoginModel();
    $sucesso = $acesso->login($usuario, $senha);

    if ($sucesso) {
        $_SESSION['usuario_logado'] = true;
        header("Location: home.php?status=successo"); // Mensagem de sucesso
        exit();
    } else {
        header("Location: home.php?status=erro"); // Mensagem de erro
        exit();
    }
}
?>


<?php require_once __DIR__ . "../../components/head.php"; ?>

<body>
    <?php require_once __DIR__ . "../../components/sidebar.php"; ?>


    <main class="background">
        <div>
            <h1 class="title-h1">DevMedia</h1>
        </div>
        <div class="link-login">
            <button type="button" class="btn-login">
                Login
                <span class="material-symbols-outlined btn-icone">
                    person
                </span>
            </button>
            <button id="logout" class="logout-btn">Logout</button>
        </div>

        <form action="" method="POST">
            <section>
                <div class="box-login" id="loginPopup">
                    <label class="label-form" for="username">Login</label>
                    <input class="form-input" type="text" name="username" placeholder="Usuário" required>
                    <label class="label-form" for="senha">Senha</label>
                    <input class="form-input" type="password" name="senha" placeholder="Senha" required>
                    <button type="submit" class="enter-btn">Entrar</button>
                </div>
            </section>
        </form>
        <section>
            <div class="container">
                <div class="container-p">
                    <p class="text-p">25 anos de mercado</p>
                </div>
                <div class="titulo-text">
                    <h1 class="text">
                        <span class="destaque">
                            < Aqui você aprende a programar de verdade />
                        </span>
                    </h1>
                    <div class="destaque-text">
                        <p class="destaque-text-p">Cansado de cursos que prometem e não entregam? Aprenda com quem tem
                            25 anos de credibilidade em formar bons programadores
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <script src="/site-adm-grid\view\assets\js\home.js"></script>
    </main>
</body>