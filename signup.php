<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | MIDNIGHT BLOG</title>
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
                <h1 class="text-3xl font-extrabold text-primary mb-2">Create Account</h1>
                <p class="text-slate-500">Join our community of readers and writers</p>
            </div>

            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="full_name" class="block text-sm font-semibold text-slate-700 mb-1">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="John Doe">
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="name@example.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-slate-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div>
                    <label for="confirm_password" class="block text-sm font-semibold text-slate-700 mb-1">Confirm
                        Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-accent focus:ring-2 focus:ring-accent/20 outline-none transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="flex items-start py-2">
                    <input type="checkbox" id="terms" name="terms" required
                        class="mt-1 w-4 h-4 text-accent border-slate-300 rounded focus:ring-accent">
                    <label for="terms" class="ml-2 text-sm text-slate-600">
                        I agree to the <a href="#" class="text-accent font-bold hover:underline">Terms of Service</a>
                        and <a href="#" class="text-accent font-bold hover:underline">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-primary text-white py-4 rounded-xl font-bold text-lg hover:bg-slate-800 transition-all shadow-lg shadow-primary/20 active:scale-[0.98]">
                    Sign Up
                </button>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                <p class="text-slate-600">
                    Already have an account?
                    <a href="login" class="text-accent font-bold hover:text-amber-600 transition-colors">Sign in</a>
                </p>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>

</html>