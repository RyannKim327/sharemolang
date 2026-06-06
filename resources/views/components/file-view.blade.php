<div class="w-full max-w-2xl mx-auto">
    <!-- Card Container -->
    <div class="relative group">
        <!-- Neon Glow Effect behind card -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-teal-500 to-emerald-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-35 transition duration-1000"></div>

        <!-- Main Form Card -->
        <div class="relative bg-slate-900/80 backdrop-blur-xl border border-slate-800 rounded-2xl p-6 sm:p-8 shadow-2xl overflow-hidden min-h-[400px] flex flex-col justify-center">
            
            <!-- STATE 1: Password Unlock Form (Protected state) -->
            <div id="file-lock-state" class="space-y-6 py-4 transition-all duration-500">
                <div class="text-center space-y-4">
                    <!-- Lock Icon -->
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-950/60 border border-slate-800/80 text-teal-400 shadow-lg mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-2xl font-bold tracking-tight text-white">Encrypted Share</h2>
                        <p class="text-sm text-slate-400 max-w-sm mx-auto">This file is password protected. Enter the correct key to unlock and download its contents.</p>
                    </div>
                </div>

                <!-- Unlock Password Form -->
                <form action="#" method="POST" onsubmit="unlockDemoFile(event);" class="max-w-sm mx-auto space-y-4">
                    <div class="space-y-2">
                        <label for="unlock-password" class="sr-only">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                </svg>
                            </div>
                            <input id="unlock-password" type="password" placeholder="Enter share password" required
                                   class="w-full bg-slate-950/60 border border-slate-800 focus:border-teal-500 rounded-xl py-3 pl-10 pr-4 text-white placeholder-slate-600 focus:outline-none focus:ring-2 focus:ring-teal-500/20 transition-all duration-300">
                        </div>
                        <p id="unlock-error" class="hidden text-xs text-rose-500 font-medium pl-1">Incorrect password. Please try again.</p>
                    </div>

                    <button type="submit"
                            class="w-full relative group/btn flex justify-center items-center py-3.5 px-4 rounded-xl bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-semibold shadow-lg shadow-teal-500/10 hover:shadow-teal-500/20 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-teal-500/50">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            Unlock Secure File
                        </span>
                        <div class="absolute inset-0 w-full h-full rounded-xl bg-gradient-to-r from-teal-500 to-emerald-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </form>

                <div class="text-center pt-2">
                    <p class="text-xs text-slate-500">Hint: Try entering '<span class="text-slate-400 font-semibold cursor-pointer underline" onclick="document.getElementById('unlock-password').value='secret';">secret</span>' to unlock this demo file</p>
                </div>
            </div>

            <!-- STATE 2: File Details (Unlocked/Public state) - Hidden by default -->
            <div id="file-details-state" class="hidden space-y-6 transition-all duration-500">
                <!-- File Overview Header -->
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 pb-6 border-b border-slate-800/80">
                    <!-- File Format Icon -->
                    <div id="view-file-icon" class="w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500/10 to-emerald-500/10 border border-teal-500/30 text-teal-400 flex items-center justify-center shadow-lg shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    
                    <!-- Title & Basic Info -->
                    <div class="text-center sm:text-left space-y-1 overflow-hidden w-full">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                            <h3 id="view-file-name" class="text-xl font-bold text-white truncate">Project_Design_Brief.pdf</h3>
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-teal-500/10 text-teal-400 border border-teal-500/20 shrink-0 self-center">PDF Document</span>
                        </div>
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-x-3 gap-y-1 text-xs text-slate-500">
                            <span id="view-file-size">4.8 MB</span>
                            <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                            <span id="view-file-date">Uploaded today, 10:24 AM</span>
                            <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                            <span id="view-file-downloads">12 downloads</span>
                        </div>
                    </div>
                </div>

                <!-- Description Block -->
                <div class="space-y-2.5">
                    <h4 class="text-xs font-semibold uppercase tracking-wider text-slate-400">File Description</h4>
                    <div class="bg-slate-950/50 border border-slate-800/80 rounded-xl p-4">
                        <p id="view-file-desc" class="text-sm text-slate-300 leading-relaxed">
                            This contains the layout wireframes, color palette configuration, typography definition, and component catalog for the new ShareMoLang project. Please review and provide feedback.
                        </p>
                    </div>
                </div>

                <!-- Metadata Grid (Expiration details, etc) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Time Left until expiration -->
                    <div class="bg-slate-950/30 border border-slate-800/60 rounded-xl p-4 flex items-center space-x-3.5">
                        <div class="p-2.5 rounded-lg bg-amber-500/10 border border-amber-500/20 text-amber-400 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5.5 h-5.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-500">Access Expiration</p>
                            <p id="view-file-expiration" class="text-sm font-semibold text-amber-400">Expires in 23h 58m</p>
                        </div>
                    </div>

                    <!-- Security Status -->
                    <div class="bg-slate-950/30 border border-slate-800/60 rounded-xl p-4 flex items-center space-x-3.5">
                        <div class="p-2.5 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5.5 h-5.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-semibold uppercase tracking-wider text-slate-500">Security Status</p>
                            <p class="text-sm font-semibold text-emerald-400">Password Verified</p>
                        </div>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex flex-col sm:flex-row gap-3.5 pt-4">
                    <!-- Download button -->
                    <a href="#" onclick="handleDemoDownloadLink(event)"
                       class="flex-1 relative group/btn flex justify-center items-center py-3.5 px-6 rounded-xl bg-gradient-to-r from-teal-600 to-emerald-600 hover:from-teal-500 hover:to-emerald-500 text-white font-semibold shadow-lg shadow-teal-500/10 hover:shadow-teal-500/20 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-teal-500/50">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="w-4.5 h-4.5 animate-bounce">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            Download File
                        </span>
                        <div class="absolute inset-0 w-full h-full rounded-xl bg-gradient-to-r from-teal-500 to-emerald-500 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <!-- Copy share link -->
                    <button type="button" onclick="copyDemoShareLink(this)"
                            class="relative flex justify-center items-center py-3.5 px-6 rounded-xl bg-slate-950 border border-slate-800 hover:border-teal-500/50 text-slate-300 hover:text-white font-semibold transition-all duration-300 focus:outline-none">
                        <span class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-4.5 h-4.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                            </svg>
                            Copy Share Link
                        </span>
                        
                        <!-- Tooltip indicator -->
                        <span class="tooltip-text hidden absolute -top-10 bg-slate-950 text-white border border-slate-800 text-xs px-2.5 py-1 rounded-md shadow-xl transition-all duration-300">
                            Copied!
                        </span>
                    </button>
                </div>

                <!-- Footer back button -->
                <div class="pt-2 text-center">
                    <button type="button" onclick="lockDemoFile()" class="text-xs text-slate-500 hover:text-teal-400 transition-colors font-medium">
                        &larr; Lock access and return to credentials prompt
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
