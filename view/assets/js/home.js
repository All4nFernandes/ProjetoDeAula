document.addEventListener("DOMContentLoaded", function () {
  const botaoLogin = document.querySelector(".btn-padrao");
  const popup = document.querySelector("#loginPopup");
  const botaoLogout = document.getElementById("logout");

  if (botaoLogin && popup) {
    botaoLogin.addEventListener("click", function () {
      popup.classList.toggle("show-form-login");
    });

    document.addEventListener("click", function (event) {
      if (!popup.contains(event.target) && !botaoLogin.contains(event.target)) {
        popup.classList.remove("show-form-login");
      }
    });
  }

  function showAlert() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get("status");

    if (status === "sucesso") {
      alert("Login feito com sucesso!");
    } else if (status === "erro") {
      alert("Usuário ou senha incorretos.");
    } else if (status === "logout") {
      alert("Você saiu da conta com sucesso!");
    }
  }

  showAlert();

  if (botaoLogout) {
    botaoLogout.addEventListener("click", function () {
      window.location.href = "/site-adm-grid/view/components/logout.php";
    });
  }
});
