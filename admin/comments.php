<?php
// admin/comments.php
$page_title = 'Manage Comments';
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

        <!-- Comments Content -->
        <main class="p-8 space-y-8">

            <!-- Filters & Actions -->
            <div class="flex flex-col md:flex-row gap-4 justify-between items-center">
                <div class="w-full md:w-auto">
                    <div class="relative w-full md:w-80">
                        <input type="text" placeholder="Search comments..."
                            class="w-full pl-10 pr-4 py-2 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400">
                        <svg class="w-5 h-5 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Comments Table -->
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                            <tr>
                                <th class="px-6 py-4">Author</th>
                                <th class="px-6 py-4 w-1/3">Comment</th>
                                <th class="px-6 py-4">In Response To</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <!-- Mock Row 1 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800">Sarah Jenkins</div>
                                    <div class="text-xs text-slate-500">sarah.j@example.com</div>
                                </td>
                                <td class="px-6 py-4 text-slate-600">
                                    <p class="line-clamp-2">This is such a great article! I really learned a lot about
                                        Tailwind CSS. Can you cover animations in the next one?</p>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="text-primary font-semibold hover:text-accent transition-colors">Mastering
                                        Tailwind CSS v4</a>
                                </td>
                                <td class="px-6 py-4 text-slate-500">
                                    Oct 12, 2023
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-bold hover:bg-red-100 transition-colors flex items-center gap-1 ml-auto">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <!-- Mock Row 2 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-slate-800">Mike Ross</div>
                                    <div class="text-xs text-slate-500">mike.ross@example.com</div>
                                </td>
                                <td class="px-6 py-4 text-slate-600">
                                    <p class="line-clamp-2">Interesting perspective. I think AI will definitely change
                                        how we code, but human oversight is still crucial.</p>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#"
                                        class="text-primary font-semibold hover:text-accent transition-colors">The
                                        Future of AI in Web</a>
                                </td>
                                <td class="px-6 py-4 text-slate-500">
                                    Oct 11, 2023
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="px-3 py-1.5 bg-red-50 text-red-600 rounded-lg text-xs font-bold hover:bg-red-100 transition-colors flex items-center gap-1 ml-auto">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-sm text-slate-500">Showing 1 to 2 of 2 entries</span>
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