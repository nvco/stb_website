# Still Time Beauty - Medical Aesthetics Website

A modern, high-performance static website for a medical aesthetics practice, [Still Time Beauty](https://stilltimebeauty.com), showcasing a complete PHP-to-Hugo migration with enterprise-grade deployment automation.

[<img src="static/images/stb-load.webp" style="width: 100%; max-width: 500px;">](https://stilltimebeauty.com)

## 🎯 Project Highlights

### Technical Achievements
- **Complete Platform Migration**: Successfully migrated from legacy PHP to modern Hugo static site architecture
- **Performance Optimization**: Achieved 95+ Lighthouse scores across all metrics
- **CI/CD Pipeline**: Automated deployment via GitHub Actions with FTP integration
- **Security Best Practices**: Proper secret management with zero hardcoded credentials
- **Accessibility Compliance**: WCAG 2.1 AA compliant with semantic HTML and ARIA attributes

### Business Impact
- **Zero Downtime Migration**: Seamless transition from PHP to static site
- **Improved Performance**: 3x faster page load times after migration
- **SEO Enhancement**: Structured data and optimized meta tags for better search visibility
- **HIPAA Compliance**: Proper legal documentation and privacy standards for medical practice

## 🛠️ Tech Stack

- **[Hugo](https://gohugo.io/)** (v0.148.2) - Fast, modern static site generator
- **[Tailwind CSS](https://tailwindcss.com/)** - Utility-first CSS framework
- **GitHub Actions** - CI/CD automation
- **Vanilla JavaScript** - Lightweight interactions without framework overhead
- **Lucide Icons** - Accessible, performant iconography

## 🏗️ Architecture

```
├── content/           # Markdown content files
├── layouts/           # Hugo templates
│   ├── page/         # Main page layouts
│   ├── legal/        # HIPAA-compliant legal pages
│   └── partials/     # Reusable components
├── static/           # Static assets
├── hugo.toml         # Site configuration
└── .github/
    └── workflows/    # Automated deployment
```

## ✨ Key Features

### Performance & SEO
- 📱 Mobile-first responsive design
- ⚡ Sub-second page loads
- 🔍 Rich structured data for search engines
- 📊 Optimized Core Web Vitals

### Medical Practice Requirements
- 🏥 HIPAA-compliant documentation
- 📋 Patient forms and policies
- 💳 Service information architecture
- 📞 Contact integration

### Developer Experience
- 🔄 Hot-reload development server
- 🚀 One-command deployment
- 📝 Comprehensive documentation
- 🧪 Clean, maintainable codebase

## 🚀 Quick Start

```bash
# Clone the repository
git clone https://github.com/yourusername/stb_website.git
cd stb_website

# Start development server
hugo server -D

# Build for production
hugo --minify
```

## 📚 Documentation

- [CHANGELOG.md](CHANGELOG.md) - Detailed version history
- Inline code documentation

## 🔧 Development

### Prerequisites
- Hugo v0.148.2 or higher
- Git

### Local Development
```bash
hugo server --buildDrafts --bind 0.0.0.0
```

### Production Build
```bash
hugo --minify
```

## 🚢 Deployment

Automated deployment via GitHub Actions on push to `main`:
1. Builds optimized static site
2. Deploys via secure FTP to production hosting
3. Zero-downtime updates

## 📈 Performance Metrics

- **Lighthouse Score**: 95+ across all categories
- **Page Load Time**: < 1 second
- **First Contentful Paint**: < 500ms
- **Time to Interactive**: < 1 second

## 📄 License

Copyright © 2025 Still Time Beauty. All Rights Reserved.

Developed by Norbert Ver.

This repository is provided for **portfolio demonstration purposes only**. The code is proprietary and may not be copied, modified, or used in any other projects without explicit written permission. See [LICENSE](LICENSE) for details.