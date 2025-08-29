# Changelog

All notable changes to the Still Time Beauty Hugo website will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## 2.1.0 (2025-08-29)

### Added
- Email parameter and shortcode for centralized email management ([5c3ddb7](https://github.com/nvco/stb_website/commit/5c3ddb7))
- Text message button alongside phone button in CTA components
- Letter spacing (`tracking-wider`) to CTA buttons for improved visual design

### Changed
- **BREAKING**: Fixed meta keywords display issue - removed square brackets around keywords
  - Updated `baseof.html` to use `delimit .Params.keywords ", "` for proper comma separation
  - Converted all keyword front matter from strings to YAML arrays for consistent processing
- CTA call button component now includes both phone and text messaging options
- CTA buttons now full-width on mobile, auto-width on desktop
- Info cards now use flex layout instead of grid for content-based sizing
- Enhanced button styling with increased padding (`px-14`) and larger text size
- Promo offer text section now fills available space with centered content
- All legal pages now use `{{< email >}}` shortcode instead of hardcoded email addresses

### Fixed
- Meta keywords no longer display with unwanted square brackets
- CTA button layout now properly responsive across all screen sizes
- Info card sizing now based on content rather than equal grid distribution
- Email addresses centralized through Hugo site parameters for easier maintenance

### Technical
- Updated CLAUDE.md with Hugo server startup instructions for Claude Code
- All pages converted to use proper YAML array format for keywords
- Implemented proper line breaks in legal page contact information

## 2.0.0 (2025-08-11)

### 🚀 Major Release - Hugo Migration Complete

#### Added
- **BREAKING**: Hugo site is now the main production branch ([3ad9435](https://github.com/nvco/stb_website/commit/3ad9435))
- Manual workflow dispatch option (`workflow_dispatch`) for GitHub Actions
- Clean slate deployment with `dangerous-clean-slate: true` for fresh deployments
- Branch backup system with `original-site-backup` for PHP site preservation

#### Changed  
- **BREAKING**: Main branch now contains Hugo site (was PHP)
- Updated deployment path to `/domains/stilltimebeauty.com/public_html/` (absolute path)
- GitHub Actions workflow refined for production Hugo deployment
- Repository structure now fully committed to Hugo static site generator

#### Migration Notes
- Original PHP site backed up in `original-site-backup` branch
- `hugo-migration` branch preserved as development backup
- All PHP files will be cleaned from production server on next deployment
- Deployment workflow tested and production-ready

## 1.3.2 (2025-08-11)

### Documentation
- Added comprehensive coding standards reference to CLAUDE.md ([6b6e5a2](https://github.com/nvco/stb_website/commit/6b6e5a2))
- Updated front matter standardization with all content types (main pages, blog posts, legal pages)
- Added references to `.cursor/rules/` files for development standards
- Enhanced project documentation with FAQ schema and SEO directives

### Technical
- Documented `faqs:` front matter field for blog posts with question/answer schema
- Documented `robots:` and `sitemap:` fields for legal page SEO control
- Added `author:` field documentation for blog posts

## 1.3.1 (2025-08-11)

### Improved
- Enhanced accessibility with WCAG 2.1 compliance improvements ([f0796cb](https://github.com/nvco/stb_website/commit/f0796cb))
- Added `aria-hidden="true"` to all decorative icons (Lucide icons and SVGs)
- Added `role="img"` to star rating containers with `aria-label` attributes
- Improved keyboard navigation with enhanced `:focus-visible` styles
- Better screen reader compatibility across all pages

### Technical
- Focus indicators now use 3px outline with box-shadow for better visibility
- Implemented `:focus-visible` pseudo-class to show focus only for keyboard users
- All decorative SVG and icon elements properly marked for assistive technology

## 1.3.0 (2025-08-11)

### Added
- GitHub Actions workflow for automated Hugo builds and deployment
- Direct FTP deployment to Hostinger hosting
- Production build with minification (`hugo --minify`)

### Changed
- Images reorganized into `/static/images/` folder for better structure
- Updated image paths in templates to use `/images/` prefix
- `/public/` folder now git-ignored (generated during CI/CD)

### Improved
- Deployment workflow now builds fresh production site on every push
- Dual deployment: Archives to GitHub repo and deploys to Hostinger

## 1.2.0 (2025-08-11)

### Changed
- **BREAKING**: Migrated Hugo site structure from `hugo-site/` subdirectory to project root
  - All Hugo files and directories now at root level for standard Hugo project structure
  - Simplifies deployment and development workflow

### Removed
- Removed `original-site-backup/` directory containing legacy PHP files
- Cleaned up repository to focus on Hugo implementation only

## 1.1.0 (2025-08-11)

### Added
- Custom 404 error page with helpful navigation options

### Changed
- Blog listing page now uses two-column grid layout
- Fixed padding issue on cancellation policy page list items