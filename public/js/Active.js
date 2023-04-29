const li = document.querySelectorAll(".nav-item");
const sec = document.querySelectorAll("section");

function activemenu() {
  let len = sec.length;
  while (--len && window.scrollY + 96 < sec[len].offsetTop) {}
  li.forEach((ltx) => ltx.classList.remove("active"));
  li[len].classList.add("active");
}
activemenu();
window.addEventListener("scroll", activemenu);
