document.addEventListener('DOMContentLoaded', () => {

    /**
     * THEME SWITCHER
     * Manages light and dark mode toggling and persists the setting.
     */
    const themeSwitcher = document.getElementById('theme-switcher');
    const htmlElement = document.documentElement;

    // Load saved theme from localStorage, default to 'light'
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-theme', savedTheme);
    themeSwitcher.textContent = savedTheme === 'dark' ? '☀️' : '🌙';

    themeSwitcher.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';

        htmlElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        themeSwitcher.textContent = newTheme === 'dark' ? '☀️' : '🌙';
    });


    /**
     * BACK TO TOP BUTTON
     * Shows a button to scroll to the top when the user scrolls down.
     */
    const backToTopButton = document.getElementById('back-to-top');
    
    // Function to show/hide the button
    const toggleBackToTopButton = () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    };

    // Function to scroll to the top smoothly
    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };

    window.addEventListener('scroll', toggleBackToTopButton);
    backToTopButton.addEventListener('click', scrollToTop);
    
    /**
     * MENU NAVIGATION
     * Handles the active state of menu items based on scroll position
     */
    const menuItems = document.querySelectorAll('.menu-item');
    const sections = document.querySelectorAll('section[id]');
    
    if (menuItems.length > 0 && sections.length > 0) {
        // Function to set active menu item based on scroll position
        const setActiveMenuItem = () => {
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (window.scrollY >= sectionTop - 200 && window.scrollY < sectionTop + sectionHeight - 200) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            menuItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === `#${currentSection}`) {
                    item.classList.add('active');
                }
            });
        };
        
        window.addEventListener('scroll', setActiveMenuItem);
        
        // Add smooth scrolling to menu items
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    // Ajustement dynamique en fonction de la taille de l'écran
                    const windowWidth = window.innerWidth;
                    let scrollOffset;
                    
                    // Calcul de l'offset en fonction de la taille de l'écran
                    if (windowWidth <= 480) {
                        // Très petits écrans (téléphones)
                        scrollOffset = 250;
                    } else if (windowWidth <= 768) {
                        // Tablettes et petits écrans
                        scrollOffset = 220;
                    } else if (windowWidth <= 1024) {
                        // Tablettes en mode paysage
                        scrollOffset = 150;
                    } else {
                        // Desktop
                        scrollOffset = 100;
                    }
                    
                    // Ajouter un léger délai pour s'assurer que tout est bien chargé
                    setTimeout(() => {
                        window.scrollTo({
                            top: targetSection.offsetTop - scrollOffset,
                            behavior: 'smooth'
                        });
                    }, 50);
                }
            });
        });
    }

});