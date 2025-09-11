# Claude Code Agents

This file contains detailed documentation for specialized Claude Code agents used in the Still Time Beauty website project.

## Overview

The project uses three specialized agents for SEO-optimized content creation and enhancement:

1. **Keyword Strategy Agent** - Complete analysis and strategic content planning with batching
2. **Blog Content Generator Agent** - SEO-optimized blog post creation
3. **Internal Linking Agent** - Post-publication internal link enhancement

## Keyword Strategy Agent

Performs complete statistical analysis of keyword CSV files and creates strategic content prioritization plans that balance quick wins, medium-term growth, and long-term authority building for optimal SEO progression.

**Location:** `.claude/agents/keyword-strategy-agent.md`

### Purpose:
- Processes keyword CSV files with complete statistical analysis
- Creates strategic content prioritization with mixed batches for optimal SEO progression
- Balances Foundation (low-hanging fruit), Growth (medium competition), and Authority (high-value) keywords
- Organizes keywords into manageable batch files for execution tracking
- Outputs organized folder structure with checkbox-based progress tracking

### Invocation Methods:

**Single Category Analysis:**
```
Use the keyword-strategy-agent to analyze /.resources/content-guidelines/keywords/botox.csv
```

**Multi-Category Analysis:**
```
Use the keyword-strategy-agent to prioritize across categories:
- Process: botox.csv, dermal-fillers.csv, dysport.csv
- Create unified priority ranking across all categories
```

### Agent Capabilities:
- **Integrated Workflow**: Calls internal Analysis Agent for statistical analysis, then performs strategic prioritization
- **Complete Analysis**: Statistical analysis, volume distributions, competition breakpoints, growth trend categorization
- **Data-Driven Rules**: Generates specific numerical thresholds for Blog Content Generator keyword selection
- **Strategic Batching**: Mixed batches of 10 keywords balancing Foundation/Growth/Authority
- **Pyramid Progression**: 30% Foundation, 50% Growth, 20% Authority distribution
- **Dual Output**: Both analysis files (for keyword selection) and priority batches (for content planning)
- **Progress Tracking**: Markdown checkboxes for execution tracking
- **Scoring System**: Quick Win Score and Authority Score calculations

### Required Input:
- **CSV Format**: Standard keyword research export with volume, competition, and trend data
- **File Location**: `/.resources/content-guidelines/keywords/[category].csv` (directly in keywords folder)

### Generated Output:
- **Priority Batches**: `/.resources/content-guidelines/content-todo/[category]/batch-01.md` (for content planning)
- **Analysis Files**: `/.resources/content-guidelines/keywords/analysis/[category]-analysis.md` (for keyword selection)
- **Universal Guide**: `README.md` in content-todo folder explaining metrics

## Blog Content Generator Agent

Generates comprehensive, SEO-optimized blog posts with keyword research integration and local geographic differentiation.

**Location:** `.claude/agents/blog-content-generator.md`

### Invocation Methods:

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

### Agent Capabilities:
- **Keyword Integration**: Uses category-specific CSV files with data-driven analysis rules
- **Analysis-Driven Selection**: Leverages `[category]-analysis.md` files from Keyword Strategy Agent
- **Hybrid Local Strategy**: Three approaches for location-based content optimization
- **Content Differentiation**: Creates unique angles based on chosen local strategy
- **SEO Optimization**: 9th grade reading level with 1-2% keyword density
- **Hugo Compliance**: Proper front matter, categories, FAQ schema
- **Flexible Length**: Short form (1,000-1,500 words) or long form (2,000-3,000+ words)

### Local Strategy Options:
- **Full-Local**: Entire article localized with city-specific content throughout (use for service keywords, location-intent terms)
- **FAQ-Local**: Generic article + location-specific FAQ section (default when location provided - use for educational content)
- **Generic**: No location focus, pure topic expertise (use for universal educational content)

### Local Strategy Quick Reference:
**Default Behavior:**
- **No Location Provided** → Automatic "generic" strategy
- **Location Provided + No Strategy** → Automatic "faq-local" strategy (DEFAULT)
- **Location Provided + Strategy Specified** → Uses specified strategy

**When to Use Which Strategy:**
- **"full-local"**: Service keywords, "near me" searches, location-intent terms
- **"faq-local"**: Educational content, how-to guides, technical topics (DEFAULT with location)
- **"generic"**: Universal content, comparison posts, broad educational topics

### Enhanced Local FAQ Strategy:
**Key Updates:**
- **Location field** added to blog post front matter
- **Varied language patterns** prevent repetitive FAQ content across locations
- **Boulder location transparency** for surrounding towns with drive time context
- **Hybrid FAQ structure**: 4-6 general + 2-3 local FAQs using WHERE + business value question patterns
- **State context** included for ambiguous city names (Superior, Louisville, Lafayette, Westminster)

