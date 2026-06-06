@extends('app')

@section('title', 'ShareMoLang - Secure File Sharing Layouts')

@section('content')
<div class="min-h-screen bg-[#06060c] bg-radial-[at_50%_0%] from-slate-900 via-[#06060c] to-[#040408] text-slate-100 flex flex-col py-10 px-4 sm:px-6 lg:px-8">
    
    <!-- Top Decorative Grid Pattern -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>
    
    <!-- Outer Container -->
    <div class="relative max-w-6xl w-full mx-auto flex-1 flex flex-col justify-between">
        
        <!-- Header / Logo -->
        <header class="text-center space-y-3 mb-10">
            <div class="inline-flex items-center space-x-2">
                <!-- Glowing Logo -->
                <div class="relative flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-violet-600 to-pink-600 shadow-[0_0_15px_rgba(124,58,237,0.3)] shadow-violet-600/30">
                    <span class="text-white font-extrabold text-xl tracking-tighter">S</span>
                </div>
                <span class="text-2xl font-bold tracking-tight text-white">Share<span class="bg-gradient-to-r from-violet-400 to-pink-500 bg-clip-text text-transparent">MoLang</span></span>
            </div>
            <h1 class="text-xs font-semibold uppercase tracking-widest text-slate-400">Interactive Layout Showcase</h1>
        </header>

        <!-- Tab Controls Navigation -->
        <div class="flex justify-center mb-12">
            <div class="inline-flex p-1 bg-slate-950/80 border border-slate-800/80 rounded-xl shadow-2xl backdrop-blur-md">
                <!-- Login Form Tab -->
                <button type="button" onclick="switchTab('login')" id="tab-login"
                        class="tab-btn active px-4 py-2 text-xs sm:text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-300 flex items-center gap-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    Login Form
                </button>
                
                <!-- Registration & Upload Form Tab -->
                <button type="button" onclick="switchTab('upload')" id="tab-upload"
                        class="tab-btn px-4 py-2 text-xs sm:text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-300 flex items-center gap-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Register &amp; Upload
                </button>
                
                <!-- File View Form Tab -->
                <button type="button" onclick="switchTab('fileview')" id="tab-fileview"
                        class="tab-btn px-4 py-2 text-xs sm:text-sm font-semibold rounded-lg text-slate-400 hover:text-white transition-all duration-300 flex items-center gap-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    File View
                </button>
            </div>
        </div>

        <!-- Simulated Upload Progress Overlay (Overlaying the forms while active) -->
        <div id="upload-progress-overlay" class="hidden fixed inset-0 z-50 bg-[#06060c]/90 backdrop-blur-lg flex items-center justify-center p-4">
            <div class="max-w-md w-full text-center space-y-6">
                <!-- Animated Spinner -->
                <div class="relative w-20 h-20 mx-auto">
                    <div class="absolute inset-0 rounded-full border-4 border-slate-800"></div>
                    <div class="absolute inset-0 rounded-full border-4 border-t-pink-500 border-r-violet-500 border-b-transparent border-l-transparent animate-spin"></div>
                </div>
                <div class="space-y-2">
                    <h3 class="text-xl font-bold text-white">Uploading &amp; Registering File</h3>
                    <p class="text-xs text-slate-400">Encrypting file contents and writing access policies...</p>
                </div>
                <!-- Progress bar -->
                <div class="space-y-1.5">
                    <div class="w-full bg-slate-900 border border-slate-800 rounded-full h-3.5 overflow-hidden p-0.5">
                        <div id="upload-progress-bar" class="bg-gradient-to-r from-pink-500 to-violet-500 h-2 rounded-full transition-all duration-200" style="width: 0%"></div>
                    </div>
                    <div class="flex justify-between text-[11px] text-slate-500">
                        <span id="upload-percent">0%</span>
                        <span id="upload-speed">3.4 MB/s</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Display Window -->
        <main class="flex-1 flex items-center justify-center min-h-[500px]">
            <!-- Login View Container -->
            <div id="view-login" class="view-panel w-full transition-all duration-300">
                <x-login-form />
            </div>

            <!-- Upload View Container -->
            <div id="view-upload" class="view-panel w-full hidden transition-all duration-300">
                <x-upload-form />
            </div>

            <!-- File View Container -->
            <div id="view-fileview" class="view-panel w-full hidden transition-all duration-300">
                <x-file-view />
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-16 pt-8 border-t border-slate-900/60 text-center text-xs text-slate-600">
            <p>&copy; 2026 ShareMoLang. Built with Laravel and Tailwind CSS. Layout prototype demonstration.</p>
        </footer>
    </div>
</div>

