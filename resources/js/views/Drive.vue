<template>
  <div class="min-h-screen flex flex-col">
    <Navbar />

    <main class="max-w-7xl mx-auto px-6 py-8 flex-1 flex flex-col w-full">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-[#e0e0e0]">My Drive</h1>
                <p class="text-[#7f8c8d]">Manage and organize your personal files.</p>
            </div>
            <router-link :to="{ name: 'upload' }" class="flex items-center space-x-2 bg-[#8b5cf6] hover:bg-[#7c3aed] text-white px-5 py-2.5 rounded-xl font-semibold transition-all shadow-lg shadow-purple-500/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>New Upload</span>
            </router-link>
        </div>

        <!-- Drive Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-[#2c2c42] p-4 rounded-2xl border border-[#3e3e5a]">
                <p class="text-[#7f8c8d] text-sm mb-1">Total Storage</p>
                <div class="flex items-end justify-between">
                    <h3 class="text-xl font-bold text-[#e0e0e0]">1.2 GB / 5 GB</h3>
                    <span class="text-xs text-[#8b5cf6] font-bold">24%</span>
                </div>
                <div class="w-full bg-[#1a1a2e] h-1.5 rounded-full mt-3">
                    <div class="bg-[#8b5cf6] h-full rounded-full" :style="{ width: '24%' }"></div>
                </div>
            </div>
            <!-- More stats can go here -->
        </div>

        <!-- File List (Google Drive Style) -->
        <div class="flex-1 bg-[#2c2c42] rounded-3xl border border-[#3e3e5a] overflow-hidden flex flex-col shadow-2xl">
            <!-- Table Header -->
            <div class="grid grid-cols-12 gap-4 px-6 py-4 bg-[#1a1a2e]/50 border-b border-[#3e3e5a] text-xs font-bold text-[#7f8c8d] uppercase tracking-wider">
                <div class="col-span-6">Name</div>
                <div class="col-span-2 text-center">Size</div>
                <div class="col-span-3 text-center">Last Modified</div>
                <div class="col-span-1"></div>
            </div>

            <!-- Table Body (Scrollable) -->
            <div class="flex-1 overflow-y-auto">
                <div v-for="i in 12" :key="i" class="grid grid-cols-12 gap-4 px-6 py-4 items-center border-b border-[#3e3e5a]/50 hover:bg-[#3e3e5a]/30 transition-colors group cursor-pointer">
                    <div class="col-span-6 flex items-center space-x-3">
                        <div class="p-2 bg-[#1a1a2e] rounded-lg group-hover:bg-[#8b5cf6]/10 transition-colors">
                            <svg class="w-5 h-5 text-[#8b5cf6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-[#e0e0e0] font-medium truncate">Quarterly_Report_2026_Q2.xlsx</span>
                    </div>
                    <div class="col-span-2 text-center text-[#7f8c8d] text-sm">2.8 MB</div>
                    <div class="col-span-3 text-center text-[#7f8c8d] text-sm">Jun 05, 2026</div>
                    <div class="col-span-1 flex justify-end">
                        <button class="p-1.5 text-[#7f8c8d] hover:text-[#e0e0e0] hover:bg-[#1a1a2e] rounded-lg transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </div>
</template>

<script setup>
import Navbar from '../components/Navbar.vue';
</script>
