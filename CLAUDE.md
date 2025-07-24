# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

### Local Development
```bash
# Start development server (from project root)
php -S localhost:8000 router.php

# CRITICAL: Never use -t site/ flag - this breaks clean URLs
# Wrong: php -S localhost:8000 -t site/
# Correct: php -S localhost:8000 router.php
```

### Testing URLs
- Homepage: http://localhost:8000
- About: http://localhost:8000/about  
- Services: http://localhost:8000/services
- Legal: http://localhost:8000/legal/privacy-policy

## Architecture Overview

This is a PHP-based medical aesthetics website with clean URL routing and component-based architecture.

### Core Structure
```
site/
├── index.php, about.php, services.php    # Main pages
├── config.php                            # Business data & configuration
├── includes/                             # Shared components
│   ├── components.php                    # Reusable UI components
│   ├── error-handler.php                # Validation & error handling
│   ├── header.php, footer.php, navigation.php
│   └── scripts.php                      # JavaScript loading
├── legal/                               # HIPAA-compliant legal pages
└── assets/                              # Images (WebP optimized)
router.php                               # Clean URL routing
```

### Key Patterns

**Component System**: Reusable UI functions in `site/includes/components.php`:
- `cta_button_primary()` - Main call-to-action buttons
- `info_card()` - Glassmorphism info cards
- `service_card_icon()` - Service highlight cards
- `icon_with_text()` - Icon/text combinations

**Configuration**: Centralized business data in `site/config.php`:
- Contact information, business hours, services
- Dynamic base URL handling (localhost vs production)
- SEO defaults and legal compliance flags

**Clean URLs**: Router handles `/about` instead of `/about.php`
- Routes defined in `router.php` 
- Static file serving with proper MIME types
- 404 handling for invalid routes

**Error Handling**: Input validation system in `site/includes/error-handler.php`
- Component parameter validation
- HTML escaping utilities
- Type checking and sanitization

### Code Standards

**PHP Modern Practices**:
- Strict typing with `declare(strict_types=1)`
- Type hints for all function parameters/returns
- Component extraction to eliminate duplication
- Centralized error handling and validation

**Security**:
- HTML escaping with `esc_html()` wrapper
- Input validation for all component parameters
- HIPAA-compliant legal page structure

**Performance**:
- WebP image optimization
- System fonts (no external font downloads) for instant text rendering
- CDN delivery for Tailwind CSS
- Direct static file serving in router

## Common Development Tasks

### Adding New Pages
1. Create PHP file in `site/` directory
2. Add route mapping in `router.php`
3. Follow existing header/footer include pattern
4. Use components from `includes/components.php`

### Updating Business Information
- Contact details: `site/config.php`
- Services: `$services` array in `site/config.php`
- Legal pages: `site/legal/` directory

### Troubleshooting Router Issues
If pages show wrong content or 404 errors:
```bash
# Stop server and restart with correct command
pkill -f "php -S"
php -S localhost:8000 router.php
```

Common issues:
- Wrong server command breaks clean URLs
- Legal pages need `__DIR__` for includes (not relative paths)
- Static assets require proper MIME type handling in router

## Technology Stack
- **PHP 8.0+** with strict typing
- **Tailwind CSS** via CDN
- **Lucide Icons** for iconography  
- **Vanilla JavaScript** for interactions
- **Clean URL routing** via custom router
- **Component-based architecture** for maintainability

## Development Workflow

### Cursor Integration
- Follow all coding rules and guidelines in `.cursor/rules/` folder  
- Use `/sync-cursor` command before commits to coordinate documentation updates
- Git workflow rules ensure proper documentation maintenance between tools

### Documentation System
- **CONTEXT.md**: Current project state and immediate priorities
- **context/**: Detailed archived documentation (setup, requirements, testing)
- **development-history.md**: Complete changelog and version history
- **CLAUDE.md**: This file - Claude Code specific guidance

## Cursor References and Project Guidelines
Follow all coding rules and guidelines specified in the `.cursor/rules/` folder.
Follow project details and updates in `CONTEXT.md` and in the `context/` folder.
