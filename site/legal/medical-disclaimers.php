<?php
// Medical Disclaimers Page
require_once '../config.php';

// Page-specific variables
$current_page = 'medical-disclaimers';
$page_title = 'Medical Disclaimers - ' . $business_name;
$page_description = 'Medical disclaimers for Still Time Beauty - Treatment risks, contraindications, and important medical information for aesthetic procedures.';

// Include legal header
include '../includes/header-legal.php';
include '../includes/navigation.php';
?>

<!-- Content starts at body padding top to account for fixed nav -->
<div class="pt-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-serif font-bold text-primary-900 mb-8">Medical Disclaimers</h1>
            
            <div class="prose prose-lg max-w-none text-gray-700">
                <div class="bg-red-50 border-l-4 border-red-400 p-6 mb-8">
                    <h2 class="text-xl font-semibold text-red-800 mb-2">Important Medical Notice</h2>
                    <p class="text-red-700">
                        This information is for educational purposes only and does not constitute medical advice. Individual results may vary. A comprehensive consultation and medical evaluation is required before any treatment decisions are made.
                    </p>
                </div>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">General Medical Disclaimer</h2>
                    <p class="mb-4">
                        The information provided on this website and in our consultations is for educational purposes only and is not intended as medical advice, diagnosis, or treatment. This information should not be used as a substitute for professional medical advice, diagnosis, or treatment.
                    </p>
                    <ul class="list-disc pl-6 mb-4">
                        <li>Always seek the advice of qualified healthcare providers with questions about medical conditions</li>
                        <li>Never disregard professional medical advice or delay seeking treatment</li>
                        <li>Individual circumstances and medical history affect treatment suitability</li>
                        <li>Emergency medical situations require immediate professional attention</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Treatment-Specific Disclaimers</h2>
                    
                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Botox and Neuromodulator Treatments</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <h4 class="font-semibold text-primary-800 mb-3">FDA Approval Status</h4>
                        <p class="mb-4">Botox (onabotulinumtoxinA) is FDA-approved for:</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Treatment of facial wrinkles (glabellar lines, crow's feet, forehead lines)</li>
                            <li>Various medical conditions including chronic migraines and excessive sweating</li>
                            <li>Other cosmetic uses may be considered "off-label" but are medically appropriate</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Common Side Effects</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Temporary bruising, swelling, or redness at injection sites</li>
                            <li>Headache (usually mild and temporary)</li>
                            <li>Temporary muscle weakness in treated areas</li>
                            <li>Asymmetry or uneven results (rare, often correctable)</li>
                            <li>Dry mouth or flu-like symptoms (uncommon)</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Serious Risks (Rare)</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Allergic reactions including difficulty breathing or swallowing</li>
                            <li>Spread of toxin to distant sites causing muscle weakness</li>
                            <li>Eyelid or eyebrow drooping (temporary, usually resolves in 2-4 weeks)</li>
                            <li>Double vision or difficulty closing eyes</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Contraindications</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Pregnancy or breastfeeding</li>
                            <li>Neurological diseases (myasthenia gravis, Lambert-Eaton syndrome)</li>
                            <li>Active skin infection at treatment site</li>
                            <li>Allergy to botulinum toxin or any component</li>
                            <li>Certain medications (aminoglycosides, muscle relaxants)</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Dermal Filler Treatments</h3>
                    <div class="bg-gray-50 p-6 rounded-lg mb-6">
                        <h4 class="font-semibold text-primary-800 mb-3">FDA Approval Status</h4>
                        <p class="mb-4">Hyaluronic acid fillers are FDA-approved for:</p>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Correction of facial wrinkles and folds</li>
                            <li>Lip enhancement and volume restoration</li>
                            <li>Cheek augmentation and facial contouring</li>
                            <li>Specific indications vary by product and anatomical location</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Common Side Effects</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Swelling, redness, and tenderness at injection sites</li>
                            <li>Bruising (may last 5-10 days)</li>
                            <li>Temporary lumps or firmness</li>
                            <li>Asymmetry requiring touch-up treatments</li>
                            <li>Temporary numbness or tingling</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Serious Risks (Rare)</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Vascular occlusion (blockage of blood vessels)</li>
                            <li>Tissue necrosis (skin death)</li>
                            <li>Blindness (extremely rare, associated with certain injection sites)</li>
                            <li>Granuloma formation (inflammatory reaction)</li>
                            <li>Migration of filler material</li>
                            <li>Infection at injection site</li>
                        </ul>

                        <h4 class="font-semibold text-primary-800 mb-3">Contraindications</h4>
                        <ul class="list-disc pl-6 mb-4">
                            <li>Pregnancy or breastfeeding</li>
                            <li>Active skin infection or inflammation at treatment site</li>
                            <li>Known hypersensitivity to hyaluronic acid</li>
                            <li>History of severe allergic reactions or anaphylaxis</li>
                            <li>Bleeding disorders or blood-thinning medications</li>
                            <li>Autoimmune diseases (relative contraindication)</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Results and Expectations</h2>
                    
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <h3 class="text-xl font-semibold text-yellow-800 mb-3">Individual Results May Vary</h3>
                        <p class="text-yellow-700 mb-4">
                            Treatment outcomes depend on numerous factors including individual anatomy, medical history, lifestyle, and treatment compliance. No guarantee of specific results can be made.
                        </p>
                        <ul class="list-disc pl-6 text-yellow-700">
                            <li>Results may not meet patient expectations</li>
                            <li>Multiple treatments may be required for desired outcomes</li>
                            <li>Some individuals may not respond to treatments</li>
                            <li>Results are temporary and require maintenance</li>
                            <li>Before/after photos may not represent typical results</li>
                        </ul>
                    </div>

                    <h3 class="text-xl font-semibold text-primary-700 mb-3">Timeline Expectations</h3>
                    <ul class="list-disc pl-6 mb-4">
                        <li><strong>Botox:</strong> Initial effects 3-5 days, full results 7-14 days, duration 3-4 months</li>
                        <li><strong>Fillers:</strong> Immediate results with continued improvement, duration 6-18 months</li>
                        <li><strong>Swelling/Bruising:</strong> May take 1-2 weeks to fully resolve</li>
                        <li><strong>Final Assessment:</strong> Should occur 2-4 weeks after treatment</li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Emergency Situations</h2>
                    
                    <div class="bg-red-50 border border-red-200 p-6 rounded-lg mb-6">
                        <h3 class="text-lg font-semibold text-red-800 mb-3">Seek Immediate Medical Attention If You Experience:</h3>
                        <ul class="list-disc pl-6 text-red-700">
                            <li>Difficulty breathing, swallowing, or speaking</li>
                            <li>Severe allergic reactions (hives, swelling, difficulty breathing)</li>
                            <li>Vision changes or loss</li>
                            <li>Severe or worsening pain</li>
                            <li>Signs of infection (fever, pus, red streaking)</li>
                            <li>Skin color changes (white, blue, or black areas)</li>
                        </ul>
                    </div>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-semibold text-primary-800 mb-4">Contact Information</h2>
                    <p class="mb-4">For medical emergencies or urgent questions about your treatment, please contact:</p>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="font-semibold text-primary-800 mb-2">Still Time Beauty</p>
                        <p class="mb-1"><?php echo $contact_name; ?></p>
                        <p class="mb-1"><?php echo $address_street; ?></p>
                        <p class="mb-1"><?php echo $address_city; ?>, <?php echo $address_state; ?> <?php echo $address_zip; ?></p>
                        <p class="mb-1">Phone: <a href="<?php echo $phone_link; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $phone; ?></a></p>
                        <p class="mb-1">Email: <a href="mailto:<?php echo $email; ?>" class="text-accent-600 hover:text-accent-700"><?php echo $email; ?></a></p>
                        <p class="text-sm text-gray-600 mt-2">For medical emergencies, call 911 or go to the nearest emergency room.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
<?php include '../includes/scripts.php'; ?>
</body>
</html> 