document.addEventListener('DOMContentLoaded', () => {

    const menuItemsInitial = document.querySelectorAll('.menu-item');
    menuItemsInitial.forEach(item => {
        item.classList.remove('active');
    });


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
            const scrollThreshold = viewportHeight * 0.3; 
            

            const sectionPositions = sectionsData.map(section => {
                const element = section.element;
                const rect = element.getBoundingClientRect();
                
                return {
                    id: section.id,
                    top: rect.top + scrollPos, 
                    bottom: rect.bottom + scrollPos,
                    height: rect.height,
                    visible: rect.top < viewportHeight * 0.7 && rect.bottom > 0 
                };
            });
            

            let mostVisibleSection = null;
            let maxVisibility = 0;
            
            for (const section of sectionPositions) {
                if (section.visible) {
                    const visibleHeight = Math.min(window.innerHeight, section.bottom) - 
                                         Math.max(0, section.top - scrollPos);
                    
                    const visibilityRatio = visibleHeight / section.height;
                    
                    if (visibilityRatio > maxVisibility) {
                        maxVisibility = visibilityRatio;
                        mostVisibleSection = section.id;
                    }
                }
            }
            

            if (!mostVisibleSection) {
                for (let i = 0; i < sectionPositions.length; i++) {
                    const section = sectionPositions[i];
                    if (scrollPos >= section.top - viewportHeight / 2) {
                        mostVisibleSection = section.id;
                        break;
                    }
                }
            }
            

            if (!mostVisibleSection && sectionPositions.length > 0) {
                mostVisibleSection = sectionPositions[0].id;
            }
            
            return mostVisibleSection;
        };
        

        const updateMenuItems = (activeId) => {
            if (!activeId) return;
            

            document.querySelectorAll('.menu-item').forEach(menuItem => {
                menuItem.classList.remove('active');
            });
            

            const targetMenuItem = document.querySelector(`.menu-item[href="#${activeId}"]`);
            if (targetMenuItem) {
                targetMenuItem.classList.add('active');
            }
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
                    

                    setTimeout(() => {
                        updateActiveMenuItem();
                    }, 800); 
                }
            });
        });
        


        document.querySelectorAll('.menu-item').forEach(item => {
            item.classList.remove('active');
        });
        
        if (window.location.hash) {
            const targetId = window.location.hash.substring(1);
            updateMenuItems(targetId);
        } else {

            updateActiveMenuItem();
        }
        

        window.addEventListener('load', () => {

            document.querySelectorAll('.menu-item').forEach(item => {
                item.classList.remove('active');
            });
            
            updateActiveMenuItem();
            
            setTimeout(() => {
                updateActiveMenuItem();
            }, 100);
            
            setTimeout(() => {
                updateActiveMenuItem();
            }, 500);
            
            setTimeout(() => {
                updateActiveMenuItem();
            }, 1000);
        });
    }

});