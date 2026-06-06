<div class="w-full max-w-4xl mx-auto">
    <!-- Card Container -->
    <div class="relative group">
        <!-- Neon Glow Effect behind card -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-pink-600 to-violet-600 rounded-2xl blur-xl opacity-20 group-hover:opacity-35 transition duration-1000"></div>

        <!-- Main Form Card -->
        <div class="relative bg-slate-900/80 backdrop-blur-xl border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-2xl">
            <!-- Header -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold tracking-tight text-white flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-pink-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Register &amp; Upload File
                </h2>
                <p class="text-sm text-slate-400 mt-1">Specify metadata, secure with a password, and set expiration limits</p>
            </div>

            <!-- Upload Form -->
            <form action="#" method="POST" enctype="multipart/form-data" onsubmit="handleDemoUpload(event);" class="space-y-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column: Drag & Drop Zone -->
                    <div class="flex flex-col space-y-4">
                        <label class="text-xs font-semibold uppercase tracking-wider text-slate-400">Select File</label>
                        
                        <!-- Drag & Drop Area -->
                        <div id="dropzone" 
                             class="flex-1 min-h-[260px] border-2 border-dashed border-slate-800 hover:border-pink-500/50 bg-slate-950/40 hover:bg-slate-950/80 rounded-2xl flex flex-col items-center justify-center p-6 text-center cursor-pointer transition-all duration-300 group/drop"
                             onclick="triggerFileSelect()">
                            
                            <input type="file" id="file-input" class="hidden" onchange="handleFileSelect(this)">
                            
                            <div class="space-y-4 select-none">
                                <!-- Upload Icon -->
                                <div class="mx-auto w-16 h-16 rounded-2xl bg-slate-900 border border-slate-800 text-slate-400 group-hover/drop:text-pink-400 group-hover/drop:border-pink-500/30 flex items-center justify-center shadow-lg transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                                    </svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-sm font-semibold text-white">Drag &amp; drop your file here</p>
                                    <p class="text-xs text-slate-500">or <span class="text-pink-400 font-semibold hover:text-pink-300 transition-colors">browse files</span> from your device</p>
                                </div>
                                <p class="text-[11px] text-slate-600">Supports documents, archives, media up to 100MB</p>
                            </div>
                        </div>

                        <!-- Selected File Preview Card (Hidden by default) -->
                        <div id="file-preview-card" class="hidden bg-slate-950/60 border border-slate-800 rounded-xl p-4 flex items-center justify-between transition-all duration-300">
                            <div class="flex items-center space-x-3 overflow-hidden">
                                <div class="p-2.5 rounded-lg bg-pink-500/10 border border-pink-500/20 text-pink-400 shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </div>
                                <div class="overflow-hidden">
                                    <p id="preview-filename" class="text-sm font-medium text-white truncate">document.pdf</p>
                                    <p id="preview-filesize" class="text-xs text-slate-500">2.4 MB</p>
                                </div>
                            </div>
                            <button type="button" onclick="removeSelectedFile()" class="p-1 text-slate-500 hover:text-rose-400 transition-colors focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5.5 h-5.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Right Column: Registration / Meta Parameters -->
                    <div class="space-y-5">
                        <!-- File Name -->
                        <div class="space-y-2">
                            <label for="file-name" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">File Name</label>
                            <input id="file-name" type="text" placeholder="Enter friendly display name" required
                                   class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 px-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300">
                        </div>

                        <!-- File Description -->
                        <div class="space-y-2">
                            <label for="file-desc" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">File Description</label>
                            <textarea id="file-desc" rows="3" placeholder="Provide details about what is in this file..." required
                                      class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 px-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300 resize-none"></textarea>
                        </div>

                        <!-- Password & Expiration Group -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Password protection -->
                            <div class="space-y-2">
                                <label for="file-password" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Access Password</label>
                                <div class="relative">
                                    <input id="file-password" type="password" placeholder="Optional secure key"
                                           class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 pl-4 pr-10 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300">
                                    <button type="button" onclick="generateFilePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500 hover:text-pink-400 transition-colors focus:outline-none" title="Generate password">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Expiration dropdown -->
                            <div class="space-y-2">
                                <label for="file-expiration" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Expiration Limit</label>
                                <select id="file-expiration" required
                                        class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 px-4 text-white focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300 appearance-none cursor-pointer">
                                    <option value="1h" class="bg-slate-950">Expires in 1 Hour</option>
                                    <option value="24h" selected class="bg-slate-950">Expires in 24 Hours</option>
                                    <option value="7d" class="bg-slate-950">Expires in 7 Days</option>
                                    <option value="30d" class="bg-slate-950">Expires in 30 Days</option>
                                    <option value="custom" class="bg-slate-950">Custom Date/Time...</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section: Account Registration (Optional Linkage) -->
                <div class="border-t border-slate-800/80 pt-6">
                    <!-- Toggle Switch -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-white">Create Owner Account</span>
                            <span class="text-xs text-slate-500">Register an account to track downloads and edit limits later</span>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="register-toggle" class="sr-only peer" onchange="toggleAccountRegistrationFields(this)">
                            <div class="w-11 h-6 bg-slate-800 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-slate-400 after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-pink-600 peer-checked:after:bg-white peer-checked:after:border-white"></div>
                        </label>
                    </div>

                    <!-- Collapsible User Account Fields -->
                    <div id="account-fields" class="hidden grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4 transition-all duration-300 starting:opacity-0">
                        <div class="space-y-2">
                            <label for="reg-email" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Your Email Address</label>
                            <input id="reg-email" type="email" placeholder="name@example.com"
                                   class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 px-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300">
                        </div>
                        <div class="space-y-2">
                            <label for="reg-password" class="text-xs font-semibold uppercase tracking-wider text-slate-400 block">Account Password</label>
                            <input id="reg-password" type="password" placeholder="Password for dashboard"
                                   class="w-full bg-slate-950/50 border border-slate-800 focus:border-pink-500 rounded-xl py-3 px-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-pink-500/20 transition-all duration-300">
                        </div>
                    </div>
                </div>

                <!-- Submit Section -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-800/80">
                    <span class="text-xs text-slate-500 flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-emerald-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        SSL-encrypted, private storage upload
                    </span>
                    <button type="submit"
                            class="w-full sm:w-auto relative group/btn flex justify-center items-center py-3.5 px-8 rounded-xl bg-gradient-to-r from-pink-600 to-violet-600 hover:from-pink-500 hover:to-violet-500 text-white font-semibold shadow-lg shadow-pink-500/10 hover:shadow-pink-500/20 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-pink-500/50">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                            Register &amp; Upload
                        </span>
                        <div class="absolute inset-0 w-full h-full rounded-xl bg-gradient-to-r from-pink-500 to-violet-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
