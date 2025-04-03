document.addEventListener("DOMContentLoaded", function () {
  const botaoLogin = document.querySelector(".btn-login");
  const popup = document.querySelector("#loginPopup");

  if (botaoLogin && popup) {
    botaoLogin.addEventListener("click", function () {
      popup.classList.toggle("show-form-login");
    });

    // Fechar o popup ao clicar fora dele
    document.addEventListener("click", function (event) {
      if (!popup.contains(event.target) && !botaoLogin.contains(event.target)) {
        popup.classList.remove("show-form-login");
      }
    });
  }
});

// Função para exibir alertas com base nos parâmetros da URL
function showAlert() {
  const urlParams = new URLSearchParams(window.location.search);
  const status = urlParams.get("status");

  if (status === "successo") {
    alert("✅ Login feito com sucesso!");
  } else if (status === "erro") {
    alert("❌ Usuário ou senha incorretos.");
  } else if (status === "logout") {
    alert("🚪 Você saiu da conta com sucesso!");
  }
}

document.addEventListener("DOMContentLoaded", showAlert);
// Função para esconder o botão caso o usuário esteja logado
function esconderBotaoLogin() {
  const botaoLogin = document.querySelector(".btn-login");
  if (botaoLogin && localStorage.getItem("usuario_logado") === "true") {
    botaoLogin.classList.add("disable-btn-login");
  }
}

// Quando a página carregar, verifica o login e esconde o botão
window.onload = function () {
  showAlert();
  esconderBotaoLogin();
};

document.getElementById("logout").addEventListener("click", function () {
  localStorage.removeItem("usuario_logado"); // Remove o status de login
  location.reload(); // Recarrega a página
});

document.addEventListener("DOMContentLoaded", function () {
  const botaoLogin = document.querySelector(".btn-login");
  const botaoLogout = document.getElementById("logout");

  if (localStorage.getItem("usuario_logado") === "true") {
    botaoLogin.classList.add("disable-btn-login");
    botaoLogout.style.display = "block";
  }

  botaoLogout.addEventListener("click", function () {
    localStorage.removeItem("usuario_logado"); // Remove a informação do login no localStorage
    window.location.href = "logout.php"; // Redireciona para a página de logout (que destrói a sessão)
  });
});
