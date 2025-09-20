# CLAUDE.md

This file provides guidance to Claude Code when working with the Hugo-based Still Time Beauty website.

## Development Commands

### Local Development
**Quick Start:** Use the `/start-hugo-dev` slash command to start the development server with optimal settings.

**Manual Commands:**
```bash
# Build production site locally (for testing)
hugo --minify

# Check Hugo version (using v0.148.2)
hugo version
```

**Development Server Notes:**
- Server runs at http://localhost:1313/ and auto-reloads on file changes
- Check if server is running with: `ps aux | grep hugo`
- Use `BashOutput` tool to monitor server status when running in background

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

## Architecture

Hugo static site for medical aesthetics practice. **Comprehensive documentation:** `docs/architecture/CLAUDE.md`

### Quick Reference:
- **Content Types**: `page`, `blog`, `legal` with standardized front matter
- **Layouts**: Organized in `layouts/page/`, `layouts/legal/`, `layouts/blog/`
- **Styling**: Tailwind CSS + custom colors, Lucide icons
- **Key Patterns**: Content in markdown, layouts in HTML, Hugo variables for dynamic data

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

Custom Claude Code commands for streamlined development workflows. **Full documentation:** `docs/commands/CLAUDE.md`

### Available Commands:

- **`/commit-changes`** - Automated git commit workflow with changelog categorization
- **`/start-hugo-dev`** - Hugo development server with optimal settings for drafts and live reload

## Custom Agents

This project uses specialized Claude Code agents for SEO-optimized content creation. **Full documentation:** `docs/agents/CLAUDE.md`

### Available Agents:

1. **Keyword Strategy Agent** - Complete analysis and strategic planning with balanced batches for optimal SEO progression
   - **Location:** `.claude/agents/keyword-strategy-agent.md`
   - **Purpose:** Analyzes CSV files and organizes keywords into Foundation/Growth/Authority batches with progress tracking

2. **Blog Content Generator Agent** - Brief, helpful blog posts with conversational question-focused structure
   - **Location:** `.claude/agents/blog-content-generator.md`
   - **Purpose:** Creates Hugo-compliant blog posts with conversational H2 titles, strategic formatting, and FAQ schema

3. **Internal Linking Agent** - Post-publication enhancement with strategic internal links
   - **Location:** `.claude/agents/internal-linking-agent.md`
   - **Purpose:** Adds accessibility-compliant internal links for SEO optimization

4. **Visual Content Copy Generator** - Platform-optimized copy for video and image promotion with engagement focus
   - **Location:** `.claude/agents/visual-content-copy-generator.md`
   - **Purpose:** Generates YouTube, TikTok, Instagram, and Facebook copy for both videos and images with SEO optimization and conversion focus

### Quick Workflow:

1. Generate statistical analysis
```
Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/[category].csv
```

2. Create strategic content batches  
```
Use the keyword-strategy-agent to prioritize /.resources/content-guidelines/keywords/[category].csv
```

3. Generate blog posts
```
Use the blog-content-generator agent to create a blog post:
- Primary topic: "lip filler swelling"
- Category: "Dermal Fillers"
- Keyword Sources: "lip fillers"
- Geographic location: "Boulder"
```

4. Add internal links
```
Use the internal-linking-agent to add internal links to /content/blog/[filename].md
```

5. Generate visual social media content
```
Use the visual-content-copy-generator agent to create promotional content:
- Content description: "location tour and meet the owner"
- Content type: "video"
- Content category: "promotional"
- Geographic location: "Boulder"
- Call-to-action goal: "book consultation"
```

#### Visual Content Copy Agent Input Options:

**Content Types:**
- video, image

**Content Categories:**
- promotional, educational, behind-the-scenes, testimonial, treatment demo, before/after, facility showcase

**Geographic Locations:**
- Boulder, Superior, Louisville, Lafayette, Broomfield, Westminster, Arvada, etc.

**Call-to-Action Goals:**
- book consultation, drive website traffic, phone calls, brand awareness, education, trust building

**Target Audiences:** (Optional)
- new patients, existing clients, local community, specific demographics

**Examples:**
```
Educational video:
- Content description: "botox injection process demonstration"
- Content type: "video"
- Content category: "educational"
- Geographic location: "Boulder"
- Call-to-action goal: "education and trust building"
```