<?php
/**
 * Shared Admin Sidebar Component
 */
?>
<aside id="admin-sidebar"
    class="w-64 bg-primary text-slate-300 flex-shrink-0 sticky top-0 h-screen hidden lg:flex flex-col transition-all z-40">
    <div class="p-6 border-b border-slate-800 flex items-center gap-3">
        <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center">
            <span class="text-primary font-bold">M</span>
        </div>
        <span class="text-white font-extrabold tracking-tighter text-xl">ADMIN</span>
    </div>

    <?php
    $current_page = basename($_SERVER['PHP_SELF'], ".php");
    ?>
    <nav class="flex-grow p-4 space-y-2">
        <a href="dashboard"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $current_page == 'dashboard' ? 'bg-slate-800 text-white font-semibold' : 'hover:bg-slate-800 hover:text-white'; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="posts"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $current_page == 'posts' ? 'bg-slate-800 text-white font-semibold' : 'hover:bg-slate-800 hover:text-white'; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v4a2 2 0 002 2h4"></path>
            </svg>
            <span>Posts</span>
        </a>
        <a href="categories"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $current_page == 'categories' ? 'bg-slate-800 text-white font-semibold' : 'hover:bg-slate-800 hover:text-white'; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 7h.01M7 11h.01M7 15h.01M13 7h.01M13 11h.01M13 15h.01M17 7h.01M17 11h.01M17 15h.01"></path>
            </svg>
            <span>Categories</span>
        </a>
        <a href="comments"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $current_page == 'comments' ? 'bg-slate-800 text-white font-semibold' : 'hover:bg-slate-800 hover:text-white'; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                </path>
            </svg>
            <span>Comments</span>
        </a>
        <a href="users"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all <?php echo $current_page == 'users' ? 'bg-slate-800 text-white font-semibold' : 'hover:bg-slate-800 hover:text-white'; ?>">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                </path>
            </svg>
            <span>Users</span>
        </a>

        <div class="pt-4 mt-2 border-t border-slate-700/50">
            <a href="create_post"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all font-bold <?php echo $current_page == 'create_post' ? 'bg-accent text-white' : 'bg-accent/10 text-accent hover:bg-accent hover:text-white'; ?>">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Create Post</span>
            </a>
        </div>
    </nav>

    <div class="p-4 border-t border-slate-800 mt-auto">
        <a href="../logout"
            class="flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-400/10 rounded-xl transition-all">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                </path>
            </svg>
            <span>Log Out</span>
        </a>
    </div>
</aside>