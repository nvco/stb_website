<?php 
declare(strict_types=1);

require_once 'config.php'; 

// Page-specific variables
$current_page = 'about';
$page_title = 'About Us - ' . $business_name . ' | Medical Aesthetics Boulder';
$page_description = 'Learn about ' . $business_name . '\'s founder, a ' . strtolower($credentials) . ' with surgical precision background specializing in medical aesthetics in Boulder, CO.';
$page_keywords = 'Nurse Practitioner Boulder, medical aesthetics credentials, surgical precision, facial rejuvenation expert';
$page_og_description = 'Meet our ' . strtolower($credentials) . ' with surgical precision background specializing in medical aesthetics in Boulder, CO.';
$page_url = '/about';
$page_structured_data = '{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About ' . $business_name . '",
            "description": "Learn about ' . $business_name . '\'s founder, a ' . strtolower($credentials) . ' with surgical precision background specializing in medical aesthetics in Boulder, CO.",
    "url": "' . $base_url . '/about",
    "mainEntity": {
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
    }
}';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-26 lg:pt-28 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-serif font-bold text-primary-900 mb-6">
                    Where Expertise Meets Artistry
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto mb-8">
                    Discover the story behind <?php echo $business_name; ?> and our commitment to enhancing your natural beauty through genuine human connection and surgical precision.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                            <a href="<?php echo $phone_link; ?>" class="inline-flex items-center 
                                                                   px-8 py-4 
                                                                   text-lg font-semibold text-white 
                                                                   bg-accent-600 
                                                                   rounded-full shadow-lg 
                                                                   hover:bg-accent-700 transition-colors">
                        <?php echo $cta_phone; ?>
                    </a>
                    <a href="services" class="border-2 border-primary-300 text-primary-700 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-50 transition-colors">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-serif font-bold text-primary-900 mb-8">Our Story</h2>
                    <div class="prose prose-lg text-primary-700 space-y-6">
                        <p>
                            Our founder's path to aesthetic medicine began with a simple but powerful conviction: the desire to make a meaningful difference in people's lives through genuine human connection. After completing nursing school and dedicating years to patient care, the calling to continue advancing in healthcare led to becoming a Nurse Practitioner.
                        </p>
                        <p>
                            Today, our founder brings the precision and expertise gained as a first assist in the operating room to the world of aesthetic medicine. This unique background combines surgical precision with an artistic eye, ensuring that every treatment is performed with the highest standards of safety and skill.
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-accent-50 rounded-3xl p-8 text-center">
                        <div class="w-24 h-24 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="user-check" class="w-12 h-12 text-accent-600"></i>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-primary-800 mb-4"><?php echo $credentials; ?></h3>
                                                  <p class="text-primary-600 mb-6">
                              <?php echo $credentials_description; ?> with extensive experience in direct patient care and aesthetic medicine.
                          </p>
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            <div class="text-sm text-primary-600 space-y-2">
                                <div class="flex justify-between">
                                    <span>✓ Nurse Practitioner License</span>
                                    <span class="font-semibold">Active</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>✓ Surgical First Assist</span>
                                    <span class="font-semibold">Certified</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>✓ Medical Aesthetics</span>
                                    <span class="font-semibold">Specialized</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-20 bg-gradient-to-br from-primary-50 to-accent-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                    Our Philosophy
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Every treatment is guided by principles of safety, artistry, and genuine care for your aesthetic journey.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="shield-check" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Safety First</h3>
                    <p class="text-primary-600">
                        Every procedure is performed with surgical precision and the highest safety standards, ensuring your well-being is always the top priority.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="heart" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Natural Enhancement</h3>
                    <p class="text-primary-600">
                        We believe in enhancing your natural beauty, not changing who you are. Results that look like you, just refreshed and revitalized.
                    </p>
                </div>
                
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="users" class="w-8 h-8 text-accent-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">Personal Connection</h3>
                    <p class="text-primary-600">
                        Healthcare should be personal. We take time to understand your goals and create a treatment plan that's uniquely yours.
                    </p>
                </div>
            </div>
            
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-serif font-bold text-primary-900 mb-6">
                            The Precision Difference
                        </h3>
                        <p class="text-lg text-primary-700 mb-6 leading-relaxed">
                            Years of experience as a surgical first assist in the operating room have shaped our approach to aesthetic medicine. This background provides an unparalleled understanding of facial anatomy, precision techniques, and the importance of meticulous attention to detail.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-accent-100 rounded-full flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                </div>
                                <span class="text-primary-700">Surgical precision in every injection</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-accent-100 rounded-full flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                </div>
                                <span class="text-primary-700">Deep understanding of facial anatomy</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-accent-100 rounded-full flex items-center justify-center">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600"></i>
                                </div>
                                <span class="text-primary-700">Commitment to ongoing education</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-accent-50 to-primary-50 rounded-2xl p-8">
                            <div class="text-center">
                                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                                    <i data-lucide="stethoscope" class="w-10 h-10 text-accent-600"></i>
                                </div>
                                <h4 class="text-xl font-semibold text-primary-800 mb-4">Medical Excellence</h4>
                                <p class="text-primary-600 mb-6">
                                    Our medical background ensures that every treatment decision is made with your health and safety as the paramount concern.
                                </p>
                                <div class="bg-white rounded-xl p-4 shadow-lg">
                                    <div class="text-sm text-primary-600">
                                        <div class="font-semibold text-primary-800 mb-2">Continuing Education</div>
                                        <div>Regular training in latest techniques and safety protocols</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                    Why Choose <?php echo $business_name; ?>?
                </h2>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Experience the difference that medical expertise, artistic vision, and genuine care can make in your aesthetic journey.
                </p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="user-check" class="w-6 h-6 text-accent-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-primary-800 mb-2">Licensed Professional</h3>
                                <p class="text-primary-600">
                                    <?php echo $credentials; ?> with specialized training in aesthetic medicine and years of hands-on experience in healthcare.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="target" class="w-6 h-6 text-accent-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-primary-800 mb-2">Precision Techniques</h3>
                                <p class="text-primary-600">
                                    Surgical first assist background ensures every injection is placed with precision and attention to anatomical detail.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="eye" class="w-6 h-6 text-accent-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-primary-800 mb-2">Artistic Vision</h3>
                                <p class="text-primary-600">
                                    Combines medical expertise with an artistic eye to create results that enhance your natural beauty harmoniously.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="heart-handshake" class="w-6 h-6 text-accent-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-primary-800 mb-2">Personal Care</h3>
                                <p class="text-primary-600">
                                    Dedicated to building genuine relationships with clients and providing personalized care throughout your journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-3xl p-8">
                        <h3 class="text-2xl font-serif font-bold text-primary-800 mb-6 text-center">Our Commitment to You</h3>
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-3 mb-3">
                                    <i data-lucide="shield" class="w-6 h-6 text-accent-600"></i>
                                    <h4 class="font-semibold text-primary-800">Safety & Standards</h4>
                                </div>
                                <p class="text-primary-600 text-sm">
                                    Adherence to the highest medical and safety standards in every procedure.
                                </p>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-3 mb-3">
                                    <i data-lucide="clock" class="w-6 h-6 text-accent-600"></i>
                                    <h4 class="font-semibold text-primary-800">Time & Attention</h4>
                                </div>
                                <p class="text-primary-600 text-sm">
                                    Thorough consultations and unhurried treatment sessions focused on your needs.
                                </p>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <div class="flex items-center space-x-3 mb-3">
                                    <i data-lucide="refresh-cw" class="w-6 h-6 text-accent-600"></i>
                                    <h4 class="font-semibold text-primary-800">Ongoing Support</h4>
                                </div>
                                <p class="text-primary-600 text-sm">
                                    Comprehensive follow-up care and support throughout your aesthetic journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-br from-primary-50 to-accent-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
                Ready to Begin Your Journey?
            </h2>
            <p class="text-xl text-primary-600 mb-8 max-w-3xl mx-auto">
                Schedule your personalized consultation and discover how our expertise, precision, and genuine care can help you achieve your aesthetic goals naturally.
            </p>
            
            <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="calendar" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Schedule Consultation</h3>
                    <p class="text-primary-600 text-sm">Personalized assessment and treatment planning session</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="clipboard-check" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Custom Treatment Plan</h3>
                    <p class="text-primary-600 text-sm">Tailored approach designed for your unique goals</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="sparkles" class="w-6 h-6 text-accent-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-primary-800 mb-2">Natural Results</h3>
                    <p class="text-primary-600 text-sm">Enhanced beauty that looks completely natural</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo $phone_link; ?>" class="bg-accent-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-accent-700 transition-colors inline-flex items-center">
                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i>Call for Consultation: <?php echo $phone; ?>
                </a>
                <a href="services" class="border-2 border-primary-600 text-primary-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-50 transition-colors">
                    View Our Services
                </a>
            </div>
        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?> 