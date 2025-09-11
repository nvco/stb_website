# Claude Code Agents

This file contains detailed documentation for specialized Claude Code agents used in the Still Time Beauty website project.

## Overview

The project uses four specialized agents for SEO-optimized content creation and enhancement:

1. **Keyword Analysis Agent** - Statistical analysis of keyword CSV files
2. **Content Prioritization Agent** - Strategic content planning and batching
3. **Blog Content Generator Agent** - SEO-optimized blog post creation
4. **Internal Linking Agent** - Post-publication internal link enhancement

## Keyword Analysis Agent

Analyzes keyword CSV files to generate data-driven selection rules and statistical insights for optimized blog content creation.

**Location:** `.claude/agents/keyword-analysis-agent.md`

### Purpose:
- Processes keyword CSV files with statistical analysis
- Generates category-specific analysis files with data-driven thresholds
- Creates actionable selection rules for the Blog Content Generator Agent
- Eliminates guesswork by providing numerical criteria for keyword selection

### Invocation Methods:

**Single Category Analysis:**
```
Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/botox.csv
```

**Batch Processing:**
```
Use the keyword-analysis-agent to process CSV files in /.resources/content-guidelines/keywords/ without corresponding analysis.md files
```

### Agent Capabilities:
- **Statistical Analysis**: Volume distributions, competition breakpoints, growth trend categorization
- **Data-Driven Rules**: Generates specific numerical thresholds instead of generic guidance
- **Competition Sweet Spots**: Identifies optimal competition ranges with precise criteria
- **Growth Categorization**: Classifies keywords by momentum with specific percentage ranges
- **Output Format**: Creates `[category]-analysis.md` files with actionable selection rules

### Required Input:
- **CSV Format**: Standard keyword research export with volume, competition, and trend data
- **File Location**: `/.resources/content-guidelines/keywords/[category].csv`

### Generated Output:
- **Analysis File**: `/.resources/content-guidelines/keywords/[category]-analysis.md`
- **Content**: Statistical breakpoints, selection rules, competition criteria, trend classifications

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
- **Analysis-Driven Selection**: Leverages `[category]-analysis.md` files from Keyword Analysis Agent
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
- **Analysis Rules**: `/.resources/content-guidelines/keywords/[category]-analysis.md` (generated by Keyword Analysis Agent)
- **City Data**: `/.resources/content-guidelines/cities/[cityname].md` (for local content)
- **Content Queue**: `/.resources/content-guidelines/content-queue-template.md` (for batch processing)

## Content Prioritization Agent

Analyzes keyword CSV files and existing analysis data to create strategic content prioritization plans that balance quick wins, medium-term growth, and long-term authority building for optimal SEO progression.

**Location:** `.claude/agents/content-prioritization-agent.md`

### Purpose:
- Creates strategic content prioritization with mixed batches for optimal SEO progression
- Balances Foundation (low-hanging fruit), Growth (medium competition), and Authority (high-value) keywords
- Organizes keywords into manageable batch files for execution tracking
- Outputs organized folder structure with checkbox-based progress tracking

### Invocation Methods:

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

### Agent Capabilities:
- **Strategic Batching**: Mixed batches of 10 keywords balancing Foundation/Growth/Authority
- **Pyramid Progression**: 30% Foundation, 50% Growth, 20% Authority distribution
- **Organized Output**: Category subfolders with batch files (50 keywords per file)
- **Progress Tracking**: Markdown checkboxes for execution tracking
- **Scoring System**: Quick Win Score and Authority Score calculations

### Required Input:
- **CSV Format**: Standard keyword research export with volume, competition, and trend data
- **File Location**: `/.resources/content-guidelines/keywords/[category].csv`
- **Optional**: `/.resources/content-guidelines/keywords/[category]-analysis.md` (enhances scoring)

### Generated Output:
- **Folder Structure**: `/.resources/content-guidelines/content-todo/[category]/`
- **Batch Files**: `batch-01.md`, `batch-02.md`, etc. (50 keywords per file)
- **Universal Guide**: `README.md` in content-todo folder explaining metrics

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

## Three-Agent Workflow

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

5. **Post-Publication Enhancement**:
   ```
   Use the internal-linking-agent to add internal links:
   - Blog post file: /content/blog/[post-filename].md
   ```
   - Analyzes published blog posts and adds strategic internal links
   - Ensures accessibility compliance and SEO optimization
   - Maintains natural content flow

**Benefits:**
- **Strategic**: Smart prioritization prevents getting stuck in low-value content
- **Organized**: Clean folder structure with manageable batch files
- **Executable**: Checkbox format makes progress tracking simple and actionable
- **Scalable**: Drop new CSV → analyze → prioritize → execute in batches
- **Consistent**: Same statistical methodology applied across all categories  
- **Data-driven**: Specific numerical thresholds replace generic guidance
- **Complete Workflow**: From keyword research to published, internally-linked content

## Workflow Integration

### Blog Content Generator Integration:
1. **Blog Content Generator** creates initial post (moved to `/content/blog/` when ready)
2. **Internal Linking Agent** analyzes and enhances published posts with strategic internal links
3. **Direct enhancement** of live blog posts with SEO-optimized internal linking

### Development Workflow:
1. Use **Keyword Analysis Agent** to understand keyword opportunities
2. Use **Content Prioritization Agent** to create strategic content batches
3. Use **Blog Content Generator Agent** to create individual blog posts
4. Use **Internal Linking Agent** to enhance published posts with strategic linking