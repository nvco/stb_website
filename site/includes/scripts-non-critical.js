// Non-critical JS - Animations and enhanced features
(function() {
    'use strict';
    
    // Scroll animations (non-critical)
    const initScrollAnimations = () => {
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
        
        document.querySelectorAll('.fade-in-up').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
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