<?php
// Router for PHP built-in server to handle clean URLs
// This file allows clean URLs like /about instead of /about.php

// Set the site directory path (from project root to site/)
$site_dir = __DIR__ . '/site';

// Get the request URI and remove query string
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Handle root request
if ($request_uri === '' || $request_uri === '/') {
    require_once $site_dir . '/index.php';
    return true;
}

// Remove leading slash
$request_uri = ltrim($request_uri, '/');

// Check for static files first (assets, includes, etc.)
$static_file_path = $site_dir . '/' . $request_uri;
if (file_exists($static_file_path) && is_file($static_file_path)) {
    // Serve static files directly
    $mime_type = match(pathinfo($static_file_path, PATHINFO_EXTENSION)) {
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg', 'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'webp' => 'image/webp',
        'ico' => 'image/x-icon',
        'woff', 'woff2' => 'font/woff',
        'ttf' => 'font/ttf',
        'otf' => 'font/otf',
        default => 'application/octet-stream'
    };
    
    header('Content-Type: ' . $mime_type);
    header('Content-Length: ' . filesize($static_file_path));
    readfile($static_file_path);
    return true;
}

// Map clean URLs to PHP files
$routes = [
    'about' => 'about.php',
    'services' => 'services.php',
    'cancellation-policy' => 'cancellation-policy.php',
    // Legal pages
    'legal/privacy-policy' => 'legal/privacy-policy.php',
    'legal/terms-of-service' => 'legal/terms-of-service.php',
    'legal/hipaa-notice' => 'legal/hipaa-notice.php',
    'legal/medical-disclaimers' => 'legal/medical-disclaimers.php'
];

// Check if the requested route exists
if (array_key_exists($request_uri, $routes)) {
    $file_path = $site_dir . '/' . $routes[$request_uri];
    if (file_exists($file_path)) {
        require_once $file_path;
        return true;
    }
}

// If it's a .php file request, handle it
$php_file_path = $site_dir . '/' . $request_uri;
if (pathinfo($request_uri, PATHINFO_EXTENSION) === 'php' && file_exists($php_file_path)) {
    require_once $php_file_path;
    return true;
}

// File not found
http_response_code(404);
echo "404 - Page not found: " . htmlspecialchars($request_uri);
return true;
?> 