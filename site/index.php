<?php 
require_once 'config.php'; 

// Page-specific variables
$current_page = 'home';
$page_structured_data = '{
    "@context": "https://schema.org",
    "@type": "MedicalBusiness",
    "name": "Still Time Beauty",
    "description": "Medical aesthetics practice specializing in Botox, dermal fillers, and facial rejuvenation treatments",
    "url": "https://stilltimebeauty.com",
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

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-26 lg:pt-28 pb-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-serif font-bold text-primary-900 mb-6 leading-tight">
                        Enhance Your Natural Beauty with 
                        <span class="text-accent-600">Expert Care</span>
                    </h1>
                    <p class="text-xl text-primary-600 mb-8 leading-relaxed">
                        Professional medical aesthetics in downtown Boulder. Expert Botox and dermal filler treatments by a qualified Nurse Practitioner with surgical precision.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="<?php echo $phone_link; ?>" class="bg-accent-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-accent-700 transition-colors shadow-lg">
                            <?php echo $cta_phone; ?>
                        </a>
                        <a href="services" class="border-2 border-primary-300 text-primary-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-50 transition-colors">
                            View Services
                        </a>
                    </div>
                    <div class="mt-6 grid grid-cols-2 gap-4 justify-center lg:justify-start max-w-md mx-auto lg:mx-0">
                        <div class="bg-white/80 backdrop-blur-sm border border-primary-200 rounded-xl px-4 py-3 text-center lg:text-left">
                            <div class="flex items-center justify-center lg:justify-start space-x-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-accent-600"></i>
                                <div>
                                    <div class="text-xs font-semibold text-primary-800">
                                        Convenient<br class="sm:hidden"> Location
                                    </div>
                                    <div class="text-xs text-primary-600">Pearl Street, Boulder</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/80 backdrop-blur-sm border border-primary-200 rounded-xl px-4 py-3 text-center lg:text-left">
                            <div class="flex items-center justify-center lg:justify-start space-x-2">
                                <i data-lucide="calendar" class="w-4 h-4 text-accent-600"></i>
                                <div>
                                    <div class="text-xs font-semibold text-primary-800">
                                        Flexible<br class="sm:hidden"> Scheduling
                                    </div>
                                    <div class="text-xs text-primary-600">By Appointment Only</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex items-center justify-center lg:justify-start space-x-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-800">5.0</div>
                            <div class="flex text-primary-600 text-sm space-x-0.5">
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
                            <div class="text-sm text-primary-600">Licensed</div>
                            <div class="text-xs text-primary-500">Nurse Practitioner</div>
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <!-- Main circular image -->
                    <div class="relative w-72 h-72 md:w-[26rem] md:h-[26rem] lg:w-[33rem] lg:h-[33rem]">
                        <div class="w-full h-full rounded-full overflow-hidden shadow-2xl border-8 border-white">
                            <img src="assets/hero-faces.png" alt="Professional medical aesthetics for men and women" class="w-full h-full object-cover object-center">
                        </div>
                        <!-- Floating badge -->
                        <div class="absolute -top-4 -right-4 bg-white/95 backdrop-blur-sm border-2 border-accent-200 text-primary-800 rounded-2xl px-4 py-2 shadow-xl">
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
                                <i data-lucide="star" class="w-5 h-5 fill-current text-accent-500"></i>
                            </div>
                                <div class="text-xs text-primary-600">Google Reviews</div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute top-4 right-4 md:top-8 md:right-8 w-12 h-12 md:w-16 md:h-16 bg-accent-200 rounded-full opacity-30 animate-pulse"></div>
                    <div class="absolute bottom-8 right-12 md:bottom-16 md:right-16 w-6 h-6 md:w-8 md:h-8 bg-primary-300 rounded-full opacity-40"></div>
                    <div class="absolute top-12 left-4 md:top-16 md:left-8 w-8 h-8 md:w-12 md:h-12 bg-accent-100 rounded-full opacity-50"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-4">
                    Expert Medical Aesthetics
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Precision treatments designed to enhance your natural beauty with the highest standards of safety and artistry.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="syringe" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary-800 mb-4">Botox Treatments</h3>
                    <p class="text-primary-600 mb-6">
                        Smooth fine lines and wrinkles with precision neuromodulator treatments. Natural-looking results that enhance your expressions.
                    </p>
                    <div class="space-y-2 text-sm text-primary-600">
                        <div class="flex justify-between">
                            <span>✓ Forehead lines</span>
                            <span class="text-accent-600 font-medium">$12-15/unit</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Crow's feet</span>
                            <span class="text-accent-600 font-medium">$12-15/unit</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Frown lines</span>
                            <span class="text-accent-600 font-medium">$12-15/unit</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="droplet" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-primary-800 mb-4">Dermal Fillers</h3>
                    <p class="text-primary-600 mb-6">
                        Restore volume and contour with premium hyaluronic acid fillers. Achieve natural enhancement with expert technique.
                    </p>
                    <div class="space-y-2 text-sm text-primary-600">
                        <div class="flex justify-between">
                            <span>✓ Lip enhancement</span>
                            <span class="text-accent-600 font-medium">$650+</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Cheek volume</span>
                            <span class="text-accent-600 font-medium">$700+</span>
                        </div>
                        <div class="flex justify-between">
                            <span>✓ Facial contouring</span>
                            <span class="text-accent-600 font-medium">$600+</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8 text-center hover:shadow-lg transition-shadow md:col-span-2 lg:col-span-1">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="user-check" class="w-8 h-8 text-accent-600"></i>
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
                <a href="services" class="bg-accent-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-accent-700 transition-colors inline-flex items-center">
                    <i data-lucide="arrow-right" class="w-5 h-5 mr-2"></i>
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="py-20 bg-primary-50">
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
                                <i data-lucide="check" class="w-5 h-5 text-accent-600"></i>
                            </div>
                            <span class="text-primary-700"><?php echo $credentials; ?></span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5 text-accent-600"></i>
                            </div>
                            <span class="text-primary-700">Surgical First Assist Background</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5 text-accent-600"></i>
                            </div>
                            <span class="text-primary-700">Dedicated to Natural Results</span>
                        </div>
                    </div>
                    <a href="about" class="bg-primary-700 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-800 transition-colors inline-flex items-center">
                        <i data-lucide="user" class="w-5 h-5 mr-2"></i>
                        Learn About Our Practice
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <div class="text-center">
                            <div class="w-20 h-20 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i data-lucide="award" class="w-10 h-10 text-accent-600"></i>
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
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-4">
                    What Our Clients Say
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Real experiences from satisfied clients who trust Still Time Beauty for their aesthetic enhancement.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent-500 text-lg space-x-0.5">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-primary-700 italic mb-4">
                        "The results look so natural that people can't tell I've had anything done. The technique is absolutely flawless and the attention to detail is incredible."
                    </p>
                    <div class="font-semibold text-primary-800">Sarah M.</div>
                    <div class="text-sm text-primary-600">Verified Google Review</div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent-500 text-lg space-x-0.5">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-primary-700 italic mb-4">
                        "I felt completely comfortable throughout the entire process. The professionalism and expertise shown made me confident in my choice."
                    </p>
                    <div class="font-semibold text-primary-800">Jessica R.</div>
                    <div class="text-sm text-primary-600">Verified Google Review</div>
                </div>
                
                <div class="bg-primary-50 rounded-2xl p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-accent-500 text-lg space-x-0.5">
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                        </div>
                    </div>
                    <p class="text-primary-700 italic mb-4">
                        "The surgical precision background really shows in the work. Every detail is perfect and the results exceed my expectations every time."
                    </p>
                    <div class="font-semibold text-primary-800">Michael T.</div>
                    <div class="text-sm text-primary-600">Verified Google Review</div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div class="bg-gradient-to-br from-accent-50 to-primary-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4">Real Client Results</h3>
                    <p class="text-primary-700 mb-6">
                        Our commitment to natural enhancement means you'll look like the best version of yourself. No overdone results, just subtle improvements that enhance your natural beauty.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div class="bg-white rounded-xl p-4">
                            <div class="text-2xl font-bold text-accent-600">98%</div>
                            <div class="text-sm text-primary-600">Satisfaction Rate</div>
                        </div>
                        <div class="bg-white rounded-xl p-4">
                            <div class="text-2xl font-bold text-accent-600">100%</div>
                            <div class="text-sm text-primary-600">Return Clients</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4">Before & After Gallery</h3>
                    <p class="text-primary-700 mb-6">
                        See the subtle, natural enhancements achieved through expert technique and artistic vision. Results that look like you, just refreshed.
                    </p>
                    <a href="services" class="bg-white text-primary-700 px-6 py-3 rounded-full font-semibold hover:shadow-lg transition-shadow inline-flex items-center group">
                        <i data-lucide="image" class="w-5 h-5 mr-2"></i>View Gallery
                        <svg class="w-4 h-4 text-primary-400 group-hover:text-accent-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="text-center">
                <div class="inline-flex items-center space-x-4 bg-primary-50 rounded-full px-8 py-4 mb-8">
                    <div class="text-3xl font-bold text-primary-800">5.0</div>
                    <div class="flex text-accent-500 text-2xl space-x-0.5">
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
                    <a href="https://www.google.com/search?q=Still+Time+Beauty+Boulder+reviews" target="_blank" class="bg-primary-600 text-white px-8 py-4 rounded-full hover:bg-primary-700 transition-colors font-semibold inline-flex items-center">
                        <i data-lucide="book-open" class="w-5 h-5 mr-2"></i>Read All Reviews
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                    <a href="https://www.google.com/search?q=Still+Time+Beauty+Boulder+reviews" target="_blank" class="border-2 border-accent-600 text-accent-600 px-8 py-4 rounded-full hover:bg-accent-50 transition-colors font-semibold inline-flex items-center">
                        <i data-lucide="star" class="w-5 h-5 mr-2"></i>Leave a Review
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-br from-primary-50 to-accent-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                Ready to Experience the Same Results?
            </h2>
            <p class="text-xl text-primary-600 mb-8 max-w-3xl mx-auto">
                Join the satisfied clients who trust Still Time Beauty for expert medical aesthetics. Schedule your personalized consultation and discover how we can help you achieve your aesthetic goals.
            </p>
            
            <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="calendar" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Consultation</h3>
                    <p class="text-primary-600 text-sm">Personalized assessment and treatment planning</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="syringe" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Expert Treatment</h3>
                    <p class="text-primary-600 text-sm">Precise techniques with surgical-level care</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="sun" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Natural Results</h3>
                    <p class="text-primary-600 text-sm">Enhanced beauty that looks completely natural</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:(720) 731-8222" class="bg-accent-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-accent-700 transition-colors inline-flex items-center">
                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i>Call to Book: (720) 731-8222
                </a>
                <a href="services" class="border-2 border-primary-600 text-primary-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-50 transition-colors">
                    View All Services
                </a>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?> 