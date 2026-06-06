<template>
  <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-[#1a1a2e]">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <div class="flex justify-center">
        <router-link :to="{ name: 'home' }">
          <div class="bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] p-3 rounded-2xl shadow-[0_0_20px_rgba(139,92,246,0.4)]">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
            </svg>
          </div>
        </router-link>
      </div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-[#e0e0e0]">
        Welcome back
      </h2>
      <p class="mt-2 text-center text-sm text-[#7f8c8d]">
        Or
        <router-link :to="{ name: 'register' }" class="font-medium text-[#c084fc] hover:text-[#8b5cf6] transition-colors">
          create a new account
        </router-link>
      </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-[#2c2c42] py-8 px-4 shadow-2xl border border-[#3e3e5a] sm:rounded-2xl sm:px-10">
        <form class="space-y-6" @submit.prevent="handleSubmit">
          <div>
            <label for="email" class="block text-sm font-medium text-[#7f8c8d]">
              Email address
            </label>
            <div class="mt-1">
              <input id="email" v-model="form.email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-3 border border-[#3e3e5a] rounded-xl bg-[#1a1a2e] text-[#e0e0e0] placeholder-[#7f8c8d] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all sm:text-sm">
            </div>
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-[#7f8c8d]">
              Password
            </label>
            <div class="mt-1">
              <input id="password" v-model="form.password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-3 border border-[#3e3e5a] rounded-xl bg-[#1a1a2e] text-[#e0e0e0] placeholder-[#7f8c8d] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all sm:text-sm">
            </div>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember-me" v-model="form.remember" type="checkbox" class="h-4 w-4 text-[#8b5cf6] focus:ring-[#8b5cf6] border-[#3e3e5a] rounded bg-[#1a1a2e]">
              <label for="remember-me" class="ml-2 block text-sm text-[#7f8c8d]">
                Remember me
              </label>
            </div>

            <div class="text-sm">
              <a href="#" class="font-medium text-[#c084fc] hover:text-[#8b5cf6] transition-colors">
                Forgot your password?
              </a>
            </div>
          </div>

          <div>
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] hover:from-[#7c3aed] hover:to-[#a78bfa] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8b5cf6] transition-all duration-300">
              Sign in
            </button>
          </div>
        </form>

        <div class="mt-6">
          <div class="relative">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-[#3e3e5a]"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-[#2c2c42] text-[#7f8c8d]">
                Secure access
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8 text-center">
        <router-link :to="{ name: 'home' }" class="text-[#7f8c8d] hover:text-[#e0e0e0] text-sm flex items-center justify-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
          Back to Public Files
        </router-link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';

const form = reactive({
  email: '',
  password: '',
  remember: false
});

const handleSubmit = () => {
  console.log('Login form submitted', form);
  // Implement login logic with API
};
</script>
