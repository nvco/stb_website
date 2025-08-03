    <!-- Performance-optimized JavaScript loading -->
    <!-- Critical JS already loaded in header -->
    <!-- Non-critical JS loaded asynchronously after page load -->
    
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Non-critical JavaScript -->
    <script src="<?php echo (isset($is_legal_page) || isset($is_blog_page) || isset($is_subdirectory_page)) ? '../' : ''; ?>includes/scripts-non-critical.js"></script>
</body>
</html> 