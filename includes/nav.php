<?php
/**
 * Shared Navigation Component
 */
?>
<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo Section -->
            <a href="index" class="flex items-center gap-2 group">
                <div
                    class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center transition-transform group-hover:-rotate-12">
                    <span class="text-accent font-bold text-xl">M</span>
                </div>
                <span class="text-primary font-extrabold text-xl tracking-tight">MIDNIGHT</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <a href="index"
                    class="text-slate-600 hover:text-primary transition-colors font-medium <?php echo ($current_page == 'index.php') ? 'text-primary font-bold border-b-2 border-accent pb-0.5' : ''; ?>">Articles</a>
                <a href="categories"
                    class="text-slate-600 hover:text-primary transition-colors font-medium <?php echo ($current_page == 'categories.php') ? 'text-primary font-bold border-b-2 border-accent pb-0.5' : ''; ?>">Categories</a>
                <a href="about"
                    class="text-slate-600 hover:text-primary transition-colors font-medium <?php echo ($current_page == 'about.php') ? 'text-primary font-bold border-b-2 border-accent pb-0.5' : ''; ?>">About</a>
                <a href="login" class="text-slate-600 hover:text-primary transition-colors font-medium">Login</a>
                <a href="signup"
                    class="bg-primary text-white px-5 py-2 rounded-full font-semibold hover:bg-slate-800 transition-all shadow-lg shadow-slate-900/20 active:scale-95">
                    Sign Up
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-slate-600 hover:text-primary p-2 focus:outline-none transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white/95 backdrop-blur-lg animate-in slide-in-from-top duration-300">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="index" class="block px-4 py-3 text-base font-semibold text-slate-600 hover:bg-slate-50 hover:text-primary rounded-xl transition-all">Articles</a>
            <a href="categories" class="block px-4 py-3 text-base font-semibold text-slate-600 hover:bg-slate-50 hover:text-primary rounded-xl transition-all">Categories</a>
            <a href="about" class="block px-4 py-3 text-base font-semibold text-slate-600 hover:bg-slate-50 hover:text-primary rounded-xl transition-all">About</a>
            <div class="pt-4 mt-4 border-t border-slate-100 flex flex-col gap-3">
                <a href="login" class="block px-4 py-3 text-center font-bold text-slate-600 hover:text-primary transition-colors">Login</a>
                <a href="signup" class="block px-4 py-4 text-center font-bold bg-primary text-white rounded-xl shadow-lg shadow-primary/20 hover:bg-slate-800 transition-all">Sign Up</a>
            </div>
        </div>
    </div>
</nav>