# CLAUDE.md

This file provides guidance to Claude Code when working with the Hugo-based Still Time Beauty website.

## Development Commands

### Local Development
```bash
# Start Hugo development server (from project root)
# IMPORTANT: Use run_in_background=true in Claude Code to keep server running
hugo server -D

# Or with drafts and network binding
hugo server --buildDrafts --bind 0.0.0.0

# Build production site locally (for testing)
hugo --minify

# Check Hugo version (using v0.148.2)
hugo version
```

**Claude Code Specific Instructions:**
- When starting the Hugo server, ALWAYS use the `run_in_background=true` parameter with the Bash tool
- The server runs at http://localhost:1313/ and auto-reloads on file changes
- Check if server is running with: `ps aux | grep hugo`
- Use `BashOutput` tool to monitor server status and output

### Deployment
Production deployment is automated via GitHub Actions on push to `main` branch:
1. Builds optimized site with `hugo --minify`
2. Archives to `nvco/stb-web-live` repository
3. Deploys via FTP to Hostinger hosting

Required GitHub Secrets:
- `PERSONAL_ACCESS_TOKEN` - For pushing to external repo
- `FTP_SERVER` - Hostinger FTP server address
- `FTP_USERNAME` - FTP account username
- `FTP_PASSWORD` - FTP account password

### Project Status
✅ **Production Ready**: Hugo site is now live on main branch (v2.0.0)
- Migration from PHP completed and deployed
- Original design and content preserved  
- Clean URL structure maintained
- Automated deployment via GitHub Actions
- Original PHP site backed up in `original-site-backup` branch

## Architecture Overview

This is a Hugo static site for a medical aesthetics practice, migrated from PHP with all original functionality preserved.

### Hugo Structure (Now at Project Root)
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

**Blog Posts** (with enhanced structure):
- **Blog**: `blog/*.md` → `type: "blog"` → `layouts/blog/single.html`
- Support `categories: ["Category Name"]` in front matter
- Categories automatically generate taxonomy pages at `/categories/category-name/`
- **Enhanced sections**: FAQs, References, and Medical Disclaimer automatically added
- **Hierarchical spacing**: Improved typography with proper visual section breaks

**Category Pages** (auto-generated):
- **Categories**: `/categories/botox/` → Hugo auto-generates → `layouts/_default/taxonomy.html`
- No content files needed - generated from blog post categories
- Custom metadata handled via template conditionals

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
- **Custom Colors**: Extended Tailwind config in `/static/js/tailwind-config.js`
  - Primary palette: Grays for text and backgrounds
  - Accent palette: Teal shades for CTAs and highlights
  - Coral-500: `#EE6D71` for promotional elements
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

## Recent Changes (August 2025)

### Documentation Improvements (v1.3.2)
**What Changed:**
- ✅ Added comprehensive coding standards reference to CLAUDE.md
- ✅ Updated front matter standardization with all content types
- ✅ Added references to `.cursor/rules/` files for development consistency
- ✅ Documented FAQ schema, SEO directives, and author fields

**Technical Details:**
- Coding standards section references general principles, HTML accessibility, JavaScript, and Tailwind rules
- Front matter documentation now covers main pages, blog posts, and legal pages separately
- Added `faqs:` field for blog post question/answer schema
- Added `robots:` and `sitemap:` fields for legal page SEO control
- Added `author:` field for blog post attribution

**Benefits:**
- Consistent code quality standards across development
- Clear documentation for all content types and their front matter requirements
- Better developer onboarding and maintenance workflows

### Accessibility Improvements (v1.3.0)
**What Changed:**
- ✅ Added `aria-hidden="true"` to all decorative icons (Lucide icons and SVGs)
- ✅ Added `role="img"` to star rating containers with `aria-label` attributes
- ✅ Enhanced keyboard focus indicators with `:focus-visible` pseudo-class
- ✅ Improved screen reader compatibility across all pages

**Technical Details:**
- All `<i data-lucide>` elements now have `aria-hidden="true"`
- Star rating `<div>` elements with `aria-label` now have `role="img"` for proper semantics
- Focus styles use 3px outline with box-shadow for better visibility
- Uses `:focus-visible` to show focus only for keyboard users, not mouse users

**Benefits:**
- Better WCAG 2.1 compliance
- Improved screen reader experience
- Enhanced keyboard navigation
- Lighthouse accessibility score improvements

