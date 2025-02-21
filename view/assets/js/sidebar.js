const sidebar = document.querySelector(".sidebar");

const voltar = document.querySelector(".sidebar-voltar");
voltar.addEventListener("click", () => {
  sidebar.classList.toggle("collapsed");
});
