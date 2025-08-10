# Setup & Deployment Guide

## File Structure
```
stb_website/
├── router.php              # URL routing for clean URLs
├── site/
│   ├── index.php           # Homepage
│   ├── about.php           # About Us page
│   ├── services.php        # Services page
│   ├── blog.php            # Blog listing page
│   ├── cancellation-policy.php # Cancellation Policy
│   ├── config.php          # Site configuration
│   ├── includes/           # Shared components
│   │   ├── header.php      # Site header
│   │   ├── header-legal.php # Legal pages header
│   │   ├── navigation.php  # Navigation menu
│   │   ├── footer.php      # Site footer
│   │   ├── scripts.php     # JavaScript includes
│   │   ├── components.php  # Reusable UI components
│   │   ├── error-handler.php # Error handling & validation
│   │   ├── article-date.php # Blog post date display component
│   │   ├── cta-section.php # Reusable CTA section component
│   │   ├── blog-functions.php # Blog listing and sorting functions
│   │   └── tailwind-config.js # Tailwind CSS configuration
│   ├── blog/               # Blog posts directory
│   │   └── benefits-botox-superior-colorado-youthful-appearance.php # Sample article
│   ├── legal/              # Legal compliance pages
│   │   ├── privacy-policy.php
│   │   ├── terms-of-service.php
│   │   ├── medical-disclaimers.php
│   │   └── hipaa-notice.php
│   └── assets/             # Website assets
│       └── hero-faces.webp # Hero section imagery (optimized)
├── content-temp/           # Temporary markdown files for blog conversion
├── CONTEXT.md              # Project documentation
├── README.md               # GitHub README
├── .cursor/                # Cursor IDE configuration
│   └── commands/
│       └── add-article.md  # Blog article creation workflow
└── resources/              # Project resources & content management
    ├── about-us.md
    ├── services-offered.md  # Master services reference document
    ├── keywords.md         # SEO keywords for content optimization
    ├── google-reviews.md   # Reviews content tracking
    ├── still_time_beauty_cursor_prompt.md
    └── design reference files
```

## Local Development

### Prerequisites
- PHP 7.4 or higher
- Web browser
- Text editor/IDE (Cursor recommended for blog workflow)

### Blog Content Management
- **Markdown to PHP Conversion**: Automated via `/add-article` command
- **Content Directory**: Place `.md` files in `content-temp/` for processing
- **Automatic Discovery**: New articles appear automatically on `/blog` listing
- **SEO Optimization**: Structured data and metadata generated automatically

### Setup Steps
1. **Clone or download** the project to a local directory
2. **Navigate** to the project directory in terminal
3. **Start PHP server**: `php -S localhost:PORT router.php` (replace PORT with any available port)

### Blog System Usage
4. **Access blog**: Navigate to `/blog` on your local server for blog listing
5. **Add articles**: Use `/add-article` command in Cursor to convert markdown files
6. **Content workflow**: Place `.md` files in `content-temp/` directory before conversion
7. **Test navigation** between pages (clean URLs enabled via router.php)
8. **Verify mobile responsiveness** using browser dev tools

### Development Workflow
- Edit PHP files in `site/` directory
- Modify shared components in `site/includes/`
- Update styles directly in PHP files (Tailwind via CDN)
- Test changes by refreshing browser

## Hosting & Deployment

### PHP Hosting Requirements
The website requires PHP-enabled hosting:

#### **Traditional Web Hosting**
- cPanel-based hosting (most common)
- PHP 7.4+ support
- File upload via FTP/SFTP
- Example providers: SiteGround, Bluehost, HostGator

#### **Cloud Platforms**
- **AWS**: EC2 with LAMP stack or Elastic Beanstalk
- **DigitalOcean**: Droplets with LAMP/LEMP
- **Linode**: Shared or dedicated instances
- **Google Cloud**: Compute Engine or App Engine

#### **Managed PHP Hosting**
- **SiteGround**: WordPress hosting with PHP support
- **Bluehost**: Shared hosting with PHP
- **A2 Hosting**: Speed-optimized PHP hosting

#### **VPS Configuration**
- Install Apache/Nginx
- Install PHP 7.4+
- Configure virtual hosts
- Set up SSL certificates

### Deployment Process

#### **Via FTP/SFTP**
1. Upload all files to web root directory
2. Ensure proper file permissions (644 for files, 755 for directories)
3. Test .htaccess rules for clean URLs (Apache)
4. Configure domain DNS to point to hosting

#### **Via Git (Recommended)**
1. Push code to repository (GitHub/GitLab)
2. Clone repository on server
3. Set up automated deployment via webhooks
4. Configure environment-specific settings

### URL Configuration

