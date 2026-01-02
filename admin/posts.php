<?php
// admin/posts.php
$page_title = 'Manage Posts';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo $page_title; ?> | MIDNIGHT BLOG
    </title>
    <?php include '../includes/head.php'; ?>
</head>

<body class="bg-surface min-h-screen flex">

    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col">
        <!-- Top Bar -->
        <?php include 'includes/header.php'; ?>

        <!-- Posts Content -->
        <main class="p-8 space-y-8">

            <!-- Actions & Filters -->
            <div class="flex flex-col md:flex-row gap-4 justify-between items-center">
                <div class="w-full md:w-auto flex gap-4">
                    <div class="relative w-full md:w-64">
                        <input type="text" placeholder="Search posts..."
                            class="w-full pl-10 pr-4 py-2 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400">
                        <svg class="w-5 h-5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <select
                        class="px-4 py-2 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none bg-white text-slate-600">
                        <option value="">All Categories</option>
                        <option value="tech">Technology</option>
                        <option value="lifestyle">Lifestyle</option>
                    </select>
                </div>
                <a href="posts/create"
                    class="w-full md:w-auto bg-primary text-white px-6 py-2 rounded-xl font-bold hover:bg-slate-800 transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Create Post
                </a>
            </div>

            <!-- Posts Table -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4">Title</th>
                                <th class="px-6 py-4">Author</th>
                                <th class="px-6 py-4">Category</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <!-- Mock Row 1 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800">The Future of AI in Web Development</div>
                                    <div class="text-xs text-slate-500">Slug: future-of-ai</div>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                        AD</div>
                                    <span class="font-medium text-slate-700">Admin</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">Technology</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold flex w-fit items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Published
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-slate-500">
                                    Oct 12, 2023
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <button class="p-2 text-slate-400 hover:text-accent transition-colors" title="Edit">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"
                                        title="Delete">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Mock Row 2 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800">10 Tips for Better Sleep</div>
                                    <div class="text-xs text-slate-500">Slug: better-sleep-tips</div>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">
                                        JD</div>
                                    <span class="font-medium text-slate-700">John Doe</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">Lifestyle</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-bold flex w-fit items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 bg-amber-500 rounded-full"></span> Draft
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-slate-500">
                                    Oct 10, 2023
                                </td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    <button class="p-2 text-slate-400 hover:text-accent transition-colors" title="Edit">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"
                                        title="Delete">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-sm text-slate-500">Showing 1 to 2 of 2 results</span>
                    <div class="flex gap-2">
                        <button
                            class="px-3 py-1 rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50 hover:text-slate-700 disabled:opacity-50"
                            disabled>Previous</button>
                        <button
                            class="px-3 py-1 rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50 hover:text-slate-700 disabled:opacity-50"
                            disabled>Next</button>
                    </div>
                </div>
            </div>

        </main>
    </div>

</body>

</html>