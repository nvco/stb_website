<?php
/**
 * Blog Functions
 * Reusable functions for blog listing and article management
 */

/**
 * Get all blog articles from the blog directory
 * 
 * @return array Array of article data with title, description, date, slug, and url
 */
function getBlogArticles() {
    $articles = [];
    $blog_dir = __DIR__ . '/../blog';
    
    if (is_dir($blog_dir)) {
        $files = glob($blog_dir . '/*.php');
        
        foreach ($files as $file) {
            $content = file_get_contents($file);
            if ($content === false) continue;
            
            // Extract title from H1 tag
            if (preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $content, $title_matches)) {
                $title = strip_tags($title_matches[1]);
            } else {
                $title = 'Untitled Article';
            }
            
            // Extract meta description
            if (preg_match('/\$page_description\s*=\s*[\'"]([^\'"]*)[\'"]/', $content, $desc_matches)) {
                $description = $desc_matches[1];
            } else {
                $description = 'Read our latest insights on medical aesthetics and beauty treatments.';
            }
            
            // Extract article dates
            if (preg_match('/\$article_date_published\s*=\s*[\'"]([^\'"]*)[\'"]/', $content, $date_matches)) {
                $published_date = $date_matches[1];
                $formatted_date = date('F j, Y', strtotime($published_date));
                // Store raw date for sorting
                $sort_date = $published_date;
            } else {
                $formatted_date = '';
                $sort_date = '1970-01-01'; // Default old date for sorting
            }
            
            // Get slug from filename
            $filename = basename($file, '.php');
            $slug = $filename;
            
            $articles[] = [
                'title' => $title,
                'description' => $description,
                'date' => $formatted_date,
                'sort_date' => $sort_date,
                'slug' => $slug,
                'url' => '/blog/' . $slug
            ];
        }
    }
    
    return $articles;
}

/**
 * Sort blog articles by date (newest first)
 * 
 * @param array $articles Array of articles from getBlogArticles()
 * @return array Sorted articles array
 */
function sortBlogArticlesByDate($articles) {
    usort($articles, function($a, $b) {
        return strcmp($b['sort_date'], $a['sort_date']);
    });
    
    return $articles;
}

/**
 * Get sorted blog articles (convenience function)
 * 
 * @return array Sorted array of blog articles
 */
function getSortedBlogArticles() {
    $articles = getBlogArticles();
    return sortBlogArticlesByDate($articles);
} 