#### **Apache (.htaccess)**
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ router.php [QSA,L]
```

#### **Nginx**
```nginx
location / {
    try_files $uri $uri/ /router.php?$query_string;
}
```

## SSL Certificate Setup

### **For HIPAA Compliance**
- SSL certificate is REQUIRED for medical practices
- Encrypts all data transmission
- Builds patient trust and improves SEO

### **Implementation Options**
- **Let's Encrypt**: Free SSL certificates
- **Commercial SSL**: Purchased from hosting provider
- **Cloudflare**: Free SSL with CDN benefits

## Performance Optimization

### **CDN Integration**
- Tailwind CSS delivered via CDN
- Google Fonts loaded from Google's CDN
- Consider Cloudflare for additional caching

### **Caching**
- Enable server-side caching (mod_expires for Apache)
- Set appropriate cache headers for static assets
- Consider Redis/Memcached for dynamic content

## Security Considerations

### **File Permissions**
- PHP files: 644
- Directories: 755
- Config files: 600 (if containing sensitive data)

### **Server Security**
- Keep PHP updated
- Disable unnecessary PHP functions
- Configure proper error reporting (off in production)
- Regular security updates for server

### **HIPAA Compliance**
- HTTPS required for all pages
- Secure form handling
- Privacy policy compliance
- Regular security audits

## Monitoring & Maintenance

### **Analytics Setup**
- Google Analytics integration
- Google Search Console for SEO monitoring
- Uptime monitoring services

### **Backup Strategy**
- Regular file backups
- Database backups (if applicable)
- Version control with Git

### **Content Updates**
- Service descriptions: `site/services.php`
- Contact information: `site/config.php`
- Legal pages: `site/legal/` directory
- Hours and business info: Update across relevant pages

## Troubleshooting

### **Router & Development Server Issues**

#### **CRITICAL: Wrong pages loading (e.g., "about" shows "index" content)**
**Symptoms:**
- Visiting `/about` shows homepage content
- All pages display the same content
- Clean URLs not working

**Root Cause:** PHP server started incorrectly with `-t site/` flag instead of using router.

**Solution:**
```bash
# ❌ WRONG - This breaks clean URLs
php -S localhost:PORT -t site/

# ✅ CORRECT - Always use router.php  
php -S localhost:PORT router.php
```

**Quick Fix:**
```bash
# Stop the server
pkill -f "php -S"

# Restart correctly (replace PORT with your chosen port)
php -S localhost:PORT router.php
```

#### **Legal pages failing with "require_once" errors**
**Symptoms:**
- Privacy Policy/Terms pages show 500 errors
- Error: "require_once(../config.php): Failed to open stream"
- Legal pages can't find includes

**Root Cause:** Router uses `chdir()` which breaks relative paths in includes.

**Solution:** Use `__DIR__` for absolute path resolution in ALL legal pages:
```php
// ❌ WRONG - Relative paths break from router context
require_once '../config.php';

// ✅ CORRECT - Absolute path resolution
require_once __DIR__ . '/../config.php';
```

**Files to check:**
- `site/legal/privacy-policy.php`
- `site/legal/terms-of-service.php`
- `site/legal/hipaa-notice.php`
- `site/legal/medical-disclaimers.php`
- `site/blog/*.php` (blog articles follow same pattern)

#### **Static assets not loading (CSS, JS, images)**
**Symptoms:**
- Images show 404 errors
- CSS not loading (unstyled HTML)
- JavaScript not working
- Browser console shows 404s for `/assets/` files

**Root Cause:** Router's static file handling using `return false` unreliable.

**Solution:** Router must directly serve static files with proper headers:
```php
// Check router.php has this pattern:
if (file_exists($static_file_path) && is_file($static_file_path)) {
    // Serve static files directly with proper MIME types
    $mime_type = match(pathinfo($static_file_path, PATHINFO_EXTENSION)) {
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'webp' => 'image/webp',
        // ... other types
    };
    
    header('Content-Type: ' . $mime_type);
    header('Content-Length: ' . filesize($static_file_path));
    readfile($static_file_path);
    return true;
}
```

#### **Development server rapid troubleshooting checklist**
When things break, check in this order:

1. **Server Command:**
   ```bash
   # Check what's running
   ps aux | grep "php -S"
   
   # Should show: php -S localhost:PORT router.php
   # NOT: php -S localhost:PORT -t site/
   ```

2. **Test Router Directly:**
   ```bash
   curl -I http://localhost:PORT/about
   # Should return: HTTP/1.1 200 OK
   ```

3. **Check Static Assets:**
   ```bash
   curl -I http://localhost:PORT/assets/hero-faces.webp
   # Should return: HTTP/1.1 200 OK with image/webp content-type
   ```

4. **Test Legal Pages:**
   ```bash
   curl -I http://localhost:PORT/privacy-policy
   # Should return: HTTP/1.1 200 OK (not 500)
   ```

**Quick Reset Commands:**
```bash
# Nuclear option - restart everything
pkill -f "php -S"
php -S localhost:PORT router.php

# Open in browser (replace with your URL)
open http://localhost:PORT
```

### **Other Common Issues**
- **Clean URLs not working**: Check .htaccess/Nginx config
- **PHP errors**: Check server error logs
- **Mobile display issues**: Test with browser dev tools
- **SSL issues**: Verify certificate installation

### **Debug Mode**
Enable PHP error reporting for development:
```php
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

## Domain & DNS

### **Recommended Domain**
- `stilltimebeauty.com` (or similar)
- Ensure WHOIS privacy protection
- Auto-renewal enabled

### **DNS Configuration**
- A record pointing to server IP
- WWW CNAME pointing to domain
- MX records for email (if applicable) 