<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Midnight Slate | Modern Tech Blog</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-surface text-slate-700 font-sans selection:bg-accent selection:text-white">

    <?php include 'includes/nav.php'; ?>

    <!-- Articles Header -->
    <section class="py-16 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-5xl font-extrabold text-primary mb-4">All Articles</h1>
            <p class="text-lg text-slate-500 max-w-2xl mb-10">Explore our deep dives into modern web architecture,
                design systems, and engineering excellence.</p>

            <!-- Search & Filter Bar -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="relative flex-1">
                    <input type="text" placeholder="Search articles..."
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-12 py-3 focus:ring-2 focus:ring-accent outline-none transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="flex gap-2 text-sm font-bold">
                    <button
                        class="px-6 py-3 bg-primary text-white rounded-xl shadow-lg shadow-slate-900/10">All</button>
                    <button
                        class="px-6 py-3 bg-white border border-slate-200 text-slate-600 rounded-xl hover:bg-slate-50 transition-all">Engineering</button>
                    <button
                        class="px-6 py-3 bg-white border border-slate-200 text-slate-600 rounded-xl hover:bg-slate-50 transition-all">Design</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Blog Card 1 -->
            <article
                class="group relative bg-white p-6 rounded-3xl border border-slate-100 hover:border-accent/20 hover:shadow-2xl transition-all duration-500">
                <a href="post.php" class="block">
                    <div class="aspect-video bg-slate-200 rounded-2xl mb-6 overflow-hidden relative">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-primary to-transparent opacity-10 group-hover:opacity-20 transition-opacity">
                        </div>
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=800"
                            alt="Tech"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                </a>
                <div class="flex items-center gap-3 mb-4">
                    <span
                        class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full uppercase tracking-widest">Engineering</span>
                    <span class="text-slate-400 text-sm">5 min read</span>
                </div>
                <h3 class="text-2xl font-bold text-primary mb-3 group-hover:text-accent transition-colors">
                    <a href="post.php">The Rise of Progressive Hydration in JS Frameworks</a>
                </h3>
                <p class="text-slate-600 mb-6 line-clamp-2">
                    Understanding how modern frameworks are optimizing performance by partially hydrating components on
                    demand.
                </p>
                <div class="flex items-center gap-3 pt-6 border-t border-slate-50">
                    <div class="w-10 h-10 bg-slate-100 rounded-full border border-slate-200 overflow-hidden">
                        <img src="https://i.pravatar.cc/150?u=1" alt="Avatar">
                    </div>
                    <div>
                        <p class="text-sm font-bold text-primary">Alex Rivera</p>
                        <p class="text-xs text-slate-400">January 2, 2026</p>
                    </div>
                </div>
            </article>

            <!-- More cards could be dynamically generated here -->
        </div>

        <div class="mt-20 text-center">
            <button
                class="px-10 py-4 rounded-xl border-2 border-slate-200 text-slate-600 font-bold hover:border-primary hover:text-primary transition-all active:scale-95">
                View All Articles
            </button>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>