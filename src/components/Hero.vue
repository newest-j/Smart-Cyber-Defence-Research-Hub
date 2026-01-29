<template>
  <section class="relative min-h-screen flex items-center justify-center pt-16 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img src="/hero-bg.jpg" alt="" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-slate-900/75"></div>
    </div>

    <!-- Overlay Effects -->
    <div class="absolute inset-0 opacity-40">
      <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>
      <div
        class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-teal-500/20 rounded-full blur-3xl"
      ></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 text-balance">
        Smart Cyber Defence
        <span class="text-primary"> Research Hub</span>
      </h1>

      <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 text-pretty">
        Welcome to the Smart Cyber Defence Research Hub (SCDRH) — a cutting-edge research initiative
        dedicated to advancing the science, technology, and strategy of cybersecurity and digital
        resilience.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <router-link
          to="/about"
          class="inline-flex items-center justify-center px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200"
        >
          Learn More
          <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </router-link>
        <router-link
          to="/contact"
          class="inline-flex items-center justify-center px-8 py-3 border border-gray-600 text-white font-semibold rounded-lg hover:border-primary hover:text-primary transition-all duration-200"
        >
          Get Involved
        </router-link>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
      <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M19 14l-7 7m0 0l-7-7m7 7V3"
        />
      </svg>
    </div>
  </section>
</template>

<script setup lang="ts">
// Hero component - no props or state needed
</script>
