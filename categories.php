<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Categories | Midnight Blog</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-surface text-slate-700 font-sans selection:bg-accent selection:text-white">

    <?php include 'includes/nav.php'; ?>

    <!-- Header -->
    <header class="py-20 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-primary mb-6">Explore by <span
                    class="text-accent">Topic</span></h1>
            <p class="text-xl text-slate-500 max-w-2xl mx-auto">
                Find exactly what you're looking for by browsing our curated categories of technical excellence.
            </p>
        </div>
    </header>

    <!-- Categories Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Category Card 1 -->
            <a href="index.php?category=engineering"
                class="group relative overflow-hidden bg-white p-10 rounded-3xl border border-slate-100 hover:border-accent/30 hover:shadow-2xl transition-all duration-500">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full translate-x-10 -translate-y-10 group-hover:translate-x-5 group-hover:-translate-y-5 transition-transform duration-700">
                </div>
                <div
                    class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-accent transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-primary mb-4">Engineering</h2>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Deep dives into backend architecture, frontend performance, and scalable infrastructure.
                </p>
                <div
                    class="flex items-center gap-2 text-accent font-bold group-hover:translate-x-2 transition-transform">
                    12 Articles
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

            <!-- Category Card 2 -->
            <a href="index.php?category=design"
                class="group relative overflow-hidden bg-white p-10 rounded-3xl border border-slate-100 hover:border-amber-500/30 hover:shadow-2xl transition-all duration-500">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-bl-full translate-x-10 -translate-y-10 group-hover:translate-x-5 group-hover:-translate-y-5 transition-transform duration-700">
                </div>
                <div
                    class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-accent transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-primary mb-4">Design Systems</h2>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Consistency at scale. Foundations, components, and design engineering practices.
                </p>
                <div
                    class="flex items-center gap-2 text-accent font-bold group-hover:translate-x-2 transition-transform">
                    8 Articles
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

            <!-- Category Card 3 -->
            <a href="index.php?category=performance"
                class="group relative overflow-hidden bg-white p-10 rounded-3xl border border-slate-100 hover:border-accent/30 hover:shadow-2xl transition-all duration-500">
                <div
                    class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full translate-x-10 -translate-y-10 group-hover:translate-x-5 group-hover:-translate-y-5 transition-transform duration-700">
                </div>
                <div
                    class="w-16 h-16 bg-slate-900 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-accent transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-primary mb-4">Performance</h2>
                <p class="text-slate-500 leading-relaxed mb-6">
                    Web vitals, hydration strategies, and optimization for the modern era.
                </p>
                <div
                    class="flex items-center gap-2 text-accent font-bold group-hover:translate-x-2 transition-transform">
                    15 Articles
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </a>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>