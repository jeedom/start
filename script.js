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

});