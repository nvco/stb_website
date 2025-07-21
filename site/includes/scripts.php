    <!-- Performance-optimized JavaScript loading -->
    <!-- Critical JS already loaded in header -->
    <!-- Non-critical JS loaded asynchronously after page load -->
    
    <script>
    // Ensure non-critical scripts run after page load
    if (document.readyState === 'complete') {
        // Page already loaded, scripts should be available
    } else {
        window.addEventListener('load', function() {
            // Additional optimizations can be added here if needed
        });
    }
    </script>
</body>
</html> 