<!-- Extra Styles for active tab state & transitions -->
<style>
    .tab-btn.active {
        background-color: var(--color-slate-900);
        color: white;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        border: 1px solid var(--color-slate-800);
    }
    .view-panel {
        animation: fadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Showcase JavaScript Logic -->
<script>
    // State of the current simulation
    const simulatedFile = {
        name: 'Project_Design_Brief.pdf',
        size: '4.8 MB',
        description: 'This contains the layout wireframes, color palette configuration, typography definition, and component catalog for the new ShareMoLang project. Please review and provide feedback.',
        password: 'secret',
        expiration: 'Expires in 23h 58m',
        dateStr: 'Uploaded today, 10:24 AM',
        downloads: 12,
        format: 'pdf'
    };

    /**
     * Toggles between Login, Upload, and File View tabs
     */
    function switchTab(tabId) {
        // Hide all views
        document.querySelectorAll('.view-panel').forEach(view => {
            view.classList.add('hidden');
        });
        
        // Remove active class from all buttons
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Show active view & button state
        if (tabId === 'login') {
            document.getElementById('view-login').classList.remove('hidden');
            document.getElementById('tab-login').classList.add('active');
        } else if (tabId === 'upload') {
            document.getElementById('view-upload').classList.remove('hidden');
            document.getElementById('tab-upload').classList.add('active');
        } else if (tabId === 'fileview') {
            document.getElementById('view-fileview').classList.remove('hidden');
            document.getElementById('tab-fileview').classList.add('active');
            
            // Sync with current metadata view
            updateFileViewLayout();
        }
    }

    /**
     * Password Visibility Toggle Helper
     */
    function togglePasswordVisibility(inputId, button) {
        const input = document.getElementById(inputId);
        const icon = button.querySelector('svg');
        
        if (input.type === 'password') {
            input.type = 'text';
            // Eye slash SVG
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />`;
        } else {
            input.type = 'password';
            // Normal eye SVG
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />`;
        }
    }

    /**
     * File Upload Zone Handlers
     */
    function triggerFileSelect() {
        document.getElementById('file-input').click();
    }

    function handleFileSelect(input) {
        if (input.files && input.files[0]) {
            const file = input.files[0];
            
            // Show preview details
            document.getElementById('dropzone').classList.add('hidden');
            document.getElementById('file-preview-card').classList.remove('hidden');
            document.getElementById('preview-filename').textContent = file.name;
            
            // Format file size
            const sizeInMB = (file.size / (1024 * 1024)).toFixed(2);
            document.getElementById('preview-filesize').textContent = `${sizeInMB} MB`;
            
            // Auto populate file name field if empty
            const nameField = document.getElementById('file-name');
            if (!nameField.value) {
                // Remove extension for display name
                nameField.value = file.name.substring(0, file.name.lastIndexOf('.')) || file.name;
            }

            // Guess format from extension
            const ext = file.name.split('.').pop().toLowerCase();
            simulatedFile.format = ext;
        }
    }

    function removeSelectedFile() {
        document.getElementById('file-input').value = '';
        document.getElementById('file-preview-card').classList.add('hidden');
        document.getElementById('dropzone').classList.remove('hidden');
    }

    function generateFilePassword() {
        const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
        let pass = '';
        for (let i = 0; i < 10; i++) {
            pass += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        document.getElementById('file-password').value = pass;
        
        // Show tooltip/alert to copy password
        alert(`Generated access password: ${pass}\nSave this code to unlock the file later!`);
    }

    function toggleAccountRegistrationFields(checkbox) {
        const fields = document.getElementById('account-fields');
        if (checkbox.checked) {
            fields.classList.remove('hidden');
            document.getElementById('reg-email').required = true;
            document.getElementById('reg-password').required = true;
        } else {
            fields.classList.add('hidden');
            document.getElementById('reg-email').required = false;
            document.getElementById('reg-password').required = false;
        }
    }

    /**
     * Simulated Upload Form Submission
     */
    function handleDemoUpload(event) {
        event.preventDefault();
        
        // Read file details from form
        const name = document.getElementById('file-name').value;
        const desc = document.getElementById('file-desc').value;
        const pass = document.getElementById('file-password').value;
        const expSelect = document.getElementById('file-expiration');
        const expText = expSelect.options[expSelect.selectedIndex].text;
        
        const fileInput = document.getElementById('file-input');
        let sizeStr = '2.4 MB';
        let filenameStr = name || 'document.pdf';
        
        if (fileInput.files && fileInput.files[0]) {
            const file = fileInput.files[0];
            sizeStr = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
            filenameStr = file.name;
        }

        // Store into global state
        simulatedFile.name = name || filenameStr;
        simulatedFile.size = sizeStr;
        simulatedFile.description = desc;
        simulatedFile.password = pass; // password to unlock
        simulatedFile.expiration = expText.replace('Expires in', 'Expires in:');
        simulatedFile.downloads = 0;
        simulatedFile.dateStr = 'Uploaded just now';

        // Trigger loading screen
        const overlay = document.getElementById('upload-progress-overlay');
        const bar = document.getElementById('upload-progress-bar');
        const percentText = document.getElementById('upload-percent');
        
        overlay.classList.remove('hidden');
        bar.style.width = '0%';
        percentText.textContent = '0%';

        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.floor(Math.random() * 15) + 5;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
                
                // Hide overlay and switch tabs
                setTimeout(() => {
                    overlay.classList.add('hidden');
                    
                    // Reset upload form inputs
                    removeSelectedFile();
                    document.getElementById('file-name').value = '';
                    document.getElementById('file-desc').value = '';
                    document.getElementById('file-password').value = '';
                    document.getElementById('register-toggle').checked = false;
                    document.getElementById('account-fields').classList.add('hidden');
                    
                    // Unlock file details and switch
                    lockDemoFile(); // Enforce password unlock first if password exists
                    switchTab('fileview');
                }, 500);
            }
            bar.style.width = `${progress}%`;
            percentText.textContent = `${progress}%`;
        }, 150);
    }

    /**
     * File Unlock & Display Logic
     */
    function updateFileViewLayout() {
        // Set layout variables based on the uploaded file
        document.getElementById('view-file-name').textContent = simulatedFile.name;
        document.getElementById('view-file-size').textContent = simulatedFile.size;
        document.getElementById('view-file-date').textContent = simulatedFile.dateStr;
        document.getElementById('view-file-downloads').textContent = `${simulatedFile.downloads} downloads`;
        document.getElementById('view-file-desc').textContent = simulatedFile.description || 'No description provided.';
        document.getElementById('view-file-expiration').textContent = simulatedFile.expiration;

        // Customize file extension icon based on format
        const iconDiv = document.getElementById('view-file-icon');
        let iconSvg = '';
        
        // Define beautiful icons based on format
        if (['pdf'].includes(simulatedFile.format)) {
            iconSvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>`;
        } else if (['zip', 'rar', 'tar', 'gz'].includes(simulatedFile.format)) {
            iconSvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" /></svg>`;
        } else if (['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'].includes(simulatedFile.format)) {
            iconSvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>`;
        } else {
            iconSvg = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>`;
        }
        iconDiv.innerHTML = iconSvg;
    }

    function unlockDemoFile(event) {
        event.preventDefault();
        const input = document.getElementById('unlock-password');
        const errorText = document.getElementById('unlock-error');
        
        // If file doesn't have password, or password matches
        if (!simulatedFile.password || input.value === simulatedFile.password) {
            errorText.classList.add('hidden');
            input.value = '';
            
            // Switch views
            document.getElementById('file-lock-state').classList.add('hidden');
            document.getElementById('file-details-state').classList.remove('hidden');
        } else {
            errorText.classList.remove('hidden');
            input.classList.add('border-rose-500', 'ring-2', 'ring-rose-500/20');
            setTimeout(() => {
                input.classList.remove('border-rose-500', 'ring-2', 'ring-rose-500/20');
            }, 1000);
        }
    }

    function lockDemoFile() {
        document.getElementById('unlock-password').value = '';
        document.getElementById('unlock-error').add = 'hidden';
        
        if (simulatedFile.password) {
            document.getElementById('file-lock-state').classList.remove('hidden');
            document.getElementById('file-details-state').classList.add('hidden');
        } else {
            // No password? Instantly show details
            document.getElementById('file-lock-state').classList.add('hidden');
            document.getElementById('file-details-state').classList.remove('hidden');
        }
    }

    function handleDemoDownloadLink(event) {
        event.preventDefault();
        simulatedFile.downloads++;
        document.getElementById('view-file-downloads').textContent = `${simulatedFile.downloads} downloads`;
        alert(`Simulating secure download for "${simulatedFile.name}"...`);
    }

    function copyDemoShareLink(btn) {
        const tooltip = btn.querySelector('.tooltip-text');
        
        // Copy a simulated link to clipboard
        const simulatedUrl = `${window.location.origin}/file/share-demo-992a83`;
        navigator.clipboard.writeText(simulatedUrl).then(() => {
            tooltip.classList.remove('hidden');
            setTimeout(() => {
                tooltip.classList.add('hidden');
            }, 2000);
        }).catch(err => {
            // Fallback
            tooltip.classList.remove('hidden');
            setTimeout(() => {
                tooltip.classList.add('hidden');
            }, 2000);
        });
    }

    // Initialize layout sync on first page load
    window.addEventListener('DOMContentLoaded', () => {
        updateFileViewLayout();
        lockDemoFile();
    });
</script>
@endsection
