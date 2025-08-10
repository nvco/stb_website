<?php
/**
 * Reusable CTA Section Component
 * Used across blog posts and other pages
 */
?>

<!-- CTA Section -->
<section class="pt-12 md:pt-14 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-2 border-primary-200 rounded-3xl p-8 md:p-8">
            <div class="text-center">
                <h2 class="text-2xl md:text-3xl font-serif font-bold text-primary-900 mb-6">
                    Ready to Begin Your Journey?
                </h2>
                <p class="text-md md:text-l text-primary-600 mb-8 max-w-2xl mx-auto">
                    Schedule your personalized consultation and discover how our expertise can help you achieve your aesthetic goals.
                </p>
                
                <div class="flex justify-center">
                    <?php include __DIR__ . '/cta-call-button.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section> 