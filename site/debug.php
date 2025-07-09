<?php
// Debug page to help diagnose server configuration
?>
<!DOCTYPE html>
<html>
<head>
    <title>Server Configuration Debug - Still Time Beauty</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .test { margin: 20px 0; padding: 15px; border: 1px solid #ccc; }
        .success { background-color: #d4edda; border-color: #c3e6cb; }
        .error { background-color: #f8d7da; border-color: #f5c6cb; }
        .info { background-color: #cce7ff; border-color: #b3d7ff; }
        pre { background: #f8f9fa; padding: 10px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Server Configuration Debug</h1>
    <p>This page will help diagnose why clean URLs aren't working.</p>
    
    <div class="test info">
        <h2>1. Basic PHP Info</h2>
        <p><strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        <p><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?></p>
        <p><strong>Current Directory:</strong> <?php echo __DIR__; ?></p>
    </div>
    
    <div class="test info">
        <h2>2. .htaccess File Status</h2>
        <?php
        $htaccess_file = __DIR__ . '/.htaccess';
        if (file_exists($htaccess_file)) {
            echo "<p class='success'>✓ .htaccess file exists</p>";
            echo "<p><strong>File size:</strong> " . filesize($htaccess_file) . " bytes</p>";
            echo "<p><strong>Last modified:</strong> " . date('Y-m-d H:i:s', filemtime($htaccess_file)) . "</p>";
        } else {
            echo "<p class='error'>✗ .htaccess file does not exist</p>";
        }
        ?>
    </div>
    
    <div class="test info">
        <h2>3. Apache Module Check</h2>
        <?php
        if (function_exists('apache_get_modules')) {
            $modules = apache_get_modules();
            if (in_array('mod_rewrite', $modules)) {
                echo "<p class='success'>✓ mod_rewrite is enabled</p>";
            } else {
                echo "<p class='error'>✗ mod_rewrite is not enabled</p>";
            }
        } else {
            echo "<p class='info'>? Cannot check Apache modules (not running on Apache or function not available)</p>";
        }
        ?>
    </div>
    
    <div class="test info">
        <h2>4. Current Request Info</h2>
        <p><strong>Request URI:</strong> <?php echo $_SERVER['REQUEST_URI'] ?? 'Unknown'; ?></p>
        <p><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD'] ?? 'Unknown'; ?></p>
        <p><strong>Script Name:</strong> <?php echo $_SERVER['SCRIPT_NAME'] ?? 'Unknown'; ?></p>
        <p><strong>Query String:</strong> <?php echo $_SERVER['QUERY_STRING'] ?? 'None'; ?></p>
    </div>
    
    <div class="test info">
        <h2>5. File Tests</h2>
        <?php
        $files_to_check = [
            'index.php',
            'about.php', 
            'services.php',
            'cancellation-policy.php',
            'legal/privacy-policy.php',
            'legal/terms-of-service.php'
        ];
        
        foreach ($files_to_check as $file) {
            if (file_exists($file)) {
                echo "<p class='success'>✓ $file exists</p>";
            } else {
                echo "<p class='error'>✗ $file does not exist</p>";
            }
        }
        ?>
    </div>
    
    <div class="test info">
        <h2>6. Test Links</h2>
        <p>Try these links to test routing:</p>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a> (should work if .htaccess is working)</li>
            <li><a href="/about.php">About.php</a> (direct file access)</li>
            <li><a href="/services">Services</a> (should work if .htaccess is working)</li>
            <li><a href="/services.php">Services.php</a> (direct file access)</li>
            <li><a href="/test-htaccess">Test .htaccess</a> (should show index if .htaccess working)</li>
        </ul>
    </div>
    
    <div class="test info">
        <h2>7. Environment Variables</h2>
        <pre><?php print_r($_SERVER); ?></pre>
    </div>
    
    <p><a href="/">← Back to Home</a></p>
</body>
</html> 