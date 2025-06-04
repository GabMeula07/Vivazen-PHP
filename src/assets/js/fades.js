document.addEventListener("DOMContentLoaded", () => {
  // Verificar elementos
  const elements = document.querySelectorAll(".fade-element");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        } else {
          entry.target.classList.remove("visible");
        }
      });
    },
    {
      threshold: 0.2,
      rootMargin: "0px",
    }
  );

  elements.forEach((el) => {
    observer.observe(el);
  });
});

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("out", window.scrollY > 0);
});