### Required Files:
- **Keywords**: `/.resources/content-guidelines/keywords/[category].csv` (category-specific keyword files)
- **Analysis Rules**: `/.resources/content-guidelines/keywords/analysis/[category]-analysis.md` (generated by Keyword Strategy Agent)
- **City Data**: `/.resources/content-guidelines/cities/[cityname].md` (for local content)
- **Content Queue**: `/.resources/content-guidelines/content-queue-template.md` (for batch processing)


## Internal Linking Agent

Adds SEO-optimized internal links to blog posts based on content analysis and strategic linking principles, following Still Time Beauty's internal linking strategy.

**Location:** `.claude/agents/internal-linking-agent.md`

### Purpose:
- Analyzes blog post content and adds strategic internal links for SEO enhancement
- Ensures accessibility compliance with required ARIA labels for all internal links
- Maintains natural content flow while supporting search engine optimization goals
- Prevents over-optimization by limiting to 2-3 strategic links per post

### Invocation Methods:

**Standard Usage:**
```
Use the internal-linking-agent to add internal links:
- Blog post file: /content/blog/botox-for-migraines-boulder.md
```

**With Custom Link Limit:**
```
Use the internal-linking-agent to add internal links:
- Blog post file: /content/blog/dermal-fillers-guide.md
- Link limit: 2
```

### Agent Capabilities:
- **Content Analysis**: Extracts topics, keywords, and linking opportunities from blog posts
- **Target Page Discovery**: Scans existing blog posts and main site pages for relevant linking targets
- **Strategic Link Selection**: Applies SEO principles with keyword-rich anchor text and link diversity
- **Accessibility Compliance**: Generates required ARIA labels for all internal links
- **Quality Assurance**: Validates links and ensures genuine reader value

### Required Input:
- **Blog Post File**: Path to published blog post in `/content/blog/` folder
- **Link Limit**: Optional parameter (default: 3 links for optimal SEO balance)

### Generated Output:
- **Enhanced Blog Post**: Same file updated with strategic internal links
- **SEO-Optimized Anchors**: Keyword-rich anchor text using target page keywords
- **Accessibility Markup**: All links include descriptive ARIA labels
- **Natural Integration**: Links seamlessly integrated without disrupting content flow

## Simplified Two-Step Workflow

**Complete Content Creation Process:**

1. **Data Preparation**: Add keyword CSV file to `/.resources/content-guidelines/keywords/[category].csv`

2. **Analysis & Strategic Prioritization**:
   ```
   Use the keyword-strategy-agent to analyze /.resources/content-guidelines/keywords/[category].csv
   ```
   - Calls internal Analysis Agent for comprehensive statistical analysis
   - Performs strategic prioritization using analysis results
   - Creates organized batch files with strategic keyword ordering
   - Generates `/.resources/content-guidelines/content-todo/[category]/batch-01.md` for content planning
   - Generates `/.resources/content-guidelines/keywords/analysis/[category]-analysis.md` for keyword selection
   - Balances Foundation/Growth/Authority across batches for optimal progression
   - Outputs checkbox format for execution tracking

3. **Content Creation**:
   ```
   Use the blog-content-generator agent to create a blog post:
   - Primary topic: "Your topic here"
   - Category: "[category]" 
   - Content length: "long form"
   - Geographic location: "Boulder"
   ```
   - Creates individual blog posts using data-driven keyword selection
   - Reads both CSV data and analysis rules for optimal keyword selection
   - Uses analysis breakpoints and statistical thresholds for keyword categorization

4. **Post-Publication Enhancement**:
   ```
   Use the internal-linking-agent to add internal links:
   - Blog post file: /content/blog/[post-filename].md
   ```
   - Analyzes published blog posts and adds strategic internal links
   - Ensures accessibility compliance and SEO optimization
   - Maintains natural content flow

**Benefits:**
- **Simplified**: Two-step process eliminates redundant analysis
- **Efficient**: Single agent handles both analysis and prioritization
- **Strategic**: Smart prioritization prevents getting stuck in low-value content
- **Organized**: Clean folder structure with manageable batch files
- **Executable**: Checkbox format makes progress tracking simple and actionable
- **Scalable**: Drop new CSV → analyze & prioritize → execute in batches
- **Data-driven**: Specific numerical thresholds and strategic ordering
- **Complete Workflow**: From keyword research to published, internally-linked content

## Workflow Integration

### Blog Content Generator Integration:
1. **Blog Content Generator** creates initial post (moved to `/content/blog/` when ready)
2. **Internal Linking Agent** analyzes and enhances published posts with strategic internal links
3. **Direct enhancement** of live blog posts with SEO-optimized internal linking

### Development Workflow:
1. Use **Keyword Strategy Agent** to analyze keywords and create strategic content batches
2. Use **Blog Content Generator Agent** to create individual blog posts
3. Use **Internal Linking Agent** to enhance published posts with strategic linking