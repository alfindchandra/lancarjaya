import "./bootstrap";
document.addEventListener("DOMContentLoaded", function () {
    const themeToggleBtn = document.getElementById("theme-toggle");
    const themeToggleDarkIcon = document.getElementById(
        "theme-toggle-dark-icon"
    );
    const themeToggleLightIcon = document.getElementById(
        "theme-toggle-light-icon"
    );
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu"); // This will be managed by Alpine now, but the ID should remain for legacy if needed or other scripts.

    // Check for saved theme preference or default to 'light'
    const currentTheme = localStorage.getItem("theme") || "light";

    if (currentTheme === "dark") {
        document.documentElement.classList.add("dark");
        themeToggleLightIcon.classList.remove("hidden");
        themeToggleDarkIcon.classList.add("hidden"); // Ensure dark icon is hidden
    } else {
        document.documentElement.classList.remove("dark"); // Ensure light mode is set
        themeToggleDarkIcon.classList.remove("hidden");
        themeToggleLightIcon.classList.add("hidden"); // Ensure light icon is hidden
    }

    // Theme toggle event listener
    if (themeToggleBtn) {
        // Check if element exists before adding listener
        themeToggleBtn.addEventListener("click", function () {
            document.documentElement.classList.toggle("dark");

            if (document.documentElement.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
                themeToggleDarkIcon.classList.add("hidden");
                themeToggleLightIcon.classList.remove("hidden");
            } else {
                localStorage.setItem("theme", "light");
                themeToggleLightIcon.classList.add("hidden");
                themeToggleDarkIcon.classList.remove("hidden");
            }
        });
    }

    // Mobile menu toggle - Alpine.js will handle the x-show and transitions.
    // You can remove this part if Alpine.js fully manages the mobile menu visibility.
    // If you keep it, make sure it doesn't conflict with Alpine's `mobileMenuOpen` state.
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            // Alpine.js now manages the `hidden` class based on `mobileMenuOpen`
            // mobileMenu.classList.toggle("hidden");
        });
    }
});

//hero=====================================
document.addEventListener("DOMContentLoaded", function () {
    // Counter Animation
    function animateCounter(element) {
        const target = parseInt(element.getAttribute("data-counter"));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target + (target === 99 ? "%" : "+");
                clearInterval(timer);
            } else {
                element.textContent =
                    Math.floor(current) + (target === 99 ? "%" : "+");
            }
        }, 16);
    }

    // Initialize counters when they come into view
    const counters = document.querySelectorAll("[data-counter]");
    const observerOptions = {
        threshold: 0.5,
        rootMargin: "0px 0px -100px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach((counter) => observer.observe(counter));
});
//end hero=====================================

//product==================================

//endproduct==================================
