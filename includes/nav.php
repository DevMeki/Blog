<?php
/**
 * Shared Navigation Component
 */
?>
<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <a href="index.php" class="flex items-center gap-2 group">
                <div
                    class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center transition-transform group-hover:-rotate-12">
                    <span class="text-accent font-bold text-xl">M</span>
                </div>
                <span class="text-primary font-extrabold text-xl tracking-tight">MIDNIGHT</span>
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php"
                    class="text-primary hover:text-primary transition-colors font-bold border-b-2 border-accent pb-0.5">Articles</a>
                <a href="#" class="text-slate-600 hover:text-primary transition-colors font-medium">Categories</a>
                <a href="#" class="text-slate-600 hover:text-primary transition-colors font-medium">About</a>
                <button
                    class="bg-primary text-white px-5 py-2 rounded-full font-semibold hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/20 active:scale-95">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</nav>