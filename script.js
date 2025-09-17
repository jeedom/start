document.addEventListener('DOMContentLoaded', () => {

    /**
     * THEME SWITCHER
     * Manages light and dark mode toggling and persists the setting.
     */
    const themeSwitcher = document.getElementById('theme-switcher');
    const htmlElement = document.documentElement;


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



    const backToTopButton = document.getElementById('back-to-top');
    

    const toggleBackToTopButton = () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    };


    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };

    window.addEventListener('scroll', toggleBackToTopButton);
    backToTopButton.addEventListener('click', scrollToTop);
    

    const menuItems = document.querySelectorAll('.menu-item');
    const sections = document.querySelectorAll('section[id]');
    
    if (menuItems.length > 0 && sections.length > 0) {

        const sectionsData = Array.from(sections).map(section => {
            return {
                id: section.id,
                element: section
            };
        });
        

        const determineActiveSection = () => {
            const scrollPos = window.scrollY;
            const viewportHeight = window.innerHeight;
            const scrollThreshold = viewportHeight * 0.25;
            

            const sectionPositions = sectionsData.map(section => {
                const element = section.element;
                const rect = element.getBoundingClientRect();
                
                return {
                    id: section.id,
                    top: rect.top + scrollPos - scrollThreshold, 
                    bottom: rect.bottom + scrollPos,
                    height: rect.height
                };
            });
            

            let activeSection = null;
            

            for (let i = sectionPositions.length - 1; i >= 0; i--) {
                const section = sectionPositions[i];
                

                if (scrollPos >= section.top) {
                    activeSection = section.id;
                    break;
                }
            }
            

            if (!activeSection && sectionPositions.length > 0) {
                activeSection = sectionPositions[0].id;
            }
            
            return activeSection;
        };
        

        const updateMenuItems = (activeId) => {
            if (!activeId) return;
            
            menuItems.forEach(item => {
                const href = item.getAttribute('href');
                const itemId = href ? href.substring(1) : '';
                
                if (itemId === activeId) {
                    item.classList.add('active');

                    setTimeout(() => {
                        item.classList.add('active');
                    }, 0);
                } else {
                    item.classList.remove('active');
                }
            });
        };
        

        const updateActiveMenuItem = () => {
            const activeSection = determineActiveSection();
            updateMenuItems(activeSection);
        };
        

        let scrollTimer;
        window.addEventListener('scroll', () => {
            clearTimeout(scrollTimer);
            scrollTimer = setTimeout(updateActiveMenuItem, 50);
        });
        

        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                const href = this.getAttribute('href');
                const targetId = href.substring(1); 
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {

                    menuItems.forEach(menuItem => menuItem.classList.remove('active'));
                    this.classList.add('active');
                    

                    const windowWidth = window.innerWidth;
                    let scrollOffset;
                    
                    if (windowWidth <= 480) {
                        scrollOffset = 250;
                    } else if (windowWidth <= 768) {
                        scrollOffset = 220;
                    } else if (windowWidth <= 1024) {
                        scrollOffset = 150;
                    } else {
                        scrollOffset = 100;
                    }
                    

                    window.scrollTo({
                        top: targetSection.offsetTop - scrollOffset,
                        behavior: 'smooth'
                    });
                }
            });
        });
        

        if (window.location.hash) {
            const targetId = window.location.hash.substring(1);
            updateMenuItems(targetId);
        } else {

            if (menuItems.length > 0) {
                menuItems[0].classList.add('active');
            }
        }
        

        window.addEventListener('load', updateActiveMenuItem);

        setTimeout(updateActiveMenuItem, 500);
    }

});