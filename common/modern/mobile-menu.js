document.addEventListener('DOMContentLoaded', function() {
    // Get the navbar toggle button and the menu
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    // Add click event listener to the toggle button
    if (navToggle && navMenu) {
        // Prevent default action and stop propagation
        navToggle.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            
            // Toggle the 'active' class on the menu
            navMenu.classList.toggle('active');
            // Toggle the 'active' class on the toggle button
            navToggle.classList.toggle('active');
        });
        
        // Close the menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navMenu.contains(event.target) || navToggle.contains(event.target);
            if (!isClickInsideNav && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            }
        });
        
        // Close the menu when a menu item is clicked
        const menuItems = navMenu.querySelectorAll('a');
        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            });
        });
        
        // Close the menu when window is resized to desktop size
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                navToggle.classList.remove('active');
            }
        });
        
        // Add a small delay to ensure the menu is properly initialized
        setTimeout(function() {
            navToggle.style.opacity = "1";
        }, 100);
    }
});