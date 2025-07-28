# EXECUTE: Convert all markdown files from content-temp folder to PHP blog posts following existing site structure.

Instructions:
1. Find all .md files in the ./content-temp directory
2. For each markdown file:
   - Read the file content
   - Parse frontmatter (handle both YAML between --- markers and current **Meta Description:** / **URL Slug:** format)
   - Convert markdown content to HTML while preserving exact original copy
   - Remove bold formatting around keywords (convert **keyword** to just keyword)
   - Remove "Introduction" headings - let content flow naturally
   - Replace "Conclusion" headings with alternatives like "Final Thoughts", "Key Takeaways", or remove entirely
   - Extract slug for naming the PHP file
3. Create new PHP files in ./site/blog directory:
   - Follow existing blog post structure (if any exist) or match about.php/services.php patterns
   - Use relative paths for includes (../config.php, ../includes/) since blog posts are in subdirectory
   - Set page variables: $current_page = 'blog', appropriate titles, descriptions, keywords, structured data
   - Set article date variables: $article_date_published and $article_date_modified to today's date (YYYY-MM-DD format)
   - Update datePublished and dateModified in structured data to match today's date
   - Include hero section with title and date (using includes/article-date.php), article content with prose styling, and CTA section (use includes/cta-section.php)
   - Maintain semantic HTML5 structure and existing CSS classes
   - Add BlogPosting JSON-LD structured data
4. Name files based on slug from frontmatter 
5. New articles will automatically appear on the blog listing page at /blog
6. After processing, show summary and ask about archiving/deleting original markdown files

Key Requirements:
- Process ALL markdown files in content-temp, not just one
- Preserve all original content exactly - do not modify text/copy
- Convert markdown syntax to proper HTML
- Follow established site architecture and styling
- URL structure: /blog/[slug] maps to ./site/blog/[slug].php (handled by existing .htaccess)
- Use Tailwind utility classes for article content styling (e.g., space-y-6 text-primary-700 with [&>h2] and [&>p] child selectors)
- Generate appropriate keywords combining article topics with existing site keywords
- Include comprehensive CTA section using includes/cta-section.php include
- Use includes/article-date.php for consistent date display across all blog posts
- Blog listing functionality is handled by includes/blog-functions.php (getBlogArticles, sorting, etc.)
- Set all dates (structured data and page variables) to today's date in YYYY-MM-DD format for new articles
