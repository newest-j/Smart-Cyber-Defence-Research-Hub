<template>
  <div class="pt-24 pb-20">
    <!-- Header -->
    <section class="py-16 bg-linear-to-b from-secondary/50 to-transparent">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <SectionTitle
          title="News & Events"
          subtitle="Stay updated with the latest happenings at the Smart Cyber Defence Research Hub"
        />
      </div>
    </section>

    <!-- News & Events -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Featured Event -->
          <div class="lg:col-span-2">
            <div
              class="bg-linear-to-br from-primary/20 to-accent/20 border border-primary/30 rounded-xl p-8"
            >
              <div class="flex items-center gap-2 mb-4">
                <span class="px-3 py-1 bg-primary text-white text-xs font-medium rounded-full"
                  >Featured</span
                >
                <span class="text-gray-400 text-sm">Open Now</span>
              </div>
              <h3 class="text-2xl font-bold text-white mb-4">
                Call for PhD Researchers in Cyber Defence
              </h3>
              <p class="text-gray-300 mb-6">
                We are offering fully funded opportunities for cybersecurity research. Join our team
                and contribute to cutting-edge research in AI-driven threat detection, secure
                network architectures, and human-centered cybersecurity.
              </p>
              <router-link
                to="/contact"
                class="inline-flex items-center text-primary hover:text-accent transition-colors"
              >
                Apply Now
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  />
                </svg>
              </router-link>
            </div>
          </div>

          <!-- Events List -->
          <div
            v-for="event in events"
            :key="event.title"
            class="bg-secondary/50 border border-gray-800 rounded-xl p-6 hover:border-primary/50 transition-all duration-300"
          >
            <div class="flex items-center gap-2 mb-4">
              <span
                class="px-2 py-1 text-xs font-medium rounded-full"
                :class="typeClasses[event.type]"
              >
                {{ event.type }}
              </span>
              <span class="text-gray-500 text-sm">{{ event.date }}</span>
            </div>
            <h3 class="text-xl font-semibold text-white mb-3">{{ event.title }}</h3>
            <p class="text-gray-400 text-sm">{{ event.description }}</p>
          </div>
        </div>

        <!-- Subscribe Section -->
        <div class="mt-16">
          <div class="bg-secondary/50 border border-gray-800 rounded-xl p-8 text-center">
            <h3 class="text-2xl font-bold text-white mb-4">Subscribe to Our Newsletter</h3>
            <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
              Subscribe for updates on research breakthroughs, events, trainings, and publications.
            </p>
            <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
              <input
                type="email"
                placeholder="Enter your email"
                class="flex-1 px-4 py-3 bg-dark border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-primary transition-colors"
              />
              <button
                type="submit"
                class="px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary/90 transition-all duration-200"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import SectionTitle from '@/components/SectionTitle.vue'

interface Event {
  title: string
  description: string
  type: 'Initiative' | 'Workshop' | 'Partnership'
  date: string
}

const typeClasses: Record<string, string> = {
  Initiative: 'bg-green-500/20 text-green-400',
  Workshop: 'bg-blue-500/20 text-blue-400',
  Partnership: 'bg-purple-500/20 text-purple-400',
}

const events: Event[] = [
  {
    title: 'Launch of Smart Cyber Threat Monitoring Initiative',
    description:
      'A new initiative to provide real-time threat monitoring and intelligence sharing across partner organizations.',
    type: 'Initiative',
    date: 'January 2026',
  },
  {
    title: 'Workshops & Webinars on Emerging Cyber Threats',
    description:
      'Join our series of workshops covering the latest trends in ransomware, supply chain attacks, and AI-powered threats.',
    type: 'Workshop',
    date: 'Ongoing',
  },
  {
    title: 'Industry Partnerships & Collaborations',
    description:
      'New partnership announcements with leading technology companies and government agencies.',
    type: 'Partnership',
    date: 'Q1 2026',
  },
]
</script>
