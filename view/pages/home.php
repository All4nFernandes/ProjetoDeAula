<?php require_once __DIR__ . "/../components/head.php"; ?>

<body>
    <?php require_once __DIR__ . "/../components/sidebar.php"; ?>
    <div class="link-login">
        <button type="button" class="btn-login">
            Login
            <span class="material-symbols-outlined btn-icone">
                person
            </span>
        </button>
    </div>

    <main class="background">
        <form action="" method="POST">
            <section>
                <div class=" box-login show-form-login" id="loginPopup">
                    <label class="label-form" for="username">Login</label>
                    <input class="form-input" type="text" name="username" placeholder="usuário" required>
                    <label class="label-form" for="senha">Senha</label>
                    <input class="form-input" type="password" name="senha" placeholder="Senha" required>
                    <button class="enter-btn">Entrar</button>
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
                        <p class="destaque-text-p">Cansado de cursos que prometem e não entregam? Aprenda com quem
                            tem
                            25 anos de credibilidade em formar bons programadores
                        </p>
                    </div>

                </div>
            </div>

        </section>
    </main>
    <?php require_once __DIR__ . "/../components/footer.php"; ?>
</body>