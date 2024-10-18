// script.js

// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('nav');
    const widgets = document.querySelector('.widgets');
    const body = document.body; // Get the body element
    
    hamburger.addEventListener('click', function() {
        // Toggle 'active' class on hamburger icon
        hamburger.classList.toggle('active');
        // Toggle 'active' class on navigation menu
        nav.classList.toggle('active');
        widgets.classList.toggle('active');

        // Toggle overflow hidden on body
        if (body.style.overflow !== 'hidden') {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = '';
        }
    });
});
