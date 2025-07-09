<?php
// HIPAA Notice Page
require_once 'config.php';

// Page-specific variables
$current_page = 'hipaa-notice';
$page_title = 'HIPAA Notice of Privacy Practices - ' . $business_name;
$page_description = 'HIPAA Notice of Privacy Practices for Still Time Beauty - Your health information privacy rights and how your medical information may be used and disclosed.';

// Include legal header
include 'includes/header-legal.php';
include 'includes/navigation.php';
?>

<!-- Content starts at body padding top to account for fixed nav -->
<div class="pt-16 bg-gray-50">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center bg-white rounded-full px-6 py-3 shadow-lg mb-6">
                    <i data-lucide="shield-check" class="w-6 h-6 text-accent-600 mr-2"></i>
                    <span class="text-primary-700 font-semibold">HIPAA Compliant</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-serif font-bold text-primary-900 mb-6">
                    Notice of Privacy Practices
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Your health information privacy rights and how your medical information may be used and disclosed by Still Time Beauty.
                </p>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-accent-50 rounded-2xl p-8 mb-12">
                <h2 class="text-2xl font-serif font-bold text-primary-900 mb-4">Effective Date: January 1, 2024</h2>
                <p class="text-primary-700 leading-relaxed">
                    This notice describes how medical information about you may be used and disclosed and how you can get access to this information. <strong>Please review it carefully.</strong>
                </p>
            </div>

            <div class="prose prose-lg max-w-none">
                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Your Rights Regarding Your Health Information</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-primary-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <i data-lucide="eye" class="w-6 h-6 text-accent-600 mr-2"></i>
                            <h3 class="text-xl font-semibold text-primary-800">Right to Inspect and Copy</h3>
                        </div>
                        <p class="text-primary-700">You have the right to inspect and copy your health information used to make decisions about your care.</p>
                    </div>
                    
                    <div class="bg-primary-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <i data-lucide="edit" class="w-6 h-6 text-accent-600 mr-2"></i>
                            <h3 class="text-xl font-semibold text-primary-800">Right to Amend</h3>
                        </div>
                        <p class="text-primary-700">You have the right to request that we amend your health information if you believe it is incorrect or incomplete.</p>
                    </div>
                    
                    <div class="bg-primary-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <i data-lucide="list" class="w-6 h-6 text-accent-600 mr-2"></i>
                            <h3 class="text-xl font-semibold text-primary-800">Right to Accounting</h3>
                        </div>
                        <p class="text-primary-700">You have the right to request an accounting of disclosures of your health information.</p>
                    </div>
                    
                    <div class="bg-primary-50 rounded-xl p-6">
                        <div class="flex items-center mb-4">
                            <i data-lucide="lock" class="w-6 h-6 text-accent-600 mr-2"></i>
                            <h3 class="text-xl font-semibold text-primary-800">Right to Request Restrictions</h3>
                        </div>
                        <p class="text-primary-700">You have the right to request restrictions on certain uses and disclosures of your health information.</p>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">How We May Use and Disclose Your Health Information</h2>

                <div class="space-y-8">
                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Treatment</h3>
                        <p class="text-primary-700">We may use your health information to provide you with medical treatment and services. We may disclose your health information to healthcare professionals who are involved in your care.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Payment</h3>
                        <p class="text-primary-700">We may use and disclose your health information to obtain payment for services we provide to you. This may include billing, collection activities, and insurance verification.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Healthcare Operations</h3>
                        <p class="text-primary-700">We may use and disclose your health information for our healthcare operations including quality assessment, staff training, and business administration.</p>
                    </div>

                    <div class="border-l-4 border-accent-600 pl-6">
                        <h3 class="text-xl font-semibold text-primary-800 mb-3">Appointment Reminders</h3>
                        <p class="text-primary-700">We may use and disclose your health information to contact you as a reminder that you have an appointment for treatment or medical care.</p>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6 mt-12">Special Situations</h2>

                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-semibold text-primary-800 mb-4">When Authorization is Required</h3>
                    <p class="text-primary-700 mb-4">Most uses and disclosures of psychotherapy notes, uses and disclosures for marketing purposes, and disclosures that constitute a sale of protected health information require your authorization.</p>
                    <p class="text-primary-700">We will not use or disclose your health information without your written authorization, except as described in this notice.</p>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Your Privacy Officer</h2>

                <div class="bg-accent-50 rounded-xl p-6 mb-8">
                    <p class="text-primary-700 mb-4">If you have questions about this notice or need to exercise your privacy rights, please contact our Privacy Officer:</p>
                    <div class="space-y-2">
                        <p class="text-primary-800 font-semibold">Still Time Beauty Privacy Officer</p>
                        <p class="text-primary-700"><?php echo $address_street; ?></p>
                        <p class="text-primary-700"><?php echo $address_city; ?>, <?php echo $address_state; ?> <?php echo $address_zip; ?></p>
                        <p class="text-primary-700">Phone: <a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></p>
                        <p class="text-primary-700">Email: <a href="mailto:<?php echo $email; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $email; ?></a></p>
                    </div>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Filing Complaints</h2>

                <div class="bg-primary-50 rounded-xl p-6 mb-8">
                    <p class="text-primary-700 mb-4">If you believe your privacy rights have been violated, you may file a complaint with us or with the Secretary of the Department of Health and Human Services.</p>
                    <p class="text-primary-700 mb-4">To file a complaint with us, contact our Privacy Officer at the address above.</p>
                    <p class="text-primary-700">You will not be penalized for filing a complaint.</p>
                </div>

                <h2 class="text-3xl font-serif font-bold text-primary-900 mb-6">Changes to This Notice</h2>

                <div class="bg-accent-50 rounded-xl p-6">
                    <p class="text-primary-700 mb-4">We reserve the right to change this notice. We reserve the right to make the revised or changed notice effective for medical information we already have about you as well as any information we receive in the future.</p>
                    <p class="text-primary-700">We will post a copy of the current notice on our website and in our office. The notice will contain the effective date on the first page.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
<script>
    // Initialize Lucide icons
    lucide.createIcons();
</script>
</body>
</html> 