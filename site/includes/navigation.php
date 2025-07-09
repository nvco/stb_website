    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="<?php echo $base_url; ?>" class="text-2xl font-serif font-bold text-primary-800">
                        <?php echo $business_name; ?>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/about" class="<?php echo (isset($current_page) && $current_page == 'about') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600 transition-colors'; ?>">About</a>
                    <a href="/services" class="<?php echo (isset($current_page) && $current_page == 'services') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600 transition-colors'; ?>">Services</a>
                    <a href="/cancellation-policy" class="<?php echo (isset($current_page) && $current_page == 'cancellation-policy') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600 transition-colors'; ?>">Cancellation Policy</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-primary-700 hover:text-accent-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 sm:px-3">
                <div class="space-y-1">
                    <a href="<?php echo $base_url; ?>" class="block px-3 py-2 text-primary-700 hover:text-accent-600">Home</a>
                    <a href="/about" class="block px-3 py-2 <?php echo (isset($current_page) && $current_page == 'about') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600'; ?>">About</a>
                    <a href="/services" class="block px-3 py-2 <?php echo (isset($current_page) && $current_page == 'services') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600'; ?>">Services</a>
                    <a href="/cancellation-policy" class="block px-3 py-2 <?php echo (isset($current_page) && $current_page == 'cancellation-policy') ? 'text-accent-600 font-medium' : 'text-primary-700 hover:text-accent-600'; ?>">Cancellation Policy</a>
                </div>
                <a href="<?php echo $phone_link; ?>" class="block mx-3 mt-5 mb-5 bg-accent-600 text-white px-6 py-3 rounded-full text-center hover:bg-accent-700">
                    <?php echo $cta_phone; ?>
                </a>
            </div>
        </div>
    </nav> 