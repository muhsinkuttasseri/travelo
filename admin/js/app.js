const logsign = () => {
  const userIcon = document.querySelector(".user-icon");
  const logsign = document.querySelector(".logsign");

  userIcon.addEventListener("click", () => {
    logsign.classList.toggle("logsign-toggle");
  });
};

const navSlide = () => {
  const ham = document.querySelector(".ham-menu");
  const nav = document.querySelector(".nav");
  const navLinks = document.querySelectorAll(".nav li");

  ham.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    navLinks.forEach((link, i) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFadeIn 0.5s ease forwards ${i / 7 +
          0.5}s`;
      }
    });

    ham.classList.toggle("toggle");
  });
};

const main = () => {
  logsign();
  navSlide();
};
main();
