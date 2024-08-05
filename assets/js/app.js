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
