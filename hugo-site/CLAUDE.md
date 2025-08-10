# CLAUDE.md

This file provides guidance to Claude Code when working with the Hugo-based Still Time Beauty website.

## Development Commands

### Local Development
```bash
# Start Hugo development server (from project root)
hugo server --buildDrafts --bind 0.0.0.0

# Build production site
hugo --minify

# Check Hugo version (using v0.148.2)
hugo version
```

### Project Status
✅ **Migration Complete**: Successfully migrated from PHP to Hugo static site generator
- All pages converted and functional
- Original design and content preserved
- Clean URL structure maintained

## Architecture Overview

This is a Hugo static site for a medical aesthetics practice, migrated from PHP with all original functionality preserved.

### Hugo Structure
```
hugo-site/
├── content/                    # Page content (markdown)
│   ├── _index.md              # Homepage (type: page, layout: home)
│   ├── about.md               # About page (type: page, layout: about)
│   ├── services.md            # Services page (type: page, layout: services)
│   ├── cancellation-policy.md # Policies (type: page, layout: cancellation-policy)
│   ├── pre-post-treatment.md  # Treatment guidelines (type: page, layout: pre-post-treatment)
│   ├── legal/                 # Legal pages (type: legal)
│   │   ├── privacy-policy.md
│   │   ├── hipaa-notice.md
│   │   ├── medical-disclaimers.md
│   │   └── terms-of-service.md
│   └── blog/                  # Blog posts
├── layouts/
│   ├── _default/
│   │   ├── baseof.html        # Base template with custom typography CSS
│   │   ├── list.html
│   │   └── single.html
│   ├── page/                  # ⭐ All main page layouts moved here
│   │   ├── home.html          # Homepage layout (was layouts/index.html)
│   │   ├── about.html         # About page layout
│   │   ├── services.html      # Services page layout (was layouts/services/single.html)
│   │   ├── cancellation-policy.html  # Policy page layout
│   │   └── pre-post-treatment.html   # Treatment guidelines layout
│   ├── legal/
│   │   └── single.html        # Legal pages with white backdrop container
│   ├── blog/
│   │   └── single.html        # Blog post template
│   └── partials/              # Reusable components
│       ├── cta-call-button.html
│       ├── cta-section-large.html
│       ├── footer.html
│       ├── header.html
│       ├── info-card.html
│       ├── navigation.html
│       └── scripts.html
├── static/                    # Assets (images, CSS, JS)
└── hugo.toml                  # Hugo configuration with site params
```

### Content Type System

**Main Pages** (all use `type: "page"`):
- **Home**: `_index.md` → `layout: "home"` → `layouts/page/home.html`
- **About**: `about.md` → `layout: "about"` → `layouts/page/about.html`
- **Services**: `services.md` → `layout: "services"` → `layouts/page/services.html`
- **Policies**: `cancellation-policy.md` → `layout: "cancellation-policy"` → `layouts/page/cancellation-policy.html`
- **Treatment**: `pre-post-treatment.md` → `layout: "pre-post-treatment"` → `layouts/page/pre-post-treatment.html`

**Legal Pages** (specialized type):
- **Legal**: `legal/*.md` → `type: "legal"` → `layouts/legal/single.html`
- Uses white backdrop container for professional presentation

**Content Files Pattern**:
- Pages with custom HTML layouts contain **only front matter** (no content)
- All content is hardcoded in the layout templates
- Hugo variables replace original PHP variables (`{{ .Site.Params.phone }}`)

## Key Patterns

### Layout Architecture
- **`layouts/page/`**: All main site page layouts
- **`layouts/legal/`**: Legal pages with specialized styling  
- **`layouts/partials/`**: Reusable components (CTA buttons, navigation)
- **`layouts/_default/baseof.html`**: Base template with custom CSS for typography

### Hugo Template Variables
Original PHP variables converted to Hugo params:
```go
// PHP: <?php echo $phone; ?>
// Hugo: {{ .Site.Params.phone }}

// PHP: <?php echo $business_name; ?>
// Hugo: {{ .Site.Params.business_name }}
```

