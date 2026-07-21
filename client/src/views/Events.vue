<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="News & Events"
          subtitle="Stay updated with the latest happenings at Smart Cyber Defence (SCD)"
        />
      </div>
    </section>

    <!-- News & Events (Coming Soon) -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
          <div class="rounded-2xl border border-gray-800 bg-secondary/50 p-12 text-center">
            <h3 class="text-2xl font-bold text-white mb-3">Coming Soon</h3>
            <p class="text-gray-300">
              We currently have no scheduled events. Check back later for updates.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'
</script>
