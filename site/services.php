<?php 
declare(strict_types=1);

require_once 'config.php'; 

// Page-specific variables
$current_page = 'services';
$page_title = 'Services - ' . $business_name . ' | Medical Aesthetics Boulder';
$page_description = 'Professional medical aesthetics services in Boulder, CO. Expert Botox, dermal fillers, and facial rejuvenation treatments by ' . strtolower($credentials) . '.';
$page_keywords = 'Botox Boulder, dermal fillers Boulder, facial rejuvenation, medical aesthetics services, cosmetic injections CO';
$page_og_description = 'Professional medical aesthetics services in Boulder, CO. Expert Botox, dermal fillers, and facial rejuvenation treatments by ' . strtolower($credentials) . '.';
$page_url = '/services';
$page_structured_data = '{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Medical Aesthetics Services",
    "description": "Professional medical aesthetics services in Boulder, CO. Expert Botox, dermal fillers, and facial rejuvenation treatments by ' . strtolower($credentials) . '.",
    "url": "' . $base_url . '/services",
    "provider": {
        "@type": "MedicalBusiness",
        "name": "' . $business_name . '",
        "description": "Medical aesthetics practice specializing in Botox, dermal fillers, and facial rejuvenation treatments",
        "url": "' . $base_url . '",
        "telephone": "' . $phone . '",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "' . $address_street . '",
            "addressLocality": "' . $address_city . '",
            "addressRegion": "' . $address_state . '",
            "postalCode": "' . $address_zip . '",
            "addressCountry": "US"
        },
        "medicalSpecialty": "Cosmetic Medicine"
    },
    "serviceType": ["Botox Treatments", "Dermal Fillers", "Facial Rejuvenation", "Medical Aesthetics"]
}';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-28 lg:pt-32 pb-12 md:pb-14 lg:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-serif font-bold text-primary-900 mb-6">
                    Professional Medical Aesthetics Services
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto mb-8">
                    Expert treatments designed to enhance your natural beauty with the highest standards of safety, precision, and artistry.
                </p>
                <?php include __DIR__ . '/includes/cta-call-button.php'; ?>
            </div>
        </div>
    </section>

    <!-- Service Navigation -->
    <section class="py-8 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                                    <a href="#botox" class="inline-flex items-center justify-center 
                                            px-6 py-3 
                                            font-medium text-primary-800 
                                            bg-primary-100 
                                            rounded-full 
                                            hover:bg-primary-200 transition-colors">
                    Botox Treatments
                </a>
                <a href="#fillers" class="bg-primary-100 text-primary-800 px-6 py-3 rounded-full hover:bg-primary-200 transition-colors font-medium inline-flex items-center justify-center">
                    Dermal Fillers
                </a>
                <a href="#rejuvenation" class="bg-primary-100 text-primary-800 px-6 py-3 rounded-full hover:bg-primary-200 transition-colors font-medium inline-flex items-center justify-center">
                    Facial Rejuvenation
                </a>
            </div>
        </div>
    </section>

    <!-- Botox Section -->
    <section id="botox" class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-serif font-bold text-primary-900 mb-8">Botox & Neuromodulator Treatments</h2>
                    <div class="prose prose-lg text-primary-700 space-y-6">
                        <p>
                            Our expert Botox treatments are designed to smooth fine lines and wrinkles while maintaining your natural expressions. Using <?php echo $fda_approved_treatments ? 'FDA-approved' : 'premium'; ?> neuromodulators, we target specific muscle groups to create a refreshed, youthful appearance.
                        </p>
                        <div class="bg-accent-50 rounded-2xl p-6">
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Treatment</h3>
                            <div class="grid md:grid-cols-2 gap-3">
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Forehead lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Crow's feet</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Frown lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Brow lift</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Bunny lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Nasolabial folds</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Marionette lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Teeth clenching</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Chin lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Gummy smile</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Lip flip</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Neck lines</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-3xl p-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                                <i data-lucide="syringe" class="w-10 h-10 text-accent-600"></i>
                            </div>
                            <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4">Botox Pricing</h3>
                            <div class="bg-white rounded-2xl p-6 shadow-lg mb-6">
                                <div class="text-2xl font-bold text-accent-600 mb-2">Price at consultation</div>
                                <div class="text-primary-600">per unit</div>
                                <div class="text-sm text-primary-500 mt-2">Pricing depends on treatment area</div>
                            </div>
                            <div class="space-y-3 text-primary-800">
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Underarm perspiration</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Microtox (baby botox)</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Depression</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Scar reduction</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Headache</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                        <span>Postherpetic neuralgia pain</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dermal Fillers Section -->
    <section id="fillers" class="py-12 md:py-14 lg:py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-accent-50 to-white rounded-3xl p-8">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i data-lucide="droplet" class="w-10 h-10 text-accent-600"></i>
                            </div>
                            <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4">Dermal Filler Pricing</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <div class="text-lg font-semibold text-primary-800 mb-2">Lip Enhancement</div>
                                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                                    <div class="text-sm text-primary-600">1 syringe typical</div>
                                </div>
                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <div class="text-lg font-semibold text-primary-800 mb-2">Cheek Volume</div>
                                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                                    <div class="text-sm text-primary-600">1-2 syringes typical</div>
                                </div>
                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <div class="text-lg font-semibold text-primary-800 mb-2">Facial Contouring</div>
                                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                                    <div class="text-sm text-primary-600">Varies by area</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl font-serif font-bold text-primary-900 mb-8">Dermal Filler Treatments</h2>
                    <div class="prose prose-lg text-primary-700 space-y-6">
                        <p>
                            Restore volume, enhance contours, and create natural-looking results with our premium hyaluronic acid dermal fillers. Our expert injection techniques ensure beautiful, balanced outcomes that complement your facial features.
                        </p>
                        
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Popular Treatment Areas</h3>
                            <div class="grid md:grid-cols-2 gap-3">
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Lip enhancement</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Nasolabial folds</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Cheek volume</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Marionette lines</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Jawline contouring</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                    <span>Under-eye bags</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facial Rejuvenation Section -->
    <section id="rejuvenation" class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                    Comprehensive Facial Rejuvenation
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Customized treatment plans combining multiple modalities for complete facial harmony and natural-looking results.
                </p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8 mb-16">
                <div class="bg-primary-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="sparkles" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Liquid Facelift</h3>
                    <p class="text-primary-600 mb-4">
                        Non-surgical facial rejuvenation combining strategic Botox and filler placement for comprehensive lifting and volumization.
                    </p>
                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="eye" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Eye Rejuvenation</h3>
                    <p class="text-primary-600 mb-4">
                        Targeted treatments for crow's feet, under-eye bags, and brow lifting to create a more youthful, refreshed appearance.
                    </p>
                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="smile" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Full Face Treatment</h3>
                    <p class="text-primary-600 mb-4">
                        Complete facial assessment and customized treatment plan addressing all areas of concern for balanced, natural results.
                    </p>
                    <div class="text-lg font-bold text-accent-600">Price at consultation</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Process Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                    Your Treatment Experience
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    From consultation to follow-up, every step is designed with your comfort, safety, and satisfaction in mind.
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-2xl font-bold text-accent-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-3">Consultation</h3>
                    <p class="text-primary-600">Thorough assessment of your goals, medical history, and facial anatomy</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-2xl font-bold text-accent-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-3">Treatment Plan</h3>
                    <p class="text-primary-600">Customized approach designed specifically for your unique features and goals</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-2xl font-bold text-accent-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-3">Treatment</h3>
                    <p class="text-primary-600">Expert injection techniques performed with surgical precision and care</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-2xl font-bold text-accent-600">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-3">Follow-up</h3>
                    <p class="text-primary-600">Ongoing support and touch-ups to ensure optimal, long-lasting results</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/cta-section-large.php'; ?>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?> 