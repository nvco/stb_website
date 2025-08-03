// Non-critical JS - Animations and enhanced features
(function() {
    'use strict';
    
    // Scroll animations
    const initScrollAnimations = () => {
        const sections = document.querySelectorAll('section');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Set up animations for all sections
        sections.forEach((section, index) => {
            // Initial styles set via CSS in header.php
            observer.observe(section);
            
            // Animate sections already visible on page load
            const rect = section.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
            
            if (isVisible) {
                // Staggered animation for immediately visible sections
                setTimeout(() => {
                    section.style.opacity = '1';
                    section.style.transform = 'translateY(0)';
                }, index * 100 + 200);
            }
        });
    };
    
    // Lucide icons initialization (non-critical)
    const initLucideIcons = () => {
        if (typeof lucide !== 'undefined' && lucide.createIcons) {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(() => lucide.createIcons());
            } else {
                setTimeout(() => lucide.createIcons(), 100);
            }
        }
    };
    
    // Initialize non-critical features
    const initNonCritical = () => {
        requestAnimationFrame(() => {
            initScrollAnimations();
            initLucideIcons();
        });
    };
    
    // Load when page is ready
    if (document.readyState === 'complete') {
        initNonCritical();
    } else {
        window.addEventListener('load', initNonCritical);
    }
})(); 