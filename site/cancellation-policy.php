<?php 
require_once 'config.php'; 

// Page-specific variables
$current_page = 'cancellation-policy';
$page_title = 'Cancellation & Refund Policy - ' . $business_name;
$page_description = 'Cancellation and refund policy for ' . $business_name . ' in Boulder, CO. Learn about our 24-hour cancellation policy, scheduling procedures, and payment terms for medical aesthetics treatments.';
$page_keywords = 'cancellation policy, appointment scheduling, Boulder medical spa, refund policy, booking policy, medical aesthetics Boulder';
$page_og_description = 'Cancellation and refund policy for medical aesthetics treatments. Learn about appointment scheduling, cancellation requirements, and payment terms.';
$page_url = '/cancellation-policy';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-28 lg:pt-32 pb-12 md:pb-14 lg:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center bg-white rounded-full px-6 py-3 shadow-lg mb-6">
                    <i data-lucide="calendar-clock" class="w-6 h-6 text-accent-600 mr-2"></i>
                    <span class="text-primary-700 font-semibold">Booking Policies</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-serif font-bold text-primary-900 mb-6">
                    Cancellation & Refund Policy
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Our appointment scheduling, cancellation, and refund policies to ensure the best experience for all our clients.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-accent-50 rounded-2xl p-8 mb-12">
                <h2 class="text-2xl font-serif font-bold text-primary-900 mb-4">Effective Date: January 1, 2024</h2>
                <p class="text-primary-700 leading-relaxed">
                    This policy outlines our appointment scheduling, cancellation, and refund procedures. By booking an appointment with <?php echo $business_name; ?>, you agree to these terms.
                </p>
            </div>

            <div class="prose prose-lg max-w-none">
                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Appointment Scheduling</h2>
                
                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="phone" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">How to Book</h3>
                    </div>
                    <p class="text-primary-700 mb-4">All appointments must be scheduled by calling our office at <strong><a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></strong>. We do not accept online bookings at this time.</p>
                    <p class="text-primary-700">We operate by appointment only. Please call during business hours to schedule your consultation or treatment.</p>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Cancellation Policy</h2>

                <div class="space-y-6">
                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">24-Hour Notice Required</h3>
                        <p class="text-primary-700">We require a minimum of 24 hours notice for all appointment cancellations. This allows us to offer your appointment time to other clients who may be waiting.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Same-Day Cancellations</h3>
                        <p class="text-primary-700">Cancellations made with less than 24 hours notice may be subject to a cancellation fee of 50% of the scheduled service cost.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">No-Show Policy</h3>
                        <p class="text-primary-700">Failure to attend your scheduled appointment without prior notice will result in a full charge for the scheduled service.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Late Arrivals</h3>
                        <p class="text-primary-700">If you arrive more than 15 minutes late for your appointment, we may need to reschedule your treatment to accommodate other clients.</p>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Rescheduling Policy</h2>

                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="calendar-check" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Flexible Rescheduling</h3>
                    </div>
                    <p class="text-primary-700 mb-4">We understand that schedules can change. You may reschedule your appointment without penalty if you provide at least 24 hours notice.</p>
                    <p class="text-primary-700">To reschedule, please call our office at <strong><a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></strong> as soon as possible.</p>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Payment and Refund Policy</h2>

                <div class="space-y-6">
                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Payment Methods</h3>
                        <p class="text-primary-700">We accept cash, credit cards, and debit cards. Payment is due at the time of service unless other arrangements have been made in advance.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Consultation Fees</h3>
                        <p class="text-primary-700">Initial consultation fees are non-refundable once the consultation has been provided. However, consultation fees may be applied toward treatment costs if you proceed with recommended services.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Treatment Refunds</h3>
                        <p class="text-primary-700">Due to the nature of medical aesthetic treatments, refunds are generally not available once a service has been performed. We encourage thorough consultation before proceeding with any treatment.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Prepaid Services</h3>
                        <p class="text-primary-700">If you have prepaid for services, cancellations made with appropriate notice will be refunded or credited to your account for future use.</p>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Emergency Situations</h2>

                <div class="bg-accent-50 rounded-xl p-6 mb-8">
                    <div class="flex items-center mb-4">
                        <i data-lucide="heart" class="w-6 h-6 text-accent-600 mr-2"></i>
                        <h3 class="text-xl font-semibold text-primary-800">Understanding Life Happens</h3>
                    </div>
                    <p class="text-primary-700 mb-4">We understand that true emergencies and unexpected life events can occur. In cases of documented medical emergencies, family emergencies, or severe weather conditions, we will work with you on a case-by-case basis.</p>
                    <p class="text-primary-700">Please contact us as soon as possible to discuss your situation.</p>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Contact Information</h2>

                <div class="bg-gradient-to-br from-primary-50 to-accent-50 rounded-xl p-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Schedule or Modify Appointments</h3>
                            <div class="space-y-2">
                                <p class="text-primary-700">Phone: <strong><a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></strong></p>
                                <p class="text-primary-700">Location: <?php echo $address_street; ?>, <?php echo $address_city; ?>, <?php echo $address_state; ?> <?php echo $address_zip; ?></p>
                                <p class="text-primary-700">Hours: By appointment only</p>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-primary-800 mb-4">Best Practices</h3>
                            <ul class="space-y-2 text-primary-700">
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Call as soon as you know you need to cancel</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Arrive 10-15 minutes early for your appointment</span>
                                </li>
                                <li class="flex items-start space-x-2">
                                    <i data-lucide="check" class="w-4 h-4 text-accent-600 mt-1 flex-shrink-0"></i>
                                    <span>Keep our contact information easily accessible</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Questions About This Policy</h2>

                <div class="border border-accent-200 rounded-xl p-6">
                    <p class="text-primary-700 mb-4">
                        If you have any questions about our cancellation and refund policy, please don't hesitate to ask when scheduling your appointment or contact us directly.
                    </p>
                    <p class="text-primary-700 mb-4">
                        We want to ensure you have a clear understanding of our policies and feel comfortable with your treatment experience at <?php echo $business_name; ?>.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo $phone_link; ?>" class="bg-accent-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-accent-700 transition-colors inline-flex items-center justify-center">
                            <i data-lucide="phone" class="w-5 h-5 mr-2"></i>Call with Questions
                        </a>
                        <a href="about" class="border-2 border-primary-600 text-primary-600 px-6 py-3 rounded-full font-semibold hover:bg-primary-50 transition-colors inline-flex items-center justify-center">
                            Learn About Our Practice
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