<?php 
require_once 'config.php'; 

// Page-specific variables
$current_page = 'pre-post-treatment';
$page_title = 'Pre & Post Treatment Guidelines - ' . $business_name;
$page_description = 'Essential pre and post treatment care instructions for Botox, Xeomin, Dysport, and filler treatments at ' . $business_name . ' in Boulder, CO. Follow these guidelines for optimal results and minimal downtime.';
$page_keywords = 'pre treatment care, post treatment care, Botox aftercare, filler aftercare, medical aesthetics Boulder, treatment guidelines, Xeomin care, Dysport care';
$page_og_description = 'Pre & Post Treatment Guidelines - essential care instructions for Botox and filler treatments. Optimize your results with proper preparation and aftercare.';
$page_url = '/pre-post-treatment';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-28 lg:pt-32 pb-12 md:pb-14 lg:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="page-heading">
                    Pre & Post Treatment Guidelines
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Essential care instructions to optimize your treatment results and ensure the best possible experience with your Botox and filler treatments.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-accent-50 rounded-2xl p-8 mb-12">
                <h2 class="text-2xl font-serif font-bold text-primary-900 mb-4">Important Treatment Guidelines</h2>
                <p class="text-primary-700 leading-relaxed">
                    Following these pre and post treatment guidelines will help ensure optimal results and minimize any potential side effects from your aesthetic treatments.
                </p>
            </div>

            <div class="prose prose-lg max-w-none">
                <!-- Botox Section -->
                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Botox (Xeomin, Dysport)</h2>
                
                <!-- Botox Pre-treatment -->
                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="clock" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Botox Pre-treatment</h3>
                    </div>
                    <p class="text-primary-700 mb-4">Please follow the following guidelines to have improved injection results and shorten duration of downtime.</p>
                    
                    <div class="space-y-3">
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">No NSAIDs (such as aspirin, ibuprofen, motrin, aleve) 5 days before your appointment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">No supplements (such as fish oil, turmeric, Vitamin E, ginkgo, evening primrose, garlic, feverfew, and any other supplements associated with anticoagulation) 5 days before your appointment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">If you are taking prescribed blood thinners - notify Boutique prior to your treatment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid alcohol 24 hours before</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid caffeine 24 hours before</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid anti-aging products such as retinol 1-2 days before</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Take zinc supplement (10 mg) daily for 4 days before treatment (results will last up to 30% longer)</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">For underarm sweating treatment: shave underarms, and do not use over the counter deodorant or antiperspirant for 24 hours before your appointment</p>
                        </div>
                    </div>
                </div>

                <!-- Botox Post-treatment -->
                <div class="bg-accent-50 rounded-xl p-6 mb-12">
                    <div class="flex items-center mb-4">
                        <i data-lucide="shield-check" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Botox Post-treatment</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No exercise on day after treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No saunas or excessive sweating on day after treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No alcohol 24 hours after</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Avoid touching your face as much as possible. If you have to adjust something - wash your hands prior</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No laying down or bending over for 4 hours after treatment (this prevents medicine migration to unintended areas)</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No facial or massage on day of treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No tanning on day of treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">OK to apply soft ice pack for 10-15 min if bruising occurred (Note: some data suggests that cold temperature may decrease efficacy of Botox or similar product)</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Oral intake and/or topical application of Arnica Montana may help reduce bruising and swelling</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Sleep on your back first night</p>
                        </div>
                    </div>
                </div>

                <!-- Filler Section -->
                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Filler Treatments</h2>

                <!-- Filler Pre-treatment -->
                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="clock" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Filler Pre-treatment</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">No NSAIDs (such as aspirin, ibuprofen, motrin, aleve) 5 days before your appointment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">No supplements (such as fish oil, turmeric, Vitamin E, ginkgo, evening primrose, garlic, feverfew, and any other supplements associated with anticoagulation) 5 days before your appointment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">If you are taking prescribed blood thinners - notify Boutique prior to your treatment</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid alcohol 24 hours before</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid caffeine 24 hours before</p>
                        </div>
                        <div class="border-l-4 border-accent-600 pl-4">
                            <p class="text-primary-700">Avoid anti-aging products such as retinol 1-2 days before</p>
                        </div>
                    </div>
                </div>

                <!-- Filler Post-treatment -->
                <div class="bg-accent-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="shield-check" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Filler Post-treatment</h3>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No exercise 24 hours after treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No ICE use</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No saunas or excessive sweating 24 hours after treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No alcohol 24 hours after</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Avoid touching your face with hair or phone as much as possible. If you have to adjust something - wash your hands prior</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Makeup can be applied 12 hours post-treatment (if needed to cover bruising)</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No laying down or bending over for 4 hours after treatment (this prevents medicine migration to unintended areas)</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No facial or massage on day of treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">No tanning on day of treatment</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Oral intake and/or topical application of Arnica Montana may help reduce bruising and swelling</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Sleep on your back first night</p>
                        </div>
                        <div class="border-l-4 border-primary-600 pl-4">
                            <p class="text-primary-700">Itching may occur 7-14 days post treatment (non-prescription allergy medicine may alleviate itching)</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Questions About Your Treatment?</h2>

                <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-xl p-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Contact Us</h3>
                            <div class="space-y-2">
                                <p class="text-primary-700">Phone: <strong><a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></strong></p>
                                <p class="text-primary-700">Location: <?php echo $address_street; ?>, <?php echo $address_city; ?>, <?php echo $address_state; ?> <?php echo $address_zip; ?></p>
                                <p class="text-primary-700">Hours: By appointment only</p>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Important Reminders</h3>
                            <ul class="space-y-2 text-primary-700">
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Follow all pre-treatment guidelines for best results</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Call with any questions before or after treatment</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Notify us of any prescribed blood thinners</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border border-accent-200 rounded-xl p-6 mt-8">
                    <p class="text-primary-700 mb-4">
                        If you have any questions about your pre or post treatment care, please don't hesitate to contact us. We're here to ensure you have the best possible experience and results from your aesthetic treatments.
                    </p>
                    <div class="flex justify-center flex-col sm:flex-row gap-4">
                        <a href="<?php echo $phone_link; ?>" class="bg-accent-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-accent-700 transition-colors inline-flex items-center justify-center">
                            <i data-lucide="phone" class="w-5 h-5 mr-2"></i>Call with Questions
                        </a>
                    </div>
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