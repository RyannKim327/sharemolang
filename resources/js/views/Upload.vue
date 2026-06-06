<template>
  <div class="min-h-screen">
    <Navbar />

    <main class="max-w-4xl mx-auto px-6 py-12">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-[#e0e0e0]">Upload New File</h1>
            <p class="text-[#7f8c8d] mt-2">Share your files securely and easily.</p>
        </div>

        <div class="bg-[#2c2c42] rounded-3xl border-2 border-dashed border-[#3e3e5a] p-12 text-center hover:border-[#8b5cf6] transition-all group shadow-xl">
            <form @submit.prevent="handleUpload">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-[#1a1a2e] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
                        <svg class="w-10 h-10 text-[#8b5cf6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                    </div>
                    
                    <h2 class="text-xl font-semibold text-[#e0e0e0] mb-2">Drag and drop files here</h2>
                    <p class="text-[#7f8c8d] mb-8">Limit 200MB per file • All formats supported</p>
                    
                    <label class="cursor-pointer bg-[#8b5cf6] hover:bg-[#7c3aed] text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg shadow-purple-500/20 active:scale-95">
                        Browse Files
                        <input type="file" class="hidden" @change="onFileChange">
                    </label>
                    <div v-if="selectedFile" class="mt-4 text-[#e0e0e0]">
                        Selected: {{ selectedFile.name }}
                    </div>
                </div>

                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                    <div>
                        <label class="block text-sm font-medium text-[#7f8c8d] mb-2">File Description (Optional)</label>
                        <textarea v-model="form.description" rows="3" class="w-full bg-[#1a1a2e] border border-[#3e3e5a] rounded-xl px-4 py-3 text-[#e0e0e0] focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent outline-none transition-all placeholder-[#7f8c8d]/50" placeholder="What's this file about?"></textarea>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-[#7f8c8d] mb-2">Privacy Setting</label>
                            <select v-model="form.privacy" class="w-full bg-[#1a1a2e] border border-[#3e3e5a] rounded-xl px-4 py-3 text-[#e0e0e0] focus:ring-2 focus:ring-[#8b5cf6] outline-none transition-all appearance-none">
                                <option value="public">Public - Anyone can download</option>
                                <option value="private">Private - Only you can see</option>
                                <option value="password">Password Protected</option>
                            </select>
                        </div>
                        <div v-if="form.privacy === 'password'">
                            <label class="block text-sm font-medium text-[#7f8c8d] mb-2">Password (if selected)</label>
                            <input v-model="form.password" type="password" class="w-full bg-[#1a1a2e] border border-[#3e3e5a] rounded-xl px-4 py-3 text-[#e0e0e0] focus:ring-2 focus:ring-[#8b5cf6] outline-none transition-all placeholder-[#7f8c8d]/50" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-8 border-t border-[#3e3e5a]">
                    <button type="submit" class="w-full md:w-auto px-12 py-4 bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] text-white rounded-xl font-bold text-lg hover:shadow-[0_0_20px_rgba(139,92,246,0.5)] transition-all">
                        Start Upload
                    </button>
                </div>
            </form>
        </div>
    </main>
  </div>
</template>

<script setup>
import { reactive, ref } from 'vue';
import Navbar from '../components/Navbar.vue';

const selectedFile = ref(null);
const form = reactive({
  description: '',
  privacy: 'public',
  password: ''
});

const onFileChange = (e) => {
  selectedFile.value = e.target.files[0];
};

const handleUpload = () => {
  console.log('Uploading file', selectedFile.value, form);
  // Implement upload logic with API
};
</script>
