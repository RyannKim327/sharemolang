<div class="w-full max-w-md mx-auto">
    <!-- Card Container -->
    <div class="relative group">
        <!-- Neon Glow Effect behind card -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-violet-600 to-indigo-600 rounded-2xl blur-xl opacity-30 group-hover:opacity-40 transition duration-1000"></div>
        
        <!-- Main Form Card -->
        <div class="relative bg-slate-900/80 backdrop-blur-xl border border-slate-800 rounded-2xl p-8 shadow-2xl">
            <!-- Header -->
            <div class="text-center mb-8">
                <!-- Branding Icon -->
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-gradient-to-br from-violet-500/20 to-indigo-500/20 border border-violet-500/30 text-violet-400 mb-4 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 animate-pulse">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold tracking-tight text-white">Welcome Back</h2>
                <p class="text-sm text-slate-400 mt-2">Sign in to your account to manage your secure shares</p>
            </div>

            <!-- Login Form -->
            <form action="#" method="POST" onsubmit="event.preventDefault();" class="space-y-6">
                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="login-email" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input id="login-email" type="email" placeholder="name@example.com" required
                               class="w-full bg-slate-950/50 border border-slate-800 focus:border-violet-500 rounded-xl py-3 pl-10 pr-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-violet-500/20 transition-all duration-300">
                    </div>
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label for="login-password" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Password</label>
                        <a href="#" class="text-xs font-medium text-violet-400 hover:text-violet-300 transition-colors">Forgot Password?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <input id="login-password" type="password" placeholder="••••••••" required
                               class="w-full bg-slate-950/50 border border-slate-800 focus:border-violet-500 rounded-xl py-3 pl-10 pr-10 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-violet-500/20 transition-all duration-300">
                        <button type="button" onclick="togglePasswordVisibility('login-password', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500 hover:text-slate-400 transition-colors focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 eye-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="flex items-center">
                    <input id="remember-me" type="checkbox"
                           class="w-4.5 h-4.5 text-violet-600 bg-slate-950 border-slate-800 rounded focus:ring-violet-500/20 focus:ring-offset-slate-900 focus:outline-none">
                    <label for="remember-me" class="ml-2.5 text-sm font-medium text-slate-400 select-none cursor-pointer">Remember my device</label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full relative group/btn flex justify-center items-center py-3.5 px-4 rounded-xl bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 text-white font-semibold shadow-lg shadow-violet-500/20 hover:shadow-violet-500/30 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-violet-500/50">
                    <span class="relative z-10">Sign In</span>
                    <div class="absolute inset-0 w-full h-full rounded-xl bg-gradient-to-r from-violet-500 to-indigo-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                </button>
            </form>

            <!-- Card Footer -->
            <div class="mt-8 pt-6 border-t border-slate-800 text-center">
                <p class="text-sm text-slate-400">
                    New to ShareMoLang? 
                    <a href="#" onclick="switchTab('upload')" class="font-semibold text-violet-400 hover:text-violet-300 transition-colors ml-1">Upload files now &rarr;</a>
                </p>
            </div>
        </div>
    </div>
</div>
