<?php
// Router for PHP development server
// This handles clean URLs since PHP's built-in server doesn't process .htaccess

// Set the site directory path (from project root to site/)
$site_dir = __DIR__ . '/site';
chdir($site_dir);

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = rtrim($request_uri, '/');

// Handle root request
if ($request_uri === '' || $request_uri === '/') {
    require_once 'index.php';
    return true;
}

// Remove leading slash
$request_uri = ltrim($request_uri, '/');

// Check for static files first (assets, etc.)
if (file_exists($request_uri) && is_file($request_uri)) {
    // Let PHP's built-in server handle static files
    return false;
}

// Map clean URLs to PHP files
$routes = [
    'about' => 'about.php',
    'services' => 'services.php',
    'cancellation-policy' => 'cancellation-policy.php',
    // Legal pages with new structure (PHP files)
    'legal/privacy-policy' => 'legal/privacy-policy.php',
    'legal/terms-of-service' => 'legal/terms-of-service.php',
    'legal/hipaa-notice' => 'legal/hipaa-notice.php',
    'legal/medical-disclaimers' => 'legal/medical-disclaimers.php',
    // Keep old URLs for backward compatibility
    'privacy-policy' => 'legal/privacy-policy.php',
    'terms-of-service' => 'legal/terms-of-service.php',
    'hipaa-notice' => 'legal/hipaa-notice.php',
    'medical-disclaimers' => 'legal/medical-disclaimers.php'
];

// Check if the requested route exists
if (array_key_exists($request_uri, $routes)) {
    $file = $routes[$request_uri];
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
}

// If it's a .php file request, let it through
if (pathinfo($request_uri, PATHINFO_EXTENSION) === 'php' && file_exists($request_uri)) {
    return false;
}

// 404 for everything else
http_response_code(404);
echo "404 - Page not found";
return true;
?> 