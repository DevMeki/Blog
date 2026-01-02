<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | MIDNIGHT BLOG</title>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-surface min-h-screen flex flex-col">
    <?php include 'includes/nav.php'; ?>

    <main class="flex-grow flex items-center justify-center px-4 py-12">
        <div class="max-w-md w-full bg-white rounded-2xl shadow-xl shadow-slate-200/60 p-8 border border-slate-100">
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-primary rounded-2xl mb-4 shadow-lg shadow-primary/20">
                    <span class="text-accent font-bold text-3xl">M</span>
                </div>
                <h1 class="text-3xl font-extrabold text-primary mb-2">Welcome Back</h1>
                <p class="text-slate-500">Enter your credentials to access your account</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="name@example.com">
                </div>

                <div>
                    <div class="flex justify-between mb-2">
                        <label for="password" class="text-sm font-semibold text-slate-700">Password</label>
                        <a href="#" class="text-sm font-bold text-accent hover:text-amber-600 transition-colors">Forgot
                            password?</a>
                    </div>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember"
                        class="w-4 h-4 text-accent border-slate-300 rounded focus:ring-accent">
                    <label for="remember" class="ml-2 text-sm text-slate-600">Remember me for 30 days</label>
                </div>

                <button type="submit"
                    class="w-full bg-primary text-white py-4 rounded-xl font-bold text-lg hover:bg-slate-800 transition-all shadow-lg shadow-primary/20 active:scale-[0.98]">
                    Sign In
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600">
                    Don't have an account?
                    <a href="signup" class="text-accent font-bold hover:text-amber-600 transition-colors">Create
                        account</a>
                </p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>