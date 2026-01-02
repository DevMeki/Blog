<?php
/**
 * Shared Admin Top Header Component
 */
?>
<header class="h-16 bg-white border-b border-slate-200 sticky top-0 z-30 flex items-center justify-between px-8">
    <div class="flex items-center gap-4 lg:hidden">
        <button id="sidebar-toggle" class="p-2 text-slate-600 hover:text-primary transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <span class="font-bold text-primary">ADMIN</span>
    </div>

    <h2 class="text-xl font-bold text-slate-800 hidden md:block">
        <?php echo $page_title ?? 'Dashboard Overview'; ?>
    </h2>

    <div class="flex items-center gap-4">
        <button class="p-2 text-slate-400 hover:text-primary transition-colors relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                </path>
            </svg>
            <span class="absolute top-2 right-2 w-2 h-2 bg-accent rounded-full border-2 border-white"></span>
        </button>
        <div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden border-2 border-slate-100 cursor-pointer">
            <img src="https://ui-avatars.com/api/?name=Admin&background=0F172A&color=F59E0B" alt="Admin">
        </div>
    </div>
</header>