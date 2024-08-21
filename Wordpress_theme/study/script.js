const bar = document.getElementById("menu");
const close = document.getElementById("close");
const nav = document.getElementById("ul");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}