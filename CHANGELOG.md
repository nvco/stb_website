# Changelog

All notable changes to the Still Time Beauty Hugo website will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Removed
- [`7cb3487`](https://github.com/nvco/stb_website/commit/7cb3487) Remove completed todo-list.md file (2025-09-19)
  - Clean up project root by removing todo-list.md now that agent architecture is complete
  - File served its purpose during agent development and blog content enhancement phases

### Added
- [`41763d3`](https://github.com/nvco/stb_website/commit/41763d3) Add strategic internal links to rewritten blog articles (2025-09-19)
  - Add internal links to Botox migraine article connecting to aftercare and practitioner credentials
  - Add internal links to Superior Botox article linking to about page, aftercare, and services
  - Add internal links to lip filler swelling article with aftercare and expertise connections
  - Use keyword-rich anchor text with accessibility-compliant ARIA labels for SEO optimization

- [`15d9e31`](https://github.com/nvco/stb_website/commit/15d9e31) Rewrite blog articles with conversational approach and enhance formatting variety (2025-09-19)
  - Rewrite Botox migraine article with question-focused H2 titles and strategic formatting
  - Transform Superior Botox article from listicle to helpful Q&A format
  - Remove insurance/pricing content to focus on treatment information
  - Vary blockquote placement and content types to avoid formulaic patterns
  - Update H1 titles with natural question variety to prevent repetitive patterns
  - Enhance blog content generator agent with title variation guidance

- [`a0bcc8b`](https://github.com/nvco/stb_website/commit/a0bcc8b) Enhance blog content generator with conversational formatting and structure (2025-09-19)
  - Update blog content generator agent to create conversational, question-focused articles
  - Remove short/long form distinction in favor of flexible 600-1,200 word approach
  - Add strategic formatting guidelines (bold text, bullet points, blockquotes)
  - Implement natural H2 titles mixing questions and statements without colons
  - Remove H1 tags from content body (handled by Hugo front matter)
  - Rewrite lip filler swelling article as example of new conversational approach
  - Update documentation in CLAUDE.md and docs/agents/CLAUDE.md

- [`ce42f1f`](https://github.com/nvco/stb_website/commit/ce42f1f) Implement Google Analytics with HIPAA-compliant privacy disclosure (2025-09-15)
  - Add Google Analytics configuration to hugo.toml with measurement ID
  - Integrate GA4 tracking code in baseof.html template with conditional loading
  - Update privacy policy with comprehensive Google Analytics disclosure
  - Include opt-out instructions and Google privacy policy links
  - Ensure compliance for local Colorado medical practice without cookie banner requirements

- [`0865d7a`](https://github.com/nvco/stb_website/commit/0865d7a) Enhance Visual Content Copy Generator agent with treatment keyword optimization (2025-09-15)
  - Update agent to extract specific treatment keywords from content descriptions
  - Add guidance for natural keyword integration across all platforms (YouTube, TikTok, Instagram)
  - Include YouTube optimization features: tags, category selection, and community posts
  - Improve social media content strategy for "Botox & fillers" vs generic "medical aesthetics"
  - Update location tour video template with YouTube tags, category, and community post content

- [`b8b7d40`](https://github.com/nvco/stb_website/commit/b8b7d40) Enhance site functionality with internal linking, CSS improvements, and workflow updates (2025-09-13)
  - Test and implement Internal Linking Agent on lip filler swelling guide with accessibility-compliant ARIA labels
  - Add comprehensive spacing variables (--spacing-*) with style guide reference for consistent design system
  - Implement dynamic main element classes for better CSS targeting across page types
  - Update about page H2 to focus on credentials without redundant introduction
  - Enhance taxonomy template consistency with "Information & Guides" format
  - Streamline GitHub workflow by removing external repository push
  - Add spacing scale documentation to style guide with organized variable reference table

- [`afa0da3`](https://github.com/nvco/stb_website/commit/afa0da3) Rename Visual Content Generator to Visual Content Copy Generator for clarity (2025-09-13)
  - Rename agent file from visual-content-generator.md to visual-content-copy-generator.md
  - Enhance agent with city data integration for varied local Boulder references
  - Improve social media content with platform-specific CTAs (link in bio vs URLs)
  - Update existing video content template with enhanced Boulder local references

- [`6911840`](https://github.com/nvco/stb_website/commit/6911840) Implement Visual Content Generator agent for social media optimization (2025-09-12)
  - Create comprehensive Visual Content Generator agent supporting both videos and images
  - Add platform-specific optimization for YouTube, TikTok, Instagram, and Facebook
  - Implement smart slug generation from content descriptions for organized file naming
  - Integrate blog article linking for YouTube SEO backlinks and website traffic
  - Restructure social media content organization with dated files and type separation
  - Update CLAUDE.md with expanded agent usage examples and comprehensive input options
  - Add complete documentation in docs/agents/CLAUDE.md for workflow integration
  - Support medical aesthetics compliance across all social platforms

- [`93cca40`](https://github.com/nvco/stb_website/commit/93cca40) Implement blog content generation with keyword strategy integration and SEO optimization (2025-09-11)
  - Enhanced blog-content-generator agent with strategic list usage guidelines
  - Generated comprehensive lip filler swelling blog post with Boulder local SEO
  - Created keyword strategy analysis and content prioritization system
  - Added strategic content batches for Foundation/Growth/Authority phases
  - Implemented FAQ-local strategy with geographic differentiation
  - Fixed layout rendering issues in taxonomy and blog list templates

- [`133705d`](https://github.com/nvco/stb_website/commit/133705d) Implement separate callable agents with transparent two-step workflow and generate lip fillers analysis (2025-09-11)
  - Update Keyword Analysis Agent to be directly callable by users instead of internal-only
  - Update Keyword Strategy Agent to read existing analysis files rather than calling Analysis Agent via Task tool
  - Create transparent two-step workflow: analysis first, then prioritization using analysis results
  - Generate comprehensive lip fillers keyword analysis with 553 keywords analyzed
  - Establish statistical breakpoints and volume tiers for strategic targeting
  - Update documentation across agents and main CLAUDE.md to reflect new workflow

- [`67781c8`](https://github.com/nvco/stb_website/commit/67781c8) Refactor agent architecture with clean two-step workflow and proper documentation organization (2025-09-11)
  - Rename Content Prioritization Agent to Keyword Strategy Agent for better clarity
  - Implement clean architecture with internal Analysis Agent called by Keyword Strategy Agent
  - Restore Botox analysis file to proper analysis/ subfolder structure
  - Enhanced Blog Content Generator DATA file for complete self-sufficiency in regeneration
  - Move documentation out of .claude/ folder to prevent slash command conflicts
  - Relocate agents and commands documentation to docs/ folder structure
  - Streamlined workflow: single Keyword Strategy Agent call generates both analysis and priority batches

- [`990a134`](https://github.com/nvco/stb_website/commit/990a134) Restructure documentation and optimize CLAUDE.md organization (2025-09-11)
  - Reduced main CLAUDE.md from 600+ lines to 174 lines (71% reduction)
  - Created specialized documentation structure with proper Claude Code file organization
  - Moved agent documentation to /.claude/agents/CLAUDE.md (285 lines)
  - Moved slash command documentation to /.claude/commands/CLAUDE.md (180 lines)
  - Moved architectural deep dive to /docs/architecture/CLAUDE.md (281 lines)
  - Updated archetypes to match current front matter patterns with all required fields

- [`4eef367`](https://github.com/nvco/stb_website/commit/4eef367) Enhance local FAQ strategy with varied language and location fields (2025-09-11)
  - Add location field to blog post front matter for Superior and Boulder articles
  - Implement varied FAQ language patterns to avoid repetitive content across locations
  - Update FAQ-local strategy with 7 different business value question variations
  - Consolidate Boulder location transparency guidance into single clear section
  - Add honest Boulder location answers for surrounding towns with drive times
  - Update blog posts with hybrid FAQ approach (general + local questions)
  - Improve FAQ structure using WHERE + business value question patterns

- [`ec8e500`](https://github.com/nvco/stb_website/commit/ec8e500) Implement hybrid local strategy for Blog Content Generator (2025-09-11)
  - Add local-strategy parameter with three approaches: full-local, faq-local, generic
  - Default to faq-local when location provided, generic when no location
  - Update FAQ structure to combine universal topic FAQs with location-specific FAQs
  - Add comprehensive local strategy documentation and quick reference guide
  - Revert commit-changes command to original full workflow approach
  - Refine local FAQ examples with business-focused questions

- [`892e1c1`](https://github.com/nvco/stb_website/commit/892e1c1) Add Internal Linking Agent and update commit workflow (2025-09-11)
  - Create Internal Linking Agent for SEO-optimized internal linking
  - Update Blog Content Generator to use new blog-content folder structure  
  - Enhance commit-changes command to support quick vs full commit modes
  - Update Content Prioritization Agent with proper YAML front matter
  - Clean up outdated resources files and documentation
  - Complete Phase 5 Internal Linking Agent development in todo-list
- [`d1c5495`](https://github.com/nvco/stb_website/commit/d1c5495) Enhance blog post structure with FAQ, references, disclaimer, and improved typography (2025-09-09)
  - Added automatic FAQ section rendering from frontmatter faqs array
  - Added references section with external link styling and numbering  
  - Added medical disclaimer partial that appears on all blog posts
  - Implemented hierarchical spacing for better visual section breaks (H2s, H3s, paragraphs)
  - Fixed H2 font-family override issue by removing conflicting Tailwind class
  - Updated blog post frontmatter documentation in CLAUDE.md
  - Fixed accessibility issue with disclaimer font size (16px minimum)

### Changed
- [`e3b3b45`](https://github.com/nvco/stb_website/commit/e3b3b45) Refine typography letter spacing for better readability (2025-09-09)
  - Reduce H1, H2, and H3 letter spacing from -0.04em to -0.02em for improved readability
  - Remove excessive letter spacing from H4 elements for better text flow
  - Maintain consistent typography hierarchy across all heading levels
  - Improve overall reading experience with more balanced character spacing

- [`a6c575c`](https://github.com/nvco/stb_website/commit/a6c575c) Optimize Botox blog post titles for better SEO and readability (2025-09-09)
  - Update meta title to "Top 5 Benefits of Botox in Superior, CO for a Youthful Look"
  - Update H1 title to "Top 5 Benefits of Botox for a Youthful Look in Superior, CO"
  - Improve natural language flow and keyword placement for better search alignment
  - Enhance local SEO targeting for Superior, CO market

- [`a5bd4fb`](https://github.com/nvco/stb_website/commit/a5bd4fb) Improve changelog organization and commit categorization system (2025-09-09)
  - Reorganize changelog entries into proper sections (Added, Changed, Fixed, etc.)
  - Move self-hosted fonts commit to "Changed" section (CDN replacement)
  - Move slash command improvements to "Changed" section (existing functionality updates)
  - Add comprehensive categorization rules to /commit-changes slash command documentation
  - Define clear criteria for Added, Changed, Fixed, Security, and Performance sections

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