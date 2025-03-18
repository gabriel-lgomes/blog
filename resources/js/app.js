document.addEventListener("DOMContentLoaded", function () {
    function toggleDropdown() {
        const dropdown = document.getElementById("user-dropdown");
        dropdown.classList.toggle("hidden"); // Alterna a visibilidade do dropdown
    }

    document
        .getElementById("user-menu-button")
        .addEventListener("click", toggleDropdown);
});
