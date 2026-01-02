<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>The Rise of Progressive Hydration | Midnight Blog</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-surface text-slate-700 font-sans selection:bg-accent selection:text-white">

    <?php include 'includes/nav.php'; ?>

    <!-- Post Header -->
    <header class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span
                class="inline-block px-3 py-1 rounded-full bg-accent/10 text-accent text-sm font-bold tracking-wider uppercase mb-6">
                Engineering
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-primary mb-8 leading-tight">
                The Rise of Progressive Hydration in JS Frameworks
            </h1>
            <div class="flex items-center justify-center gap-4 text-slate-400">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full overflow-hidden">
                        <img src="https://i.pravatar.cc/150?u=1" alt="Author">
                    </div>
                    <span class="text-slate-900 font-bold">Alex Rivera</span>
                </div>
                <span>•</span>
                <span>January 2, 2026</span>
                <span>•</span>
                <span>5 min read</span>
            </div>
        </div>
    </header>

    <!-- Featured Image -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10">
        <div class="aspect-video w-full rounded-3xl overflow-hidden shadow-2xl border-8 border-white">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1200"
                alt="Tech" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Article Content -->
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 content">
        <article class="prose prose-slate prose-lg max-w-none">
            <p class="text-xl leading-relaxed text-slate-600 mb-8 font-light italic border-l-4 border-accent pl-6">
                "Speed is no longer a luxury; it's the foundation of modern user experience. Progressive hydration is
                how we bridge the gap between static content and dynamic interactivity."
            </p>

            <p class="mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
            </p>

            <h2 class="text-3xl font-bold text-primary mt-12 mb-6">The Hydration Problem</h2>
            <p class="mb-6">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.
            </p>

            <div class="my-12 p-8 bg-slate-900 rounded-2xl text-white">
                <pre class="bg-transparent overflow-x-auto text-sm"><code>// Example of lazy hydration
const LazyComponent = dynamic(() => import('./Component'), {
  ssr: true,
  loading: () => <p>Loading...</p>
})</code></pre>
            </div>
        </article>

        <!-- Share & Tags -->
        <div class="mt-20 pt-10 border-t border-slate-100 flex flex-wrap justify-between items-center gap-6">
            <div class="flex gap-2">
                <span class="px-4 py-2 bg-slate-100 rounded-lg text-sm font-medium text-slate-600">Frontend</span>
                <span class="px-4 py-2 bg-slate-100 rounded-lg text-sm font-medium text-slate-600">Performance</span>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>