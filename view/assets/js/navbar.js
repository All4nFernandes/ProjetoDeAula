const links = document.querySelectorAll(".links-navbar");

if (links.length) {
  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();

      links.forEach((link) => {
        link.classList.remove("active");
      });

      link.classList.add("active");
    });
  });
}
