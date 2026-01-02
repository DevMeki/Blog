<?php
/**
 * Shared Head Component
 * Includes meta tags, Tailwind CSS v4 CDN, and global theme configuration.
 */
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style type="text/tailwindcss">
    @theme {
        --color-primary: #0F172A;
        --color-accent: #F59E0B;
        --color-surface: #F8FAFC;
    }
</style>
<script>
<?php 
// Inline the main.js file to avoid path resolution issues across different directories
include __DIR__ . '/main.js'; 
?>
</script>