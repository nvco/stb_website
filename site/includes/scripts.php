    <!-- Optimized JavaScript -->
    <script>
        /**
         * Performance-optimized page initialization
         * Uses modern JavaScript features and efficient DOM handling
         */

        // Use passive event listeners for better performance
        const passiveSupported = (() => {
            let passive = false;
            try {
                const options = Object.defineProperty({}, 'passive', {
                    get: () => { passive = true; }
                });
                window.addEventListener('test', null, options);
                window.removeEventListener('test', null, options);
            } catch (err) {}
            return passive;
        })();

        const addEventListenerOptions = passiveSupported ? { passive: true } : false;

        /**
         * Initializes mobile menu toggle functionality
         * Handles opening/closing mobile navigation menu with proper ARIA attributes and focus management
         */
        const initializeMobileMenu = () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            // Early return if required elements don't exist
            if (!mobileMenuButton || !mobileMenu) {
                console.warn('Mobile menu elements not found');
                return;
            }

            // Get all focusable elements in the mobile menu
            const getFocusableElements = () => {
                return mobileMenu.querySelectorAll('a[href], button:not([disabled])');
            };

            // Close menu function
            const closeMobileMenu = () => {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.focus(); // Return focus to menu button
            };

            // Open menu function
            const openMobileMenu = () => {
                mobileMenu.classList.remove('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
                
                // Focus first menu item
                const focusableElements = getFocusableElements();
                if (focusableElements.length > 0) {
                    focusableElements[0].focus();
                }
            };

            // Click handler for menu button
            mobileMenuButton.addEventListener('click', () => {
                try {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    
                    if (isHidden) {
                        openMobileMenu();
                    } else {
                        closeMobileMenu();
                    }
                } catch (error) {
                    console.error('Error toggling mobile menu:', error);
                }
            });

            // Keyboard navigation within mobile menu
            mobileMenu.addEventListener('keydown', (e) => {
                const focusableElements = getFocusableElements();
                const currentIndex = Array.from(focusableElements).indexOf(document.activeElement);

                switch (e.key) {
                    case 'Escape':
                        e.preventDefault();
                        closeMobileMenu();
                        break;
                    
                    case 'ArrowDown':
                        e.preventDefault();
                        const nextIndex = (currentIndex + 1) % focusableElements.length;
                        focusableElements[nextIndex].focus();
                        break;
                    
                    case 'ArrowUp':
                        e.preventDefault();
                        const prevIndex = currentIndex <= 0 ? focusableElements.length - 1 : currentIndex - 1;
                        focusableElements[prevIndex].focus();
                        break;
                    
                    case 'Home':
                        e.preventDefault();
                        focusableElements[0].focus();
                        break;
                    
                    case 'End':
                        e.preventDefault();
                        focusableElements[focusableElements.length - 1].focus();
                        break;
                }
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    if (!mobileMenu.classList.contains('hidden')) {
                        closeMobileMenu();
                    }
                }
            });
        };

        /**
         * Initializes smooth scrolling for anchor links
         * Enhances user experience for internal page navigation with proper focus management
         */
        const initializeSmoothScrolling = () => {
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            if (anchorLinks.length === 0) return;

            anchorLinks.forEach(anchor => {
                anchor.addEventListener('click', (e) => {
                    try {
                        e.preventDefault();
                        const targetId = anchor.getAttribute('href');
                        const target = document.querySelector(targetId);
                        
                        if (target) {
                            // Smooth scroll to target
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                            // Focus management after scroll
                            const handleScrollComplete = () => {
                                // Make target focusable if it isn't already
                                const originalTabIndex = target.getAttribute('tabindex');
                                if (!target.hasAttribute('tabindex') && !target.matches('a, button, input, textarea, select')) {
                                    target.setAttribute('tabindex', '-1');
                                }
                                
                                // Focus the target element
                                target.focus();
                                
                                // Add focus indicator class for styling
                                target.classList.add('focus-from-scroll');
                                
                                // Remove focus indicator after blur
                                const removeFocusIndicator = () => {
                                    target.classList.remove('focus-from-scroll');
                                    target.removeEventListener('blur', removeFocusIndicator);
                                    
                                    // Restore original tabindex if we modified it
                                    if (originalTabIndex === null && target.getAttribute('tabindex') === '-1') {
                                        target.removeAttribute('tabindex');
                                    }
                                };
                                target.addEventListener('blur', removeFocusIndicator);
                            };

                            // Wait for smooth scroll to complete before focusing
                            setTimeout(handleScrollComplete, 500);
                        }
                    } catch (error) {
                        console.error('Error with smooth scrolling:', error);
                        // Fallback to default browser behavior
                        window.location.hash = anchor.getAttribute('href');
                    }
                });
            });
        };

        /**
         * Initializes fade-in animations on scroll using Intersection Observer
         * Provides smooth entry animations for page sections with performance optimization
         */
        const initializeScrollAnimations = () => {
            // Check if Intersection Observer is supported
            if (!('IntersectionObserver' in window)) {
                console.warn('Intersection Observer not supported');
                return;
            }

            // Respect user's motion preferences
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) {
                return; // Skip animations if user prefers reduced motion
            }

            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        try {
                            const target = entry.target;
                            target.style.opacity = '1';
                            target.style.transform = 'translateY(0)';
                            
                            // Unobserve after animation to improve performance
                            observer.unobserve(target);
                        } catch (error) {
                            console.error('Error applying scroll animation:', error);
                        }
                    }
                });
            }, observerOptions);

            // Apply animation setup to all sections
            const sections = document.querySelectorAll('section');
            sections.forEach(section => {
                try {
                    section.style.opacity = '0';
                    section.style.transform = 'translateY(20px)';
                    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    observer.observe(section);
                } catch (error) {
                    console.error('Error setting up section animation:', error);
                }
            });
        };

        /**
         * Initializes Lucide icons with performance optimization
         * Handles icon rendering with error handling and lazy loading
         */
        const initializeLucideIcons = () => {
            try {
                // Check if lucide is available
                if (typeof lucide !== 'undefined' && lucide.createIcons) {
                    // Use requestIdleCallback for non-critical icon rendering
                    if ('requestIdleCallback' in window) {
                        requestIdleCallback(() => lucide.createIcons());
                    } else {
                        // Fallback for browsers without requestIdleCallback
                        setTimeout(() => lucide.createIcons(), 100);
                    }
                } else {
                    console.warn('Lucide icons library not loaded');
                }
            } catch (error) {
                console.error('Error initializing Lucide icons:', error);
            }
        };

        /**
         * Main initialization function with performance optimization
         * Coordinates all page functionality setup
         */
        const initializePage = () => {
            // Initialize all page functionality
            initializeMobileMenu();
            initializeSmoothScrolling();
            
            // Use requestAnimationFrame for non-critical animations
            requestAnimationFrame(() => {
                initializeScrollAnimations();
                initializeLucideIcons();
            });
        };

        // Optimize DOM ready detection
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializePage);
        } else {
            // DOM is already ready
            initializePage();
        }
    </script>
</body>
</html> 