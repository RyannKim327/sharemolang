@extends('app')

@section('title', 'About')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-600 mb-4">
            Anesidora
        </h1>
        <p class="text-xl md:text-2xl text-slate-400 font-medium italic">
            "The One Who Sends Up Gifts"
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
        <div>
            <h2 class="text-3xl font-bold text-blue-500 mb-6 flex items-center">
                <img src="assets/icon.png" class="w-[5rem]"> Our Mission
            </h2>
            <div class="space-y-4 text-lg text-slate-300 leading-relaxed">
                <p>
                    <span class="text-blue-400 font-bold">Anesidora</span> is more than just file hosting; it's a commitment to digital freedom. We provide a space where you can manage your files like your own personal cloud storage, at no cost.
                </p>
                <p>
                    Built with the spirit of sharing, we aim to maximize the potential of modern free tiers to benefit the developer and creator community.
                </p>
            </div>
        </div>
        <div class="bg-slate-800/50 p-8 rounded-2xl border border-slate-700 shadow-xl backdrop-blur-sm">
            <h3 class="text-xl font-semibold text-indigo-400 mb-4">Why we do it?</h3>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i class="fa fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Community-driven file sharing</span>
                </li>
                <li class="flex items-start">
                    <i class="fa fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Maximizing free resources for all</span>
                </li>
                <li class="flex items-start">
                    <i class="fa fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Privacy and accessibility focused</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl p-8 md:p-12 text-white shadow-2xl relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-3xl font-bold mb-6 text-white">The Inspiration</h2>
            <blockquote class="text-xl md:text-2xl italic font-light leading-relaxed">
                "Just like the mythological Anesidora, who was known for sharing gifts from the earth, we believe that technology should be a gift that empowers everyone."
            </blockquote>
        </div>
        <!-- Decorative element -->
        <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    </div>

    <div class="mt-20 text-center">
        <a href="/" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out shadow-lg">
            Start Sharing Now
        </a>
    </div>
</div>
@endsection
