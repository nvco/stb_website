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
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        accent: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            800: '#115e59',
                            900: '#134e4a',
                        }
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body class="font-sans antialiased"> 