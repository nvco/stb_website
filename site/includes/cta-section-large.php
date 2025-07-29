<?php
/**
 * Reusable Large CTA Section Component
 * Includes main CTA with buttons and feature cards section
 */

// Set default values if not provided
$cta_title = $cta_title ?? 'Ready to Begin Your Journey?';
$cta_description = $cta_description ?? 'Schedule your personalized consultation and discover how our expertise, precision, and genuine care can help you achieve your aesthetic goals naturally.';
$feature_cards = $feature_cards ?? [
    [
        'icon' => 'award',
        'title' => 'Board Certified',
        'description' => 'Nurse Practitioner with surgical precision background'
    ],
    [
        'icon' => 'heart',
        'title' => 'Natural Results',
        'description' => 'Enhancement that looks like you, just refreshed'
    ],
    [
        'icon' => 'shield',
        'title' => 'Safety First',
        'description' => 'Highest medical and safety standards'
    ]
];
?>

<!-- Call to Action Section -->
<section class="py-12 md:py-14 lg:py-16 bg-gradient-to-br from-primary-50 to-accent-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-serif font-bold text-primary-900 mb-6">
            <?php echo htmlspecialchars($cta_title); ?>
        </h2>
        <p class="text-xl text-primary-600 mb-8 max-w-3xl mx-auto">
            <?php echo htmlspecialchars($cta_description); ?>
        </p>
        
        <div class="flex justify-center mb-12">
            <?php include __DIR__ . '/cta-call-button.php'; ?>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <?php foreach ($feature_cards as $card): ?>
            <div class="bg-white rounded-2xl p-6 shadow-lg">
                <div class="w-12 h-12 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="<?php echo htmlspecialchars($card['icon']); ?>" class="w-6 h-6 text-accent-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-primary-800 mb-2"><?php echo htmlspecialchars($card['title']); ?></h3>
                <p class="text-primary-600 text-sm"><?php echo htmlspecialchars($card['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> 