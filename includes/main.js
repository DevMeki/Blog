/**
 * Core JavaScript for Midnight Blog
 */

document.addEventListener("DOMContentLoaded", () => {
  console.log("Midnight Blog Engine Initialized");

  // Example Interactivity: Scroll Reveal for Navbar
  const nav = document.querySelector("nav");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      nav.classList.add("shadow-xl", "py-2");
      nav.classList.remove("py-0");
    } else {
      nav.classList.remove("shadow-xl", "py-2");
    }
  });

  // Mobile Menu Placeholder
  // In a real app, we would add dynamic menu toggling here
});
