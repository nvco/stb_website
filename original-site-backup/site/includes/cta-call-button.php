<?php
/**
 * Reusable CTA Button Component
 * Used across CTA sections and other pages
 */

// Set default values if not provided
$button_text = $button_text ?? 'Call for Consultation';
$button_link = $button_link ?? $phone_link;
$button_icon = $button_icon ?? 'phone';
$button_size = $button_size ?? 'lg';
$button_style = $button_style ?? 'primary'; // primary, secondary
?>

<?php if ($button_style === 'primary'): ?>
    <a href="<?php echo $button_link; ?>" class="bg-accent-600 text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-accent-700 transition-colors inline-flex items-center justify-center">
        <i data-lucide="<?php echo htmlspecialchars($button_icon); ?>" class="w-5 h-5 mr-2"></i><?php echo htmlspecialchars($button_text); ?>: <?php echo $phone; ?>
    </a>
<?php else: ?>
    <a href="<?php echo $button_link; ?>" class="border-2 border-primary-600 text-primary-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-primary-50 transition-colors inline-flex items-center justify-center">
        <?php echo htmlspecialchars($button_text); ?>
    </a>
<?php endif; ?> 