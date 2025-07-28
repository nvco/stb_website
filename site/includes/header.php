<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : $site_description; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : $site_keywords; ?>">
    <meta name="author" content="<?php echo $business_name; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $business_name . ' - Medical Aesthetics in Boulder, Colorado'; ?>">
    <meta property="og:description" content="<?php echo isset($page_og_description) ? $page_og_description : 'Expert medical aesthetics treatments including Botox and dermal fillers by a qualified Nurse Practitioner in downtown Boulder.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $base_url . (isset($page_url) ? $page_url : ''); ?>">
    <title><?php echo isset($page_title) ? $page_title : $business_name . ' - Medical Aesthetics | Boulder, Colorado'; ?></title>
    
    <?php if (isset($page_structured_data)): ?>
    <!-- Structured Data -->
    <script type="application/ld+json">
    <?php echo $page_structured_data; ?>
    </script>
    <?php endif; ?>
    
    <!-- Preconnect to external resources for faster loading -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    
    <!-- Critical CSS inline to prevent render blocking -->
    <style>
        /* Critical above-the-fold styles */
        .no-fouc { visibility: hidden; }
        .fouc-loaded .no-fouc { visibility: visible; }
        
        /* Essential layout styles */
        body { font-family: system-ui, -apple-system, sans-serif; }
        .header-bg { background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%); }
        
        /* CRITICAL: Hero heading styles for immediate LCP rendering */
        .hero-heading {
            font-family: Georgia, 'Times New Roman', serif;
            font-weight: 700;
            font-size: 2.25rem; /* text-4xl */
            line-height: 1.1;
            color: #1e293b; /* text-primary-900 */
            margin-bottom: 1.5rem;
        }
        @media (min-width: 1024px) {
            .hero-heading {
                font-size: 3.75rem; /* lg:text-6xl */
            }
        }
        .hero-accent {
            color: #0d9488; /* text-accent-600 - CORRECTED */
        }
        
        /* Critical focus styles for accessibility */
        *:focus { outline: 2px solid #10b981; outline-offset: 2px; }
        
        /* Mobile menu critical styles */
        .mobile-menu-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 40; }
        
        /* Skip link styles */
        .skip-link { position: absolute; left: -9999px; z-index: 999; padding: 8px 16px; background: #000; color: #fff; text-decoration: none; }
        .skip-link:focus { left: 6px; top: 6px; }
    </style>
    
    <!-- Tailwind CSS - Synchronous loading (CDN serves JS that generates CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo (isset($is_legal_page) || isset($is_blog_page)) ? '../' : ''; ?>includes/tailwind-config.js"></script>
    
    <!-- Critical JavaScript inline for immediate execution -->
    <script src="<?php echo (isset($is_legal_page) || isset($is_blog_page)) ? '../' : ''; ?>includes/scripts-critical.js"></script>
    
    <!-- Non-critical resources loaded asynchronously -->
    <script async src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script async src="<?php echo (isset($is_legal_page) || isset($is_blog_page)) ? '../' : ''; ?>includes/scripts-non-critical.js"></script>

</head>
<body class="bg-gray-50 text-gray-900 leading-relaxed no-fouc"> 