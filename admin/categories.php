<?php
// admin/categories.php
$page_title = 'Manage Categories';
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

        <!-- Categories Content -->
        <main class="p-8 space-y-8">

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

                <!-- Left Column: Add Category Form -->
                <div class="xl:col-span-1">
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 sticky top-24">
                        <h3 class="text-xl font-bold text-primary mb-1">Add New Category</h3>
                        <p class="text-slate-500 text-sm mb-6">Create a new section for your posts.</p>

                        <form action="#" method="POST" class="space-y-5">
                            <div>
                                <label for="cat_title"
                                    class="block text-sm font-semibold text-slate-700 mb-2">Title</label>
                                <input type="text" id="cat_title" name="cat_title" required
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                                    placeholder="e.g. Technology">
                            </div>

                            <div>
                                <label for="cat_slug"
                                    class="block text-sm font-semibold text-slate-700 mb-2">Slug</label>
                                <input type="text" id="cat_slug" name="cat_slug"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-500 outline-none cursor-not-allowed"
                                    placeholder="technology" readonly>
                                <p class="text-xs text-slate-400 mt-1">Slug is auto-generated from title.</p>
                            </div>

                            <div>
                                <label for="cat_desc"
                                    class="block text-sm font-semibold text-slate-700 mb-2">Description</label>
                                <textarea id="cat_desc" name="cat_desc" rows="4"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                                    placeholder="Brief description of this category..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:bg-slate-800 transition-all shadow-lg shadow-primary/20 active:scale-[0.98]">
                                Add Category
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right Column: Categories List -->
                <div class="xl:col-span-2">
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                            <h3 class="font-bold text-lg text-primary">Existing Categories</h3>
                            <div class="text-sm text-slate-500">Total: <span class="font-bold text-slate-800">4</span>
                            </div>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                                    <tr>
                                        <th class="px-6 py-4">Name</th>
                                        <th class="px-6 py-4">Description</th>
                                        <th class="px-6 py-4">Slug</th>
                                        <th class="px-6 py-4 text-center">Posts</th>
                                        <th class="px-6 py-4 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm">
                                    <!-- Mock Row 1 -->
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-slate-800">Technology</td>
                                        <td class="px-6 py-4 text-slate-500 max-w-xs truncate">Latest news and trends
                                            from the tech world.</td>
                                        <td class="px-6 py-4 text-slate-500 font-mono text-xs">technology</td>
                                        <td class="px-6 py-4 text-center">
                                            <span
                                                class="px-2 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">12</span>
                                        </td>
                                        <td class="px-6 py-4 text-right space-x-2">
                                            <button class="p-2 text-slate-400 hover:text-accent transition-colors"
                                                title="Edit">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"
                                                title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Mock Row 2 -->
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-slate-800">Lifestyle</td>
                                        <td class="px-6 py-4 text-slate-500 max-w-xs truncate">Tips for better living
                                            and health.</td>
                                        <td class="px-6 py-4 text-slate-500 font-mono text-xs">lifestyle</td>
                                        <td class="px-6 py-4 text-center">
                                            <span
                                                class="px-2 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">8</span>
                                        </td>
                                        <td class="px-6 py-4 text-right space-x-2">
                                            <button class="p-2 text-slate-400 hover:text-accent transition-colors"
                                                title="Edit">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"
                                                title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Mock Row 3 -->
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 font-bold text-slate-800">Design</td>
                                        <td class="px-6 py-4 text-slate-500 max-w-xs truncate">UI/UX inspiration and
                                            tutorials.</td>
                                        <td class="px-6 py-4 text-slate-500 font-mono text-xs">design</td>
                                        <td class="px-6 py-4 text-center">
                                            <span
                                                class="px-2 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">15</span>
                                        </td>
                                        <td class="px-6 py-4 text-right space-x-2">
                                            <button class="p-2 text-slate-400 hover:text-accent transition-colors"
                                                title="Edit">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"
                                                title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>

</body>

</html>