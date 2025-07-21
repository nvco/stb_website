# Setup & Deployment Guide

## File Structure
```
stb_website/
├── router.php              # URL routing for clean URLs
├── site/
│   ├── index.php           # Homepage
│   ├── about.php           # About Us page
│   ├── services.php        # Services page
│   ├── cancellation-policy.php # Cancellation Policy
│   ├── config.php          # Site configuration
│   ├── includes/           # Shared components
│   │   ├── header.php      # Site header
│   │   ├── header-legal.php # Legal pages header
│   │   ├── navigation.php  # Navigation menu
│   │   ├── footer.php      # Site footer
│   │   └── scripts.php     # JavaScript includes
│   ├── legal/              # Legal compliance pages
│   │   ├── privacy-policy.php
│   │   ├── terms-of-service.php
│   │   ├── medical-disclaimers.php
│   │   └── hipaa-notice.php
│   └── assets/             # Website assets
│       └── hero-faces.png  # Hero section imagery
├── CONTEXT.md              # Project documentation
├── README.md               # GitHub README
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
- Text editor/IDE

### Setup Steps
1. **Clone or download** the project to a local directory
2. **Navigate** to the project directory in terminal
3. **Start PHP server**: `php -S localhost:8000 -t site/`
4. **Open browser** to `http://localhost:8000`
5. **Test navigation** between pages (clean URLs enabled via router.php)
6. **Verify mobile responsiveness** using browser dev tools

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

### **Common Issues**
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