<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php';

// Set flag for header path resolution
$is_legal_page = true;

// Page-specific variables
$current_page = 'legal';
$page_title = 'Terms of Service - ' . $business_name;
$page_description = 'Terms of Service for ' . $business_name . ' - Boulder Medical Aesthetics Practice. Patient treatment agreements and service terms.';

// Include legal header
include __DIR__ . '/../includes/header-legal.php';
include __DIR__ . '/../includes/navigation.php';
?>

<main id="main">
<!-- Content starts at body padding top to account for fixed nav -->
<div class="pt-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="page-heading">Terms of Service</h1>
            
            <div class="prose prose-lg max-w-none text-gray-700">
                <p class="text-sm text-gray-600 mb-8">
                    <strong>Effective Date:</strong> January 1, 2024<br>
                    <strong>Last Updated:</strong> January 1, 2024
                </p>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Agreement to Terms</h2>
                    <p class="mb-4">
                        By accessing and using the Still Time Beauty website ("Site") and services, you agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, please do not use our Site or services.
                    </p>
                    <p class="mb-4">
                        These Terms apply to all visitors, users, and patients of Still Time Beauty, located in Boulder, Colorado.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Medical Practice Terms</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Patient Responsibilities</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Provide accurate and complete medical history information</li>
                        <li>Follow pre and post-treatment instructions</li>
                        <li>Disclose all medications, supplements, and medical conditions</li>
                        <li>Arrive on time for scheduled appointments</li>
                        <li>Pay for services as agreed upon</li>
                        <li>Notify us of any changes in your health status</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Practitioner Rights</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Refuse treatment if medically contraindicated</li>
                        <li>Modify treatment plans based on clinical judgment</li>
                        <li>Discontinue the patient-provider relationship with appropriate notice</li>
                        <li>Require payment for services rendered</li>
                        <li>Maintain professional boundaries and standards</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Appointment and Cancellation Policy</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Scheduling</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Appointments are by phone consultation only: <?php echo $phone; ?></li>
                        <li>Initial consultations may require longer time slots</li>
                        <li>We operate by appointment only with flexible scheduling</li>
                        <li>Emergency appointments may be accommodated based on availability</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Cancellation and No-Show Policy</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li><strong>24-Hour Notice Required:</strong> Cancel at least 24 hours before your appointment</li>
                        <li><strong>Late Cancellation Fee:</strong> $50 fee for cancellations with less than 24 hours notice</li>
                        <li><strong>No-Show Fee:</strong> $100 fee for missed appointments without notice</li>
                        <li><strong>Repeated Violations:</strong> May result in requirement for advance payment</li>
                        <li><strong>Emergency Exceptions:</strong> Medical emergencies are exempt from cancellation fees</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Rescheduling</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Appointments may be rescheduled with appropriate notice</li>
                        <li>Multiple reschedules may incur administrative fees</li>
                        <li>Priority scheduling given to existing patients</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Payment Terms</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Payment Methods</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Cash, check, and major credit cards accepted</li>
                        <li>Payment is due at time of service unless prior arrangements are made</li>
                        <li>Payment plans may be available for extensive treatments</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Insurance</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Most aesthetic treatments are not covered by insurance</li>
                        <li>Patients are responsible for verifying coverage</li>
                        <li>Payment is required regardless of insurance coverage</li>
                        <li>We do not guarantee insurance reimbursement</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Refund Policy</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Consultation fees are non-refundable</li>
                        <li>Treatment fees are generally non-refundable once services are provided</li>
                        <li>Unused portions of treatment packages may be refunded within 30 days</li>
                        <li>Product purchases may be refunded if unopened and within 14 days</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Medical Disclaimers</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Treatment Risks</h3>
                    <p class="mb-4">All medical and aesthetic treatments carry inherent risks, including but not limited to:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Allergic reactions to medications or products</li>
                        <li>Infection at injection sites</li>
                        <li>Bruising, swelling, or temporary discomfort</li>
                        <li>Asymmetry or unsatisfactory results</li>
                        <li>Need for additional treatments</li>
                        <li>Rare but serious complications</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Results Disclaimer</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Individual results may vary significantly</li>
                        <li>No guarantee of specific outcomes</li>
                        <li>Multiple treatments may be required for desired results</li>
                        <li>Results are temporary and may require maintenance</li>
                        <li>Before/after photos may not represent typical results</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Informed Consent</h3>
                    <p class="mb-4">
                        Before any treatment, you will receive detailed informed consent information specific to your procedure. This includes detailed risks, benefits, alternatives, and post-treatment care instructions.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Website Usage Terms</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Permitted Use</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Personal, non-commercial use of website information</li>
                        <li>Accessing services and appointment scheduling</li>
                        <li>Reading educational content about treatments</li>
                        <li>Contacting our practice for legitimate inquiries</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Prohibited Use</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Commercial use of website content without permission</li>
                        <li>Copying, reproducing, or distributing website materials</li>
                        <li>Reverse engineering or attempting to access restricted areas</li>
                        <li>Using the website for illegal or harmful purposes</li>
                        <li>Transmitting malicious code or interfering with website operation</li>
                        <li>Impersonating Still Time Beauty or its staff</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Intellectual Property</h3>
                    <p class="mb-4">
                        All website content, including text, images, logos, and design elements, is the property of Still Time Beauty and is protected by copyright and trademark laws.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Privacy and Confidentiality</h2>
                    <p class="mb-4">
                        Your privacy is protected by our Privacy Policy and HIPAA regulations. By using our services, you acknowledge that you have read and understand our privacy practices.
                    </p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Medical information will be kept confidential as required by law</li>
                        <li>Website usage data may be collected for analytical purposes</li>
                        <li>Photography and testimonials require separate written consent</li>
                        <li>Third-party vendors may have access to non-medical information</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Limitation of Liability</h2>
                    <p class="mb-4">
                        To the maximum extent permitted by law, Still Time Beauty and its practitioners shall not be liable for:
                    </p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Indirect, incidental, or consequential damages</li>
                        <li>Loss of profits, data, or business opportunities</li>
                        <li>Damages arising from website downtime or technical issues</li>
                        <li>Actions taken based on website information alone</li>
                        <li>Third-party content or services referenced on our website</li>
                    </ul>
                    <p class="mb-4">
                        <strong>Medical Malpractice:</strong> This limitation does not apply to medical malpractice claims, which are governed by Colorado medical malpractice law and our professional liability insurance.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Contact Information</h2>
                    <p class="mb-4">For questions about these Terms of Service, please contact:</p>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="font-semibold text-primary-800 mb-2">Still Time Beauty</p>
                        <p class="mb-1"><?php echo $contact_name; ?></p>
                        <p class="mb-1"><?php echo $address_street; ?></p>
                        <p class="mb-1"><?php echo $address_city; ?>, <?php echo $address_state; ?> <?php echo $address_zip; ?></p>
                        <p class="mb-1">Phone: <a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></p>
                        <p>Email: <a href="mailto:<?php echo $email; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $email; ?></a></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/scripts.php'; ?>
</body>
</html> 