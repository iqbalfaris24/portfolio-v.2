const lii = document.querySelectorAll(".item-nav");
const secc = document.querySelectorAll("section");

function activemenu() {
  let len = secc.length;
  while (--len && window.scrollY + 96 < secc[len].offsetTop) {}
  lii.forEach((ltx) => ltx.classList.remove("active"));
  lii[len].classList.add("active");
}
activemenu();
window.addEventListener("scroll", activemenu);
