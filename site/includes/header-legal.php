<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : $site_description; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : $site_keywords; ?>">
    <title><?php echo isset($page_title) ? $page_title : 'Legal Information - ' . $business_name; ?></title>
    
    <!-- Preconnect to external resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="dns-prefetch" href="https://unpkg.com">
    
    <!-- Critical CSS inline -->
    <style>
        .no-fouc { visibility: hidden; }
        .fouc-loaded .no-fouc { visibility: visible; }
        body { font-family: system-ui, -apple-system, sans-serif; }
        *:focus { outline: 2px solid #10b981; outline-offset: 2px; }
    </style>
    
    <!-- Tailwind CSS - Synchronous loading (CDN serves JS that generates CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../includes/tailwind-config.js"></script>
    
    <!-- Optimized Google Fonts loading -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet';">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    <!-- Critical JavaScript -->
    <script src="../includes/scripts-critical.js"></script>
    
    <!-- Non-critical resources loaded asynchronously -->
    <script async src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script async src="../includes/scripts-non-critical.js"></script>

</head>
<body class="bg-gray-50 text-gray-900 leading-relaxed no-fouc"> 