## Recent Architectural Changes (August 2025)

### Root Directory Migration (v1.2.0)
**What Changed:**
- ✅ Moved entire Hugo site from `hugo-site/` subdirectory to project root
- ✅ Follows standard Hugo project structure conventions
- ✅ Simplifies development and deployment workflows

**Benefits:**
- Standard Hugo commands work without path prefixes
- Cleaner project structure
- Easier CI/CD integration
- Better tooling compatibility

## Previous Architectural Changes

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

**Main Pages Pattern:**
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

**Blog Posts Pattern:**
```yaml
---
title: "Blog Post Title"
description: "SEO description"
keywords: "SEO keywords"
author: "Still Time Beauty"
date: 2025-07-19              # ⭐ Content creation/authoring date
publishDate: 2025-09-03       # ⭐ Publication date (controls when live)
type: "blog"
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

**Legal Pages Pattern:**
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

## Coding Standards

Reference and follow the rules defined in:
- `.cursor/rules/general-principles.mdc` - Universal development principles and code quality standards
- `.cursor/rules/html-accessibility.mdc` - WCAG compliance and semantic HTML guidelines
- `.cursor/rules/javascript.mdc` - Modern JavaScript patterns and best practices
- `.cursor/rules/tailwind.mdc` - Tailwind CSS utility-first development conventions

These standards ensure consistent, accessible, and maintainable code across the project.

## SEO-Optimized Internal Linking Strategy

**Purpose**: SEO optimization, not user convenience. Focus on search engine value and keyword targeting.

**Core Principles:**
1. **No duplicate links** - Avoid linking the same anchor text to the same target page multiple times per page
2. **Keyword-rich anchor text** - Use target page keywords: "Board-Certified Nurse Practitioner", "Botox and dermal filler"
3. **Link diversity** - Each page should link to different target pages for optimal link equity distribution
4. **Natural context** - Links must provide genuine value and feel contextual
5. **Strategic targeting** - Support important search terms and page authority
6. **Accessibility compliance** - Always include descriptive `aria-label` attributes explaining link destination and purpose

**Maintenance Guidelines:**
- **Review quarterly** - Check for new linking opportunities as content grows
- **No convenience linking** - Resist adding links just for user navigation
- **Anchor text variation** - Avoid repetitive phrases, vary keyword targeting
- **Link equity balance** - Ensure all important pages receive internal links

**Accessibility Requirements:**
- **ARIA labels required** - Every internal link must have `aria-label="descriptive context"`
- **Clear destination context** - Labels should explain where the link leads and why
- **No redundant announcements** - Avoid "internal link" or similar unnecessary screen reader text
- **Example format**: `<a href="/about/" aria-label="Learn about our Board-Certified Nurse Practitioner credentials">Board-Certified Nurse Practitioner</a>`

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

### Changelog Format
When updating CHANGELOG.md, use this format for commits with multiple changes:
```markdown
### Added
- [`abc1234`](https://github.com/nvco/stb_website/commit/abc1234) Brief summary of commit (YYYY-MM-DD)
  - Specific change or feature added
  - Another specific change or feature
  - Additional details about the changes
```

For single changes, the simpler format is fine:
```markdown
### Changed
- [`abc1234`](https://github.com/nvco/stb_website/commit/abc1234) Brief description of change (YYYY-MM-DD)
```

**Benefits:**
- Group related changes under one commit link to reduce clutter
- Easy to trace changes back to specific commits
- Hierarchical format shows both summary and details
- Cleaner than repeating commit links multiple times

## Technology Stack
- **Hugo v0.148.2**: Static site generator
- **Tailwind CSS**: Utility-first CSS framework
- **Lucide Icons**: Icon system
- **Markdown**: Content authoring
- **Go Templates**: Hugo's templating system

This Hugo implementation maintains all the functionality and design quality of the original PHP site while providing better performance, security, and maintainability.

## Custom Slash Commands

This project includes custom Claude Code slash commands to streamline common development tasks:

### `/commit-changes`
Automates the complete git commit workflow:
1. Shows current git status and changes
2. Stages all changes
3. Creates descriptive commit with proper formatting
4. Updates CHANGELOG.md with properly categorized entry
5. Commits the changelog
6. Shows final status

**Changelog Categorization Rules:**
When updating CHANGELOG.md, analyze the commit content and categorize under the appropriate H3 section:

- **`### Added`** - New features, new files, new functionality
  - Examples: "Add new component", "Create new agent", "Implement new feature"
  
- **`### Changed`** - Changes to existing functionality, refactoring, improvements
  - Examples: "Update existing component", "Improve performance", "Refactor code", "Replace CDN with self-hosted"
  
- **`### Fixed`** - Bug fixes, corrections, issue resolutions
  - Examples: "Fix accessibility issue", "Resolve styling bug", "Correct typo"
  
- **`### Security`** - Security improvements, vulnerability fixes
  - Examples: "Enhance security headers", "Fix XSS vulnerability"
  
- **`### Performance`** - Performance optimizations, speed improvements
  - Examples: "Optimize font loading", "Reduce bundle size", "Improve loading times"

**Important:** Always add new entries at the TOP of their respective sections, with empty lines between entries for readability.

**Usage:** Simply type `/commit-changes` to execute the full workflow.

### `/start-hugo-dev`
Starts Hugo development server with project-specific settings:
- Includes draft content
- Binds to all network interfaces
- Auto-reloads on changes

**Usage:** Type `/start-hugo-dev` to start the development environment.

## Custom Agents

This project includes specialized Claude Code agents for complex tasks:

### Keyword Analysis Agent
Analyzes keyword CSV files to generate data-driven selection rules and statistical insights for optimized blog content creation.

**Location:** `.claude/agents/keyword-analysis-agent.md`

#### Purpose:
- Processes keyword CSV files with statistical analysis
- Generates category-specific analysis files with data-driven thresholds
- Creates actionable selection rules for the Blog Content Generator Agent
- Eliminates guesswork by providing numerical criteria for keyword selection

#### Invocation Methods:

**Single Category Analysis:**
```
Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/botox.csv
```

**Batch Processing:**
```
Use the keyword-analysis-agent to process CSV files in /.resources/content-guidelines/keywords/ without corresponding analysis.md files
```

#### Agent Capabilities:
- **Statistical Analysis**: Volume distributions, competition breakpoints, growth trend categorization
- **Data-Driven Rules**: Generates specific numerical thresholds instead of generic guidance
- **Competition Sweet Spots**: Identifies optimal competition ranges with precise criteria
- **Growth Categorization**: Classifies keywords by momentum with specific percentage ranges
- **Output Format**: Creates `[category]-analysis.md` files with actionable selection rules

#### Required Input:
- **CSV Format**: Standard keyword research export with volume, competition, and trend data
- **File Location**: `/.resources/content-guidelines/keywords/[category].csv`

#### Generated Output:
- **Analysis File**: `/.resources/content-guidelines/keywords/[category]-analysis.md`
- **Content**: Statistical breakpoints, selection rules, competition criteria, trend classifications

### Blog Content Generator Agent
Generates comprehensive, SEO-optimized blog posts with keyword research integration and local geographic differentiation.

**Location:** `.claude/agents/blog-content-generator.md`

#### Invocation Methods:

**Method 1: Explicit Invocation**

Single Post:
```
Use the blog-content-generator agent to create a blog post:
- Primary topic: "Botox for crow's feet"
- Category: "Botox"
- Keyword Sources: "Botox"
- Content length: "long form"
- Geographic location: "Boulder"
```

Comparison Post:
```
Use the blog-content-generator agent to create a blog post:
- Primary topic: "Botox vs Dysport comparison"
- Category: "Treatment Comparisons"
- Keyword Sources: "Botox, Dysport"
- Content length: "long form" 
- Geographic location: "Boulder"
```

Batch Processing:
```
Use the blog-content-generator agent to process the content queue at /.resources/content-guidelines/my-january-queue.md
```

**Method 2: Automatic Invocation**
Claude Code automatically invokes the agent when you request blog content creation:
- "Create a blog post about Botox benefits in Boulder"
- "Generate multiple blog posts from my content planning file"
- "Write a comprehensive article about dermal fillers"
- "Create a comparison post about Botox vs Dysport in Boulder"
- "Write a blog post comparing different injectable treatments"

#### Agent Capabilities:
- **Keyword Integration**: Uses category-specific CSV files with data-driven analysis rules
- **Analysis-Driven Selection**: Leverages `[category]-analysis.md` files from Keyword Analysis Agent
- **Local Data**: Leverages city-specific data from `/.resources/content-guidelines/cities/`
- **Content Differentiation**: Creates unique angles for similar topics across locations
- **SEO Optimization**: 9th grade reading level with 1-2% keyword density
- **Hugo Compliance**: Proper front matter, categories, FAQ schema
- **Flexible Length**: Short form (1,000-1,500 words) or long form (2,000-3,000+ words)

#### Required Files:
- **Keywords**: `/.resources/content-guidelines/keywords/[category].csv` (category-specific keyword files)
- **Analysis Rules**: `/.resources/content-guidelines/keywords/[category]-analysis.md` (generated by Keyword Analysis Agent)
- **City Data**: `/.resources/content-guidelines/cities/[cityname].md` (for local content)
- **Content Queue**: `/.resources/content-guidelines/content-queue-template.md` (for batch processing)

### Content Prioritization Agent
Analyzes keyword CSV files and existing analysis data to create strategic content prioritization plans that balance quick wins, medium-term growth, and long-term authority building for optimal SEO progression.

**Location:** `.claude/agents/content-prioritization-agent.md`

#### Purpose:
- Creates strategic content prioritization with mixed batches for optimal SEO progression
- Balances Foundation (low-hanging fruit), Growth (medium competition), and Authority (high-value) keywords
- Organizes keywords into manageable batch files for execution tracking
- Outputs organized folder structure with checkbox-based progress tracking

#### Invocation Methods:

**Single Category Analysis:**
```
Use the content-prioritization-agent to analyze /.resources/content-guidelines/keywords/botox.csv
```

**Multi-Category Analysis:**
```
Use the content-prioritization-agent to prioritize across categories:
- Process: botox.csv, dermal-fillers.csv, dysport.csv
- Create unified priority ranking across all categories
```

#### Agent Capabilities:
- **Strategic Batching**: Mixed batches of 10 keywords balancing Foundation/Growth/Authority
- **Pyramid Progression**: 30% Foundation, 50% Growth, 20% Authority distribution
- **Organized Output**: Category subfolders with batch files (50 keywords per file)
- **Progress Tracking**: Markdown checkboxes for execution tracking
- **Scoring System**: Quick Win Score and Authority Score calculations

#### Required Input:
- **CSV Format**: Standard keyword research export with volume, competition, and trend data
- **File Location**: `/.resources/content-guidelines/keywords/[category].csv`
- **Optional**: `/.resources/content-guidelines/keywords/[category]-analysis.md` (enhances scoring)

#### Generated Output:
- **Folder Structure**: `/.resources/content-guidelines/content-todo/[category]/`
- **Batch Files**: `batch-01.md`, `batch-02.md`, etc. (50 keywords per file)
- **Universal Guide**: `README.md` in content-todo folder explaining metrics

#### Three-Agent Workflow:

**Complete Content Creation Process:**

1. **Data Preparation**: Add keyword CSV file to `/.resources/content-guidelines/keywords/[category].csv`

2. **Statistical Analysis**: 
   ```
   Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/[category].csv
   ```
   - Generates `[category]-analysis.md` with data-driven selection rules
   - Creates statistical breakpoints for high/mid/long-tail keyword categorization
   - Identifies competition sweet spots and growth trend classifications

3. **Strategic Prioritization**:
   ```
   Use the content-prioritization-agent to analyze /.resources/content-guidelines/keywords/[category].csv
   ```
   - Creates organized batch files with strategic keyword ordering
   - Generates `/.resources/content-guidelines/content-todo/[category]/batch-01.md` 
   - Balances Foundation/Growth/Authority across batches for optimal progression
   - Outputs checkbox format for execution tracking

4. **Content Creation**:
   ```
   Use the blog-content-generator agent to create a blog post:
   - Primary topic: "Your topic here"
   - Category: "[category]" 
   - Content length: "long form"
   - Geographic location: "Boulder"
   ```
   - Creates individual blog posts following prioritized batch order
   - Reads both CSV data and analysis rules for optimal keyword selection
   - Uses analysis breakpoints and prioritization strategy

**Benefits:**
- **Strategic**: Smart prioritization prevents getting stuck in low-value content
- **Organized**: Clean folder structure with manageable batch files
- **Executable**: Checkbox format makes progress tracking simple and actionable
- **Scalable**: Drop new CSV → analyze → prioritize → execute in batches
- **Consistent**: Same statistical methodology applied across all categories  
- **Data-driven**: Specific numerical thresholds replace generic guidance