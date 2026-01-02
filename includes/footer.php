<?php
/**
 * Shared Footer Component
 */
?>
<footer class="bg-primary text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-12">
            <div class="col-span-2">
                <div class="flex items-center gap-2 mb-8">
                    <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center">
                        <span class="text-primary font-bold text-xl">M</span>
                    </div>
                    <span class="text-white font-extrabold text-xl tracking-tight">MIDNIGHT</span>
                </div>
                <p class="text-slate-400 max-w-sm mb-8">
                    The definitive source for advanced web technologies, deep architectural insights, and design
                    excellence.
                </p>
                <div class="flex gap-4">
                    <!-- Social Links -->
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-accent hover:text-primary transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-6">Topics</h4>
                <ul class="space-y-4 text-slate-400">
                    <li><a href="#" class="hover:text-accent transition-colors">Engineering</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Design Systems</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Performance</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6">Newsletter</h4>
                <div class="flex flex-col gap-3">
                    <input type="email" placeholder="email@address.com"
                        class="bg-slate-800 border-none rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-accent outline-none">
                    <button
                        class="bg-accent text-primary font-bold py-3 rounded-xl hover:bg-amber-400 transition-all">Join
                        Now</button>
                </div>
            </div>
        </div>
        <div class="mt-20 pt-10 border-t border-slate-800 text-center text-slate-500 text-sm">
            &copy;
            <?php echo date('Y'); ?> Midnight Blog. All rights reserved.
        </div>
    </div>
</footer>