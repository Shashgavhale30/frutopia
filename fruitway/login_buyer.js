document.addEventListener("DOMContentLoaded", function () {
    console.log("Script Loaded");

    // Search Bar Functionality
    const searchInput = document.querySelector(".search-input");
    if (searchInput) {
        searchInput.addEventListener("input", function () {
            console.log("Searching for:", searchInput.value);
            // Implement filtering logic if needed
        });
    }

    // Flip Card Functionality
    const seasonCards = document.querySelectorAll(".season-img");
    seasonCards.forEach(card => {
        card.addEventListener("click", function () {
            this.classList.toggle("flipped");
        });
    });

    // Auto-Flip Toggle
    const autoFlipToggle = document.querySelector("#auto-flip");
    if (autoFlipToggle) {
        autoFlipToggle.addEventListener("change", function () {
            seasonCards.forEach(card => {
                card.classList.toggle("auto-flip", this.checked);
            });
        });
    }

    // Smooth Scrolling (Optional)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });

    // Profile Dropdown Toggle
    const profileBtn = document.querySelector(".profile-btn");
    const dropdown = document.querySelector(".profile-dropdown");

    if (profileBtn && dropdown) {
        profileBtn.addEventListener("click", function (e) {
            this.classList.toggle("active");
            e.stopPropagation();
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function () {
            profileBtn.classList.remove("active");
        });

        // Prevent dropdown from closing when clicking inside it
        dropdown.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const profileBtn = document.querySelector(".profile-btn");
    const dropdown = document.querySelector(".profile-dropdown");

    profileBtn.addEventListener("click", function (event) {
        dropdown.style.display = dropdown.style.display === "flex" ? "none" : "flex";
        profileBtn.classList.toggle("active");
        event.stopPropagation();
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!profileBtn.contains(event.target)) {
            dropdown.style.display = "none";
            profileBtn.classList.remove("active");
        }
    });
});
