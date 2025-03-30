<?php require_once __DIR__ . "/../components/head.php"; ?>

<body>
    <?php require_once __DIR__ . "/../components/sidebar.php"; ?>

    <<a class="link-login" href="">
        <button type="button" class="btn-login" onclick="openPopup()">
            Login
            <span class="material-symbols-outlined btn-icone">
                person
            </span>
        </button>
        </a>
        <div class="popup" id="loginPopup">
            <h3>Login</h3>
            <input type="text" placeholder="Login">
            <input type="password" placeholder="Senha">
            <button class="enter-btn">Entrar</button>
            <a href="#">Cadastre-se</a>
            <a href="#">Esqueceu o login ou a senha?</a>
        </div>

        <main class="background">
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

        <style>
            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: #111;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
                width: 300px;
                border: 1px solid #dfff7f;
            }

            .popup input {
                display: block;
                width: calc(100% - 20px);
                margin: 10px auto;
                padding: 10px;
                border: none;
                border-radius: 5px;
                background: #222;
                color: white;
            }

            .popup .enter-btn {
                background-color: #dfff7f;
                color: black;
                padding: 10px;
                border: none;
                cursor: pointer;
                width: 100%;
                border-radius: 5px;
                font-size: 16px;
            }

            .popup a {
                display: block;
                margin-top: 10px;
                color: #dfff7f;
                text-decoration: none;
                font-size: 14px;
            }
        </style>

        <script>
            function openPopup() {
                document.getElementById("loginPopup").style.display = "block";
            }
            function closePopup() {
                document.getElementById("loginPopup").style.display = "none";
            }
        </script>
</body>