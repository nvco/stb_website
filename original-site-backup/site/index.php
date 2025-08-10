<?php
declare(strict_types=1);

require_once 'config.php'; 

// Page-specific variables
$current_page = 'home';
$page_structured_data = '{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Still Time Beauty",
    "description": "Medical aesthetics practice specializing in Botox, dermal fillers, and facial rejuvenation treatments",
    "url": "' . $base_url . '",
    "telephone": "(720) 731-8222",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "741 Pearl St",
        "addressLocality": "Boulder",
        "addressRegion": "CO",
        "postalCode": "80302",
        "addressCountry": "US"
    },
    "openingHours": "Mo-Su 09:00-17:00",
    "priceRange": "$$",
    "medicalSpecialty": "Cosmetic Medicine"
}';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-28 lg:pt-32 pb-12 md:pb-14 lg:pb-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="hero-heading">
                        Enhance Your Natural Beauty with 
                        <span class="hero-accent">Expert Care</span>
                    </h1>
                    <p class="text-xl text-primary-600 mb-8 leading-relaxed">
                        Professional medical aesthetics in downtown Boulder. Expert Botox and dermal filler treatments by a qualified Nurse Practitioner with surgical precision.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <?php include __DIR__ . '/includes/cta-call-button.php'; ?>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-4 justify-center lg:justify-start max-w-md mx-auto lg:mx-0">
                        <?php echo info_card('map-pin', 'Convenient<br class="sm:hidden"> Location', 'Pearl Street, Boulder'); ?>
                        <?php echo info_card('calendar', 'Flexible<br class="sm:hidden"> Scheduling', 'By Appointment Only'); ?>
                    </div>
                    <div class="mt-8 flex items-center justify-center lg:justify-start space-x-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-800">5.0</div>
                            <div class="flex text-primary-600 text-sm space-x-0.5" aria-label="5 out of 5 star rating">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            </div>
                            <div class="text-xs text-primary-500">Google Reviews</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-800">NP</div>
                            <div class="text-sm text-primary-600">Board Certified</div>
                            <div class="text-xs text-primary-500">Nurse Practitioner</div>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <!-- Main circular image -->
                    <div class="relative w-72 h-72 md:w-[26rem] md:h-[26rem] lg:w-[35rem] lg:h-[35rem]">
                        <div class="w-full h-full rounded-2xl overflow-hidden shadow-2xl border-8 border-white">
                            <img src="assets/hero-faces.webp" 
                                 alt="Professional medical aesthetics for men and women" 
                                 class="w-full h-full object-cover object-center"
                                 loading="eager"
                                 decoding="async"
                                 fetchpriority="high"
                                 width="528" 
                                 height="528">
                        </div>
                        <!-- Floating badge -->
                        <div class="absolute -top-4 -right-4 
                                    px-4 py-2 
                                    text-primary-800 
                                    bg-white/95 backdrop-blur-sm 
                                    border-2 border-accent-200 rounded-2xl shadow-xl">
                            <div class="text-center">
                                <div class="text-xs font-bold text-accent-600">Expert Care</div>
                                <div class="text-xs text-primary-600">Men & Women</div>
                            </div>
                        </div>
                        <!-- Floating stats -->
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-4 border border-primary-100">
                            <div class="text-center">
                                <div class="flex items-center justify-center space-x-1">
                                <span class="text-2xl font-bold text-primary-800">5.0</span>
                                <i data-lucide="star" class="w-5 h-5 fill-current text-accent-500" aria-label="5 star rating"></i>
                            </div>
                                <div class="text-xs text-primary-600">Google Reviews</div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute top-4 right-4 md:top-8 md:right-8 lg:top-12 lg:-right-12
                           w-12 h-12 md:w-16 md:h-16 
                           bg-accent-200 
                           rounded-full opacity-30 animate-pulse"></div>
                    <div class="absolute bottom-8 right-12 md:bottom-16 md:right-16 lg:bottom-20 lg:-right-8
                           w-6 h-6 md:w-8 md:h-8 
                           bg-primary-300 
                           rounded-full opacity-40"></div>
                    <div class="absolute top-12 left-4 md:top-16 md:left-8 lg:top-20 lg:-left-12
                           w-8 h-8 md:w-12 md:h-12 
                           bg-accent-100 
                           rounded-full opacity-50"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-4">
                    Expert Medical Aesthetics
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Precision treatments designed to enhance your natural beauty with the highest standards of safety and artistry.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="syringe" class="w-8 h-8 text-accent-600" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary-800 mb-4">Botox Treatments</h3>
                    <p class="text-primary-600 mb-6">
                        Smooth fine lines and wrinkles with precision neuromodulator treatments. Natural-looking results that enhance your expressions.
                    </p>
                                          <div class="space-y-2 text-sm text-primary-600">
                          <div class="flex justify-between">
                              <span>✓ Lines & wrinkles</span>
                              <span class="text-accent-600 font-medium">Price at consultation</span>
                          </div>
                          <div class="flex justify-between">
                              <span>✓ Microtox</span>
                              <span class="text-accent-600 font-medium">Price at consultation</span>
                          </div>
                          <div class="flex justify-between">
                              <span>✓ Depression & more</span>
                              <span class="text-accent-600 font-medium">Price at consultation</span>
                          </div>
                    </div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="droplet" class="w-8 h-8 text-accent-600" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary-800 mb-4">Dermal Fillers</h3>
                    <p class="text-primary-600 mb-6">
                        Restore volume and contour with premium hyaluronic acid fillers. Achieve natural enhancement with expert technique.
                    </p>
                    <div class="space-y-2 text-sm text-primary-600">
                        <div class="flex justify-between">
                            <span>✓ Lip enhancement</span>
                            <span class="text-accent-600 font-medium">Price at consultation</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Cheek volume</span>
                            <span class="text-accent-600 font-medium">Price at consultation</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Facial contouring</span>
                            <span class="text-accent-600 font-medium">Price at consultation</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="user-check" class="w-8 h-8 text-accent-600" aria-hidden="true"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary-800 mb-4">Expert Consultation</h3>
                    <p class="text-primary-600 mb-6">
                        Personalized treatment plans designed specifically for your unique facial anatomy and aesthetic goals.
                    </p>
                    <div class="space-y-2 text-sm text-primary-600">
                        <div class="flex justify-between">
                            <span>✓ Facial analysis</span>
                            <span class="text-accent-600 font-medium">Included</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Treatment planning</span>
                            <span class="text-accent-600 font-medium">Included</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Follow-up care</span>
                            <span class="text-accent-600 font-medium">Included</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                                        <a href="services" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full text-lg font-semibold transition-colors inline-flex items-center justify-center">
                    <i data-lucide="arrow-right" class="w-5 h-5 mr-2" aria-hidden="true"></i>
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                        Precision Meets Artistry
                    </h2>
                    <p class="text-lg text-primary-700 mb-6 leading-relaxed">
                        Our founder brings a unique combination of surgical precision and artistic vision to medical aesthetics. With extensive experience as a first assist in the operating room, every treatment is performed with the highest standards of safety and technique.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5 text-accent-600" aria-hidden="true"></i>
                            </div>
                            <span class="text-primary-700"><?php echo $credentials; ?></span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5 text-accent-600" aria-hidden="true"></i>
                            </div>
                            <span class="text-primary-700">Surgical First Assist Background</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5 text-accent-600" aria-hidden="true"></i>
                            </div>
                            <span class="text-primary-700">Dedicated to Natural Results</span>
                        </div>
                    </div>
                    <a href="about" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full text-lg font-semibold transition-colors inline-flex items-center justify-center">
                        <i data-lucide="user" class="w-5 h-5 mr-2" aria-hidden="true"></i>
                        Learn About Our Practice
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i data-lucide="award" class="w-10 h-10 text-accent-600" aria-hidden="true"></i>
                            </div>
                            <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4">Expert Credentials</h3>
                            <div class="space-y-3 text-primary-600">
                                <div class="border-b border-primary-100 pb-3">
                                    <div class="font-semibold text-primary-800">Nurse Practitioner License</div>
                                    <div class="text-sm">Active & Current</div>
                                </div>
                                <div class="border-b border-primary-100 pb-3">
                                    <div class="font-semibold text-primary-800">Surgical First Assist</div>
                                    <div class="text-sm">Certified Professional</div>
                                </div>
                                <div>
                                    <div class="font-semibold text-primary-800">Medical Aesthetics</div>
                                    <div class="text-sm">Specialized Training</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative accent -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-accent-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-primary-200 rounded-full opacity-40"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Reviews Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-4">
                    What Our Clients Say
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Real experiences from satisfied clients who trust Still Time Beauty for their aesthetic enhancement.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12 justify-center max-w-4xl mx-auto">
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent-500 text-lg space-x-0.5" aria-label="5 out of 5 star rating">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-primary-700 italic mb-4">
                        "I would highly recommend Maria to anyone who is seeking aesthetic services! She took the time to listen to what I wanted and delivered exactly that— with skill, care and precision. She exhibited professionalism and patience throughout the whole appointment and I couldn't be happier with the results! I will definitely be using her services again in the future!"
                    </p>
                    <div class="font-semibold text-primary-800">Kendall M.</div>
                    <div class="text-sm text-primary-600">Verified Google Review</div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent-500 text-lg space-x-0.5" aria-label="5 out of 5 star rating">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-primary-700 italic mb-4">
                        "I can't say enough great things about Maria of Still Time Beauty. From the moment you walk in, you will feel welcomed and at ease. Maria is knowledgeable, professional, and kind. She will carefully listen to your preferences and personalize your treatment. Highly recommend Maria and Still Time Beauty for aesthetics care. She is a gem!"
                    </p>
                    <div class="font-semibold text-primary-800">Denise K.</div>
                    <div class="text-sm text-primary-600">Verified Google Review</div>
                </div>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center space-x-4 bg-primary-50 rounded-full px-8 py-4 mb-8">
                    <div class="text-3xl font-bold text-primary-800">5.0</div>
                    <div class="flex text-accent-500 text-2xl space-x-0.5" aria-label="5 out of 5 star rating">
                        <i data-lucide="star" class="w-6 h-6 fill-current"></i>
                        <i data-lucide="star" class="w-6 h-6 fill-current"></i>
                        <i data-lucide="star" class="w-6 h-6 fill-current"></i>
                        <i data-lucide="star" class="w-6 h-6 fill-current"></i>
                        <i data-lucide="star" class="w-6 h-6 fill-current"></i>
                    </div>
                    <div class="text-primary-600">
                        <div class="font-semibold">Google Reviews</div>
                        <div class="text-sm">Based on verified clients</div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://www.google.com/search?q=Still+Time+Beauty+Boulder+reviews" target="_blank" class="border-2 border-accent-600 text-accent-600 bg-white hover:bg-accent-50 px-8 py-4 rounded-full transition-colors font-semibold inline-flex items-center justify-center">
                        <i data-lucide="book-open" class="w-5 h-5 mr-2" aria-hidden="true"></i>Read All Reviews
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                    <a href="https://www.google.com/search?q=Still+Time+Beauty+Boulder+reviews" target="_blank" class="border-2 border-accent-600 text-accent-600 px-8 py-4 rounded-full hover:bg-accent-50 transition-colors font-semibold inline-flex items-center justify-center">
                        <i data-lucide="star" class="w-5 h-5 mr-2" aria-hidden="true"></i>Leave a Review
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
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