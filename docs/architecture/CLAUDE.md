# Site Architecture

This file contains comprehensive architectural documentation for the Still Time Beauty Hugo static site.

## Architecture Overview

This is a Hugo static site for a medical aesthetics practice, migrated from PHP with all original functionality preserved.

## Hugo Structure (Project Root)

```
/ (project root)
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
│   │   ├── single.html
│   │   └── taxonomy.html      # Category/taxonomy pages template
│   ├── page/                  # ⭐ All main page layouts
│   │   ├── home.html          # Homepage layout
│   │   ├── about.html         # About page layout
│   │   ├── services.html      # Services page layout
│   │   ├── cancellation-policy.html  # Policy page layout
│   │   └── pre-post-treatment.html   # Treatment guidelines layout
│   ├── legal/
│   │   └── single.html        # Legal pages with white backdrop container
│   ├── blog/
│   │   ├── list.html          # Blog listing page
│   │   └── single.html        # Blog post template
│   ├── 404.html               # Custom 404 error page
│   └── partials/              # Reusable components
│       ├── cta-call-button.html
│       ├── cta-section-large.html
│       ├── faq-section.html
│       ├── footer.html
│       ├── header.html
│       ├── info-card.html
│       ├── navigation.html
│       ├── promo-offer.html      # Promotional offer badge (30% off)
│       ├── scripts.html
│       └── structured-data.html
├── static/                    # Static assets
│   ├── images/                # Image files (organized)
│   └── js/                    # JavaScript files
├── archetypes/                # Content templates
├── assets/                    # Hugo asset pipeline (empty)
├── data/                      # Data files (empty)
├── i18n/                      # Internationalization (empty)
├── themes/                    # Hugo themes (empty)
├── public/                    # Generated site output (git-ignored)
├── hugo.toml                  # Hugo configuration
└── resources/                 # Project documentation and assets
```

## Content Type System

### Main Pages (all use `type: "page"`)
- **Home**: `_index.md` → `layout: "home"` → `layouts/page/home.html`
- **About**: `about.md` → `layout: "about"` → `layouts/page/about.html`
- **Services**: `services.md` → `layout: "services"` → `layouts/page/services.html`
- **Policies**: `cancellation-policy.md` → `layout: "cancellation-policy"` → `layouts/page/cancellation-policy.html`
- **Treatment**: `pre-post-treatment.md` → `layout: "pre-post-treatment"` → `layouts/page/pre-post-treatment.html`

### Legal Pages (specialized type)
- **Legal**: `legal/*.md` → `type: "legal"` → `layouts/legal/single.html`
- Uses white backdrop container for professional presentation

### Blog Posts (with enhanced structure)
- **Blog**: `blog/*.md` → `type: "blog"` → `layouts/blog/single.html`
- Support `categories: ["Category Name"]` in front matter
- Categories automatically generate taxonomy pages at `/categories/category-name/`
- **Enhanced sections**: FAQs, References, and Medical Disclaimer automatically added
- **Hierarchical spacing**: Improved typography with proper visual section breaks

### Category Pages (auto-generated)
- **Categories**: `/categories/botox/` → Hugo auto-generates → `layouts/_default/taxonomy.html`
- No content files needed - generated from blog post categories
- Custom metadata handled via template conditionals

### Content Files Pattern
- Pages with custom HTML layouts contain **only front matter** (no content)
- All content is hardcoded in the layout templates
- Hugo variables replace original PHP variables (`{{ .Site.Params.phone }}`)

## Layout Architecture

### Layout Organization
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

### CSS & Styling Architecture
- **Tailwind CSS**: Primary styling framework via CDN
- **Custom Colors**: Extended Tailwind config in `/static/js/tailwind-config.js`
  - Primary palette: Grays for text and backgrounds
  - Accent palette: Teal shades for CTAs and highlights
  - Coral-500: `#EE6D71` for promotional elements
- **Custom CSS**: Typography rules in `baseof.html` for proper markdown rendering
- **Responsive**: Mobile-first design with proper accessibility
- **Icons**: Lucide icons for consistent iconography

## Content Management Architecture

