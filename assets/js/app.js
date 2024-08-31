// =========================Custom cursor==================================

const links = Array.from(document.querySelectorAll("a"));
const submits = Array.from(document.querySelectorAll('input[type="submit"]'));
const cursor = document.getElementById("cursor");
const stalker = document.getElementById("stalker");

let mouseX = 0,
  mouseY = 0;
let stalkerX = 0,
  stalkerY = 0;

document.addEventListener("mousemove", (event) => {
  mouseX = event.clientX;
  mouseY = event.clientY;
  cursor.style.left = `${mouseX}px`;
  cursor.style.top = `${mouseY}px`;
});

function animateStalker() {
  stalkerX += (mouseX - stalkerX) * 0.1;
  stalkerY += (mouseY - stalkerY) * 0.1;
  stalker.style.left = `${stalkerX}px`;
  stalker.style.top = `${stalkerY}px`;
  requestAnimationFrame(animateStalker);
}
animateStalker();

links.forEach((link) => {
  link.addEventListener("mouseover", () => {
    cursor.classList.add("grow");
  });
  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("grow");
  });
});

submits.forEach((submit) => {
  submit.addEventListener("mouseover", () => {
    cursor.classList.add("grow");
  });
  submit.addEventListener("mouseleave", () => {
    cursor.classList.remove("grow");
  });
});

// =========================Mobile menu==================================

(() => {
  const mobileMenu = document.querySelector(".js-menu-container");
  const openMenuBtn = document.querySelector(".js-open-menu");
  const closeMenuBtn = document.querySelector(".js-close-menu");

  const toggleMenu = () => {
    const isMenuOpen =
      openMenuBtn.getAttribute("aria-expanded") === "true" || false;

    openMenuBtn.setAttribute("aria-expanded", !isMenuOpen);
    closeMenuBtn.setAttribute("aria-expanded", !isMenuOpen);
    mobileMenu.setAttribute("aria-hidden", isMenuOpen);
    mobileMenu.classList.toggle("is-open");
    document.body.classList.toggle("menu-open");
  };

  openMenuBtn.addEventListener("click", toggleMenu);
  closeMenuBtn.addEventListener("click", toggleMenu);

  // Close the mobile menu on wider screens if the device orientation changes
  window.matchMedia("(min-width: 768px)").addEventListener("change", (e) => {
    if (!e.matches) return;
    mobileMenu.classList.remove("is-open");
    openMenuBtn.setAttribute("aria-expanded", false);
    closeMenuBtn.setAttribute("aria-expanded", false);
    mobileMenu.setAttribute("aria-hidden", true);
  });
})();
