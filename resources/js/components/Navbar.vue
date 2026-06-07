<script setup>
import Icon from "./../assets/icon.png"
import { ref, computed } from 'vue';

// These would normally come from a store like Pinia or an API call
const isAuthenticated = ref(false);
const userName = ref('User');
const userInitial = computed(() => userName.value.charAt(0).toUpperCase());

const logout = () => {
  console.log('Logout clicked');
  // Implement logout logic
};
</script>

<template>
  <nav class="bg-[#2c2c42] border-b border-[#3e3e5a] px-6 py-4 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <!-- Logo -->
      <router-link :to="{ name: 'home' }" class="flex items-center space-x-3 group transition">
        <div class="bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] p-2 rounded-xl shadow-[0_0_15px_rgba(139,92,246,0.3)] group-hover:scale-105 transition-transform duration-300">
          <img :src="Icon" class="w-10" />
        </div>
        <span class="text-xl font-bold tracking-tight text-[#e0e0e0] group-hover:text-white transition-colors duration-300">
          Anesidora
        </span>
      </router-link>

      <!-- Nav Links -->
      <div class="hidden md:flex items-center space-x-8">
        <router-link :to="{ name: 'home' }" class="text-sm font-medium transition-colors duration-200" :class="$route.name === 'home' ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]'">
          Public Files
        </router-link>
        <router-link :to="{ name: 'upload' }" class="text-sm font-medium transition-colors duration-200" :class="$route.name === 'upload' ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]'">
          Upload File
        </router-link>
        <router-link :to="{ name: 'drive' }" class="text-sm font-medium transition-colors duration-200" :class="$route.name === 'drive' ? 'text-[#c084fc] border-b-2 border-[#8b5cf6] pb-1' : 'text-[#7f8c8d] hover:text-[#e0e0e0]'">
          My Drive
        </router-link>
      </div>

      <!-- Auth Actions -->
      <div class="flex items-center space-x-4">
        <!-- Placeholder for Auth state -->
        <template v-if="isAuthenticated">
          <div class="flex items-center space-x-3 bg-[#1a1a2e] py-1.5 px-3 rounded-lg border border-[#3e3e5a]">
            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] flex items-center justify-center font-bold text-sm text-white shadow-inner">
              {{ userInitial }}
            </div>
            <span class="text-sm text-[#e0e0e0] font-medium hidden sm:inline">{{ userName }}</span>
            <button @click="logout" class="text-[#7f8c8d] hover:text-red-400 p-1" title="Logout">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 01-3-3h4a3 3 0 013 3v1"></path>
              </svg>
            </button>
          </div>
        </template>
        <template v-else>
          <router-link :to="{ name: 'login' }" class="text-sm font-semibold text-[#e0e0e0] hover:text-[#c084fc] transition-colors duration-200 px-3 py-2">
            Sign In
          </router-link>
          <router-link :to="{ name: 'register' }" class="bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] hover:from-[#7c3aed] hover:to-[#a78bfa] text-white text-sm font-semibold px-4 py-2 rounded-lg shadow-md transition-all duration-300 hover:shadow-[0_0_15px_rgba(139,92,246,0.4)]">
            Sign Up
          </router-link>
        </template>
      </div>
    </div>
  </nav>
</template>

