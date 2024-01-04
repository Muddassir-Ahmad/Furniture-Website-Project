//overlay
document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const darkOverlay = document.querySelector('.dark-overlay');

    navbarToggler.addEventListener('click', function () {
        darkOverlay.classList.toggle('show');
    });
});
// JavaScript to handle the dropdown icon rotation for Living Room
document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = document.querySelectorAll('[data-bs-toggle="collapse"]');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function () {
            const icon = this.querySelector('.fa-caret-down');
            icon.classList.toggle('rotate');
        });
    });
});

// logout
document.addEventListener('DOMContentLoaded', function () {
    const logoutLink = document.getElementById('logoutLink');

    logoutLink.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the link from immediately navigating

        const confirmLogout = confirm('Are you sure you want to log out?');
        if (confirmLogout) {
            // Redirect to the logout page
            window.location.href = 'logout.php';
        }
    });
});