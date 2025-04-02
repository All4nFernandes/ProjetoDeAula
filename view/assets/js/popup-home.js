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
