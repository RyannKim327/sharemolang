<nav class="bg-[#2c2c42] border-b border-[#3e3e5a] px-6 py-4 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3 group transition">
            <div class="bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] p-2 rounded-xl shadow-[0_0_15px_rgba(139,92,246,0.3)] group-hover:scale-105 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                </svg>
            </div>
            <span class="text-xl font-bold tracking-tight text-[#e0e0e0] group-hover:text-white transition-colors duration-300">
                Anesidora
            </span>
        </a>

        <!-- Nav Links -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="text-sm font-medium {{ Request::is('/') ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]' }} transition-colors duration-200">
                Public Files
            </a>
            <a href="{{ route('upload.view') }}" class="text-sm font-medium {{ Request::is('upload') ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]' }} transition-colors duration-200">
                Upload File
            </a>
            <a href="{{ route('drive.view') }}" class="text-sm font-medium {{ Request::is('drive') ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]' }} transition-colors duration-200">
                My Drive
            </a>
        </div>

        <!-- Auth Actions -->
        <div class="flex items-center space-x-4">
            @auth
                <!-- User Profile Dropdown Simulation / Link to Drive -->
                <div class="flex items-center space-x-3 bg-[#1a1a2e] py-1.5 px-3 rounded-lg border border-[#3e3e5a]">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] flex items-center justify-center font-bold text-sm text-white shadow-inner">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <span class="text-sm text-[#e0e0e0] font-medium hidden sm:inline">{{ auth()->user()->name ?? 'User' }}</span>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-[#7f8c8d] hover:text-red-400 p-1" title="Logout">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </a>
                    <form id="logout-form" action="#" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            @else
                <!-- Guest Actions -->
                <a href="{{ route('login') }}" class="text-sm font-semibold text-[#e0e0e0] hover:text-[#c084fc] transition-colors duration-200 px-3 py-2">
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] hover:from-[#7c3aed] hover:to-[#a78bfa] text-white text-sm font-semibold px-4 py-2 rounded-lg shadow-md transition-all duration-300 hover:shadow-[0_0_15px_rgba(139,92,246,0.4)]">
                    Sign Up
                </a>
            @endauth
        </div>
    </div>
</nav>
