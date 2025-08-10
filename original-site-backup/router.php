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

// Handle index redirects - both index.php and index should go to root
if ($request_uri === '/index.php' || $request_uri === '/index') {
    header('Location: /', true, 301);
    exit;
}

// Remove leading slash
$request_uri = ltrim($request_uri, '/');

// Check for static files first (assets, includes, etc.) - EXCLUDE .php files
$static_file_path = $site_dir . '/' . $request_uri;
if (file_exists($static_file_path) && is_file($static_file_path) && pathinfo($static_file_path, PATHINFO_EXTENSION) !== 'php') {
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

// Function to serve 404 page
function serve404() {
    global $site_dir;
    http_response_code(404);
    // Change working directory to site for proper includes
    $original_cwd = getcwd();
    chdir($site_dir);
    require_once '404.php';
    chdir($original_cwd);
    return true;
}

// Redirect .php URLs to clean URLs (similar to .htaccess behavior)
if (pathinfo($request_uri, PATHINFO_EXTENSION) === 'php') {
    $clean_url = pathinfo($request_uri, PATHINFO_FILENAME);
    // Handle nested paths like legal/privacy-policy.php
    $directory = dirname($request_uri);
    if ($directory !== '.') {
        $clean_url = $directory . '/' . pathinfo(basename($request_uri), PATHINFO_FILENAME);
    }
    header('Location: /' . $clean_url, true, 301);
    exit;
}

// Handle blog posts
if (strpos($request_uri, 'blog/') === 0) {
    $blog_slug = substr($request_uri, 5); // Remove 'blog/' prefix (5 characters)
    $blog_file_path = $site_dir . '/blog/' . $blog_slug . '.php';
    if (file_exists($blog_file_path)) {
        require_once $blog_file_path;
        return true;
    } else {
        // Blog post not found - serve 404
        return serve404();
    }
}

// Map clean URLs to PHP files
$routes = [
    'about' => 'about.php',
    'services' => 'services.php',
    'blog' => 'blog.php',
    'cancellation-policy' => 'cancellation-policy.php',
    'pre-post-treatment' => 'pre-post-treatment.php',
    // Legal pages
    'legal/privacy-policy' => 'legal/privacy-policy.php',
    'legal/terms-of-service' => 'legal/terms-of-service.php',
    'legal/hipaa-notice' => 'legal/hipaa-notice.php',
    'legal/medical-disclaimers' => 'legal/medical-disclaimers.php'
];

// Handle legal pages that aren't in the explicit routes
if (strpos($request_uri, 'legal/') === 0) {
    // Check if it's one of our explicit legal routes first
    if (!array_key_exists($request_uri, $routes)) {
        // Legal page not found - serve 404
        return serve404();
    }
}

// Check if the requested route exists
if (array_key_exists($request_uri, $routes)) {
    $file_path = $site_dir . '/' . $routes[$request_uri];
    if (file_exists($file_path)) {
        require_once $file_path;
        return true;
    }
}

// File not found - serve 404
return serve404();
?> 