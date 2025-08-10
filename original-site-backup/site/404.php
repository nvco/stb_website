<?php
declare(strict_types=1);

require_once 'config.php';

// Page-specific variables
$current_page = '404';
$page_title = 'Page Not Found - ' . $business_name;
$page_description = 'The page you are looking for could not be found. Return to ' . $business_name . ' homepage or explore our services.';

// Fix: Auto-detect if 404 is being served from any subdirectory
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$path_segments = explode('/', trim($request_uri, '/'));
// If there's more than one path segment, we're in a subdirectory
if (count($path_segments) > 1 && !empty($path_segments[0])) {
    $is_subdirectory_page = true;
}

// Include header and navigation
include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
<!-- Content starts at body padding top to account for fixed nav -->
<div class="pt-16 bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- 404 Error Content -->
        <div class="text-center">
            <!-- Large 404 Number -->
            <div class="mb-8">
                <h1 class="text-9xl font-bold text-primary-200 leading-none">404</h1>
            </div>
            
            <!-- Error Message -->
            <div class="mb-12">
                <h2 class="page-heading text-center mb-6">Oops! Page Not Found</h2>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                    We couldn't find the page you're looking for. <br>But here's a beauty tip while you're here!
                </p>
            </div>
            
            <!-- Beauty Tip -->
            <div class="mb-12 max-w-2xl mx-auto">
                <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-accent-600">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i data-lucide="lightbulb" class="w-6 h-6 text-accent-600 mt-1"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-800 text-lg">
                                Remember that consistent skincare and proper hydration are the foundation of great-looking skin. Our treatments enhance your natural beauty!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Helpful Actions -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
                <h3 class="text-2xl font-serif font-bold text-primary-900 mb-6">What would you like to do?</h3>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Return Home -->
                    <div class="text-center p-6 border-2 border-accent-100 rounded-xl hover:border-accent-300 transition-colors duration-200">
                        <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="home" class="w-8 h-8 text-accent-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary-900 mb-2">Go Home</h4>
                        <p class="text-gray-600 mb-4">Return to our homepage and start fresh</p>
                        <a href="/" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full font-semibold transition-colors inline-flex items-center justify-center">
                            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                            Take Me Home
                        </a>
                    </div>
                    
                    <!-- Explore Services -->
                    <div class="text-center p-6 border-2 border-accent-100 rounded-xl hover:border-accent-300 transition-colors duration-200">
                        <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="sparkles" class="w-8 h-8 text-accent-600"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-primary-900 mb-2">Our Services</h4>
                        <p class="text-gray-600 mb-4">Discover our Botox and dermal filler treatments</p>
                        <a href="/services" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full font-semibold transition-colors inline-flex items-center justify-center">
                            <i data-lucide="arrow-right" class="w-4 h-4 mr-2"></i>
                            View Services
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="bg-gradient-to-r from-accent-50 to-primary-50 rounded-2xl p-8">
                <h3 class="text-2xl font-serif font-bold text-primary-900 mb-4">Need Help?</h3>
                <p class="text-gray-700 mb-6">
                    If you believe this is an error or need assistance finding what you're looking for, please don't hesitate to contact us.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="tel:<?php echo $phone; ?>" class="inline-flex items-center px-6 py-3 bg-accent-600 text-white font-semibold rounded-lg hover:bg-accent-700 transition-colors duration-200">
                        <i data-lucide="phone" class="w-4 h-4 mr-2"></i>
                        Call Us: <?php echo $phone; ?>
                    </a>
                    
                    <span class="text-gray-400 hidden sm:block">or</span>
                    
                    <a href="/about" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full font-semibold transition-colors inline-flex items-center justify-center">
                        <i data-lucide="info" class="w-4 h-4 mr-2"></i>
                        Learn About Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?> 