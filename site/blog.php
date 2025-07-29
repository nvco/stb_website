<?php 
declare(strict_types=1);

require_once 'config.php'; 

// Page-specific variables
$current_page = 'blog';
$is_blog_page = true;
$page_title = $blog_title . ' - ' . $business_name . ' | Medical Aesthetics Boulder';
$page_description = 'Read our latest articles about medical aesthetics, Botox treatments, dermal fillers, and facial rejuvenation tips from our expert team in Boulder, CO.';
$page_keywords = 'medical aesthetics blog, Botox articles, dermal filler tips, facial rejuvenation, beauty tips Boulder CO, ' . $site_keywords;
$page_og_description = 'Read our latest articles about medical aesthetics, Botox treatments, dermal fillers, and facial rejuvenation tips from our expert team in Boulder, CO.';
$page_url = '/blog';
$page_structured_data = '{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "' . $blog_title . '",
    "description": "Medical aesthetics articles, tips, and insights from our expert team in Boulder, Colorado.",
    "url": "' . $base_url . '/blog",
    "publisher": {
        "@type": "MedicalBusiness",
        "name": "' . $business_name . '",
        "url": "' . $base_url . '",
        "telephone": "' . $phone . '",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "' . $address_street . '",
            "addressLocality": "' . $address_city . '",
            "addressRegion": "' . $address_state . '",
            "postalCode": "' . $address_zip . '",
            "addressCountry": "US"
        },
        "medicalSpecialty": "Cosmetic Medicine"
    }
}';

// Include blog functions
require_once 'includes/blog-functions.php';

// Get sorted blog articles
$blog_articles = getSortedBlogArticles();

include 'includes/header.php';
include 'includes/navigation.php';
?>

<main id="main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 pt-24 md:pt-28 lg:pt-32 pb-12 md:pb-14 lg:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="page-heading">
                    <?php echo htmlspecialchars($blog_title); ?>
                </h1>
                <p class="text-xl text-primary-600 max-w-3xl mx-auto">
                    Discover expert insights, tips, and the latest trends in medical aesthetics from our experienced team in Boulder, Colorado.
                </p>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="py-12 md:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php if (empty($blog_articles)): ?>
                <!-- No Articles State -->
                <div class="text-center py-16">
                    <div class="w-24 h-24 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-lucide="file-text" class="w-12 h-12 text-primary-600"></i>
                    </div>
                    <h2 class="text-2xl font-serif font-bold text-primary-900 mb-4">
                        Coming Soon
                    </h2>
                    <p class="text-primary-600 max-w-2xl mx-auto">
                        We're working on creating valuable content about medical aesthetics, beauty tips, and treatment insights. Check back soon for our latest articles!
                    </p>
                </div>
            <?php else: ?>
                <!-- Articles Grid -->
                <div class="grid lg:grid-cols-2 gap-8 mb-12">
                    <?php foreach ($blog_articles as $article): ?>
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="p-8">
                                <div class="mb-4">
                                    <?php if (!empty($article['date'])): ?>
                                        <span class="text-sm text-primary-600 font-medium">
                                            <?php echo htmlspecialchars($article['date']); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                <h2 class="text-2xl font-serif font-bold text-primary-900 mb-4 hover:text-accent-600 transition-colors">
                                    <a href="<?php echo htmlspecialchars($article['url']); ?>">
                                        <?php echo htmlspecialchars($article['title']); ?>
                                    </a>
                                </h2>
                                
                                <p class="text-primary-700 mb-6 leading-relaxed">
                                    <?php echo htmlspecialchars($article['description']); ?>
                                </p>
                                
                                <a href="<?php echo htmlspecialchars($article['url']); ?>" 
                                   class="inline-flex items-center text-accent-600 font-semibold hover:text-accent-700 transition-colors">
                                    Read Article
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                                </a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include 'includes/cta-section-large.php'; ?>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?> 