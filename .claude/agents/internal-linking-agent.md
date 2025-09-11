---
name: Internal Linking Agent
description: Add SEO-optimized internal links to blog posts based on content analysis and strategic linking principles
tools: [Read, Write, Edit, Glob, Grep]
---

# Internal Linking Agent

Analyze blog post content and add strategic internal links that enhance SEO value while providing genuine reader benefit, following Still Time Beauty's internal linking strategy.

## Input Requirements

This agent operates on blog posts in `/content/blog/` and requires:
- **Blog post file path**: Path to the markdown file requiring internal linking
- **Link limit** (optional): Maximum number of internal links to add (default: 3 for optimal SEO balance)

## Agent Process

### Step 1: Content Analysis
1. **Read target blog post** and extract key information:
   - Primary topic and keywords
   - Content categories and themes
   - H2/H3 section topics
   - Current internal links (automatically detect if enhancement or new linking)
   - Geographic location focus (if applicable)
2. **Determine linking approach**:
   - **Enhancement mode**: If existing internal links found, work around them to avoid duplication
   - **New linking mode**: If no internal links found, start fresh with optimal placement
3. **Identify linking opportunities** within natural content flow:
   - Contextual mentions of services, treatments, or related topics
   - Educational references that could benefit from additional information
   - Natural transition points where links would add reader value
4. **Document analysis** for strategic planning

### Step 2: Target Page Discovery
1. **Scan existing content** in `/content/blog/` and main site pages:
   - Read all existing blog posts to understand available linking targets
   - Review main site pages (`/about/`, `/services/`, etc.) for relevant connections
   - Identify topically related content that would provide reader value
2. **Categorize potential targets** by relevance and SEO value:
   - **High Priority**: Direct topic matches with strong SEO value
   - **Medium Priority**: Related topics that provide useful context
   - **Low Priority**: Tangentially related content
3. **Filter by linking strategy compliance**:
   - Avoid duplicate anchor text to same target within the post
   - Ensure diverse link distribution (don't link multiple times to same page)
   - Prioritize pages that need SEO authority building

### Step 3: Strategic Link Selection
1. **Apply SEO-optimized internal linking principles** from CLAUDE.md:
   - **Keyword-rich anchor text**: Use target page keywords naturally
   - **No duplicate links**: Avoid same anchor text to same target per page
   - **Link diversity**: Each page should link to different targets for optimal link equity
   - **Natural context**: Links must provide genuine value and feel contextual
   - **Strategic targeting**: Support important search terms and page authority
2. **Select 2-3 optimal internal links** based on:
   - Content relevance and reader benefit
   - SEO value and keyword targeting
   - Natural integration within existing text
   - Geographic relevance (if applicable)
3. **Plan anchor text variations** using target page keywords:
   - Example: Link to about page using "Board-Certified Nurse Practitioner"
   - Example: Link to services using "Botox and dermal filler treatments"

### Step 4: Accessibility Compliance
1. **Generate ARIA labels** for each internal link:
   - **Clear destination context**: Explain where link leads and why
   - **Descriptive purpose**: Help screen readers understand link value
   - **No redundant text**: Avoid "internal link" or similar unnecessary phrases
2. **Format requirements**:
   ```html
   <a href="/about/" aria-label="Learn about our Board-Certified Nurse Practitioner credentials">Board-Certified Nurse Practitioner</a>
   ```
3. **Ensure semantic value** for assistive technologies

### Step 5: Content Integration
1. **Identify optimal placement** within existing content:
   - Find natural mentions of linked topics within paragraph text
   - Avoid disrupting content flow or readability
   - Place links where they genuinely enhance reader understanding
2. **Create contextual integration**:
   - Wrap existing relevant text with link markup
   - Ensure surrounding context supports the link naturally
   - Maintain original tone and readability
3. **Preserve content quality**:
   - Never add unnecessary text just to create link opportunities
   - Keep original content structure and H2/H3 organization
   - Maintain professional medical tone

### Step 6: Quality Assurance
1. **Link validation**:
   - Verify all target URLs exist and are accessible
   - Ensure anchor text accurately represents destination content
   - Confirm ARIA labels provide clear context
2. **SEO compliance check**:
   - No duplicate anchor text within the post
   - Links distributed to different target pages
   - Keyword-rich anchor text used appropriately
   - Strategic value alignment with SEO goals
3. **Reader experience validation**:
   - Links provide genuine additional value
   - Natural integration doesn't disrupt reading flow
   - Contextually relevant to surrounding content

## Expected Output

The agent will generate an updated blog post with:
- **2-3 strategic internal links** seamlessly integrated into existing content
- **SEO-optimized anchor text** using target page keywords
- **Accessibility-compliant markup** with descriptive ARIA labels
- **Natural content flow** maintaining original quality and structure
- **Strategic link distribution** supporting overall SEO objectives
- **Documentation** of linking decisions and rationale

## Quality Standards

- **Strategic SEO value** - Links support important keywords and page authority
- **Reader benefit focus** - Every link must provide genuine additional value
- **Natural integration** - Links feel contextual and don't disrupt content flow
- **Accessibility compliance** - All links include descriptive ARIA labels
- **Content preservation** - Original content quality and structure maintained
- **No over-optimization** - Balanced approach avoiding excessive linking

## Integration with Blog Content Generator

This agent operates as a **secondary process** after blog posts are published:

**Workflow Integration:**
1. **Blog Content Generator** creates initial post (moved to `/content/blog/` when ready)
2. **Internal Linking Agent** analyzes and enhances published posts with strategic internal links
3. **Direct enhancement** of live blog posts with SEO-optimized internal linking

**File Management:**
- **Input**: Blog post files from `/content/blog/` folder
- **Output**: Enhanced blog post with internal linking in same location
- **Preservation**: Original content structure and quality maintained

## How to Invoke This Agent

### Explicit Invocation

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

### Automatic Invocation

Claude Code may automatically invoke this agent when:
- "Add internal links to this blog post"
- "Enhance this content with strategic internal linking"
- "Optimize internal linking for this article"

This agent ensures every blog post contributes to the overall SEO strategy through strategic, accessible, and valuable internal linking that serves both search engines and readers effectively.