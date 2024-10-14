// script.js

// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('nav');
    
    hamburger.addEventListener('click', function() {
        // Toggle 'active' class on hamburger icon
        hamburger.classList.toggle('active');
        // Toggle 'active' class on navigation menu
        nav.classList.toggle('active');
    });
});
