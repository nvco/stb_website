<?php
/**
 * Article Date Display Component
 * Displays published or modified date based on whether they differ
 * 
 * Required variables:
 * $article_date_published - Published date in YYYY-MM-DD format
 * $article_date_modified - Modified date in YYYY-MM-DD format
 */

// Validate required variables
if (!isset($article_date_published) || !isset($article_date_modified)) {
    throw new InvalidArgumentException('article-date.php requires $article_date_published and $article_date_modified variables');
}

// Determine which date to show and the label
if ($article_date_published === $article_date_modified) {
    $date_label = 'Published';
    $display_date = $article_date_published;
} else {
    $date_label = 'Modified';
    $display_date = $article_date_modified;
}

// Format the date for display
$formatted_date = date('F j, Y', strtotime($display_date));
?>

<p class="text-primary-600">
    <?php echo htmlspecialchars($date_label); ?>: <?php echo htmlspecialchars($formatted_date); ?>
</p> 