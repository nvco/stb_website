# Changelog

All notable changes to the Still Time Beauty Hugo website will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- [`bb7e46b`](https://github.com/nvco/stb_website/commit/bb7e46b) Implement self-hosted DM Sans fonts and optimize typography system (2025-09-09)
  - Self-host DM Sans fonts (weights 400 & 600) with proper WOFF2 files for better performance and privacy
  - Add comprehensive CSS custom properties for centralized font and color management
  - Replace Google Fonts CDN with local font hosting and preload links for critical fonts
  - Optimize font weight usage from 4 weights to 2 weights (50% bundle size reduction)
  - Convert all hardcoded colors to CSS variables throughout the entire codebase
  - Add alpha color variants for effects, overlays, and focus styles
  - Enhanced accessibility compliance with variable-based focus indicators

- [`c0dea36`](https://github.com/nvco/stb_website/commit/c0dea36) Improve commit-changes slash command with changelog spacing instructions (2025-09-09)
  - Add explicit formatting example showing empty lines between changelog entries
  - Include important note about maintaining readability in changelog
  - Update instructions to ensure consistent spacing in future commits

- [`d1c5495`](https://github.com/nvco/stb_website/commit/d1c5495) Enhance blog post structure with FAQ, references, disclaimer, and improved typography (2025-09-09)
  - Added automatic FAQ section rendering from frontmatter faqs array
  - Added references section with external link styling and numbering  
  - Added medical disclaimer partial that appears on all blog posts
  - Implemented hierarchical spacing for better visual section breaks (H2s, H3s, paragraphs)
  - Fixed H2 font-family override issue by removing conflicting Tailwind class
  - Updated blog post frontmatter documentation in CLAUDE.md
  - Fixed accessibility issue with disclaimer font size (16px minimum)

- [`8854d1d`](https://github.com/nvco/stb_website/commit/8854d1d) Create comprehensive blog content generator agent with keyword architecture (2025-09-05)
  - Added Blog Content Generator agent with dual workflow modes (single/batch processing)
  - Created content guidelines architecture with city data files for Boulder County locations
  - Implemented keyword organization system with category-specific CSV structure
  - Added city data files for Superior, Boulder, Erie, Louisville, Lafayette, and Niwot
  - Created content queue template for batch blog post generation
  - Updated CLAUDE.md with complete agent usage documentation and examples
  - Added todo-list.md for systematic implementation tracking

- [`d820e44`](https://github.com/nvco/stb_website/commit/d820e44) Rename slash command from start-server to start-hugo-dev (2025-09-04)
  - Renamed /start-server slash command to /start-hugo-dev for better clarity
  - Updated CLAUDE.md documentation to reflect new command name
  - Removed test.md slash command file

- [`ba0e315`](https://github.com/nvco/stb_website/commit/ba0e315) Complete accessibility improvements and custom slash commands (2025-09-04)
  - Missing ARIA labels added to all remaining internal links for complete screen reader support
  - Custom Claude Code slash commands for automated development workflows
  - /commit-changes command automates full git commit process with changelog updates
  - /start-server command streamlines Hugo development environment setup

- [`09edd4d`](https://github.com/nvco/stb_website/commit/09edd4d) Accessibility improvements to internal linking strategy (2025-09-04)
  - Descriptive ARIA labels for all internal links providing clear destination context
  - Screen reader compatibility improvements while maintaining SEO anchor text
  - Updated CLAUDE.md with accessibility requirements for future internal linking
  - WCAG compliance enhancements for better inclusive user experience

- [`69c8c68`](https://github.com/nvco/stb_website/commit/69c8c68) SEO-focused internal linking strategy implementation (2025-09-04)
  - Strategic internal links across all main pages for improved search engine optimization
  - Blog post internal links targeting key pages with keyword-rich anchor text
  - Automated CSS styling for all content links with consistent teal accent colors
  - SEO internal linking guidelines documented in CLAUDE.md
  - Link diversity strategy avoiding duplicate patterns and optimizing link equity distribution
  
- [`ec99974`](https://github.com/nvco/stb_website/commit/ec99974) Category system and accessibility improvements (2025-09-04)
  - Complete category system with Hugo taxonomies for blog content organization
  - Category navigation with filter buttons on main blog page
  - Custom taxonomy template with SEO-optimized titles and breadcrumb navigation
  - Accessible breadcrumb navigation with proper ARIA labels and screen reader support
  - Enhanced blog post layout with category badges and improved navigation structure

### Changed
- [`9cf842a`](https://github.com/nvco/stb_website/commit/9cf842a) Update blog layout templates (2025-09-04)

### Removed
- [`4a9d2b1`](https://github.com/nvco/stb_website/commit/4a9d2b1) Git hooks cleanup and documentation updates (2025-09-04)
  - Removed automated git hook system that was causing infinite loops and incorrect changelog placement
  - Cleaned up scripts directory and related CLAUDE.md documentation
  - Documented preferred changelog format in CLAUDE.md for consistent future updates

## 2.2.0 (2025-09-03) ([60fb5c5](https://github.com/nvco/stb_website/commit/60fb5c5))

### Added
- **Custom H1 Titles**: Added `h1title` parameter support for blog posts to allow different H1 display titles vs. page titles
  - Blog single template now checks for `params.h1title` and falls back to regular title
  - Blog list template also uses custom h1title for consistency
  - Updated CLAUDE.md documentation with h1title usage pattern

### Changed  
- **Default Responsive Typography**: Implemented automatic responsive heading sizing without utility classes
  - **H1**: `text-3xl` → `md:text-4xl` → `lg:text-5xl` (30px → 36px → 48px)
  - **H2**: `text-xl` → `md:text-2xl` → `lg:text-3xl` (20px → 24px → 30px)  
  - **H3**: `text-lg` → `md:text-xl` → `lg:text-2xl` (18px → 20px → 24px)
  - **H4**: `text-base` → `md:text-lg` → `lg:text-lg` (16px → 18px → 18px)
  - All heading styles include automatic bottom margins and proper color/font-weight
- **Semantic HTML Cleanup**: Removed text sizing and styling classes from heading tags across all pages
  - Cleaned up h1, h2, h3 tags in blog, legal, and utility pages 
  - Preserved essential spacing classes (e.g., `mt-12` for section breaks)
  - Maintained CTA sections and main landing pages unchanged per requirements
- **CSS Loading Order**: Moved all custom styles to load after Tailwind CSS to ensure proper override
- **Page Title Structure**: Updated title separator from dash to pipe (`|`) for better brand consistency

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