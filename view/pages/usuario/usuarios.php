<?php
require_once __DIR__ . "\..\..\..\config\Database.php";
require_once __DIR__ . "\..\..\..\Model\UsuarioModel.php";
require_once __DIR__ . "\..\..\components/head.php";


$usuariosmodel = new UsuarioModel();
$usuarios = $usuariosmodel->listar();

?>

<body>

    <?php include_once __DIR__ . "/../../components/sidebar.php"; ?>

    <main>
        <div>
            <h1 class="title-h1-devmedia table-h1">DevMedia</h1>
        </div>
        <div>
            <a class="link-btn" href="">
                <button type="button" class="btn-padrao btn-new">Novo</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Nascimento</th>
                <th>Cpf</th>
                <th>Telefone</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="usuario-visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button class="btn-icon">
                                    <span class="material-symbols-outlined table">
                                        visibility
                                    </span>
                                </button>
                            </form>

                            <form action="usuario-editar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                                <button class="btn-icon">
                                    <span class="material-symbols-outlined table">
                                        edit
                                    </span>
                                </button>
                            </form>

                            <form action="usuario-excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                                <button class="btn-icon"
                                    onclick="return confirm('Tem certeza que deseja excluir o usuario?')">
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