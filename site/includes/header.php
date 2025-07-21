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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://www.google.com">
    
    <!-- Tailwind CSS - load synchronously to prevent FOUC -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo isset($is_legal_page) ? '../' : ''; ?>includes/tailwind-config.js"></script>
    
    <style>
        /* Prevent FOUC by hiding content until Tailwind loads */
        .no-fouc { visibility: hidden; }
        .fouc-loaded .no-fouc { visibility: visible; }
        
        /* Enhanced focus styles for accessibility */
        *:focus {
            outline: 2px solid #10b981;
            outline-offset: 2px;
        }
        
        /* Focus styles for buttons and links */
        button:focus,
        a:focus {
            outline: 2px solid #10b981;
            outline-offset: 2px;
        }

        /* Focus indicator for smooth scroll targets */
        .focus-from-scroll:focus {
            outline: 3px solid #10b981;
            outline-offset: 4px;
            box-shadow: 0 0 0 6px rgba(16, 185, 129, 0.2);
        }

        /* Enhanced mobile menu focus styles */
        #mobile-menu a:focus {
            background-color: rgba(16, 185, 129, 0.1);
            outline: 2px solid #10b981;
            outline-offset: -2px;
        }

        /* Focus trap indicator for mobile menu */
        #mobile-menu.focus-trap {
            box-shadow: 0 0 0 2px #10b981;
        }

        /* Skip to main content link */
        .skip-link {
            position: absolute;
            top: -40px;
            left: 6px;
            background: #000;
            color: white;
            padding: 8px;
            text-decoration: none;
            z-index: 1000;
            transition: top 0.3s;
        }
        
        .skip-link:focus {
            top: 6px;
        }
    </style>
    
    <!-- Optimized Google Fonts loading -->
    <link rel="preload" 
          href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" 
          as="style" 
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    </noscript>
    
    <!-- Lucide Icons with optimized loading -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
</head>
<body class="font-sans antialiased"> 