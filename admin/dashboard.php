<?php
// admin/dashboard.php
$page_title = 'Dashboard Overview';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $page_title; ?> | MIDNIGHT BLOG</title>
    <?php
    include '../includes/head.php';
    ?>
</head>

<body class="bg-surface min-h-screen flex">

    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-grow flex flex-col">
        <!-- Top Bar -->
        <?php include 'includes/header.php'; ?>

        <!-- Dashboard Content -->
        <main class="p-8 space-y-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Stat Card 1 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <span class="text-green-500 font-bold text-sm">+12%</span>
                    </div>
                    <p class="text-slate-500 font-medium mb-1">Total Posts</p>
                    <h3 class="text-3xl font-extrabold text-primary">124</h3>
                </div>

                <!-- Stat Card 2 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-green-500 font-bold text-sm">+8%</span>
                    </div>
                    <p class="text-slate-500 font-medium mb-1">Total Views</p>
                    <h3 class="text-3xl font-extrabold text-primary">45.2k</h3>
                </div>

                <!-- Stat Card 3 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-green-500 font-bold text-sm">+5%</span>
                    </div>
                    <p class="text-slate-500 font-medium mb-1">Total Users</p>
                    <h3 class="text-3xl font-extrabold text-primary">850</h3>
                </div>

                <!-- Stat Card 4 -->
                <div
                    class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                        </div>
                        <span class="text-red-500 font-bold text-sm">-2%</span>
                    </div>
                    <p class="text-slate-500 font-medium mb-1">Comments</p>
                    <h3 class="text-3xl font-extrabold text-primary">2,410</h3>
                </div>
            </div>

            <!-- Recent Activity & Featured -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Posts Table -->
                <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                        <h3 class="font-bold text-lg text-primary">Recent Posts</h3>
                        <a href="posts" class="text-accent text-sm font-bold hover:underline">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider">
                                <tr>
                                    <th class="px-6 py-4">Title</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-sm">
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4 font-semibold text-slate-800">The Future of AI in Web</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Published</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 12, 2023</td>
                                    <td class="px-6 py-4 flex gap-2">
                                        <button class="p-2 text-slate-400 hover:text-accent transition-colors"><svg
                                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg></button>
                                        <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"><svg
                                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4 font-semibold text-slate-800">Mastering Tailwind CSS v4</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-bold">Draft</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-500">Oct 10, 2023</td>
                                    <td class="px-6 py-4 flex gap-2">
                                        <button class="p-2 text-slate-400 hover:text-accent transition-colors"><svg
                                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg></button>
                                        <button class="p-2 text-slate-400 hover:text-red-500 transition-colors"><svg
                                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                </path>
                                            </svg></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Latest Comments / Activity -->
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col">
                    <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                        <h3 class="font-bold text-lg text-primary">Live Activity</h3>
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    </div>
                    <div class="p-6 flex-grow space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary font-bold">
                                JD</div>
                            <div>
                                <p class="text-sm font-bold text-slate-800">John Doe <span
                                        class="text-slate-400 font-normal">commented on</span></p>
                                <p class="text-sm text-slate-600 mb-1">"Excellent writeup on AI!"</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase">2 mins ago</span>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 flex-shrink-0 flex items-center justify-center text-primary font-bold">
                                AS</div>
                            <div>
                                <p class="text-sm font-bold text-slate-800">Alice Smith <span
                                        class="text-slate-400 font-normal">joined</span></p>
                                <p class="text-sm text-slate-600 mb-1">New user registered.</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase">15 mins ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-slate-50 border-t border-slate-100 text-center">
                        <button class="text-sm font-bold text-slate-600 hover:text-primary transition-colors">See
                            notification center</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>