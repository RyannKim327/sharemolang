<template>
  <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-[#1a1a2e]">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <div class="flex justify-center">
        <router-link :to="{ name: 'home' }">
          <div class="bg-gradient-to-tr from-[#8b5cf6] to-[#c084fc] p-3 rounded-2xl shadow-[0_0_20px_rgba(139,92,246,0.4)]">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
          </div>
        </router-link>
      </div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-[#e0e0e0]">
        Create an account
      </h2>
      <p class="mt-2 text-center text-sm text-[#7f8c8d]">
        Already have an account?
        <router-link :to="{ name: 'login' }" class="font-medium text-[#c084fc] hover:text-[#8b5cf6] transition-colors">
          Sign in instead
        </router-link>
      </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-[#2c2c42] py-8 px-4 shadow-2xl border border-[#3e3e5a] sm:rounded-2xl sm:px-10">
        <form class="space-y-6" @submit.prevent="handleSubmit">
          <div>
            <label for="name" class="block text-sm font-medium text-[#7f8c8d]">
              Full Name
            </label>
            <div class="mt-1">
              <input id="name" v-model="form.name" type="text" autocomplete="name" required class="appearance-none block w-full px-3 py-3 border border-[#3e3e5a] rounded-xl bg-[#1a1a2e] text-[#e0e0e0] placeholder-[#7f8c8d] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all sm:text-sm" placeholder="John Doe">
            </div>
          </div>

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
              <input id="password" v-model="form.password" type="password" autocomplete="new-password" required class="appearance-none block w-full px-3 py-3 border border-[#3e3e5a] rounded-xl bg-[#1a1a2e] text-[#e0e0e0] placeholder-[#7f8c8d] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all sm:text-sm">
            </div>
          </div>

          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-[#7f8c8d]">
              Confirm Password
            </label>
            <div class="mt-1">
              <input id="password_confirmation" v-model="form.password_confirmation" type="password" autocomplete="new-password" required class="appearance-none block w-full px-3 py-3 border border-[#3e3e5a] rounded-xl bg-[#1a1a2e] text-[#e0e0e0] placeholder-[#7f8c8d] focus:outline-none focus:ring-2 focus:ring-[#8b5cf6] focus:border-transparent transition-all sm:text-sm">
            </div>
          </div>

          <div class="flex items-center">
            <input id="terms" v-model="form.terms" type="checkbox" required class="h-4 w-4 text-[#8b5cf6] focus:ring-[#8b5cf6] border-[#3e3e5a] rounded bg-[#1a1a2e]">
            <label for="terms" class="ml-2 block text-sm text-[#7f8c8d]">
              I agree to the <a href="#" class="text-[#c084fc] hover:underline">Terms of Service</a> and <a href="#" class="text-[#c084fc] hover:underline">Privacy Policy</a>
            </label>
          </div>

          <div>
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] hover:from-[#7c3aed] hover:to-[#a78bfa] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8b5cf6] transition-all duration-300">
              Create Account
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';

const form = reactive({
  name: '',
  email: '',
  password: '',
  password_confirmation: '',
  terms: false
});

const handleSubmit = () => {
  console.log('Register form submitted', form);
  // Implement register logic with API
};
</script>
