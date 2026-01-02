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

  // Mobile Menu Toggle Logic
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuIcon = document.getElementById("menu-icon");
  const closeIcon = document.getElementById("close-icon");

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", () => {
      const isExpanded = mobileMenu.classList.contains("hidden");

      if (isExpanded) {
        // Open Menu
        mobileMenu.classList.remove("hidden");
        menuIcon.classList.add("hidden");
        closeIcon.classList.remove("hidden");
      } else {
        // Close Menu
        mobileMenu.classList.add("hidden");
        menuIcon.classList.remove("hidden");
        closeIcon.classList.add("hidden");
      }
    });

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
      if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.add("hidden");
        menuIcon.classList.remove("hidden");
        closeIcon.classList.add("hidden");
      }
    });
  }

  // Admin Sidebar Toggle Logic
  const sidebarToggle = document.getElementById("sidebar-toggle");
  const adminSidebar = document.getElementById("admin-sidebar");

  if (sidebarToggle && adminSidebar) {
    sidebarToggle.addEventListener("click", () => {
      adminSidebar.classList.toggle("hidden");
      
      // On mobile, we might want it to be fixed/absolute
      if (!adminSidebar.classList.contains("hidden")) {
         adminSidebar.classList.add("fixed", "inset-y-0", "left-0", "shadow-xl");
         adminSidebar.classList.remove("sticky", "top-0");
      } else {
         adminSidebar.classList.remove("fixed", "inset-y-0", "left-0", "shadow-xl");
         adminSidebar.classList.add("sticky", "top-0");
      }
    });

    // Close sidebar when clicking outside (mobile only)
    document.addEventListener("click", (e) => {
      if (window.innerWidth < 1024 && !sidebarToggle.contains(e.target) && !adminSidebar.contains(e.target) && !adminSidebar.classList.contains("hidden")) {
        adminSidebar.classList.add("hidden");
        adminSidebar.classList.remove("fixed", "inset-y-0", "left-0", "shadow-xl");
        adminSidebar.classList.add("sticky", "top-0");
      }
    });
  }
});
