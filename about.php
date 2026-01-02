<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>About | Midnight Blog</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-surface text-slate-700 font-sans selection:bg-accent selection:text-white">

    <?php include 'includes/nav.php'; ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl relative z-10 border-8 border-white">
                    <img src="https://images.unsplash.com/photo-1522071823991-b1ae5e23936d?auto=format&fit=crop&q=80&w=800"
                        alt="Team" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>
                <div class="absolute -top-10 -left-10 w-48 h-48 bg-primary/10 rounded-full blur-3xl"></div>
            </div>

            <div>
                <span
                    class="inline-block px-3 py-1 rounded-full bg-accent/10 text-accent text-sm font-bold tracking-wider uppercase mb-6">
                    Our Story
                </span>
                <h1 class="text-5xl md:text-6xl font-extrabold text-primary mb-8 leading-tight">
                    Engineering for the <span class="text-accent">Future</span> of the Web.
                </h1>
                <p class="text-xl text-slate-600 mb-8 leading-relaxed font-light">
                    Midnight Blog was founded on a simple principle: complexity shouldn't compromise performance. We
                    deep dive into the architectures that power the modern web.
                </p>

                <div class="space-y-6">
                    <div
                        class="flex gap-4 p-6 bg-white rounded-2xl border border-slate-100 hover:border-accent/20 transition-all">
                        <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-accent" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary text-lg">Performance First</h3>
                            <p class="text-slate-500">Optimized delivery for every millisecond matters.</p>
                        </div>
                    </div>

                    <div
                        class="flex gap-4 p-6 bg-white rounded-2xl border border-slate-100 hover:border-accent/20 transition-all">
                        <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-accent" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-primary text-lg">Scalable Systems</h3>
                            <p class="text-slate-500">Architectures built to grow with your vision.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

</body>

</html>