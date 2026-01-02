<?php
// admin/create_post.php
$page_title = 'Create New Post';
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

        <!-- Create Post Content -->
        <main class="p-8">

            <form action="#" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Column: Main Editor -->
                <div class="lg:col-span-2 space-y-6">
                    <div>
                        <input type="text" name="post_title" required
                            class="w-full text-3xl font-bold px-4 py-4 rounded-xl border-none focus:ring-0 bg-transparent placeholder:text-slate-300 text-slate-800 outline-none transition-all"
                            placeholder="Enter post title here...">
                        <hr class="border-slate-200 mt-2">
                    </div>

                    <div
                        class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden min-h-[500px] flex flex-col">
                        <!-- Toolbar Placeholder -->
                        <div class="bg-slate-50 border-b border-slate-100 p-2 flex gap-2 overflow-x-auto">
                            <button type="button" class="p-2 text-slate-500 hover:bg-slate-200 rounded-lg"><svg
                                    class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h7"></path>
                                </svg></button>
                            <button type="button"
                                class="p-2 text-slate-500 hover:bg-slate-200 rounded-lg font-bold">B</button>
                            <button type="button"
                                class="p-2 text-slate-500 hover:bg-slate-200 rounded-lg italic">I</button>
                            <button type="button"
                                class="p-2 text-slate-500 hover:bg-slate-200 rounded-lg underline">U</button>
                            <div class="w-px bg-slate-200 mx-1"></div>
                            <button type="button" class="p-2 text-slate-500 hover:bg-slate-200 rounded-lg"><svg
                                    class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg></button>
                        </div>
                        <textarea name="post_content"
                            class="flex-grow w-full p-6 outline-none resize-none text-slate-700 leading-relaxed"
                            placeholder="Tell your story..."></textarea>
                    </div>
                </div>

                <!-- Right Column: Settings & Publish -->
                <div class="space-y-6">

                    <!-- Publish Box -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                        <h3 class="font-bold text-slate-800 mb-4">Publish</h3>

                        <div class="space-y-4 mb-6">
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Status</label>
                                <select name="post_status"
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Author</label>
                                <input type="text" value="Admin User" readonly
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 bg-slate-50 text-sm text-slate-500">
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <button type="submit" name="publish"
                                class="w-full bg-primary text-white py-3 rounded-xl font-bold hover:bg-slate-800 transition-all shadow-lg shadow-primary/20">
                                Publish Post
                            </button>
                            <button type="submit" name="draft"
                                class="w-full bg-white border border-slate-200 text-slate-600 py-3 rounded-xl font-bold hover:bg-slate-50 transition-all">
                                Save Draft
                            </button>
                        </div>
                    </div>

                    <!-- Category & Tags -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                        <h3 class="font-bold text-slate-800 mb-4">Details</h3>

                        <div class="space-y-4">
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Category</label>
                                <select name="post_category_id"
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none">
                                    <option value="">Select Category...</option>
                                    <option value="1">Technology</option>
                                    <option value="2">Lifestyle</option>
                                    <option value="3">Design</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Tags</label>
                                <input type="text" name="post_tags"
                                    class="w-full px-3 py-2 rounded-lg border border-slate-200 text-sm focus:border-accent focus:ring-1 focus:ring-accent outline-none"
                                    placeholder="e.g. coding, web, ai">
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                        <h3 class="font-bold text-slate-800 mb-4">Featured Image</h3>
                        <div
                            class="border-2 border-dashed border-slate-200 rounded-xl p-8 text-center hover:border-accent hover:bg-accent/5 transition-all cursor-pointer relative group">
                            <input type="file" name="post_image"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                            <svg class="w-10 h-10 text-slate-300 mx-auto mb-2 group-hover:text-accent transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="text-sm text-slate-500 group-hover:text-accent font-medium">Click to
                                upload</span>
                        </div>
                    </div>

                </div>

            </form>

        </main>
    </div>

</body>

</html>