### CSS & Styling
- **Tailwind CSS**: Primary styling framework via CDN
- **Custom CSS**: Typography rules in `baseof.html` for proper markdown rendering
- **Responsive**: Mobile-first design with proper accessibility
- **Icons**: Lucide icons for consistent iconography

## Content Management

### Page Types
1. **Landing Pages**: Custom HTML layouts with full design control
2. **Legal Pages**: Markdown content with specialized container styling
3. **Blog Posts**: Standard markdown with Hugo's built-in blog functionality

### Hugo Best Practices Followed
- Content types organized by function
- Layouts follow Hugo's lookup hierarchy
- Front matter contains only necessary metadata
- Clean separation of content and presentation

## Recent Architectural Changes (August 2025)

### Layout Restructuring
**What Changed:**
- ✅ Moved all main page layouts from scattered locations to unified `layouts/page/` directory
- ✅ Standardized all main pages to use `type: "page"` with individual `layout:` specifications
- ✅ Cleaned up inconsistent content type usage

**Before:**
```
layouts/
├── index.html              # Homepage
├── about.html              # About page  
├── services/
│   └── single.html         # Services page
├── cancellation-policy.html
└── pre-post-treatment.html
```

**After:**
```
layouts/
├── page/                   # ⭐ All main pages now organized here
│   ├── home.html          # Homepage (was index.html)
│   ├── about.html         # About page
│   ├── services.html      # Services page (was services/single.html)
│   ├── cancellation-policy.html
│   └── pre-post-treatment.html
├── legal/
│   └── single.html        # Specialized legal page template
```

### Content Front Matter Standardization
**All main pages now follow this pattern:**
```yaml
---
title: "Page Title"
description: "SEO description"
keywords: "SEO keywords"
date: 2024-01-01
type: "page"                # ⭐ Consistent content type
layout: "specific-layout"   # ⭐ Individual layout name
---
```

### Hugo Best Practices Applied
- **Content Type Consistency**: All main pages use `type: "page"`
- **Layout Organization**: Grouped by content type in `layouts/page/`
- **Template Lookup**: Follows Hugo's `layouts/{type}/{layout}.html` convention
- **Maintainability**: Clear separation and logical organization

## Development Workflow

### Making Changes
1. **Content Updates**: Edit markdown files in `content/`
2. **Design Changes**: Modify layouts in `layouts/page/` or `layouts/legal/`
3. **Site Configuration**: Update `hugo.toml`
4. **Assets**: Add images to `static/`

### Testing
- Hugo development server auto-reloads on changes
- Test all page types and responsive behavior
- Verify legal page formatting and accessibility

## Migration Notes

### Preserved Features
- All original PHP functionality converted
- Clean URL structure (`/about`, `/services`, etc.)
- Responsive design and mobile optimization
- Legal compliance and professional presentation
- SEO optimization and structured data

### Hugo Advantages
- Static site generation for better performance
- Built-in development server with live reload
- Simplified deployment and hosting
- Better security (no server-side processing)
- Version control friendly (all text files)

## Common Tasks

### Adding New Pages
1. Create markdown file in `content/`
2. Add `type: "page"` and `layout: "pagename"` to front matter
3. Create corresponding layout in `layouts/page/pagename.html`

### Updating Business Information
- Contact details and hours: Update in `hugo.toml` under `[params]`
- Service descriptions: Edit layout files directly
- Legal content: Update markdown files in `content/legal/`

### Blog Management
- Add new posts: Create markdown files in `content/blog/`
- Uses Hugo's built-in blog functionality
- Automatic date sorting and pagination

## Technology Stack
- **Hugo v0.148.2**: Static site generator
- **Tailwind CSS**: Utility-first CSS framework
- **Lucide Icons**: Icon system
- **Markdown**: Content authoring
- **Go Templates**: Hugo's templating system

This Hugo implementation maintains all the functionality and design quality of the original PHP site while providing better performance, security, and maintainability.