<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="Our Projects"
          subtitle="Open a project to view the full research overview"
        />
      </div>
    </section>

    <!-- Project Card -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
          <router-link
            to="/projects/cyberxtalk"
            class="block bg-secondary/50 border border-gray-800 rounded-2xl overflow-hidden hover:border-primary/60 transition-all duration-300 group"
          >
            <div
              class="relative min-h-96 bg-linear-to-br from-primary/15 via-secondary/30 to-accent/15 p-8 sm:p-10 flex flex-col justify-between"
            >
              <div
                class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_top_right,rgba(34,211,238,0.18),transparent_35%),radial-gradient(circle_at_bottom_left,rgba(59,130,246,0.15),transparent_32%)]"
              ></div>

              <div class="relative flex items-start justify-between gap-6">
                <div class="max-w-2xl">
                  <div class="flex flex-wrap items-center gap-3 mb-4">
                    <span
                      class="px-3 py-1 text-xs font-medium rounded-full bg-green-500/20 text-green-400"
                    >
                      Featured Research
                    </span>
                    <span
                      class="px-3 py-1 text-xs font-medium rounded-full bg-blue-500/20 text-blue-400"
                    >
                      Nigeria Focused
                    </span>
                  </div>

                  <h3 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    A Smart Multilingual Cyber Attack Incidents Reporting and Management System
                  </h3>
                  <p class="text-gray-300 text-base sm:text-lg leading-relaxed max-w-2xl">
                    A smart multilingual cyber attack incident reporting and management system for
                    proactive and effective handling of cybersecurity incidents in Nigeria.
                  </p>
                </div>

                <div class="hidden sm:flex items-center justify-center gap-6">
                  <img
                    src="@/assets/images/CyberXTalk.png"
                    alt="CyberXTalk artwork"
                    class="w-44 h-28 object-contain rounded-md"
                  />

                  <div
                    class="hidden sm:flex h-14 w-14 items-center justify-center rounded-full border border-primary/30 bg-primary/10 text-primary transition-transform duration-300 group-hover:translate-x-1"
                  >
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6"
                      />
                    </svg>
                  </div>
                </div>
              </div>

              <div
                class="relative mt-10 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between"
              >
                <div class="flex flex-wrap gap-3 text-sm text-gray-400">
                  <span class="rounded-full border border-gray-700 bg-dark/50 px-4 py-2"
                    >Incident reporting</span
                  >
                  <span class="rounded-full border border-gray-700 bg-dark/50 px-4 py-2"
                    >Threat mitigation</span
                  >
                  <span class="rounded-full border border-gray-700 bg-dark/50 px-4 py-2"
                    >Multilingual support</span
                  >
                </div>

                <div
                  class="inline-flex items-center gap-2 text-sm font-medium text-primary group-hover:text-white transition-colors"
                >
                  <span>Open project view</span>
                  <svg
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M13 7l5 5m0 0l-5 5m5-5H6"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'
</script>
