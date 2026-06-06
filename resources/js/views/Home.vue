<template>
  <div class="min-h-screen">
    <Navbar />

    <main class="max-w-7xl mx-auto px-6 py-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-[#e0e0e0]">Public Downloads</h1>
                <p class="text-[#7f8c8d] mt-1">Recently uploaded public files available for everyone.</p>
            </div>
            <div class="flex items-center bg-[#2c2c42] rounded-lg px-4 py-2 border border-[#3e3e5a] w-full md:w-80">
                <svg class="w-5 h-5 text-[#7f8c8d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" placeholder="Search files..." class="bg-transparent border-none focus:ring-0 text-sm text-[#e0e0e0] ml-2 w-full placeholder-[#7f8c8d]">
            </div>
        </div>

        <!-- Top Lists of Files -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div v-for="i in 6" :key="i" class="group bg-[#2c2c42] rounded-2xl p-5 border border-[#3e3e5a] hover:border-[#8b5cf6]/50 transition-all duration-300 shadow-lg hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
                <div class="flex items-start justify-between mb-4">
                    <div class="p-3 bg-[#1a1a2e] rounded-xl group-hover:bg-[#8b5cf6]/10 transition-colors">
                        <svg class="w-8 h-8 text-[#8b5cf6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <button class="text-[#7f8c8d] hover:text-[#e0e0e0] transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                        </svg>
                    </button>
                </div>
                
                <h3 class="text-[#e0e0e0] font-semibold truncate mb-1">Project_Architecture_v2.pdf</h3>
                <p class="text-[#7f8c8d] text-xs mb-4">Uploaded 2 hours ago • 4.2 MB</p>
                
                <div class="flex items-center justify-between mt-auto pt-4 border-t border-[#3e3e5a]">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 rounded-full bg-[#8b5cf6]/20 flex items-center justify-center text-[10px] text-[#c084fc] font-bold">
                            JD
                        </div>
                        <span class="text-xs text-[#7f8c8d]">John Doe</span>
                    </div>
                    <a href="#" class="inline-flex items-center text-xs font-semibold text-[#8b5cf6] hover:text-[#c084fc] transition-colors">
                        Download
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination or Load More -->
        <div class="mt-12 flex justify-center">
            <button class="px-6 py-3 bg-[#2c2c42] border border-[#3e3e5a] text-[#e0e0e0] rounded-xl hover:bg-[#3e3e5a] transition-all font-medium">
                Load More Files
            </button>
        </div>
    </main>
  </div>
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
</script>
