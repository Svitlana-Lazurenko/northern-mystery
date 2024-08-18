(function ($) {
  class starterTheme {
    constructor() {
      this.setupStarterFunction(); // Run the setup function
    } // constructor

    setupStarterFunction() {
      /* Do something here */
    } // setupStarterFunction
  } // class starterTheme

  // Create a new instance of the starterTheme class
  window.starterTheme = new starterTheme();
})(window.jQuery);

// =========================Custom cursor==================================
const cursor = document.getElementById("cursor");
const stalker = document.getElementById("stalker");
document.addEventListener("mousemove", (event) => {
  const x = event.clientX;
  const y = event.clientY;
  cursor.style.transform = `translate(${x}px, ${y}px)`;
  stalker.style.transform = `translate(${x}px, ${y}px)`;
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
