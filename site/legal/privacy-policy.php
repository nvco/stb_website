<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php';

// Set flag for header path resolution
$is_legal_page = true;

// Page-specific variables
$current_page = 'legal';
$page_title = 'Privacy Policy - ' . $business_name;
$page_description = 'Privacy Policy for ' . $business_name . ' - Boulder Medical Aesthetics Practice. HIPAA compliant privacy practices for patient information protection.';

// Include legal header
include __DIR__ . '/../includes/header-legal.php';
include __DIR__ . '/../includes/navigation.php';
?>

<main id="main">
<!-- Content starts at body padding top to account for fixed nav -->
<div class="pt-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-serif font-bold text-primary-900 mb-8">Privacy Policy</h1>
            
            <div class="prose prose-lg max-w-none text-gray-700">
                <p class="text-sm text-gray-600 mb-8">
                    <strong>Effective Date:</strong> January 1, 2024<br>
                    <strong>Last Updated:</strong> January 1, 2024
                </p>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Introduction</h2>
                    <p class="mb-4">
                        Still Time Beauty ("we," "us," or "our") is committed to protecting your privacy and maintaining the confidentiality of your personal and medical information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and receive our medical services.
                    </p>
                    <p>
                        As a medical practice, we are required to comply with the Health Insurance Portability and Accountability Act (HIPAA) and other applicable privacy laws, including Colorado state privacy regulations.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Protected Health Information (PHI)</h2>
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">What We Collect</h3>
                    <p class="mb-4">We may collect the following types of protected health information:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Personal identifiers (name, address, phone number, email, date of birth)</li>
                        <li>Medical history and current health conditions</li>
                        <li>Treatment records and clinical notes</li>
                        <li>Photographs for medical documentation and treatment planning</li>
                        <li>Insurance information and billing records</li>
                        <li>Emergency contact information</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">How We Use PHI</h3>
                    <p class="mb-4">We use your protected health information for:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li><strong>Treatment:</strong> Providing medical care, consultations, and aesthetic treatments</li>
                        <li><strong>Payment:</strong> Processing insurance claims and billing for services</li>
                        <li><strong>Healthcare Operations:</strong> Quality improvement, staff training, and administrative functions</li>
                        <li><strong>Legal Requirements:</strong> Compliance with state and federal regulations</li>
                        <li><strong>Emergency Situations:</strong> Protecting your health and safety when necessary</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Website Information Collection</h2>
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Information We Collect</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li><strong>Contact Information:</strong> Name, email address, phone number when you contact us</li>
                        <li><strong>Website Usage Data:</strong> IP address, browser type, pages visited, time spent on site</li>
                        <li><strong>Cookies:</strong> Small files stored on your device to improve website functionality</li>
                        <li><strong>Communication Records:</strong> Records of your correspondence with us</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">How We Use Website Information</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Responding to your inquiries and appointment requests</li>
                        <li>Improving website functionality and user experience</li>
                        <li>Analyzing website traffic and usage patterns</li>
                        <li>Sending appointment reminders and practice updates (with consent)</li>
                        <li>Maintaining website security and preventing fraud</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Information Sharing and Disclosure</h2>
                    <p class="mb-4">We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">With Your Authorization</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>When you provide written consent for specific disclosures</li>
                        <li>For marketing purposes (only with your explicit consent)</li>
                        <li>For testimonials or before/after photos (with signed release)</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Without Your Authorization (As Permitted by Law)</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>To other healthcare providers involved in your care</li>
                        <li>For payment and insurance purposes</li>
                        <li>To comply with legal requirements or court orders</li>
                        <li>To prevent serious harm to you or others</li>
                        <li>For public health and safety purposes</li>
                        <li>To law enforcement in specific circumstances</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Service Providers</h3>
                    <p class="mb-4">We may share information with trusted service providers who assist us in operating our practice, including:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Electronic health record systems</li>
                        <li>Billing and payment processing services</li>
                        <li>Website hosting and analytics services</li>
                        <li>Appointment scheduling systems</li>
                    </ul>
                    <p class="mb-4">All service providers are required to maintain the confidentiality of your information and comply with HIPAA requirements.</p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Your Rights</h2>
                    <p class="mb-4">Under HIPAA and Colorado law, you have the following rights:</p>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Access to Your Information</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Request copies of your medical records</li>
                        <li>Review your protected health information</li>
                        <li>Request electronic copies when possible</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Amendment Rights</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Request corrections to your medical records</li>
                        <li>Add statements to your records if amendment is denied</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Restriction Requests</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Request limitations on how we use or disclose your information</li>
                        <li>Request restrictions on communications with insurance companies</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Confidential Communications</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Request to receive communications at alternative locations</li>
                        <li>Request specific methods of communication</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Accounting of Disclosures</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Request a list of certain disclosures made about your health information</li>
                        <li>Review when and to whom your information was disclosed</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">File Complaints</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>File complaints about our privacy practices</li>
                        <li>Contact the Department of Health and Human Services</li>
                        <li>No retaliation for filing complaints</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Data Security</h2>
                    <p class="mb-4">We implement appropriate technical, administrative, and physical safeguards to protect your personal and health information:</p>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Technical Safeguards</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Encrypted data transmission and storage</li>
                        <li>Secure access controls and authentication</li>
                        <li>Regular software updates and security patches</li>
                        <li>Firewall protection and intrusion detection</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Administrative Safeguards</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Staff training on privacy and security procedures</li>
                        <li>Regular risk assessments and policy updates</li>
                        <li>Incident response procedures</li>
                        <li>Access controls based on job responsibilities</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Physical Safeguards</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Secure facilities and restricted access</li>
                        <li>Protected computer systems and media</li>
                        <li>Secure disposal of sensitive information</li>
                        <li>Environmental controls and monitoring</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Colorado Privacy Rights</h2>
                    <p class="mb-4">Under Colorado state law, you have additional privacy rights:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Right to know what personal information we collect</li>
                        <li>Right to request deletion of personal information</li>
                        <li>Right to request portability of your data</li>
                        <li>Right to opt out of certain data processing</li>
                        <li>Right to non-discrimination for exercising privacy rights</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Cookies and Website Analytics</h2>
                    <p class="mb-4">Our website uses cookies and similar technologies to:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Remember your preferences and settings</li>
                        <li>Analyze website traffic and usage patterns</li>
                        <li>Improve website functionality and user experience</li>
                        <li>Ensure website security and prevent fraud</li>
                    </ul>
                    <p class="mb-4">You can control cookies through your browser settings, but some website features may not function properly if cookies are disabled.</p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Data Retention</h2>
                    <p class="mb-4">We retain your information for the following periods:</p>
                    <ul class="list-disc pl-6 mb-4">
                        <li><strong>Medical Records:</strong> As required by Colorado law and medical practice standards</li>
                        <li><strong>Billing Records:</strong> 7 years from the date of service</li>
                        <li><strong>Website Data:</strong> 2 years or until you request deletion</li>
                        <li><strong>Communication Records:</strong> 3 years from last contact</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Updates to This Policy</h2>
                    <p class="mb-4">
                        We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will notify you of any material changes by:
                    </p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Posting the updated policy on our website</li>
                        <li>Including a notice of changes in your appointment confirmations</li>
                        <li>Sending email notifications for significant changes (if you've provided consent)</li>
                    </ul>
                    <p class="mb-4">Changes will be effective immediately upon posting unless otherwise specified.</p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Contact Information</h2>
                    <p class="mb-4">For questions about this Privacy Policy or to exercise your privacy rights, please contact:</p>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="font-semibold text-primary-800 mb-2">Still Time Beauty</p>
                        <p class="mb-1">Privacy Officer: <?php echo $contact_name; ?></p>
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