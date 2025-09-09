# Blog Content Queue Template

Use this template for batch content generation with the Blog Content Generator agent.

## Instructions
1. Copy this template to create your content queue (e.g., `content-queue-january-2025.md`)
2. Fill in the parameters for each post you want to generate
3. Invoke the agent with batch mode to process all posts
4. Agent will generate all posts and mark them as completed

## Template Format

### Post 1
- **Primary topic/keyword**: "Your keyword or predefined title here"
- **Category**: "Botox" | "Dermal Fillers" | "Dysport" | "Treatment Comparisons" | etc.
- **Keyword Sources**: "Botox" | "Dermal Fillers" | "Dysport" | "Botox, Dysport" (for comparison posts) | etc.
- **Content length**: "short form" | "long form"
- **H1 title**: "Custom H1 title" (only if you want to override generated title)

### Post 2
- **Primary topic/keyword**: "Another keyword or title"
- **Category**: "Treatment Comparisons"
- **Keyword Sources**: "Botox, Dysport" (for comparison posts)
- **Content length**: "short form" | "long form"  
- **Geographic location**: "City name" (only if targeting specific location)

### Post 3
- **Primary topic/keyword**: "Third topic"
- **Category**: "Category name"
- **Keyword Sources**: "Botox, Dysport" (for comparison posts)
- **Content length**: "short form" | "long form"
- **H1 title**: "Custom H1 title" (only if you want to override generated title)

---

## Example Content Queue

### Post 1
- **Primary topic/keyword**: "Botox for forehead wrinkles"
- **Category**: "Botox"
- **Keyword Sources**: "Botox"
- **Content length**: "long form"
- **Geographic location**: "Boulder"

### Post 2
- **Primary topic/keyword**: "Benefits of dermal fillers for facial volume"
- **Category**: "Dermal Fillers"
- **Keyword Sources**: "Dermal Fillers"
- **Content length**: "short form"
- **Geographic location**: "Superior"
- **H1 title**: "Restore Facial Volume with Professional Dermal Fillers"

### Post 3
- **Primary topic/keyword**: "Botox vs Dysport comparison"
- **Category**: "Treatment Comparisons"
- **Keyword Sources**: "Botox, Dysport"
- **Content length**: "long form"

---

## Usage Notes

- **Required fields**: Primary topic/keyword, Category, Keyword Sources, Content length
- **Optional fields**: Geographic location, H1 title
- **Categories**: Must match existing Hugo categories (Botox, Dermal Fillers, Treatment Comparisons, etc.)
- **Keyword Sources**: Which analysis files to use for keyword research ("Botox", "Dermal Fillers", "Botox, Dysport", etc.)
- **Geographic locations**: Use existing city data files or "generic"
- **Content length**: "short form" (1,000-1,500 words) or "long form" (2,000-3,000+ words)
- **Batch processing**: Agent will process all posts in sequence
- **File naming**: Agent automatically generates based on title/keyword

## Tips for Content Planning

1. **Keyword research first**: Use your keyword CSV to identify high-value topics
2. **Geographic distribution**: Mix local and generic content for broader reach
3. **Content length variety**: Balance comprehensive guides with focused posts
4. **Category balance**: Ensure good distribution across treatment types
5. **Seasonal planning**: Consider timing for treatment-related seasonal trends