### Page Types
1. **Landing Pages**: Custom HTML layouts with full design control
2. **Legal Pages**: Markdown content with specialized container styling
3. **Blog Posts**: Standard markdown with Hugo's built-in blog functionality

### Hugo Best Practices Followed
- Content types organized by function
- Layouts follow Hugo's lookup hierarchy
- Front matter contains only necessary metadata
- Clean separation of content and presentation

## Front Matter Standardization

### Main Pages Pattern
```yaml
---
title: "Page Title"
description: "SEO description"
keywords: "SEO keywords"
date: 2025-01-01
type: "page"                # ⭐ Consistent content type
layout: "specific-layout"   # ⭐ Individual layout name
---
```

### Blog Posts Pattern
```yaml
---
title: "Blog Post Title"
description: "SEO description"
keywords:                     # ⭐ Array or string format supported
  - "keyword one"
  - "keyword two"
author: "Still Time Beauty"
date: 2025-07-19              # ⭐ Content creation/authoring date
publishDate: 2025-09-03       # ⭐ Publication date (controls when live)
type: "blog"
categories: ["Botox", "Dermal Fillers"] # ⭐ Blog post categories for taxonomy
location: "Boulder"           # ⭐ Geographic location for local content
params:                       # ⭐ Optional parameters
  h1title: "Custom H1 Title"  # ⭐ Override H1 display title (falls back to title if not set)
faqs:                         # ⭐ FAQ schema for blog posts
  - question: "Question text?"
    answer: "Answer text"
references:                   # ⭐ Reference citations for blog posts
  - name: "Reference Title"
    url: "https://example.com"
---
```

### Legal Pages Pattern
```yaml
---
title: "Legal Page Title"
description: "Legal page description"
date: 2025-07-01
type: "legal"
robots: "noindex, nofollow" # ⭐ Prevent search indexing
sitemap:                    # ⭐ Exclude from sitemap
  disable: true
---
```

## Architectural Changes History

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

## Hugo Best Practices Applied
- **Content Type Consistency**: All main pages use `type: "page"`
- **Layout Organization**: Grouped by content type in `layouts/page/`
- **Template Lookup**: Follows Hugo's `layouts/{type}/{layout}.html` convention
- **Maintainability**: Clear separation and logical organization

## Technology Stack Architecture
- **Hugo v0.148.2**: Static site generator
- **Tailwind CSS**: Utility-first CSS framework via CDN
- **Lucide Icons**: Icon system for consistent iconography
- **Markdown**: Content authoring format
- **Go Templates**: Hugo's templating system for layouts

## Migration Architecture Notes

### Preserved Features from PHP
- All original PHP functionality converted to Hugo
- Clean URL structure (`/about`, `/services`, etc.)
- Responsive design and mobile optimization
- Legal compliance and professional presentation
- SEO optimization and structured data

### Hugo Architectural Advantages
- Static site generation for better performance
- Built-in development server with live reload
- Simplified deployment and hosting
- Better security (no server-side processing)
- Version control friendly (all text files)

## Development Workflow Architecture

### Making Changes
1. **Content Updates**: Edit markdown files in `content/`
2. **Design Changes**: Modify layouts in `layouts/page/` or `layouts/legal/`
3. **Site Configuration**: Update `hugo.toml`
4. **Assets**: Add images to `static/`

### Testing Architecture
- Hugo development server auto-reloads on changes
- Test all page types and responsive behavior
- Verify legal page formatting and accessibility

### Common Architectural Tasks

#### Adding New Pages
1. Create markdown file in `content/`
2. Add `type: "page"` and `layout: "pagename"` to front matter
3. Create corresponding layout in `layouts/page/pagename.html`

#### Updating Business Information
- Contact details and hours: Update in `hugo.toml` under `[params]`
- Service descriptions: Edit layout files directly
- Legal content: Update markdown files in `content/legal/`

#### Blog Management Architecture
- Add new posts: Create markdown files in `content/blog/`
- Uses Hugo's built-in blog functionality
- Automatic date sorting and pagination
- Categories generate taxonomy pages automatically

This Hugo implementation maintains all the functionality and design quality of the original PHP site while providing better performance, security, and maintainability through a well-structured static site architecture.