# Claude Code Agents

This file contains detailed documentation for specialized Claude Code agents used in the Still Time Beauty website project.

## Overview

The project uses four specialized agents for SEO-optimized content creation and enhancement:

1. **Keyword Strategy Agent** - Complete analysis and strategic content planning with batching
2. **Blog Content Generator Agent** - SEO-optimized blog post creation
3. **Internal Linking Agent** - Post-publication internal link enhancement
4. **Visual Content Generator Agent** - Platform-optimized social media content for videos and images

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

## Visual Content Generator Agent

Generates platform-specific social media content optimized for engagement, discoverability, and conversion for Still Time Beauty visual content (videos and images) across YouTube, TikTok, Instagram, and Facebook.

**Location:** `.claude/agents/visual-content-generator.md`

### Purpose:
- Creates optimized social media content for both videos and images
- Generates platform-specific titles, descriptions, hashtags, and calls-to-action
- Integrates blog article linking for YouTube content to drive website traffic
- Ensures medical aesthetics compliance across all platforms
- Supports local Boulder market optimization with geographic targeting

### Invocation Methods:

**Video Content:**
```
Use the visual-content-generator agent to create promotional content:
- Content description: "botox injection process demonstration"
- Content type: "video"
- Content category: "educational"
- Geographic location: "Boulder"
- Call-to-action goal: "education and trust building"
```

**Image Content:**
```
Use the visual-content-generator agent to create promotional content:
- Content description: "lip filler results showing natural enhancement"
- Content type: "image"
- Content category: "before/after"
- Geographic location: "Superior"
- Call-to-action goal: "book consultation"
```

### Agent Capabilities:
- **Dual Content Support**: Handles both videos and images with content-specific optimizations
- **Platform Optimization**: Tailored content for YouTube, TikTok, Instagram, and Facebook
- **Smart Slug Generation**: Converts descriptions to clean, SEO-friendly filenames
- **Blog Integration**: Searches existing blog posts for relevant linking opportunities (YouTube only)
- **Local SEO**: Geographic targeting for Boulder area cities and communities
- **Compliance Focus**: Medical aesthetics content guidelines and platform policies
- **Strategic Hashtags**: Platform-specific hashtag strategies with local optimization

### Content Categories:
- **promotional**: Brand awareness and service promotion
- **educational**: Treatment information and procedure explanations
- **behind-the-scenes**: Practice culture and staff expertise
- **testimonial**: Patient success stories and experiences
- **treatment demo**: Live procedure demonstrations and consultations
- **before/after**: Results showcasing with compliance considerations
- **facility showcase**: Office environment and equipment displays

### Platform-Specific Features:

**YouTube:**
- SEO-optimized titles and descriptions
- Related blog article linking with contextual descriptions
- Strategic keyword placement for YouTube search
- End screen and annotation suggestions

**TikTok:**
- Trend-aware captions with engagement hooks
- Balanced hashtag mix (trending + niche + local)
- Community interaction strategies

**Instagram:**
- Maximum hashtag utilization (30 tags)
- Story-friendly variations for multiple formats
- Location and business tagging strategies
- Content format optimization (Reels vs. Posts vs. Stories)

**Facebook:**
- Content shared from Instagram optimizations
- Professional networking and community engagement focus

### Required Input:
- **Content description**: Brief description of visual content
- **Content type**: "video" or "image"
- **Content category**: Purpose and style classification
- **Geographic location** (optional): City targeting for local SEO
- **Call-to-action goal**: Primary business objective
- **Target audience** (optional): Demographic focus

### Generated Output:
- **Videos**: `/.resources/social-media/videos/YYYYMMDD_[generated-slug]_video.md`
- **Images**: `/.resources/social-media/images/YYYYMMDD_[generated-slug]_image.md`
- **Platform-specific content**: Optimized titles, descriptions, hashtags for each platform
- **Call-to-action variations**: Multiple CTA options for testing
- **Blog linking**: Relevant article links for YouTube content when available

### Slug Generation Examples:
- "location tour and meet the owner" → `location-tour-meet-owner`
- "botox injection process demonstration" → `botox-injection-process-demo`
- "lip filler results showing natural enhancement" → `lip-filler-results-natural-enhancement`

## Simplified Two-Step Workflow

**Complete Content Creation Process:**

1. **Data Preparation**: Add keyword CSV file to `/.resources/content-guidelines/keywords/[category].csv`

2. **Statistical Analysis**:
   ```
   Use the keyword-analysis-agent to analyze /.resources/content-guidelines/keywords/[category].csv
   ```
   - Performs comprehensive statistical analysis of keyword CSV data
   - Generates `/.resources/content-guidelines/keywords/analysis/[category]-analysis.md` with data-driven thresholds
   - Creates selection rules and breakpoints for keyword categorization
   - Identifies competition sweet spots and growth trend classifications

3. **Strategic Prioritization**:
   ```
   Use the keyword-strategy-agent to prioritize /.resources/content-guidelines/keywords/[category].csv
   ```
   - Reads existing analysis file for statistical thresholds and criteria
   - Performs strategic prioritization using analysis results  
   - Creates organized batch files with strategic keyword ordering
   - Generates `/.resources/content-guidelines/content-todo/[category]/batch-01.md` for content planning
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
   - Creates individual blog posts using data-driven keyword selection
   - Reads both CSV data and analysis rules for optimal keyword selection
   - Uses analysis breakpoints and statistical thresholds for keyword categorization

5. **Post-Publication Enhancement**:
   ```
   Use the internal-linking-agent to add internal links:
   - Blog post file: /content/blog/[post-filename].md
   ```
   - Analyzes published blog posts and adds strategic internal links
   - Ensures accessibility compliance and SEO optimization
   - Maintains natural content flow

6. **Social Media Content Creation**:
   ```
   Use the visual-content-generator agent to create promotional content:
   - Content description: "Your content description here"
   - Content type: "video" or "image"
   - Content category: "promotional" or "educational" etc.
   - Geographic location: "Boulder"
   - Call-to-action goal: "book consultation"
   ```
   - Creates platform-optimized social media content for videos and images
   - Generates YouTube descriptions with blog article linking for SEO
   - Provides hashtag strategies for maximum discoverability
   - Ensures medical aesthetics compliance across platforms

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
4. Use **Visual Content Generator Agent** to create social media content for promotional videos and images