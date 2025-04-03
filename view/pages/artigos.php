<?php
require_once __DIR__ . "/../../config/Database.php";
require_once __DIR__ . "\..\..\Model\UsuarioModel.php";
require_once __DIR__ . "\..\components\head.php";
?>

<body>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>
    <main>
        <div>
            <h1 class="title-h1-devmedia table-h1">DevMedia</h1>
        </div>
        <div>
            <a class="link-btn" href="">
                <button type="button" class="btn-padrao btn-new">Novo</button>
            </a>
        </div>
        <div class="container-card">
            <div class="card">
                <h2 class="titulo">Título do Artigo</h2>
                <p class="categoria">Categoria: Desenvolvimento Web</p>
                <p class="conteudo">
                    Aqui vai uma breve descrição do artigo para atrair a atenção do leitor...
                </p>
                <a href="#" class="btn-card">Ler mais</a>
            </div>

            <div class="card">
                <h2 class="titulo">Outro Artigo Incrível</h2>
                <p class="categoria">Categoria: Banco de Dados</p>
                <p class="conteudo">
                    Pequeno resumo do conteúdo para deixar o leitor interessado em continuar a leitura...
                </p>
                <a href="#" class="btn-card">Ler mais</a>
            </div>
        </div>

    </main>
    <?php require_once __DIR__ . '\..\components\footer.php'; ?>

</body>

</html>