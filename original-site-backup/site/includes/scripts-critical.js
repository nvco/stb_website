// Critical JavaScript - Essential functionality only
(function() {
    'use strict';
    
    // Prevent FOUC - mark as loaded once Tailwind is ready
    document.documentElement.classList.add('fouc-loaded');
    
    // Initialize mobile menu functionality when DOM is ready
    const initMobileMenu = () => {
        // Mobile menu functionality (critical for navigation)
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            const closeMobileMenu = () => {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.focus();
            };
            
            mobileMenuButton.addEventListener('click', function() {
                const isHidden = mobileMenu.classList.contains('hidden');
                mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
                if (isHidden) {
                    const firstLink = mobileMenu.querySelector('a');
                    if (firstLink) firstLink.focus();
                }
            });
            
            // Close menu on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                    closeMobileMenu();
                }
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    closeMobileMenu();
                }
            });
        }
    };
    
    // Initialize smooth scrolling for anchor links
    const initSmoothScrolling = () => {
        // Smooth scrolling for anchor links (critical for navigation)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    const handleFocus = () => {
                        targetElement.focus();
                        if (!targetElement.hasAttribute('tabindex')) {
                            targetElement.setAttribute('tabindex', '-1');
                        }
                        // Visual focus indicator
                        setTimeout(() => {
                            targetElement.style.outline = '2px solid #10b981';
                            targetElement.style.outlineOffset = '2px';
                        }, 100);
                        setTimeout(() => {
                            targetElement.style.outline = '';
                            targetElement.style.outlineOffset = '';
                            targetElement.removeAttribute('tabindex');
                        }, 2000);
                    };
                    
                    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                        handleFocus();
                    } else {
                        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        requestAnimationFrame(handleFocus);
                    }
                }
            });
        });
    };
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initMobileMenu();
            initSmoothScrolling();
        });
    } else {
        // DOM is already ready
        initMobileMenu();
        initSmoothScrolling();
    }
})(); 